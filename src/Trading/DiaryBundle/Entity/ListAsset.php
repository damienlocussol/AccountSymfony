<?php

namespace Trading\DiaryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListAsset
 *
 * @ORM\Table(name="list_asset")
 * @ORM\Entity
 */
class ListAsset
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="spread", type="integer", nullable=false)
     */
    private $spread;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    private $lastUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return ListAsset
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set spread
     *
     * @param integer $spread
     *
     * @return ListAsset
     */
    public function setSpread($spread)
    {
        $this->spread = $spread;

        return $this;
    }

    /**
     * Get spread
     *
     * @return integer
     */
    public function getSpread()
    {
        return $this->spread;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     *
     * @return ListAsset
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
