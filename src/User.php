<?php
// src/User.php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * class for entity User
 *
 * @version 1.1
 * @author  nelkenjosef
 * @since   class available since release 1.1.0
 * @Entity @Table(name="users")
 */
class User
{
    /**
     * @var int
     * @Column(name="id", type="integer") @Id @GeneratedValue
     */
    protected $_id;

    /**
     * @var string
     * @Column(name="name", type="string", length=64)
     */
    protected $_name;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     */
    protected $_reportedBugs;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     */
    protected $_assignedBugs;

    public function __construct()
    {
        $this->_reportedBugs = new ArrayCollection();
        $this->_assignedBugs = new ArrayCollection();
    }

    /**
     * getter for $_id
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * getter for $_name
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * setter for $_name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }
}
