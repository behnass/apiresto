<?php

namespace RestaurantCornerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TmpViewOrderInStatus
 *
 * @ORM\Table(name="tmp_view_order_in_status", indexes={@ORM\Index(name="fk_order_in_status_restaurant1_idx", columns={"restaurant_idrestaurant"}), @ORM\Index(name="fk_tmp_view_order_in_status_tmp_view_order_items1_idx", columns={"tmp_view_order_items_idcommand"})})
 * @ORM\Entity
 */
class TmpViewOrderInStatus
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
     * @var \Restaurant
     *
     * @ORM\ManyToOne(targetEntity="Restaurant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="restaurant_idrestaurant", referencedColumnName="idrestaurant")
     * })
     */
    private $restaurantrestaurant;

    /**
     * @var \TmpViewOrderItems
     *
     * @ORM\ManyToOne(targetEntity="TmpViewOrderItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tmp_view_order_items_idcommand", referencedColumnName="idcommand")
     * })
     */
    private $tmpViewOrderItemscommand;



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
     * @return TmpViewOrderInStatus
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
     * Set restaurantrestaurant
     *
     * @param \RestaurantCornerBundle\Entity\Restaurant $restaurantrestaurant
     *
     * @return TmpViewOrderInStatus
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

    /**
     * Set tmpViewOrderItemscommand
     *
     * @param \RestaurantCornerBundle\Entity\TmpViewOrderItems $tmpViewOrderItemscommand
     *
     * @return TmpViewOrderInStatus
     */
    public function setTmpViewOrderItemscommand(\RestaurantCornerBundle\Entity\TmpViewOrderItems $tmpViewOrderItemscommand = null)
    {
        $this->tmpViewOrderItemscommand = $tmpViewOrderItemscommand;

        return $this;
    }

    /**
     * Get tmpViewOrderItemscommand
     *
     * @return \RestaurantCornerBundle\Entity\TmpViewOrderItems
     */
    public function getTmpViewOrderItemscommand()
    {
        return $this->tmpViewOrderItemscommand;
    }
}
