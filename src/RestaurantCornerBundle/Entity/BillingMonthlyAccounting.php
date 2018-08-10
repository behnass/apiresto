<?php

namespace RestaurantCornerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BillingMonthlyAccounting
 *
 * @ORM\Table(name="billing_monthly_accounting", indexes={@ORM\Index(name="fk_billing_accounting_restaurant1_idx", columns={"restaurant_idrestaurant"})})
 * @ORM\Entity
 */
class BillingMonthlyAccounting
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idbilling_accounting", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbillingAccounting;

    /**
     * @var float
     *
     * @ORM\Column(name="billing_accounting", type="float", precision=10, scale=0, nullable=false)
     */
    private $billingAccounting;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time", type="datetime", nullable=false)
     */
    private $dateTime;

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
     * Get idbillingAccounting
     *
     * @return integer
     */
    public function getIdbillingAccounting()
    {
        return $this->idbillingAccounting;
    }

    /**
     * Set billingAccounting
     *
     * @param float $billingAccounting
     *
     * @return BillingMonthlyAccounting
     */
    public function setBillingAccounting($billingAccounting)
    {
        $this->billingAccounting = $billingAccounting;

        return $this;
    }

    /**
     * Get billingAccounting
     *
     * @return float
     */
    public function getBillingAccounting()
    {
        return $this->billingAccounting;
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     *
     * @return BillingMonthlyAccounting
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Get dateTime
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Set restaurantrestaurant
     *
     * @param \RestaurantCornerBundle\Entity\Restaurant $restaurantrestaurant
     *
     * @return BillingMonthlyAccounting
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
