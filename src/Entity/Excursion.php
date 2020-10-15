<?php

namespace App\Entity;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Repository\ExcursionRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass=ExcursionRepository::class)
 * @Vich\Uploadable
 */
class Excursion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="float")
     */
    private $prixadulte;

    /**
     * @ORM\Column(type="float")
     */
    private $prixenfant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $images;
    /**
     * @Vich\UploadableField(mapping="excursion_image", fileNameProperty="images")
     */
    private $imagesFile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $presentation;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomen;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $presentationen;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeen;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $presentationes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villees;


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

    public function getPrixAdulte(): ?float
    {
        return $this->prixadulte;
    }

    public function setPrixAdulte(float $prixadulte): self
    {
        $this->prixadulte = $prixadulte;

        return $this;
    }

    public function getPrixEnfant(): ?float
    {
        return $this->prixenfant;
    }

    public function setPrixEnfant(float $prixenfant): self
    {
        $this->prixenfant = $prixenfant;

        return $this;
    }

    public function getImages(): ?string
    {
        return $this->images;
    }

    public function setImages(?string $images = null): self
    {
        $this->images = $images;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(string $presentation): self
    {
        $this->presentation = $presentation;

        return $this;
    }
    public function getImagesFile(): ?File
    {
        return $this->imagesFile;
    }
    public function setImagesFile(?File $imagesFile): self
    {
        $this->imagesFile = $imagesFile;
        if($this->imagesFile instanceof UploadedFile){
            $this->updated_at = new \DateTime('now');
        }
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getNomen(): ?string
    {
        return $this->nomen;
    }

    public function setNomen(string $nomen): self
    {
        $this->nomen = $nomen;

        return $this;
    }

    public function getPresentationen(): ?string
    {
        return $this->presentationen;
    }

    public function setPresentationen(string $presentationen): self
    {
        $this->presentationen = $presentationen;

        return $this;
    }

    public function getVilleen(): ?string
    {
        return $this->villeen;
    }

    public function setVilleen(string $villeen): self
    {
        $this->villeen = $villeen;

        return $this;
    }

    public function getNomes(): ?string
    {
        return $this->nomes;
    }

    public function setNomes(string $nomes): self
    {
        $this->nomes = $nomes;

        return $this;
    }

    public function getPresentationes(): ?string
    {
        return $this->presentationes;
    }

    public function setPresentationes(string $presentationes): self
    {
        $this->presentationes = $presentationes;

        return $this;
    }

    public function getVillees(): ?string
    {
        return $this->villees;
    }

    public function setVillees(string $villees): self
    {
        $this->villees = $villees;

        return $this;
    }
}
