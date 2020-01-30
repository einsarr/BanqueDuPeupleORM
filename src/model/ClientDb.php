<?php
namespace src\model;
use libs\system\Model;
class ClientDb extends Model
{
    public function findAll()
    {
        return $this->entityManager
                    ->createQuery("SELECT cl FROM client cl")
                    ->getResult(); 
    }
    public function findById($idC)
    {
        return $this->entityManager
                    ->createQuery("SELECT cl FROM client cl WHERE cl.id=$idC")
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