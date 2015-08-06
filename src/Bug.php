<?php
// src/Bug.php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * class for entity Bug
 *
 * @Entity(repositoryClass="BugRepository") @Table(name="bugs")
 * @version 1.4
 * @author  nelkenjosef
 * @since   class available since release 1.1.0
 */
class Bug
{
    /**
     * @Column(name="id", type="integer") @Id @GeneratedValue
     * @var   int
     * @since 1.0
     */
    protected $_id;

    /**
     * @Column(name="description", type="string")
     * @var   string
     * @since 1.0
     */
    protected $_description;

    /**
     * @Column(name="created", type="datetime")
     * @var   DateTime
     * @since 1.0
     */
    protected $_created;

    /**
     * @Column(name="status", type="string", length=16)
     * @var   string
     * @since 1.0
     */
    protected $_status;

    /**
     * @ManyToMany(targetEntity="Product")
     * @var   Product[]
     * @since 1.1
     */
    protected $_products = null;

    /**
     * @ManyToOne(targetEntity="User", inversedBy="_assignedBugs")
     * @var   User
     * @since 1.2
     */
    protected $_engineer;

    /**
     * @ManyToOne(targetEntity="User", inversedBy="_reportedBugs")
     * @var   User
     * @since 1.2
     */
    protected $_reporter;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->_products = new ArrayCollection();
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
     * Getter for $_description
     *
     * @return string
     * @since  1.0
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * Setter for $_description
     *
     * @param  string $description
     * @return void
     * @since  1.0
     */
    public function setDescription($description)
    {
        $this->_description = $description;
    }

    /**
     * Getter for $_created
     *
     * @return DateTime
     * @since  1.0
     */
    public function getCreated()
    {
        return $this->_created;
    }

    /**
     * Setter for $_created
     *
     * @param  DateTime $created
     * @return void
     * @since  1.0
     */
    public function setCreated(DateTime $created)
    {
        $this->_created = $created;
    }

    /**
     * Getter for $_status
     *
     * @return string
     * @since  1.0
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * Setter for $_status
     *
     * @param  string $status
     * @return void
     * @since  1.0
     */
    public function setSatus($status)
    {
        $this->_status = $status;
    }

    /**
     * Getter for $_engineer
     *
     * @return User
     * @since  1.2
     */
    public function getEngineer()
    {
        return $this->_engineer;
    }

    /**
     * Setter for $_engineer
     *
     * @param  User $engineer
     * @return void
     * @since  1.2
     */
    public function setEngineer(User $engineer)
    {
        $engineer->assignedToBug($this);
        $this->_engineer = $engineer;
    }

    /**
     * Getter for $_reporter
     *
     * @return User
     * @since  1.2
     */
    public function getReporter()
    {
        return $this->_reporter;
    }

    /**
     * Setter for $_reporter
     *
     * @param  User $reporter
     * @return void
     * @since  1.2
     */
    public function setReporter(User $reporter)
    {
        $reporter->addReportedBug($this);
        $this->_reporter = $reporter;
    }

    /**
     * Getter for $_products
     *
     * @return Product[]
     * @since  1.3
     */
    public function getProducts()
    {
        return $this->_products;
    }

    /**
     * Assigns bugs to product
     *
     * @param  Product $product
     * @return void
     * @since  1.3
     */
    public function assignToProduct(Product $product)
    {
        $this->_products[] = $product;
    }
}
