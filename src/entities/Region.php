<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
* @ORM\Entity()
* @ORM\Table(name="region")
**/
class Region
{
    /**
    * @ORM\Id()
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $idR;
    /**
    * @ORM\Column(type="string")
    */
    private $nomR;
    
     /**
     * One region has many departement. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Departement", mappedBy="region")
     */
    private $departements;
    

    public function __construct()
    {
        $this->departements = new ArrayCollection();
    }
    public function getIdR()
    {
        return $this->idR;
    }
    public function getNomR()
    {
        return $this->nomR;
    }
    
    public function getDepartements()
    {
        return $this->departements;
    }

    public function setId($idR)
    {
        $this->idR = $idR;
    }
    public function setNomR($nomR)
    {
        $this->nomR = $nomR;
    }
   
    public function setDepartements($departements)
    {
        $this->departements = $departements;
    }
    
    public function toString()
    {
        return "IdR : ".$this->idR." - NomR : ".$this->nomR;
    }
}