<?php

namespace RestaurantCornerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TmpViewOrderItems
 *
 * @ORM\Table(name="tmp_view_order_items", indexes={@ORM\Index(name="fk_tmp_view_order_items_tmp_view_customers1_idx", columns={"tmp_view_customers_idcustomer"})})
 * @ORM\Entity
 */
class TmpViewOrderItems
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
     * @var \TmpViewCustomers
     *
     * @ORM\ManyToOne(targetEntity="TmpViewCustomers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tmp_view_customers_idcustomer", referencedColumnName="idcustomer")
     * })
     */
    private $tmpViewCustomerscustomer;



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
     * @return TmpViewOrderItems
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
     * @return TmpViewOrderItems
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
     * @return TmpViewOrderItems
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
     * @return TmpViewOrderItems
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
     * @return TmpViewOrderItems
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
     * Set tmpViewCustomerscustomer
     *
     * @param \RestaurantCornerBundle\Entity\TmpViewCustomers $tmpViewCustomerscustomer
     *
     * @return TmpViewOrderItems
     */
    public function setTmpViewCustomerscustomer(\RestaurantCornerBundle\Entity\TmpViewCustomers $tmpViewCustomerscustomer = null)
    {
        $this->tmpViewCustomerscustomer = $tmpViewCustomerscustomer;

        return $this;
    }

    /**
     * Get tmpViewCustomerscustomer
     *
     * @return \RestaurantCornerBundle\Entity\TmpViewCustomers
     */
    public function getTmpViewCustomerscustomer()
    {
        return $this->tmpViewCustomerscustomer;
    }
}
