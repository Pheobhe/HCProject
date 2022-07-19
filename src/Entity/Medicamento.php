<?php

namespace App\Entity;

use App\Repository\MedicamentoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MedicamentoRepository::class)]
class Medicamento
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $NombreComercial;

    #[ORM\Column(type: 'string', length: 255)]
    private $Droga;

    #[ORM\Column(type: 'string', length: 60)]
    private $Presentacion;

    #[ORM\Column(type: 'string', length: 50)]
    private $Partida;

    #[ORM\Column(type: 'string', length: 50)]
    private $Lote;

    #[ORM\Column(type: 'date')]
    private $Vencimiento;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreComercial(): ?string
    {
        return $this->NombreComercial;
    }

    public function setNombreComercial(string $NombreComercial): self
    {
        $this->NombreComercial = $NombreComercial;

        return $this;
    }

    public function getDroga(): ?string
    {
        return $this->Droga;
    }

    public function setDroga(string $Droga): self
    {
        $this->Droga = $Droga;

        return $this;
    }

    public function getPresentacion(): ?string
    {
        return $this->Presentacion;
    }

    public function setPresentacion(string $Presentacion): self
    {
        $this->Presentacion = $Presentacion;

        return $this;
    }

    public function getPartida(): ?string
    {
        return $this->Partida;
    }

    public function setPartida(string $Partida): self
    {
        $this->Partida = $Partida;

        return $this;
    }

    public function getLote(): ?string
    {
        return $this->Lote;
    }

    public function setLote(string $Lote): self
    {
        $this->Lote = $Lote;

        return $this;
    }

    public function getVencimiento(): ?\DateTimeInterface
    {
        return $this->Vencimiento;
    }

    public function setVencimiento(\DateTimeInterface $Vencimiento): self
    {
        $this->Vencimiento = $Vencimiento;

        return $this;
    }
}
