<?php
namespace Agregator\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;
    
        
    /**
     * @ORM\Column(type="string")
     */
    protected $nume;
    
    /**
    * @ORM\ManyToMany(targetEntity="Oferta", mappedBy="categorii")
    */
    protected $oferte;
    
    /**
    * @ORM\ManyToMany(targetEntity="Cerere", mappedBy="categorii")
    */
    protected $cereri;
    
    public function __construct()
    {
        $this->oferte = new \Doctrine\Common\Collections\ArrayCollection();
    $this->cereri = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set nume
     *
     * @param string $nume
     */
    public function setNume($nume)
    {
        $this->nume = $nume;
    }

    /**
     * Get nume
     *
     * @return string 
     */
    public function getNume()
    {
        return $this->nume;
    }

    /**
     * Add oferte
     *
     * @param Agregator\FrontendBundle\Entity\Oferta $oferte
     */
    public function addOferta(\Agregator\FrontendBundle\Entity\Oferta $oferte)
    {
        $this->oferte[] = $oferte;
    }

    /**
     * Get oferte
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getOferte()
    {
        return $this->oferte;
    }

    /**
     * Add cereri
     *
     * @param Agregator\FrontendBundle\Entity\Cerere $cereri
     */
    public function addCerere(\Agregator\FrontendBundle\Entity\Cerere $cereri)
    {
        $this->cereri[] = $cereri;
    }

    /**
     * Get cereri
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCereri()
    {
        return $this->cereri;
    }
}