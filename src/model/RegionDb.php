<?php
namespace src\model;
use libs\system\Model;
class RegionDb extends Model
{
    public function findAll()
    {
        return $this->entityManager
                    ->createQuery("SELECT r FROM Roles r")
                    ->getResult();
        //array("ADMIN_COMPTA","ROLE_FINANCE");
    }
   
}