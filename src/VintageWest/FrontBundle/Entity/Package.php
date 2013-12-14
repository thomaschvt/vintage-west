<?php

namespace VintageWest\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Package
 *
 * @ORM\Table(name="package")
 * @ORM\Entity(repositoryClass="VintageWest\FrontBundle\Repository\PackageRepository")
 */
class Package
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
     * @ORM\Column(name="title_fr", type="string", length=255)
     */
    private $titleFr;

    /**
     * @var string
     *
     * @ORM\Column(name="title_en", type="string", length=255, nullable=true)
     */
    private $titleEn;

    /**
     * @var string
     *
     * @ORM\Column(name="title_es", type="string", length=255, nullable=true)
     */
    private $titleEs;

    /**
     * @var string
     *
     * @ORM\Column(name="description_fr", type="text")
     */
    private $descriptionFr;

    /**
     * @var string
     *
     * @ORM\Column(name="description_en", type="text", nullable=true)
     */
    private $descriptionEn;

    /**
     * @var string
     *
     * @ORM\Column(name="description_es", type="text", nullable=true)
     */
    private $descriptionEs;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_days", type="integer")
     */
    private $nbrDays;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_kilometers", type="integer")
     */
    private $nbrKilometers;

    /**
     * @var integer
     *
     * @ORM\Column(name="cost", type="integer")
     */
    private $cost;


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
     * Set titleFr
     *
     * @param string $titleFr
     * @return Package
     */
    public function setTitleFr($titleFr)
    {
        $this->titleFr = $titleFr;

        return $this;
    }

    /**
     * Get titleFr
     *
     * @return string 
     */
    public function getTitleFr()
    {
        return $this->titleFr;
    }

    /**
     * Set titleEn
     *
     * @param string $titleEn
     * @return Package
     */
    public function setTitleEn($titleEn)
    {
        $this->titleEn = $titleEn;

        return $this;
    }

    /**
     * Get titleEn
     *
     * @return string 
     */
    public function getTitleEn()
    {
        return $this->titleEn;
    }

    /**
     * Set titleEs
     *
     * @param string $titleEs
     * @return Package
     */
    public function setTitleEs($titleEs)
    {
        $this->titleEs = $titleEs;

        return $this;
    }

    /**
     * Get titleEs
     *
     * @return string 
     */
    public function getTitleEs()
    {
        return $this->titleEs;
    }

    /**
     * Set descriptionFr
     *
     * @param string $descriptionFr
     * @return Package
     */
    public function setDescriptionFr($descriptionFr)
    {
        $this->descriptionFr = $descriptionFr;

        return $this;
    }

    /**
     * Get descriptionFr
     *
     * @return string 
     */
    public function getDescriptionFr()
    {
        return $this->descriptionFr;
    }

    /**
     * Set descriptionEn
     *
     * @param string $descriptionEn
     * @return Package
     */
    public function setDescriptionEn($descriptionEn)
    {
        $this->descriptionEn = $descriptionEn;

        return $this;
    }

    /**
     * Get descriptionEn
     *
     * @return string 
     */
    public function getDescriptionEn()
    {
        return $this->descriptionEn;
    }

    /**
     * Set descriptionEs
     *
     * @param string $descriptionEs
     * @return Package
     */
    public function setDescriptionEs($descriptionEs)
    {
        $this->descriptionEs = $descriptionEs;

        return $this;
    }

    /**
     * Get descriptionEs
     *
     * @return string 
     */
    public function getDescriptionEs()
    {
        return $this->descriptionEs;
    }

    /**
     * Set nbrDays
     *
     * @param integer $nbrDays
     * @return Package
     */
    public function setNbrDays($nbrDays)
    {
        $this->nbrDays = $nbrDays;

        return $this;
    }

    /**
     * Get nbrDays
     *
     * @return integer 
     */
    public function getNbrDays()
    {
        return $this->nbrDays;
    }

    /**
     * Set nbrKilometers
     *
     * @param integer $nbrKilometers
     * @return Package
     */
    public function setNbrKilometers($nbrKilometers)
    {
        $this->nbrKilometers = $nbrKilometers;

        return $this;
    }

    /**
     * Get nbrKilometers
     *
     * @return integer 
     */
    public function getNbrKilometers()
    {
        return $this->nbrKilometers;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     * @return Package
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer 
     */
    public function getCost()
    {
        return $this->cost;
    }
}
