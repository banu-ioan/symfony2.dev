<?php
namespace Agregator\FrontendBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Agregator\FrontendBundle\Repository\CerereRepository")
 */
class Cerere
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
     * @ORM\Column(type="text")
     */
    protected $descriere;
    
    /**
    * @ORM\ManyToOne(targetEntity="Beneficiar", inversedBy="cereri")
    */
    protected $beneficiar;        

    
    /**
     * @ORM\ManyToMany(targetEntity="Categorie", inversedBy="cereri")
     * @ORM\JoinTable(name="CereriCategorii")
     */
    protected $categorii;
    
    
    /**
     * @Gedmo\Slug(fields={"nume"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;
    
    
    public function __construct()
    {
        $this->categorii = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set descriere
     *
     * @param text $descriere
     */
    public function setDescriere($descriere)
    {
        $this->descriere = $descriere;
    }

    /**
     * Get descriere
     *
     * @return text 
     */
    public function getDescriere()
    {
        return $this->descriere;
    }

    /**
     * Set beneficiar
     *
     * @param Agregator\FrontendBundle\Entity\Beneficiar $beneficiar
     */
    public function setBeneficiar(\Agregator\FrontendBundle\Entity\Beneficiar $beneficiar)
    {
        $this->beneficiar = $beneficiar;
    }

    /**
     * Get beneficiar
     *
     * @return Agregator\FrontendBundle\Entity\Beneficiar 
     */
    public function getBeneficiar()
    {
        return $this->beneficiar;
    }

    /**
     * Add categorii
     *
     * @param Agregator\FrontendBundle\Entity\Categorie $categorii
     */
    public function addCategorie(\Agregator\FrontendBundle\Entity\Categorie $categorii)
    {
        $this->categorii[] = $categorii;
    }

    /**
     * Get categorii
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCategorii()
    {
        return $this->categorii;
    }

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
}