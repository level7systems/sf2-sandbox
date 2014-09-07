<?php

namespace Level7\PdnsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Records
 */
class Records
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $domainId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $ttl;

    /**
     * @var integer
     */
    private $prio;

    /**
     * @var integer
     */
    private $changeDate;

    /**
     * @var boolean
     */
    private $disabled;

    /**
     * @var string
     */
    private $ordername;

    /**
     * @var boolean
     */
    private $auth;


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
     * Set domainId
     *
     * @param integer $domainId
     * @return Records
     */
    public function setDomainId($domainId)
    {
        $this->domainId = $domainId;

        return $this;
    }

    /**
     * Get domainId
     *
     * @return integer 
     */
    public function getDomainId()
    {
        return $this->domainId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Records
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
     * Set type
     *
     * @param string $type
     * @return Records
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
     * Set content
     *
     * @param string $content
     * @return Records
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set ttl
     *
     * @param integer $ttl
     * @return Records
     */
    public function setTtl($ttl)
    {
        $this->ttl = $ttl;

        return $this;
    }

    /**
     * Get ttl
     *
     * @return integer 
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    /**
     * Set prio
     *
     * @param integer $prio
     * @return Records
     */
    public function setPrio($prio)
    {
        $this->prio = $prio;

        return $this;
    }

    /**
     * Get prio
     *
     * @return integer 
     */
    public function getPrio()
    {
        return $this->prio;
    }

    /**
     * Set changeDate
     *
     * @param integer $changeDate
     * @return Records
     */
    public function setChangeDate($changeDate)
    {
        $this->changeDate = $changeDate;

        return $this;
    }

    /**
     * Get changeDate
     *
     * @return integer 
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Set disabled
     *
     * @param boolean $disabled
     * @return Records
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;

        return $this;
    }

    /**
     * Get disabled
     *
     * @return boolean 
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Set ordername
     *
     * @param string $ordername
     * @return Records
     */
    public function setOrdername($ordername)
    {
        $this->ordername = $ordername;

        return $this;
    }

    /**
     * Get ordername
     *
     * @return string 
     */
    public function getOrdername()
    {
        return $this->ordername;
    }

    /**
     * Set auth
     *
     * @param boolean $auth
     * @return Records
     */
    public function setAuth($auth)
    {
        $this->auth = $auth;

        return $this;
    }

    /**
     * Get auth
     *
     * @return boolean 
     */
    public function getAuth()
    {
        return $this->auth;
    }
}
