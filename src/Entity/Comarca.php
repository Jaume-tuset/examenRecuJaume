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
    private ?int municipis;

    
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

    public function getMunicipis(): ?municipis
    {
        return $this->municipis;
    }

    public function setMunicipis(int $municipis): self
    {
        $this->municipis = $municipis;

        return $this;
    }


}

?>