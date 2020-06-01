<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PpDistrict
 *
 * @ORM\Table(name="PP_district")
 * @ORM\Entity
 */
class PpDistrict
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
     * @var string|null
     *
     * @ORM\Column(name="region_id", type="string", length=255, nullable=true)
     */
    private $regionId;

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

    public function getRegionId(): ?string
    {
        return $this->regionId;
    }

    public function setRegionId(?string $regionId): self
    {
        $this->regionId = $regionId;

        return $this;
    }


}
