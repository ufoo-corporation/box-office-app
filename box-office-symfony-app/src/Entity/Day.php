<?php

namespace App\Entity;

use App\Repository\DayRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DayRepository::class)]
class Day
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $placesLoges;

    #[ORM\Column(type: 'integer')]
    private $placesCat1;

    #[ORM\Column(type: 'integer')]
    private $placesCat2;

    #[ORM\Column(type: 'integer')]
    private $placesAnnexe;

    #[ORM\Column(type: 'string', length: 255)]
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlacesLoges(): ?int
    {
        return $this->placesLoges;
    }

    public function setPlacesLoges(int $placesLoges): self
    {
        $this->placesLoges = $placesLoges;

        return $this;
    }

    public function getPlacesCat1(): ?int
    {
        return $this->placesCat1;
    }

    public function setPlacesCat1(int $placesCat1): self
    {
        $this->placesCat1 = $placesCat1;

        return $this;
    }

    public function getPlacesCat2(): ?int
    {
        return $this->placesCat2;
    }

    public function setPlacesCat2(int $placesCat2): self
    {
        $this->placesCat2 = $placesCat2;

        return $this;
    }

    public function getPlacesAnnexe(): ?int
    {
        return $this->placesAnnexe;
    }

    public function setPlacesAnnexe(int $placesAnnexe): self
    {
        $this->placesAnnexe = $placesAnnexe;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }
}
