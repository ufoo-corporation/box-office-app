<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $prixTotal;

    #[ORM\Column(type: 'integer')]
    private $type;

    #[ORM\Column(type: 'integer')]
    private $nbPlacesAdulte;

    #[ORM\Column(type: 'integer')]
    private $nbPlacesEnfant;

    #[ORM\Column(type: 'integer')]
    private $day;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixTotal(): ?int
    {
        return $this->prixTotal;
    }

    public function setPrixTotal(int $prixTotal): self
    {
        $this->prixTotal = $prixTotal;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNbPlacesAdulte(): ?int
    {
        return $this->nbPlacesAdulte;
    }

    public function setNbPlacesAdulte(int $nbPlacesAdulte): self
    {
        $this->nbPlacesAdulte = $nbPlacesAdulte;

        return $this;
    }

    public function getNbPlacesEnfant(): ?int
    {
        return $this->nbPlacesEnfant;
    }

    public function setNbPlacesEnfant(int $nbPlacesEnfant): self
    {
        $this->nbPlacesEnfant = $nbPlacesEnfant;

        return $this;
    }

    public function getDay(): ?int
    {
        return $this->day;
    }

    public function setDay(int $day): self
    {
        $this->day = $day;

        return $this;
    }
}
