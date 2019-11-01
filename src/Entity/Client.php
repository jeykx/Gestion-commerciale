<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $designation;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $RespComm;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Respfinance;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $addlivr;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $addfacture;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $portable;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $fax;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $email;

    /**
     * @ORM\Column(type="float")
     */
    private $soldeinit;

    /**
     * @ORM\Column(type="float")
     */
    private $solde;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getRespComm(): ?string
    {
        return $this->RespComm;
    }

    public function setRespComm(string $RespComm): self
    {
        $this->RespComm = $RespComm;

        return $this;
    }

    public function getRespfinance(): ?string
    {
        return $this->Respfinance;
    }

    public function setRespfinance(string $Respfinance): self
    {
        $this->Respfinance = $Respfinance;

        return $this;
    }

    public function getAddlivr(): ?string
    {
        return $this->addlivr;
    }

    public function setAddlivr(string $addlivr): self
    {
        $this->addlivr = $addlivr;

        return $this;
    }

    public function getAddfacture(): ?string
    {
        return $this->addfacture;
    }

    public function setAddfacture(string $addfacture): self
    {
        $this->addfacture = $addfacture;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getPortable(): ?string
    {
        return $this->portable;
    }

    public function setPortable(string $portable): self
    {
        $this->portable = $portable;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSoldeinit(): ?float
    {
        return $this->soldeinit;
    }

    public function setSoldeinit(float $soldeinit): self
    {
        $this->soldeinit = $soldeinit;

        return $this;
    }

    public function getSolde(): ?float
    {
        return $this->solde;
    }

    public function setSolde(float $solde): self
    {
        $this->solde = $solde;

        return $this;
    }
}
