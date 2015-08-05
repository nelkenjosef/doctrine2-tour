<?php
// src/Product.php

/**
 * class for entity Product
 *
 * @version 2.0
 * @author  nelkenjosef
 * @since   class available since release 1.0.0
 * @Entity @Table(name="products")
 */
class Product
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
