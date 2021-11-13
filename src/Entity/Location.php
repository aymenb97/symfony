<?php

namespace App\Entity;

use App\Repository\LocationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LocationRepository::class)
 */
class Location
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Voiture", inversedBy="locations")
     */
    private $voiture;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     */
    private $dateRetour;

    /**
     * @ORM\Column(type="decimal")
     */
    private $prixJour;

    /**
     * @ORM\Column(type="decimal")
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }
    public function getVoiture(): ?Voiture
    {
        return $this->voiture;
    }

    public function setVoiture(?Voiture $voiture): self
    {
        $this->voiture = $voiture;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateRetour()
    {
        return $this->dateRetour;
    }

    /**
     * @param mixed $dateRetour
     */
    public function setDateRetour($dateRetour): void
    {
        $this->dateRetour = $dateRetour;
    }

    /**
     * @return mixed
     */
    public function getPrixJour()
    {
        return $this->prixJour;
    }

    /**
     * @param mixed $prixJour
     */
    public function setPrixJour($prixJour): void
    {
        $this->prixJour = $prixJour;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix): void
    {
        $this->prix = $prix;
    }

}
