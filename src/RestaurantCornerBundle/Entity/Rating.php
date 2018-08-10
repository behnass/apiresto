<?php

namespace RestaurantCornerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rating
 *
 * @ORM\Table(name="rating", indexes={@ORM\Index(name="fk_rating_customer_fid1_idx", columns={"customer_fid_idclient_fid"}), @ORM\Index(name="fk_rating_restaurateurs1_idx", columns={"restaurateurs_idrestaurateur"})})
 * @ORM\Entity
 */
class Rating
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idrating", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrating;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ratingvalue", type="boolean", nullable=false)
     */
    private $ratingvalue;

    /**
     * @var \CustomerFid
     *
     * @ORM\ManyToOne(targetEntity="CustomerFid")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_fid_idclient_fid", referencedColumnName="idclient_fid")
     * })
     */
    private $customerFidclientFid;

    /**
     * @var \Restaurant
     *
     * @ORM\ManyToOne(targetEntity="Restaurant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="restaurateurs_idrestaurateur", referencedColumnName="idrestaurant")
     * })
     */
    private $restaurateursrestaurateur;



    /**
     * Get idrating
     *
     * @return integer
     */
    public function getIdrating()
    {
        return $this->idrating;
    }

    /**
     * Set ratingvalue
     *
     * @param boolean $ratingvalue
     *
     * @return Rating
     */
    public function setRatingvalue($ratingvalue)
    {
        $this->ratingvalue = $ratingvalue;

        return $this;
    }

    /**
     * Get ratingvalue
     *
     * @return boolean
     */
    public function getRatingvalue()
    {
        return $this->ratingvalue;
    }

    /**
     * Set customerFidclientFid
     *
     * @param \RestaurantCornerBundle\Entity\CustomerFid $customerFidclientFid
     *
     * @return Rating
     */
    public function setCustomerFidclientFid(\RestaurantCornerBundle\Entity\CustomerFid $customerFidclientFid = null)
    {
        $this->customerFidclientFid = $customerFidclientFid;

        return $this;
    }

    /**
     * Get customerFidclientFid
     *
     * @return \RestaurantCornerBundle\Entity\CustomerFid
     */
    public function getCustomerFidclientFid()
    {
        return $this->customerFidclientFid;
    }

    /**
     * Set restaurateursrestaurateur
     *
     * @param \RestaurantCornerBundle\Entity\Restaurant $restaurateursrestaurateur
     *
     * @return Rating
     */
    public function setRestaurateursrestaurateur(\RestaurantCornerBundle\Entity\Restaurant $restaurateursrestaurateur = null)
    {
        $this->restaurateursrestaurateur = $restaurateursrestaurateur;

        return $this;
    }

    /**
     * Get restaurateursrestaurateur
     *
     * @return \RestaurantCornerBundle\Entity\Restaurant
     */
    public function getRestaurateursrestaurateur()
    {
        return $this->restaurateursrestaurateur;
    }
}
