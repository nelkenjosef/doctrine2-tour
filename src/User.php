<?php
// src/User.php

/**
 * class for entity User
 *
 * @version 1.0
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
