<?php

namespace App\Entity;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Repository\ExcursionreguliereRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=ExcursionreguliereRepository::class)
 * @Vich\Uploadable
 */
class Excursionreguliere
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
    private $nomfr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomen;

    /**
     * @ORM\Column(type="string", length=2000)
     */
    private $presentationfr;

    /**
     * @ORM\Column(type="string", length=2000)
     */
    private $presentationes;

    /**
     * @ORM\Column(type="string", length=2000)
     */
    private $presentationen;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;
    /**
     * @Vich\UploadableField(mapping="excursionreguliere_image", fileNameProperty="image")
     */
    private $imagesFile;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    /**
     * @ORM\Column(type="boolean")
     */
    private $envedette;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomfr(): ?string
    {
        return $this->nomfr;
    }

    public function setNomfr(string $nomfr): self
    {
        $this->nomfr = $nomfr;

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

    public function getNomen(): ?string
    {
        return $this->nomen;
    }

    public function setNomen(string $nomen): self
    {
        $this->nomen = $nomen;

        return $this;
    }

    public function getPresentationfr(): ?string
    {
        return $this->presentationfr;
    }

    public function setPresentationfr(string $presentationfr): self
    {
        $this->presentationfr = $presentationfr;

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

    public function getPresentationen(): ?string
    {
        return $this->presentationen;
    }

    public function setPresentationen(string $presentationen): self
    {
        $this->presentationen = $presentationen;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image = null): self
    {
        $this->image = $image;

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

    public function getEnvedette(): ?bool
    {
        return $this->envedette;
    }

    public function setEnvedette(bool $envedette): self
    {
        $this->envedette = $envedette;

        return $this;
    }
}
