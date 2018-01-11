<?php

namespace Trading\DiaryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TradeClose
 *
 * @ORM\Table(name="trade_close", indexes={@ORM\Index(name="fk_trade_close_trade_open1_idx", columns={"trade_open_id"})})
 * @ORM\Entity
 */
class TradeClose
{
    /**
     * @var integer
     *
     * @ORM\Column(name="qte", type="integer", nullable=false)
     */
    private $qte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="closetime", type="datetime", nullable=false)
     */
    private $closetime;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Trading\DiaryBundle\Entity\TradeOpen
     *
     * @ORM\ManyToOne(targetEntity="Trading\DiaryBundle\Entity\TradeOpen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(nullable=false, name="trade_open_id", referencedColumnName="id")
     * })
     */
    private $tradeOpen;



    /**
     * Set qte
     *
     * @param integer $qte
     *
     * @return TradeClose
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return integer
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set closetime
     *
     * @param \DateTime $closetime
     *
     * @return TradeClose
     */
    public function setClosetime($closetime)
    {
        $this->closetime = $closetime;

        return $this;
    }

    /**
     * Get closetime
     *
     * @return \DateTime
     */
    public function getClosetime()
    {
        return $this->closetime;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return TradeClose
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
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

    /**
     * Set tradeOpen
     *
     * @param \Trading\DiaryBundle\Entity\TradeOpen $tradeOpen
     *
     * @return TradeClose
     */
    public function setTradeOpen(\Trading\DiaryBundle\Entity\TradeOpen $tradeOpen)
    {
        $this->tradeOpen = $tradeOpen;

        return $this;
    }

    /**
     * Get tradeOpen
     *
     * @return \Trading\DiaryBundle\Entity\TradeOpen
     */
    public function getTradeOpen()
    {
        return $this->tradeOpen;
    }
}
