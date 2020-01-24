<?php
namespace src\controller;
use libs\system\Controller;
use src\model\CompteDB;

class CompteController extends Controller
{
    public function add()
    {
        return $this->view->load("roles/add");
    }
    public function getAll()
    {
        /*$cpt = new CompteDb();
        $compte = $cpt->findAll();
        return $this->view->load("comptes/listerCompte",$compte);
        */
        $compte = new CompteDb();
        $comptes =$compte->findAll() ;//array("ROLE_ADMIN","ROLE_USER");
        return $this->view->load("comptes/getAll",$comptes);
    }
    public function delete($id)
    {
        echo $id;
    }
}