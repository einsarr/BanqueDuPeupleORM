<?php
//namespace src\controller;
use libs\system\Controller;
use src\model\Region;
class RegionController extends Controller
{
    public function add()
    {
        return $this->view->load("roles/add");
    }
    public function getAll()
    {
        /*$role_dao = new RolesDb();
        $roles =$role_dao->findAll() ;//array("ROLE_ADMIN","ROLE_USER");
        return $this->view->*oad("roles/getAll",$roles);*/
    }
    public function delete($id)
    {
        echo $id;
    }
}