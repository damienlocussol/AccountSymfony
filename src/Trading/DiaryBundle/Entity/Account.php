<?php

namespace Trading\DiaryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Account
 *
 * @ORM\Table(name="account", indexes={@ORM\Index(name="fk_account_user_idx", columns={"user_id"}), @ORM\Index(name="fk_account_broker1_idx", columns={"broker_id"})})
 * @ORM\Entity
 */
class Account
{
    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=45, nullable=false)
     * @Assert\NotBlank()
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd", type="string", length=45, nullable=false)
     */
    private $pwd;

    /**
     * @var string
     *
     * @ORM\Column(name="APIKey", type="string", length=100, nullable=false)
     */
    private $apikey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_updated", type="boolean", nullable=false)
     */
    private $isUpdated;

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
     * @var \Trading\DiaryBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Trading\DiaryBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(nullable=false, name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Trading\DiaryBundle\Entity\Broker
     *
     * @ORM\ManyToOne(targetEntity="Trading\DiaryBundle\Entity\Broker")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(nullable=false, name="broker_id", referencedColumnName="id")
     * })
     */
    private $broker;




    /**
     * Set number
     *
     * @param string $number
     *
     * @return Account
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     *
     * @return Account
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd
     *
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set apikey
     *
     * @param string $apikey
     *
     * @return Account
     */
    public function setApikey($apikey)
    {
        $this->apikey = $apikey;

        return $this;
    }

    /**
     * Get apikey
     *
     * @return string
     */
    public function getApikey()
    {
        return $this->apikey;
    }

    /**
     * Set isUpdated
     *
     * @param boolean $isUpdated
     *
     * @return Account
     */
    public function setIsUpdated($isUpdated)
    {
        $this->isUpdated = $isUpdated;

        return $this;
    }

    /**
     * Get isUpdated
     *
     * @return boolean
     */
    public function getIsUpdated()
    {
        return $this->isUpdated;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     *
     * @return Account
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

    /**
     * Set user
     *
     * @param \Trading\DiaryBundle\Entity\User $user
     *
     * @return Account
     */
    public function setUser(\Trading\DiaryBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Trading\DiaryBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set broker
     *
     * @param \Trading\DiaryBundle\Entity\Broker $broker
     *
     * @return Account
     */
    public function setBroker(\Trading\DiaryBundle\Entity\Broker $broker)
    {
        $this->broker = $broker;

        return $this;
    }

    /**
     * Get broker
     *
     * @return \Trading\DiaryBundle\Entity\Broker
     */
    public function getBroker()
    {
        return $this->broker;
    }
}
