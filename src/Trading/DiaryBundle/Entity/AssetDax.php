<?php

namespace Trading\DiaryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AssetDax
 *
 * @ORM\Table(name="asset_dax")
 * @ORM\Entity
 */
class AssetDax
{
    /**
     * @var string
     *
     * @ORM\Column(name="open", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $open;

    /**
     * @var string
     *
     * @ORM\Column(name="high", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $high;

    /**
     * @var string
     *
     * @ORM\Column(name="low", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $low;

    /**
     * @var string
     *
     * @ORM\Column(name="close", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $close;

    /**
     * @var integer
     *
     * @ORM\Column(name="volume", type="integer", nullable=true)
     */
    private $volume;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timeserie", type="datetime")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $timeserie;



    /**
     * Set open
     *
     * @param string $open
     *
     * @return AssetDax
     */
    public function setOpen($open)
    {
        $this->open = $open;

        return $this;
    }

    /**
     * Get open
     *
     * @return string
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * Set high
     *
     * @param string $high
     *
     * @return AssetDax
     */
    public function setHigh($high)
    {
        $this->high = $high;

        return $this;
    }

    /**
     * Get high
     *
     * @return string
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * Set low
     *
     * @param string $low
     *
     * @return AssetDax
     */
    public function setLow($low)
    {
        $this->low = $low;

        return $this;
    }

    /**
     * Get low
     *
     * @return string
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * Set close
     *
     * @param string $close
     *
     * @return AssetDax
     */
    public function setClose($close)
    {
        $this->close = $close;

        return $this;
    }

    /**
     * Get close
     *
     * @return string
     */
    public function getClose()
    {
        return $this->close;
    }

    /**
     * Set volume
     *
     * @param integer $volume
     *
     * @return AssetDax
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume
     *
     * @return integer
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set timeserie
     *
     * @param \DateTime $timeserie
     *
     * @return AssetDax
     */
    public function setTimeserie($timeserie)
    {
        $this->timeserie = $timeserie;

        return $this;
    }

    /**
     * Get timeserie
     *
     * @return \DateTime
     */
    public function getTimeserie()
    {
        return $this->timeserie;
    }
}
