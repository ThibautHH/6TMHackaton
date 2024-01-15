<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Link;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ApiResource(
    operations: [new GetCollection(), new Post(), new Put(), new Patch(), new Delete()],
    mercure: true
)]
#[ApiResource(
    uriTemplate: '/teams/{teamId}/employees/{id}',
    uriVariables: [
        'teamId' => new Link(fromClass: Team::class, toProperty: 'team'),
        'id' => new Link(fromClass: Employee::class)
    ],
    operations: [new Get()],
    mercure: true
)]
#[ApiResource(
    uriTemplate: '/teams/{teamId}/employees',
    uriVariables: [
        'teamId' => new Link(fromClass: Team::class, toProperty: 'team'),
    ],
    operations: [new GetCollection()],
    mercure: true
)]
#[ORM\Entity]
class Employee
{
    /**
     * The entity ID
     */
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    #[ApiProperty(identifier: true)]
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

    /**
     * The employee's associated team
     */
    #[ORM\ManyToOne(targetEntity: Team::class)]
    #[ORM\JoinColumn(nullable: false)]
    public Team $team;

    public function getId(): ?int
    {
        return $this->id;
    }
}
