<?php

namespace Level7\PdnsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cryptokeys
 */
class Cryptokeys
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
     * @var integer
     */
    private $flags;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var string
     */
    private $content;


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
     * @return Cryptokeys
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
     * Set flags
     *
     * @param integer $flags
     * @return Cryptokeys
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * Get flags
     *
     * @return integer 
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Cryptokeys
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Cryptokeys
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
}
