<?php

namespace App\Entity;

use App\Repository\MedicoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MedicoRepository::class)]
class Medico
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 40)]
    private $Apellido;

    #[ORM\Column(type: 'string', length: 40)]
    private $Nombres;

    #[ORM\Column(type: 'string', length: 255)]
    private $Especialidad;

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

    public function getNombres(): ?string
    {
        return $this->Nombres;
    }

    public function setNombres(string $Nombres): self
    {
        $this->Nombres = $Nombres;

        return $this;
    }

    public function getEspecialidad(): ?string
    {
        return $this->Especialidad;
    }

    public function setEspecialidad(string $Especialidad): self
    {
        $this->Especialidad = $Especialidad;

        return $this;
    }
}
