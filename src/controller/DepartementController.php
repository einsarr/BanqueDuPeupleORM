<?php
namespace src\controller;
use libs\system\Controller;
use src\model\DepartementDb;

class DepartementController extends Controller
{
    public function add()
    {
        return $this->view->load("roles/add");
    }
    public function getAll()
    {
        $dept = new DepartementDb();
        $departements = $dept->findAll();
        return $this->view->load("departements/listerDepartement",$departements);
        /*$role_dao = new RolesDb();
        $roles =$role_dao->findAll() ;//array("ROLE_ADMIN","ROLE_USER");
        return $this->view->*oad("roles/getAll",$roles);*/
    }
    public function delete($id)
    {
        echo $id;
    }
}