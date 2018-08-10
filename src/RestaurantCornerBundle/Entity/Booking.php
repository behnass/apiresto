<?php

namespace RestaurantCornerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Booking
 *
 * @ORM\Table(name="booking", indexes={@ORM\Index(name="fk_booking_customers1_idx", columns={"customers_idcustomer"})})
 * @ORM\Entity
 */
class Booking
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idbooking", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbooking;

    /**
     * @var integer
     *
     * @ORM\Column(name="booking_number_random", type="integer", nullable=false)
     */
    private $bookingNumberRandom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="number_customer", type="boolean", nullable=true)
     */
    private $numberCustomer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_booking", type="datetime", nullable=false)
     */
    private $dateBooking;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="string", length=55, nullable=true)
     */
    private $details;

    /**
     * @var \Customers
     *
     * @ORM\ManyToOne(targetEntity="Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customers_idcustomer", referencedColumnName="idcustomer")
     * })
     */
    private $customerscustomer;



    /**
     * Get idbooking
     *
     * @return integer
     */
    public function getIdbooking()
    {
        return $this->idbooking;
    }

    /**
     * Set bookingNumberRandom
     *
     * @param integer $bookingNumberRandom
     *
     * @return Booking
     */
    public function setBookingNumberRandom($bookingNumberRandom)
    {
        $this->bookingNumberRandom = $bookingNumberRandom;

        return $this;
    }

    /**
     * Get bookingNumberRandom
     *
     * @return integer
     */
    public function getBookingNumberRandom()
    {
        return $this->bookingNumberRandom;
    }

    /**
     * Set numberCustomer
     *
     * @param boolean $numberCustomer
     *
     * @return Booking
     */
    public function setNumberCustomer($numberCustomer)
    {
        $this->numberCustomer = $numberCustomer;

        return $this;
    }

    /**
     * Get numberCustomer
     *
     * @return boolean
     */
    public function getNumberCustomer()
    {
        return $this->numberCustomer;
    }

    /**
     * Set dateBooking
     *
     * @param \DateTime $dateBooking
     *
     * @return Booking
     */
    public function setDateBooking($dateBooking)
    {
        $this->dateBooking = $dateBooking;

        return $this;
    }

    /**
     * Get dateBooking
     *
     * @return \DateTime
     */
    public function getDateBooking()
    {
        return $this->dateBooking;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Booking
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set customerscustomer
     *
     * @param \RestaurantCornerBundle\Entity\Customers $customerscustomer
     *
     * @return Booking
     */
    public function setCustomerscustomer(\RestaurantCornerBundle\Entity\Customers $customerscustomer = null)
    {
        $this->customerscustomer = $customerscustomer;

        return $this;
    }

    /**
     * Get customerscustomer
     *
     * @return \RestaurantCornerBundle\Entity\Customers
     */
    public function getCustomerscustomer()
    {
        return $this->customerscustomer;
    }
}
