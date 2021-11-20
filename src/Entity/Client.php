<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
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
    private $nameClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $phoneClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailClient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameClient(): ?string
    {
        return $this->nameClient;
    }

    public function setNameClient(string $nameClient): self
    {
        $this->nameClient = $nameClient;

        return $this;
    }

    public function getPhoneClient(): ?string
    {
        return $this->phoneClient;
    }

    public function setPhoneClient(string $phoneClient): self
    {
        $this->phoneClient = $phoneClient;

        return $this;
    }

    public function getMailClient(): ?string
    {
        return $this->mailClient;
    }

    public function setMailClient(string $mailClient): self
    {
        $this->mailClient = $mailClient;

        return $this;
    }
}
