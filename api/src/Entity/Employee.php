<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is a dummy entity. Remove it!
 */
#[ApiResource(mercure: true)]
#[ORM\Entity]
class Employee
{
    /**
     * The entity ID
     */
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private ?int $id = null;

    /**
     * The entity Name
     */
    #[ORM\Column]
    #[Assert\NotBlank]
    public string $name = '';

    /**
     * The entity FirstName
     */
    #[ORM\Column]
    #[Assert\NotBlank]
    public string $firstName = '';

    /**
     * The entity Position
     */
    #[ORM\Column]
    #[Assert\NotBlank]
    public string $position = '';

    public function getId(): ?int
    {
        return $this->id;
    }
}
