<?php
namespace GgoMarken\Models;

use	Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ggo_marken")
 */
 class Marken
 {
 	/**
	 * @var integer $id
	 *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
 	private $id;
	
	/**
	 * @var string $name
	 * 
	 * @ORM\Column(name="name", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
	 */
	private $name;
	
	
	/**
	 * @var boolean $active
	 * 
	 *  @ORM\Column(name="active", type="boolean")
	 */
	 
	private $active;
	
	
	/**
	 * @var string $link
	 * 
	 *  @ORM\Column(name="link", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
	 */
	private $link;
	
	/**
	 * @var string $description
	 *  @ORM\Column(name="description", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
	 */
	private $description;
	
	/**
	 * @var string $meta_title
	 * 
	 * @ORM\Column(name="meta_title", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
	 */
	private $meta_title;
	
	/**
	 * @var string $meta_description
	 * 
	 * @ORM\Column(name="meta_description", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
	 */
	private $meta_description;
	
	/**
	 * @var string $meta_keywords
	 * 
	 * @ORM\Column(name="meta_keywords", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
	 */
	private $meta_keywords;
	
	/*public function __construct()
	{
		$this->articles = new \Doctrine\Common\Collections\ArrayCollections();
	}*/
	
	/**Get id
	 * 
	 * @return integer
	 */
	 
	 public function getId()
	 {
	 	return $this->id;
	 }
	 
	 /**
     * Set name
     *
     * @param string $name
     * @return Brands
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
 
    /**
     * Get name
     *
     * @return Integer
     */
    public function getName()
    {
        return $this->name;
    }
	
	 /**
     * Set active
     *
     * @param integer $active
     * @return Brands
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }
 
    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }
	
	/**
     * Set link
     *
     * @param string $link
     * @return Brands
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }
 
    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }
	
	/**
     * Set description
     *
     * @param string $description
     * @return Brands
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
 
    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
	
	/**
     * Set meta_title
     *
     * @param string $meta_title
     * @return Brands
     */
    public function setMeta_title($meta_title)
    {
        $this->meta_title = $meta_title;
        return $this;
    }
 
    /**
     * Get meta_title
     *
     * @return string
     */
    public function getMeta_title()
    {
        return $this->meta_title;
    }
	
	/**
     * Set meta_description
     *
     * @param string $meta_description
     * @return Brands
     */
    public function setMeta_description($meta_description)
    {
        $this->meta_description = $meta_description;
        return $this;
    }
 
    /**
     * Get meta_description
     *
     * @return string
     */
    public function getMeta_description()
    {
        return $this->meta_description;
    }
	
	/**
     * Set meta_keywords
     *
     * @param string $meta_keywords
     * @return Brands
     */
    public function setMeta_keywords($meta_keywords)
    {
        $this->meta_keywords = $meta_keywords;
        return $this;
    }
 
    /**
     * Get meta_keywords
     *
     * @return string
     */
    public function getMeta_keywords()
    {
        return $this->meta_keywords;
    }
	
	public function getBrands()
    {
        return $this->brands;
    }
 }
?>