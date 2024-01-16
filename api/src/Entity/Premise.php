<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\ApiProperty;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ApiResource(mercure: true)]
#[ORM\Entity]
class Premise
{
    /**
     * The entity ID
     */
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private ?int $id = null;

    /**
     * The city name
     */
    #[ORM\Column]
    #[Assert\NotBlank]
    #[ApiProperty(types: ["https://schema.org/name"])]
    public string $city = '';

    public function getId(): ?int
    {
        return $this->id;
    }
}
