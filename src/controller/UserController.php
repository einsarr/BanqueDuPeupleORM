<?php
//namespace src\controller;
use libs\system\Controller;
use src\model\UserDB;
class UserController extends Controller
{
    public function login()
    {
        return $this->view->load("login/login");
    }
    public function admin()
    {
        $header     =   $this->view->load("assets/header");
        $sideBar    =   $this->view->load("assets/sideBar");
        $topBar     =   $this->view->load("assets/topBar");
        $dashboard  =   $this->view->load("assets/dashboard");
        $footer     =   $this->view->load("assets/footer");
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