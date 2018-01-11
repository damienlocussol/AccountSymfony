<?php

namespace Trading\DiaryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TradeOpen
 *
 * @ORM\Table(name="trade_open", indexes={@ORM\Index(name="fk_trade_open_strategy1_idx", columns={"strategy_id"}), @ORM\Index(name="fk_trade_open_list_asset1_idx", columns={"list_asset_id"}), @ORM\Index(name="fk_trade_open_account1_idx", columns={"account_id"})})
 * @ORM\Entity
 */
class TradeOpen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="qte", type="integer", nullable=false)
     */
    private $qte;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="opentime", type="datetime", nullable=false)
     */
    private $opentime;

    /**
     * @var string
     *
     * @ORM\Column(name="sens", type="string", length=45, nullable=false)
     */
    private $sens;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="profit", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $profit;

    /**
     * @var string
     *
     * @ORM\Column(name="type-trade", type="string", length=45, nullable=false)
     */
    private $typeTrade;

    /**
     * @var string
     *
     * @ORM\Column(name="rollover", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $rollover;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Trading\DiaryBundle\Entity\Strategy
     *
     * @ORM\ManyToOne(targetEntity="Trading\DiaryBundle\Entity\Strategy")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(nullable=false, name="strategy_id", referencedColumnName="id")
     * })
     */
    private $strategy;

    /**
     * @var \Trading\DiaryBundle\Entity\ListAsset
     *
     * @ORM\ManyToOne(targetEntity="Trading\DiaryBundle\Entity\ListAsset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(nullable=false, name="list_asset_id", referencedColumnName="id")
     * })
     */
    private $listAsset;

    /**
     * @var \Trading\DiaryBundle\Entity\Account
     *
     * @ORM\ManyToOne(targetEntity="Trading\DiaryBundle\Entity\Account")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(nullable=false, name="account_id", referencedColumnName="id")
     * })
     */
    private $account;



    /**
     * Set qte
     *
     * @param integer $qte
     *
     * @return TradeOpen
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
     * Set price
     *
     * @param string $price
     *
     * @return TradeOpen
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
     * Set opentime
     *
     * @param \DateTime $opentime
     *
     * @return TradeOpen
     */
    public function setOpentime($opentime)
    {
        $this->opentime = $opentime;

        return $this;
    }

    /**
     * Get opentime
     *
     * @return \DateTime
     */
    public function getOpentime()
    {
        return $this->opentime;
    }

    /**
     * Set sens
     *
     * @param string $sens
     *
     * @return TradeOpen
     */
    public function setSens($sens)
    {
        $this->sens = $sens;

        return $this;
    }

    /**
     * Get sens
     *
     * @return string
     */
    public function getSens()
    {
        return $this->sens;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return TradeOpen
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set profit
     *
     * @param string $profit
     *
     * @return TradeOpen
     */
    public function setProfit($profit)
    {
        $this->profit = $profit;

        return $this;
    }

    /**
     * Get profit
     *
     * @return string
     */
    public function getProfit()
    {
        return $this->profit;
    }

    /**
     * Set typeTrade
     *
     * @param string $typeTrade
     *
     * @return TradeOpen
     */
    public function setTypeTrade($typeTrade)
    {
        $this->typeTrade = $typeTrade;

        return $this;
    }

    /**
     * Get typeTrade
     *
     * @return string
     */
    public function getTypeTrade()
    {
        return $this->typeTrade;
    }

    /**
     * Set rollover
     *
     * @param string $rollover
     *
     * @return TradeOpen
     */
    public function setRollover($rollover)
    {
        $this->rollover = $rollover;

        return $this;
    }

    /**
     * Get rollover
     *
     * @return string
     */
    public function getRollover()
    {
        return $this->rollover;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return TradeOpen
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
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
     * Set strategy
     *
     * @param \Trading\DiaryBundle\Entity\Strategy $strategy
     *
     * @return TradeOpen
     */
    public function setStrategy(\Trading\DiaryBundle\Entity\Strategy $strategy)
    {
        $this->strategy = $strategy;

        return $this;
    }

    /**
     * Get strategy
     *
     * @return \Trading\DiaryBundle\Entity\Strategy
     */
    public function getStrategy()
    {
        return $this->strategy;
    }

    /**
     * Set listAsset
     *
     * @param \Trading\DiaryBundle\Entity\ListAsset $listAsset
     *
     * @return TradeOpen
     */
    public function setListAsset(\Trading\DiaryBundle\Entity\ListAsset $listAsset)
    {
        $this->listAsset = $listAsset;

        return $this;
    }

    /**
     * Get listAsset
     *
     * @return \Trading\DiaryBundle\Entity\ListAsset
     */
    public function getListAsset()
    {
        return $this->listAsset;
    }

    /**
     * Set account
     *
     * @param \Trading\DiaryBundle\Entity\Account $account
     *
     * @return TradeOpen
     */
    public function setAccount(\Trading\DiaryBundle\Entity\Account $account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \Trading\DiaryBundle\Entity\Account
     */
    public function getAccount()
    {
        return $this->account;
    }
}
