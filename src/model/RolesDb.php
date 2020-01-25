<?php
namespace src\model;
use libs\system\Model;
class RolesDb extends Model
{
    public function findAll()
    {
        return $this->entityManager
                    ->createQuery("SELECT r FROM Roles r")
                    ->getResult(); 
    }
    public function add($nom)
    {
        $role = new \Roles();
        $role->setNom($nom);
        $this->entityManager->persist($role);
        $this->entityManager->flush();
        return  $role->getId();
    }
}