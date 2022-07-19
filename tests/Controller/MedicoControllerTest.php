<?php

namespace App\Test\Controller;

use App\Entity\Medico;
use App\Repository\MedicoRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MedicoControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private MedicoRepository $repository;
    private string $path = '/medico/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = (static::getContainer()->get('doctrine'))->getRepository(Medico::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Medico index');

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
            'medico[Apellido]' => 'Testing',
            'medico[Nombres]' => 'Testing',
            'medico[Especialidad]' => 'Testing',
        ]);

        self::assertResponseRedirects('/medico/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Medico();
        $fixture->setApellido('My Title');
        $fixture->setNombres('My Title');
        $fixture->setEspecialidad('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Medico');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Medico();
        $fixture->setApellido('My Title');
        $fixture->setNombres('My Title');
        $fixture->setEspecialidad('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'medico[Apellido]' => 'Something New',
            'medico[Nombres]' => 'Something New',
            'medico[Especialidad]' => 'Something New',
        ]);

        self::assertResponseRedirects('/medico/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getApellido());
        self::assertSame('Something New', $fixture[0]->getNombres());
        self::assertSame('Something New', $fixture[0]->getEspecialidad());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Medico();
        $fixture->setApellido('My Title');
        $fixture->setNombres('My Title');
        $fixture->setEspecialidad('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/medico/');
    }
}
