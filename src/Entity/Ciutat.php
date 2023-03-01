<?php 

namespace App\Entity;

use App\Repository\CiutatRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:CiutatRepository::class)]

class Ciutat{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int id;

    #[Assert\NotBlank]
    #[ORM\Column(length:255)]
    private ?string $nom;

    #[Assert\NotBlank]
    #[ORM\Column]
    private ?int poblacio;

    #[Assert\NotBlank]
    #[ORM\Column]
    private ?int codiPostal;

    #[Assert\NotBlank]
    #[ORM\Column(length:255)]
    private ?string $imatge;


    #[Assert\NotBlank]
    #[ORM\Column(length:255)]
    private ?string $comarca;

    #[Assert\NotBlank]
    #[ORM\Column(length:255)]
    private ?string $dades;


    public function getId(): ?int
    {
        return $this->id;
    }
 
    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPoblacio(): ?poblacio
    {
        return $this->poblacio;
    }

    public function setPoblacio(int $poblacio): self
    {
        $this->poblacio = $poblacio;

        return $this;
    }

    public function getCodiPostal(): ?codiPostal
    {
        return $this->codiPostal;
    }

    public function setCodiPostal(int $codiPostal): self
    {
        $this->codiPostal = $codiPostal;

        return $this;
    }
    public function getImatges(): ?string
    {
        return $this->imatges;
    }

    public function setImatges(string $imatges): self
    {
        $this->imatges = $imatges;

        return $this;
    }

    public function getComarca(): ?string
    {
        return $this->comarca;
    }

    public function setComarca(string $comarca): self
    {
        $this->comarca = $comarca;

        return $this;
    }

    public function getDades(): ?string
    {
        return $this->dades;
    }

    public function setDades(string $dades): self
    {
        $this->dades = $dades;

        return $this;
    }

}


?>