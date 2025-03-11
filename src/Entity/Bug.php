<?php

namespace App\Entity;

use App\Repository\BugRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BugRepository::class)]
class Bug
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 128)]
    private ?string $b_id = null;

    #[ORM\Column(length: 128, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 128)]
    private ?string $p_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBId(): ?string
    {
        return $this->b_id;
    }

    public function setBId(string $b_id): static
    {
        $this->b_id = $b_id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getPId(): ?string
    {
        return $this->p_id;
    }

    public function setPId(string $p_id): static
    {
        $this->p_id = $p_id;

        return $this;
    }
}
