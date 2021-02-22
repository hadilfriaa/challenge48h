<?php

namespace App\Entity;

use App\Repository\AmbianceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AmbianceRepository::class)
 */
class Ambiance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $Id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Tags;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Url;

    public function getId(): ?int
    {
        return $this->Id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->Tags;
    }

    public function setTags(string $Tags): self
    {
        $this->Tags = $Tags;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->Url;
    }

    public function setUrl(string $Url): self
    {
        $this->Url = $Url;

        return $this;
    }
}
