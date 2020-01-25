<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
* @ORM\Entity()
* @ORM\Table(name="user")
**/
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
    private $login;
    /**
    * @ORM\Column(type="string")
    */
    private $password;
    
    /**
     * Many Users have Many Roles.
     * @ORM\ManyToMany(targetEntity="Roles", inversedBy="users")
     * @ORM\JoinTable(name="users_roles")
     */
    private $roles;

    public function __construct()
    {
        $this->roles = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
    
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getRoles()
    {
        return $this->roles;
    }
    
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }
    
}