<?php
namespace src\model;
use libs\system\Model;
class DepartementDb extends Model
{
    public function findAll()
    {
        return $this->entityManager
                    ->createQuery("SELECT r FROM departement r")
                    ->getResult(); 
    }
    public function add($nomD,$idRegion)
    {
        $departement = new \Departement();
        $regionDB = new \src\model\RegionDb();

        $region = $regionDB->findById($idRegion);
        $departement->setNomD($nomD);
        $departement->setRegion($region);
        $this->entityManager->persist($departement);
        $this->entityManager->flush();
        return  $departement->getIdD();
    }
    public function findById($idRegion)
    {
        return $this->entityManager
                    ->createQuery("SELECT d FROM departement d WHERE region_id=$idRegion")
                    ->getResult(); 
    }
}