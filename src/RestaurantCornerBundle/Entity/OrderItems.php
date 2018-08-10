<?php

namespace RestaurantCornerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderItems
 *
 * @ORM\Table(name="order_items", indexes={@ORM\Index(name="fk_command_customer_idx", columns={"customer_idcustomer"})})
 * @ORM\Entity
 */
class OrderItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcommand", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommand;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_number_random", type="integer", nullable=false)
     */
    private $orderNumberRandom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time_order", type="datetime", nullable=false)
     */
    private $dateTimeOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="order_products", type="string", length=250, nullable=false)
     */
    private $orderProducts;

    /**
     * @var boolean
     *
     * @ORM\Column(name="number_item", type="boolean", nullable=false)
     */
    private $numberItem;

    /**
     * @var float
     *
     * @ORM\Column(name="total_amount_order", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalAmountOrder;

    /**
     * @var \Customers
     *
     * @ORM\ManyToOne(targetEntity="Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_idcustomer", referencedColumnName="idcustomer")
     * })
     */
    private $customercustomer;



    /**
     * Get idcommand
     *
     * @return integer
     */
    public function getIdcommand()
    {
        return $this->idcommand;
    }

    /**
     * Set orderNumberRandom
     *
     * @param integer $orderNumberRandom
     *
     * @return OrderItems
     */
    public function setOrderNumberRandom($orderNumberRandom)
    {
        $this->orderNumberRandom = $orderNumberRandom;

        return $this;
    }

    /**
     * Get orderNumberRandom
     *
     * @return integer
     */
    public function getOrderNumberRandom()
    {
        return $this->orderNumberRandom;
    }

    /**
     * Set dateTimeOrder
     *
     * @param \DateTime $dateTimeOrder
     *
     * @return OrderItems
     */
    public function setDateTimeOrder($dateTimeOrder)
    {
        $this->dateTimeOrder = $dateTimeOrder;

        return $this;
    }

    /**
     * Get dateTimeOrder
     *
     * @return \DateTime
     */
    public function getDateTimeOrder()
    {
        return $this->dateTimeOrder;
    }

    /**
     * Set orderProducts
     *
     * @param string $orderProducts
     *
     * @return OrderItems
     */
    public function setOrderProducts($orderProducts)
    {
        $this->orderProducts = $orderProducts;

        return $this;
    }

    /**
     * Get orderProducts
     *
     * @return string
     */
    public function getOrderProducts()
    {
        return $this->orderProducts;
    }

    /**
     * Set numberItem
     *
     * @param boolean $numberItem
     *
     * @return OrderItems
     */
    public function setNumberItem($numberItem)
    {
        $this->numberItem = $numberItem;

        return $this;
    }

    /**
     * Get numberItem
     *
     * @return boolean
     */
    public function getNumberItem()
    {
        return $this->numberItem;
    }

    /**
     * Set totalAmountOrder
     *
     * @param float $totalAmountOrder
     *
     * @return OrderItems
     */
    public function setTotalAmountOrder($totalAmountOrder)
    {
        $this->totalAmountOrder = $totalAmountOrder;

        return $this;
    }

    /**
     * Get totalAmountOrder
     *
     * @return float
     */
    public function getTotalAmountOrder()
    {
        return $this->totalAmountOrder;
    }

    /**
     * Set customercustomer
     *
     * @param \RestaurantCornerBundle\Entity\Customers $customercustomer
     *
     * @return OrderItems
     */
    public function setCustomercustomer(\RestaurantCornerBundle\Entity\Customers $customercustomer = null)
    {
        $this->customercustomer = $customercustomer;

        return $this;
    }

    /**
     * Get customercustomer
     *
     * @return \RestaurantCornerBundle\Entity\Customers
     */
    public function getCustomercustomer()
    {
        return $this->customercustomer;
    }
}
