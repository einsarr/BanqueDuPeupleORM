<?php
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity()
* @ORM\Table(name="departement")
*/
class Departement
{
    /**
    * @ORM\Id()
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $idD;
    /**
    * @ORM\Column(type="string")
    */
    private $nomD;
    /**
     * Many depratements have one region. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Region", inversedBy="departements")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="idR")
     */
    private $region;

    public function __construct()
    {
        
    }
    public function getIdD()
    {
        return $this->idD;
    }
    
    public function setIdD($idD)
    {
        $this->idD = $idD;
    }

    public function getNomD()
    {
        return $this->nomD;
    }

    public function setNomD($nomD)
    {
        $this->nomD = $nomD;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion($region)
    {
        $this->region = $region;
    }
    
}