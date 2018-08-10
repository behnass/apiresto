<?php

namespace RestaurantCornerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TmpViewCustomers
 *
 * @ORM\Table(name="tmp_view_customers")
 * @ORM\Entity
 */
class TmpViewCustomers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcustomer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcustomer;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_name", type="string", length=45, nullable=true)
     */
    private $customerName;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=45, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=12, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="commentary", type="string", length=110, nullable=true)
     */
    private $commentary;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=50, nullable=true)
     */
    private $mail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time", type="datetime", nullable=false)
     */
    private $dateTime;



    /**
     * Get idcustomer
     *
     * @return integer
     */
    public function getIdcustomer()
    {
        return $this->idcustomer;
    }

    /**
     * Set customerName
     *
     * @param string $customerName
     *
     * @return TmpViewCustomers
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get customerName
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return TmpViewCustomers
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return TmpViewCustomers
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set commentary
     *
     * @param string $commentary
     *
     * @return TmpViewCustomers
     */
    public function setCommentary($commentary)
    {
        $this->commentary = $commentary;

        return $this;
    }

    /**
     * Get commentary
     *
     * @return string
     */
    public function getCommentary()
    {
        return $this->commentary;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return TmpViewCustomers
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     *
     * @return TmpViewCustomers
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
}
