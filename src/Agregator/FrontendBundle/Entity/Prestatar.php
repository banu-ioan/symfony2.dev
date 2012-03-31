<?php
namespace Agregator\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="Agregator\FrontendBundle\Repository\PrestatarRepository")
 * @UniqueEntity("email")
 */
class Prestatar
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
     * @ORM\Column(type="string")
     */
    protected $prenume;
    
    /**
     * @ORM\Column(type="smallint")
     */
    protected $varsta;
    
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\Email()
     */
    protected $email;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Oferta", mappedBy="prestatar")
     **/
    private $oferte;
    public function __construct()
    {
        $this->oferte = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set prenume
     *
     * @param string $prenume
     */
    public function setPrenume($prenume)
    {
        $this->prenume = $prenume;
    }

    /**
     * Get prenume
     *
     * @return string 
     */
    public function getPrenume()
    {
        return $this->prenume;
    }

    /**
     * Set varsta
     *
     * @param smallint $varsta
     */
    public function setVarsta($varsta)
    {
        $this->varsta = $varsta;
    }

    /**
     * Get varsta
     *
     * @return smallint 
     */
    public function getVarsta()
    {
        return $this->varsta;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
}