<?php

namespace RestaurantCornerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * File
 *
 * @ORM\Table(name="file", indexes={@ORM\Index(name="fk_file_restaurant1_idx", columns={"restaurant_idrestaurant"})})
 * @ORM\Entity
 */
class File
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idfile", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfile;

    /**
     * @var string
     *
     * @ORM\Column(name="name_file", type="string", length=45, nullable=false)
     */
    private $nameFile;

    /**
     * @var string
     *
     * @ORM\Column(name="storage_name", type="string", length=80, nullable=false)
     */
    private $storageName;

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
     * Get idfile
     *
     * @return integer
     */
    public function getIdfile()
    {
        return $this->idfile;
    }

    /**
     * Set nameFile
     *
     * @param string $nameFile
     *
     * @return File
     */
    public function setNameFile($nameFile)
    {
        $this->nameFile = $nameFile;

        return $this;
    }

    /**
     * Get nameFile
     *
     * @return string
     */
    public function getNameFile()
    {
        return $this->nameFile;
    }

    /**
     * Set storageName
     *
     * @param string $storageName
     *
     * @return File
     */
    public function setStorageName($storageName)
    {
        $this->storageName = $storageName;

        return $this;
    }

    /**
     * Get storageName
     *
     * @return string
     */
    public function getStorageName()
    {
        return $this->storageName;
    }

    /**
     * Set restaurantrestaurant
     *
     * @param \RestaurantCornerBundle\Entity\Restaurant $restaurantrestaurant
     *
     * @return File
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
