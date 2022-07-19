<?php

namespace App\Entity;

use App\Repository\PacienteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PacienteRepository::class)]
class Paciente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 40)]
    private $Apellido;

    #[ORM\Column(type: 'string', length: 40)]
    private $Nombre;

    #[ORM\Column(type: 'string', length: 100)]
    private $DomicilioCalle;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $DomicilioNumero;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $Telefono;

    #[ORM\Column(type: 'date')]
    private $Ingreso;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Localidad;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApellido(): ?string
    {
        return $this->Apellido;
    }

    public function setApellido(string $Apellido): self
    {
        $this->Apellido = $Apellido;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getDomicilioCalle(): ?string
    {
        return $this->DomicilioCalle;
    }

    public function setDomicilioCalle(string $DomicilioCalle): self
    {
        $this->DomicilioCalle = $DomicilioCalle;

        return $this;
    }

    public function getDomicilioNumero(): ?string
    {
        return $this->DomicilioNumero;
    }

    public function setDomicilioNumero(?string $DomicilioNumero): self
    {
        $this->DomicilioNumero = $DomicilioNumero;

        return $this;
    }

    public function getTelefono(): ?int
    {
        return $this->Telefono;
    }

    public function setTelefono(?string $Telefono): self
    {
        $this->Telefono = $Telefono;

        return $this;
    }

    public function getIngreso(): ?\DateTimeInterface
    {
        return $this->Ingreso;
    }

    public function setIngreso(\DateTimeInterface $Ingreso): self
    {
        $this->Ingreso = $Ingreso;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->Localidad;
    }

    public function setLocalidad(?string $Localidad): self
    {
        $this->Localidad = $Localidad;

        return $this;
    }
}
