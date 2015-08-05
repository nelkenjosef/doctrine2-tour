<?php
// src/Bug.php

/**
 * class for entity Bug
 *
 * @version 1.0
 * @author  nelkenjosef
 * @since   class available since release 1.1.0
 * @Entity(repositoryClass="BugRepository") @Table(name="bugs")
 */
class Bug
{
    /**
     * @var int
     * @Column(name="id", type="integer") @Id @GeneratedValue
     */
    protected $_id;

    /**
     * @var string
     * @Column(name="description", type="string")
     */
    protected $_description;

    /**
     * @var DateTime
     * @Column(name="created", type="datetime")
     */
    protected $_created;

    /**
     * @var string
     * @Column(name="status", type="string", length=16)
     */
    protected $_status;

    /**
     * getter for $_id
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * getter for $_description
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * setter for $_description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->_description = $description;
    }

    /**
     * getter for $_created
     */
    public function getCreated()
    {
        return $this->_created;
    }

    /**
     * setter for $_created
     *
     * @param DateTime $created
     */
    public function setCreated(DateTime $created)
    {
        $this->_created = $created;
    }

    /**
     * getter for $_status
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * setter for $_status
     *
     * @param string $status
     */
    public function setSatus($status)
    {
        $this->_status = $status;
    }
}
