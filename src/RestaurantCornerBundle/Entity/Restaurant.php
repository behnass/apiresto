<?php

namespace RestaurantCornerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Restaurant
 *
 * @ORM\Table(name="restaurant", indexes={@ORM\Index(name="fk_restaurant_users1_idx", columns={"users_idusers"}), @ORM\Index(name="fk_restaurant_menu1_idx", columns={"menu_idmenu"})})
 * @ORM\Entity
 */
class Restaurant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idrestaurant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrestaurant;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=50, nullable=false)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="person_name", type="string", length=45, nullable=false)
     */
    private $personName;

    /**
     * @var string
     *
     * @ORM\Column(name="person_surname", type="string", length=45, nullable=false)
     */
    private $personSurname;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_person", type="string", length=45, nullable=false)
     */
    private $contactPerson;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=100, nullable=false)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=60, nullable=false)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=45, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=8, nullable=true)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_mobile", type="string", length=12, nullable=false)
     */
    private $phoneMobile;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_fix", type="string", length=12, nullable=true)
     */
    private $phoneFix;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=12, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="inactive", type="boolean", nullable=false)
     */
    private $inactive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=false)
     */
    private $createdDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_by", type="datetime", nullable=false)
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="disabledDate", type="datetime", nullable=true)
     */
    private $disableddate;

    /**
     * @var string
     *
     * @ORM\Column(name="component_menu_json", type="string", length=45, nullable=false)
     */
    private $componentMenuJson;

    /**
     * @var string
     *
     * @ORM\Column(name="Opening_Closing_Time", type="string", length=100, nullable=true)
     */
    private $openingClosingTime;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="string", length=100, nullable=true)
     */
    private $details;

    /**
     * @var \Menu
     *
     * @ORM\ManyToOne(targetEntity="Menu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="menu_idmenu", referencedColumnName="idmenu")
     * })
     */
    private $menumenu;

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
     * Get idrestaurant
     *
     * @return integer
     */
    public function getIdrestaurant()
    {
        return $this->idrestaurant;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     *
     * @return Restaurant
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set personName
     *
     * @param string $personName
     *
     * @return Restaurant
     */
    public function setPersonName($personName)
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * Get personName
     *
     * @return string
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Set personSurname
     *
     * @param string $personSurname
     *
     * @return Restaurant
     */
    public function setPersonSurname($personSurname)
    {
        $this->personSurname = $personSurname;

        return $this;
    }

    /**
     * Get personSurname
     *
     * @return string
     */
    public function getPersonSurname()
    {
        return $this->personSurname;
    }

    /**
     * Set contactPerson
     *
     * @param string $contactPerson
     *
     * @return Restaurant
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;

        return $this;
    }

    /**
     * Get contactPerson
     *
     * @return string
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Restaurant
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return Restaurant
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Restaurant
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set zip
     *
     * @param string $zip
     *
     * @return Restaurant
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set phoneMobile
     *
     * @param string $phoneMobile
     *
     * @return Restaurant
     */
    public function setPhoneMobile($phoneMobile)
    {
        $this->phoneMobile = $phoneMobile;

        return $this;
    }

    /**
     * Get phoneMobile
     *
     * @return string
     */
    public function getPhoneMobile()
    {
        return $this->phoneMobile;
    }

    /**
     * Set phoneFix
     *
     * @param string $phoneFix
     *
     * @return Restaurant
     */
    public function setPhoneFix($phoneFix)
    {
        $this->phoneFix = $phoneFix;

        return $this;
    }

    /**
     * Get phoneFix
     *
     * @return string
     */
    public function getPhoneFix()
    {
        return $this->phoneFix;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Restaurant
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Restaurant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set inactive
     *
     * @param boolean $inactive
     *
     * @return Restaurant
     */
    public function setInactive($inactive)
    {
        $this->inactive = $inactive;

        return $this;
    }

    /**
     * Get inactive
     *
     * @return boolean
     */
    public function getInactive()
    {
        return $this->inactive;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return Restaurant
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set createdBy
     *
     * @param \DateTime $createdBy
     *
     * @return Restaurant
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \DateTime
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set disableddate
     *
     * @param \DateTime $disableddate
     *
     * @return Restaurant
     */
    public function setDisableddate($disableddate)
    {
        $this->disableddate = $disableddate;

        return $this;
    }

    /**
     * Get disableddate
     *
     * @return \DateTime
     */
    public function getDisableddate()
    {
        return $this->disableddate;
    }

    /**
     * Set componentMenuJson
     *
     * @param string $componentMenuJson
     *
     * @return Restaurant
     */
    public function setComponentMenuJson($componentMenuJson)
    {
        $this->componentMenuJson = $componentMenuJson;

        return $this;
    }

    /**
     * Get componentMenuJson
     *
     * @return string
     */
    public function getComponentMenuJson()
    {
        return $this->componentMenuJson;
    }

    /**
     * Set openingClosingTime
     *
     * @param string $openingClosingTime
     *
     * @return Restaurant
     */
    public function setOpeningClosingTime($openingClosingTime)
    {
        $this->openingClosingTime = $openingClosingTime;

        return $this;
    }

    /**
     * Get openingClosingTime
     *
     * @return string
     */
    public function getOpeningClosingTime()
    {
        return $this->openingClosingTime;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Restaurant
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
     * Set menumenu
     *
     * @param \RestaurantCornerBundle\Entity\Menu $menumenu
     *
     * @return Restaurant
     */
    public function setMenumenu(\RestaurantCornerBundle\Entity\Menu $menumenu = null)
    {
        $this->menumenu = $menumenu;

        return $this;
    }

    /**
     * Get menumenu
     *
     * @return \RestaurantCornerBundle\Entity\Menu
     */
    public function getMenumenu()
    {
        return $this->menumenu;
    }

    /**
     * Set usersusers
     *
     * @param \RestaurantCornerBundle\Entity\Users $usersusers
     *
     * @return Restaurant
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
