<?php

namespace VintageWest\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImgCarrousel
 *
 * @ORM\Table(name="img_carrousel")
 * @ORM\Entity(repositoryClass="VintageWest\FrontBundle\Repository\ImgCarrouselRepository")
 */
class ImgCarrousel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="img_url", type="string", length=255)
     */
    private $imgUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="url_dest", type="string", length=255)
     */
    private $urlDest;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set imgUrl
     *
     * @param string $imgUrl
     * @return ImgCarrousel
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl = $imgUrl;

        return $this;
    }

    /**
     * Get imgUrl
     *
     * @return string 
     */
    public function getImgUrl()
    {
        return $this->imgUrl;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return ImgCarrousel
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return ImgCarrousel
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set urlDest
     *
     * @param string $urlDest
     * @return ImgCarrousel
     */
    public function setUrlDest($urlDest)
    {
        $this->urlDest = $urlDest;

        return $this;
    }

    /**
     * Get urlDest
     *
     * @return string 
     */
    public function getUrlDest()
    {
        return $this->urlDest;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return ImgCarrousel
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
}
