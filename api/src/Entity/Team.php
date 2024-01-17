<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
#[ApiResource]
#[Get]
#[GetCollection]
#[Delete(security: 'is_granted("ROLE_ADMIN")')]
#[Patch(security: 'is_granted("ROLE_ADMIN")')]
#[Post(security: 'is_granted("ROLE_ADMIN")')]
#[Put(security: 'is_granted("ROLE_ADMIN")')]
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
