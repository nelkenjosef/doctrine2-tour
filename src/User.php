<?php
// src/User.php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * class for entity User
 *
 * @Entity @Table(name="users")
 * @version 1.2
 * @author  nelkenjosef
 * @since   class available since release 1.1.0
 */
class User
{
    /**
     * @Column(name="id", type="integer") @Id @GeneratedValue
     * @var   int
     * @since 1.0
     */
    protected $_id;

    /**
     * @Column(name="name", type="string", length=64)
     * @var   string
     * @since 1.0
     */
    protected $_name;

    /**
     * @var   Doctrine\Common\Collections\ArrayCollection
     * @since 1.1
     */
    protected $_reportedBugs = null;

    /**
     * @var   Doctrine\Common\Collections\ArrayCollection
     * @since 1.1
     */
    protected $_assignedBugs = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->_reportedBugs = new ArrayCollection();
        $this->_assignedBugs = new ArrayCollection();
    }

    /**
     * Getter for $_id
     *
     * @return int
     * @since  1.0
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Getter for $_name
     *
     * @return string
     * @since  1.0
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Setter for $_name
     *
     * @param  string $name
     * @return void
     * @since  1.0
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * Add reported bugs
     *
     * @param  Bug $bug
     * @return void
     * @since  1.2
     */
    public function addReportedBug(Bug $bug)
    {
        $this->_reportedBugs[] = $bug;
    }

    /**
     * Assign user to bug
     *
     * @param  Bug $bug
     * @return void
     * @since  1.2
     */
    public function assignedToBug(Bug $bug)
    {
        $this->_assignedBugs[] = $bug;
    }
}
