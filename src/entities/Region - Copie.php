<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
* @ORM\Entity()
* @ORM\Table(name="region")
*/
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
     * One Region has many département. This is the inverse side.
     * @ORM\OneToMany(targetEntity="departement", mappedBy="region")
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
    public function setIdR($idR)
    {
        $this->idR = $idR;
    }
    public function getNomR()
    {
        return $this->nomR;
    }
    public function setNomR($nomR)
    {
        $this->nomR = $nomR;
    }

    public function getDepartements()
    {
        return $this->departements;
    }
    public function setDepartements($departements)
    {
        $this->departements = $departements;
    }
}