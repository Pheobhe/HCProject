<?php

namespace App\Test\Controller;

use App\Entity\Medicamento;
use App\Repository\MedicamentoRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MedicamentoControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private MedicamentoRepository $repository;
    private string $path = '/medicamento/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = (static::getContainer()->get('doctrine'))->getRepository(Medicamento::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Medicamento index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'medicamento[NombreComercial]' => 'Testing',
            'medicamento[Droga]' => 'Testing',
            'medicamento[Presentacion]' => 'Testing',
            'medicamento[Partida]' => 'Testing',
            'medicamento[Lote]' => 'Testing',
            'medicamento[Vencimiento]' => 'Testing',
        ]);

        self::assertResponseRedirects('/medicamento/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Medicamento();
        $fixture->setNombreComercial('My Title');
        $fixture->setDroga('My Title');
        $fixture->setPresentacion('My Title');
        $fixture->setPartida('My Title');
        $fixture->setLote('My Title');
        $fixture->setVencimiento('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Medicamento');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Medicamento();
        $fixture->setNombreComercial('My Title');
        $fixture->setDroga('My Title');
        $fixture->setPresentacion('My Title');
        $fixture->setPartida('My Title');
        $fixture->setLote('My Title');
        $fixture->setVencimiento('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'medicamento[NombreComercial]' => 'Something New',
            'medicamento[Droga]' => 'Something New',
            'medicamento[Presentacion]' => 'Something New',
            'medicamento[Partida]' => 'Something New',
            'medicamento[Lote]' => 'Something New',
            'medicamento[Vencimiento]' => 'Something New',
        ]);

        self::assertResponseRedirects('/medicamento/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNombreComercial());
        self::assertSame('Something New', $fixture[0]->getDroga());
        self::assertSame('Something New', $fixture[0]->getPresentacion());
        self::assertSame('Something New', $fixture[0]->getPartida());
        self::assertSame('Something New', $fixture[0]->getLote());
        self::assertSame('Something New', $fixture[0]->getVencimiento());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Medicamento();
        $fixture->setNombreComercial('My Title');
        $fixture->setDroga('My Title');
        $fixture->setPresentacion('My Title');
        $fixture->setPartida('My Title');
        $fixture->setLote('My Title');
        $fixture->setVencimiento('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/medicamento/');
    }
}
