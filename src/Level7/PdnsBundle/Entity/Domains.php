<?php

namespace Level7\PdnsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domains
 */
class Domains
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $master;

    /**
     * @var integer
     */
    private $lastCheck;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $notifiedSerial;

    /**
     * @var string
     */
    private $account;


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
     * Set name
     *
     * @param string $name
     * @return Domains
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
     * Set master
     *
     * @param string $master
     * @return Domains
     */
    public function setMaster($master)
    {
        $this->master = $master;

        return $this;
    }

    /**
     * Get master
     *
     * @return string 
     */
    public function getMaster()
    {
        return $this->master;
    }

    /**
     * Set lastCheck
     *
     * @param integer $lastCheck
     * @return Domains
     */
    public function setLastCheck($lastCheck)
    {
        $this->lastCheck = $lastCheck;

        return $this;
    }

    /**
     * Get lastCheck
     *
     * @return integer 
     */
    public function getLastCheck()
    {
        return $this->lastCheck;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Domains
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set notifiedSerial
     *
     * @param integer $notifiedSerial
     * @return Domains
     */
    public function setNotifiedSerial($notifiedSerial)
    {
        $this->notifiedSerial = $notifiedSerial;

        return $this;
    }

    /**
     * Get notifiedSerial
     *
     * @return integer 
     */
    public function getNotifiedSerial()
    {
        return $this->notifiedSerial;
    }

    /**
     * Set account
     *
     * @param string $account
     * @return Domains
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return string 
     */
    public function getAccount()
    {
        return $this->account;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $records;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->records = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add records
     *
     * @param \Level7\PdnsBundle\Entity\Records $records
     * @return Domains
     */
    public function addRecord(\Level7\PdnsBundle\Entity\Records $records)
    {
        $this->records[] = $records;

        return $this;
    }

    /**
     * Remove records
     *
     * @param \Level7\PdnsBundle\Entity\Records $records
     */
    public function removeRecord(\Level7\PdnsBundle\Entity\Records $records)
    {
        $this->records->removeElement($records);
    }

    /**
     * Get records
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecords()
    {
        return $this->records;
    }
}
