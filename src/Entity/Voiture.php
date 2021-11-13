<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity(repositoryClass=VoitureRepository::class)
 */
class Voiture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Location", mappedBy="voiture")
     */
    private $locations;

    public function __construct()
    {
        $this->locations = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="string")
     */
    private $serie;

    /**
     * @ORM\Column(type="date")
     */
    private $dateMiseEnMarche;

    /**
     * @ORM\Column(type="string")
     */
    private $modele;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * @param mixed $serie
     */
    public function setSerie($serie): void
    {
        $this->serie = $serie;
    }

    /**
     * @return mixed
     */
    public function getDateMiseEnMarche()
    {
        return $this->dateMiseEnMarche;
    }

    /**
     * @param mixed $dateMiseEnMarche
     */
    public function setDateMiseEnMarche($dateMiseEnMarche): void
    {
        $this->dateMiseEnMarche = $dateMiseEnMarche;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele): void
    {
        $this->modele = $modele;
    }

    /**
     * @return Collection|Location[]
     */
    public function getLocations(): Collection
    {
        return $this->locations;


    }
}