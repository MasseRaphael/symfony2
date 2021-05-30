<?php

namespace App\Entity;

use App\Repository\UberEatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UberEatRepository::class)
 */
class UberEat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_commande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="text")
     */
    private $commande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbCommande(): ?int
    {
        return $this->nb_commande;
    }

    public function setNbCommande(int $nb_commande): self
    {
        $this->nb_commande = $nb_commande;

        return $this;
    }

    public function getNomPrenom(): ?string
    {
        return $this->nom_prenom;
    }

    public function setNomPrenom(string $nom_prenom): self
    {
        $this->nom_prenom = $nom_prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCommande(): ?string
    {
        return $this->commande;
    }

    public function setCommande(string $commande): self
    {
        $this->commande = $commande;

        return $this;
    }
}
