<?php
// src/Product.php

/**
 * class for entity Product
 *
 * @version 1.0
 * @author  nelkenjosef
 * @since   class available since release 1.0
 */
class Product
{
    /**
     * @var int
     */
    protected $_id;

    /**
     * @var string
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
