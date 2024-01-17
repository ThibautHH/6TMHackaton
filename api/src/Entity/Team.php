<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
#[ApiResource(security: 'is_granted("ROLE_ADMIN")')]
#[Get(security: 'is_granted("ROLE_USER")')]
#[GetCollection(security: 'is_granted("ROLE_USER")')]
class Team
{
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    #[ApiProperty(identifier: true)]
    public ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[ApiProperty(types: ["https://schema.org/name"])]
    public string $name = '';

    #[ORM\ManyToOne(targetEntity: Premise::class)]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull]
    public Premise $premise;
}
