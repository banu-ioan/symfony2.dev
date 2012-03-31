<?php
namespace Agregator\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Agregator\FrontendBundle\Repository\OfertaRepository")
 */
class Oferta
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
    * @ORM\ManyToOne(targetEntity="Prestatar", inversedBy="oferte")
    */
    protected $prestatar;        

    
    /**
     * @ORM\ManyToMany(targetEntity="Categorie", inversedBy="oferte")
     * @ORM\JoinTable(name="OferteCategorii")
     */
    protected $categorii;
    
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
     * Set prestatar
     *
     * @param Agregator\FrontendBundle\Entity\Prestatar $prestatar
     */
    public function setPrestatar(\Agregator\FrontendBundle\Entity\Prestatar $prestatar)
    {
        $this->prestatar = $prestatar;
    }

    /**
     * Get prestatar
     *
     * @return Agregator\FrontendBundle\Entity\Prestatar 
     */
    public function getPrestatar()
    {
        return $this->prestatar;
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
}