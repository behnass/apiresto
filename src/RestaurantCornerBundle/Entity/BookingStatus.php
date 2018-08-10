<?php

namespace RestaurantCornerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BookingStatus
 *
 * @ORM\Table(name="booking_status", indexes={@ORM\Index(name="fk_booking_status_booking1_idx", columns={"booking_idbooking"}), @ORM\Index(name="fk_booking_status_restaurant1_idx", columns={"restaurant_idrestaurant"})})
 * @ORM\Entity
 */
class BookingStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idbooking_status", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbookingStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="booking_in_status", type="string", length=45, nullable=true)
     */
    private $bookingInStatus;

    /**
     * @var \Booking
     *
     * @ORM\ManyToOne(targetEntity="Booking")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="booking_idbooking", referencedColumnName="idbooking")
     * })
     */
    private $bookingbooking;

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
     * Get idbookingStatus
     *
     * @return integer
     */
    public function getIdbookingStatus()
    {
        return $this->idbookingStatus;
    }

    /**
     * Set bookingInStatus
     *
     * @param string $bookingInStatus
     *
     * @return BookingStatus
     */
    public function setBookingInStatus($bookingInStatus)
    {
        $this->bookingInStatus = $bookingInStatus;

        return $this;
    }

    /**
     * Get bookingInStatus
     *
     * @return string
     */
    public function getBookingInStatus()
    {
        return $this->bookingInStatus;
    }

    /**
     * Set bookingbooking
     *
     * @param \RestaurantCornerBundle\Entity\Booking $bookingbooking
     *
     * @return BookingStatus
     */
    public function setBookingbooking(\RestaurantCornerBundle\Entity\Booking $bookingbooking = null)
    {
        $this->bookingbooking = $bookingbooking;

        return $this;
    }

    /**
     * Get bookingbooking
     *
     * @return \RestaurantCornerBundle\Entity\Booking
     */
    public function getBookingbooking()
    {
        return $this->bookingbooking;
    }

    /**
     * Set restaurantrestaurant
     *
     * @param \RestaurantCornerBundle\Entity\Restaurant $restaurantrestaurant
     *
     * @return BookingStatus
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
