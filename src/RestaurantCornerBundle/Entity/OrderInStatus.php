<?php

namespace RestaurantCornerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderInStatus
 *
 * @ORM\Table(name="order_in_status", indexes={@ORM\Index(name="fk_order_in_status_order_items1_idx", columns={"order_items_idcommand"}), @ORM\Index(name="fk_order_in_status_restaurant1_idx", columns={"restaurant_idrestaurant"})})
 * @ORM\Entity
 */
class OrderInStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idorder_in_status", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idorderInStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="order_in_status", type="string", length=45, nullable=true)
     */
    private $orderInStatus;

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
     * Get idorderInStatus
     *
     * @return integer
     */
    public function getIdorderInStatus()
    {
        return $this->idorderInStatus;
    }

    /**
     * Set orderInStatus
     *
     * @param string $orderInStatus
     *
     * @return OrderInStatus
     */
    public function setOrderInStatus($orderInStatus)
    {
        $this->orderInStatus = $orderInStatus;

        return $this;
    }

    /**
     * Get orderInStatus
     *
     * @return string
     */
    public function getOrderInStatus()
    {
        return $this->orderInStatus;
    }

    /**
     * Set orderItemscommand
     *
     * @param \RestaurantCornerBundle\Entity\OrderItems $orderItemscommand
     *
     * @return OrderInStatus
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
     * @return OrderInStatus
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
