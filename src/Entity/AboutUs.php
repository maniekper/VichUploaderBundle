<?php

namespace App\Entity;

use App\Repository\AboutUsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AboutUsRepository::class)]
class AboutUs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'text')]
    private $content;

    #[ORM\Column(type: 'datetime')]
    private $dateAd;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getDateAd(): ?\DateTimeInterface
    {
        return $this->dateAd;
    }

    public function setDateAd(\DateTimeInterface $dateAd): self
    {
        $this->dateAd = $dateAd;

        return $this;
    }
}
