<?php

namespace App\Test\Controller;

use App\Entity\Paciente;
use App\Repository\PacienteRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PacienteControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private PacienteRepository $repository;
    private string $path = '/paciente/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = (static::getContainer()->get('doctrine'))->getRepository(Paciente::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Paciente index');

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
            'paciente[Apellido]' => 'Testing',
            'paciente[Nombre]' => 'Testing',
            'paciente[DomicilioCalle]' => 'Testing',
            'paciente[DomicilioNumero]' => 'Testing',
            'paciente[Telefono]' => 'Testing',
            'paciente[Ingreso]' => 'Testing',
            'paciente[Localidad]' => 'Testing',
        ]);

        self::assertResponseRedirects('/paciente/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Paciente();
        $fixture->setApellido('My Title');
        $fixture->setNombre('My Title');
        $fixture->setDomicilioCalle('My Title');
        $fixture->setDomicilioNumero('My Title');
        $fixture->setTelefono('My Title');
        $fixture->setIngreso('My Title');
        $fixture->setLocalidad('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Paciente');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Paciente();
        $fixture->setApellido('My Title');
        $fixture->setNombre('My Title');
        $fixture->setDomicilioCalle('My Title');
        $fixture->setDomicilioNumero('My Title');
        $fixture->setTelefono('My Title');
        $fixture->setIngreso('My Title');
        $fixture->setLocalidad('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'paciente[Apellido]' => 'Something New',
            'paciente[Nombre]' => 'Something New',
            'paciente[DomicilioCalle]' => 'Something New',
            'paciente[DomicilioNumero]' => 'Something New',
            'paciente[Telefono]' => 'Something New',
            'paciente[Ingreso]' => 'Something New',
            'paciente[Localidad]' => 'Something New',
        ]);

        self::assertResponseRedirects('/paciente/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getApellido());
        self::assertSame('Something New', $fixture[0]->getNombre());
        self::assertSame('Something New', $fixture[0]->getDomicilioCalle());
        self::assertSame('Something New', $fixture[0]->getDomicilioNumero());
        self::assertSame('Something New', $fixture[0]->getTelefono());
        self::assertSame('Something New', $fixture[0]->getIngreso());
        self::assertSame('Something New', $fixture[0]->getLocalidad());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Paciente();
        $fixture->setApellido('My Title');
        $fixture->setNombre('My Title');
        $fixture->setDomicilioCalle('My Title');
        $fixture->setDomicilioNumero('My Title');
        $fixture->setTelefono('My Title');
        $fixture->setIngreso('My Title');
        $fixture->setLocalidad('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/paciente/');
    }
}
