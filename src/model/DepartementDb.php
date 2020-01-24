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
        //array("ADMIN_COMPTA","ROLE_FINANCE");
    }
    public function add()
    {
        return $this->entityManager
                    ->createQuery("INSERT INTO r VALUES()")
                    ->getResult();
        //array("ADMIN_COMPTA","ROLE_FINANCE");
    }
   
}