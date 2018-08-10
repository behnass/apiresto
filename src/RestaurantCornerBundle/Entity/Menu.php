<?php

namespace RestaurantCornerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menu", indexes={@ORM\Index(name="fk_menu_category1_idx", columns={"category_idcategory"})})
 * @ORM\Entity
 */
class Menu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idmenu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmenu;

    /**
     * @var string
     *
     * @ORM\Column(name="name_plate", type="string", length=20, nullable=false)
     */
    private $namePlate;

    /**
     * @var string
     *
     * @ORM\Column(name="descrip_plate", type="string", length=50, nullable=false)
     */
    private $descripPlate;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=45, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=10, nullable=false)
     */
    private $price;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_idcategory", referencedColumnName="idcategory")
     * })
     */
    private $categorycategory;



    /**
     * Get idmenu
     *
     * @return integer
     */
    public function getIdmenu()
    {
        return $this->idmenu;
    }

    /**
     * Set namePlate
     *
     * @param string $namePlate
     *
     * @return Menu
     */
    public function setNamePlate($namePlate)
    {
        $this->namePlate = $namePlate;

        return $this;
    }

    /**
     * Get namePlate
     *
     * @return string
     */
    public function getNamePlate()
    {
        return $this->namePlate;
    }

    /**
     * Set descripPlate
     *
     * @param string $descripPlate
     *
     * @return Menu
     */
    public function setDescripPlate($descripPlate)
    {
        $this->descripPlate = $descripPlate;

        return $this;
    }

    /**
     * Get descripPlate
     *
     * @return string
     */
    public function getDescripPlate()
    {
        return $this->descripPlate;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Menu
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Menu
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set categorycategory
     *
     * @param \RestaurantCornerBundle\Entity\Category $categorycategory
     *
     * @return Menu
     */
    public function setCategorycategory(\RestaurantCornerBundle\Entity\Category $categorycategory = null)
    {
        $this->categorycategory = $categorycategory;

        return $this;
    }

    /**
     * Get categorycategory
     *
     * @return \RestaurantCornerBundle\Entity\Category
     */
    public function getCategorycategory()
    {
        return $this->categorycategory;
    }
}
