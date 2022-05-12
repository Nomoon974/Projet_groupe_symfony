<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 40)]
    private $title;

    #[ORM\Column(type: 'string', length: 255)]
    private $url;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'id_image')]
    private $User_id;

    #[ORM\Column(type: 'integer')]
    private $aime;

    #[ORM\Column(type: 'integer')]
    private $pasaimer;

    public function __construct()
    {
        $this->setAime(0);
        $this->setPasaimer(0);
        $this->id_user = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->User_id;
    }

    public function setUserId(?User $User_id): self
    {
        $this->User_id = $User_id;

        return $this;
    }

    public function getAime(): ?int
    {
        return $this->aime;
    }

    public function setAime(int $aime): self
    {
        $this->aime = $aime;

        return $this;
    }

    public function getPasaimer(): ?int
    {
        return $this->pasaimer;
    }

    public function setPasaimer(int $pasaimer): self
    {
        $this->pasaimer = $pasaimer;

        return $this;
    }


}
