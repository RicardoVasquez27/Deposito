<?php

namespace App\Entity;

use App\Repository\VehicleRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: VehicleRepository::class)]
#[ApiResource]
class Vehicle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $marca = null;

    #[ORM\Column(length: 255)]
    private ?string $placa = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarca(): ?string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): static
    {
        $this->marca = $marca;

        return $this;
    }

    public function getPlaca(): ?string
    {
        return $this->placa;
    }

    public function setPlaca(string $placa): static
    {
        $this->placa = $placa;

        return $this;
    }
}
