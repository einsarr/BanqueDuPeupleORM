<?php
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity()
* @ORM\Table(name="compte")
*/
class Compte
{
    /**
    * @ORM\Id()
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
    * @ORM\Column(type="string")
    */
    private $numero;
    /**
    * @ORM\Column(type="string")
    */
    private $solde;
    /**
    * @ORM\Column(type="string")
    */
    private $etat;
    /**
     * Many compte have one client. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="comptes")
     * @ORM\JoinColumn(name="idCl", referencedColumnName="id")
     */
    private $client;

    public function __construct()
    {
        
    }
    public function getId()
    {
        return $this->id;
    }
    
    public function setIdD($id)
    {
        $this->id = $id;
    }

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    public function getSolde()
    {
        return $this->solde;
    }
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }
    public function getEtat()
    {
        return $this->etat;
    }
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;
    }
    
}