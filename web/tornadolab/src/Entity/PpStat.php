<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PpStat
 *
 * @ORM\Table(name="PP_stat")
 * @ORM\Entity(repositoryClass="App\Repository\PpStatRepository")
 */
class PpStat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="suburb_id", type="integer", nullable=true)
     */
    private $suburbId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count", type="integer", nullable=true)
     */
    private $count;


     /**
     *@ORM\ManyToOne(targetEntity="App\Entity\PpSuburb", inversedBy="stats")
     */
    private $suburb;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getSuburbId(): ?int
    {
        return $this->suburbId;
    }

    public function setSuburbId(?int $suburbId): self
    {
        $this->suburbId = $suburbId;

        return $this;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getSuburb(): ?PpSuburb
    {
        return $this->suburb;
    }

    public function setSuburb(?PpSuburb $suburb): self
    {
        $this->suburb = $suburb;

        return $this;
    }


}
