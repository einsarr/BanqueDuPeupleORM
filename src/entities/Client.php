<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
* @ORM\Entity()
* @ORM\Table(name="client")
*/
class User
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
    private $nom;
    /**
    * @ORM\Column(type="string")
    */
    private $prenom;
    /**
    * @ORM\Column(type="string")
    */
    private $telephone;
    /**
    * @ORM\Column(type="string")
    */
    private $email;
    /**
    * @ORM\Column(type="string")
    */
    private $adresse;
    /**
     * One Client has many comptes. This is the inverse side.
     * @ORM\OneToMany(targetEntity="compte", mappedBy="client")
     */
    private $comptes;

    public function __construct()
    {
        $this->comptes = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setIdR($id)
    {
        $this->id = $id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getTelephone()
    {
        return $this->telephone;
    }
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getComptes()
    {
        return $this->comptes;
    }
    public function setComptes($comptes)
    {
        $this->comptes = $comptes;
    }
}