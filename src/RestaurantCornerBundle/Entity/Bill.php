<?php

namespace RestaurantCornerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bill
 *
 * @ORM\Table(name="bill", indexes={@ORM\Index(name="fk_bill_restaurant1_idx", columns={"restaurant_idrestaurant"}), @ORM\Index(name="fk_bill_order_items1_idx", columns={"order_items_idcommand"})})
 * @ORM\Entity
 */
class Bill
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idbill", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbill;

    /**
     * @var float
     *
     * @ORM\Column(name="total_amount", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalAmount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_bill", type="datetime", nullable=false)
     */
    private $dateBill;

    /**
     * @var float
     *
     * @ORM\Column(name="billing_rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $billingRate;

    /**
     * @var float
     *
     * @ORM\Column(name="turnover", type="float", precision=10, scale=0, nullable=true)
     */
    private $turnover;

    /**
     * @var \OrderItems
     *
     * @ORM\ManyToOne(targetEntity="OrderItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_items_idcommand", referencedColumnName="idcommand")
     * })
     */
    private $orderItemscommand;

    /**
     * @var \Restaurant
     *
     * @ORM\ManyToOne(targetEntity="Restaurant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="restaurant_idrestaurant", referencedColumnName="idrestaurant")
     * })
     */
    private $restaurantrestaurant;



    /**
     * Get idbill
     *
     * @return integer
     */
    public function getIdbill()
    {
        return $this->idbill;
    }

    /**
     * Set totalAmount
     *
     * @param float $totalAmount
     *
     * @return Bill
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get totalAmount
     *
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Set dateBill
     *
     * @param \DateTime $dateBill
     *
     * @return Bill
     */
    public function setDateBill($dateBill)
    {
        $this->dateBill = $dateBill;

        return $this;
    }

    /**
     * Get dateBill
     *
     * @return \DateTime
     */
    public function getDateBill()
    {
        return $this->dateBill;
    }

    /**
     * Set billingRate
     *
     * @param float $billingRate
     *
     * @return Bill
     */
    public function setBillingRate($billingRate)
    {
        $this->billingRate = $billingRate;

        return $this;
    }

    /**
     * Get billingRate
     *
     * @return float
     */
    public function getBillingRate()
    {
        return $this->billingRate;
    }

    /**
     * Set turnover
     *
     * @param float $turnover
     *
     * @return Bill
     */
    public function setTurnover($turnover)
    {
        $this->turnover = $turnover;

        return $this;
    }

    /**
     * Get turnover
     *
     * @return float
     */
    public function getTurnover()
    {
        return $this->turnover;
    }

    /**
     * Set orderItemscommand
     *
     * @param \RestaurantCornerBundle\Entity\OrderItems $orderItemscommand
     *
     * @return Bill
     */
    public function setOrderItemscommand(\RestaurantCornerBundle\Entity\OrderItems $orderItemscommand = null)
    {
        $this->orderItemscommand = $orderItemscommand;

        return $this;
    }

    /**
     * Get orderItemscommand
     *
     * @return \RestaurantCornerBundle\Entity\OrderItems
     */
    public function getOrderItemscommand()
    {
        return $this->orderItemscommand;
    }

    /**
     * Set restaurantrestaurant
     *
     * @param \RestaurantCornerBundle\Entity\Restaurant $restaurantrestaurant
     *
     * @return Bill
     */
    public function setRestaurantrestaurant(\RestaurantCornerBundle\Entity\Restaurant $restaurantrestaurant = null)
    {
        $this->restaurantrestaurant = $restaurantrestaurant;

        return $this;
    }

    /**
     * Get restaurantrestaurant
     *
     * @return \RestaurantCornerBundle\Entity\Restaurant
     */
    public function getRestaurantrestaurant()
    {
        return $this->restaurantrestaurant;
    }
}
