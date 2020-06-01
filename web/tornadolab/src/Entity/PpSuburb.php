<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * PpSuburb
 *
 * @ORM\Table(name="PP_suburb")
 * @ORM\Entity

 */
class PpSuburb
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
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="district_id", type="integer", nullable=true)
     */
    private $districtId;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PpStat", mappedBy="suburb")
     */
    private $stats;

    public function __construct()
    {
        $this->stats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDistrictId(): ?int
    {
        return $this->districtId;
    }

    public function setDistrictId(?int $districtId): self
    {
        $this->districtId = $districtId;

        return $this;
    }

    /**
     * @return Collection|PpStat[]
     */
    public function getStats(): Collection
    {
        return $this->stats;
    }

    public function addStat(PpStat $stat): self
    {
        if (!$this->stats->contains($stat)) {
            $this->stats[] = $stat;
            $stat->setPpSuburb($this);
        }

        return $this;
    }

    public function removeStat(PpStat $stat): self
    {
        if ($this->stats->contains($stat)) {
            $this->stats->removeElement($stat);
            // set the owning side to null (unless already changed)
            if ($stat->getPpSuburb() === $this) {
                $stat->setPpSuburb(null);
            }
        }

        return $this;
    }



}
