<?php

namespace RestaurantCornerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerFid
 *
 * @ORM\Table(name="customer_fid", indexes={@ORM\Index(name="fk_customer_fid_users1_idx", columns={"users_idusers"}), @ORM\Index(name="fk_customer_fid_customers1_idx", columns={"customers_idcustomer"})})
 * @ORM\Entity
 */
class CustomerFid
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idclient_fid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclientFid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="loyalty_counter", type="boolean", nullable=true)
     */
    private $loyaltyCounter;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=12, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=50, nullable=true)
     */
    private $adress;

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
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="users_idusers", referencedColumnName="idusers")
     * })
     */
    private $usersusers;



    /**
     * Get idclientFid
     *
     * @return integer
     */
    public function getIdclientFid()
    {
        return $this->idclientFid;
    }

    /**
     * Set loyaltyCounter
     *
     * @param boolean $loyaltyCounter
     *
     * @return CustomerFid
     */
    public function setLoyaltyCounter($loyaltyCounter)
    {
        $this->loyaltyCounter = $loyaltyCounter;

        return $this;
    }

    /**
     * Get loyaltyCounter
     *
     * @return boolean
     */
    public function getLoyaltyCounter()
    {
        return $this->loyaltyCounter;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return CustomerFid
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return CustomerFid
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set customerscustomer
     *
     * @param \RestaurantCornerBundle\Entity\Customers $customerscustomer
     *
     * @return CustomerFid
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

    /**
     * Set usersusers
     *
     * @param \RestaurantCornerBundle\Entity\Users $usersusers
     *
     * @return CustomerFid
     */
    public function setUsersusers(\RestaurantCornerBundle\Entity\Users $usersusers = null)
    {
        $this->usersusers = $usersusers;

        return $this;
    }

    /**
     * Get usersusers
     *
     * @return \RestaurantCornerBundle\Entity\Users
     */
    public function getUsersusers()
    {
        return $this->usersusers;
    }
}
