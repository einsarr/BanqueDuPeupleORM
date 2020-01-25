<?php
namespace src\model;
use libs\system\Model;
class ClientDb extends Model
{
    public function findAll()
    {
        return $this->entityManager
                    ->createQuery("SELECT r FROM region r")
                    ->getResult(); 
    }
    public function findById($idR)
    {
        return $this->entityManager
                    ->createQuery("SELECT r FROM region r WHERE r.idR=$idR")
                    ->getResult(); 
    }
    public function add($nomR)
    {
        $region = new \Client();
        /*$region->setNomR($nomR);
        $this->entityManager->persist($region);
        $this->entityManager->flush();
        return  $region->getIdR();*/
        return "";
    }
}