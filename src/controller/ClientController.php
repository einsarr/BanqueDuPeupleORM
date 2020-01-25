<?php
use libs\system\Controller;
use src\model\ClientDb;

class ClientController extends Controller
{
    public function login()
    {
        return $this->view->load("login/login");
    }
    public function index()
    {
        $client = new ClientDb();
        $clients = $client->findAll();
        $header = $this->view->load("assets/header");
        $side = $this->view->load("assets/sideBar");
        $top = $this->view->load("assets/topBar");
        $reg = $this->view->load("clients/lister");
        $footer = $this->view->load("assets/footer");
        $tab = array($header,$side,$top,$reg,$footer,$clients);
        return $tab;
    }
    public function add()
    {
        /*$region = new ClientDb();
        $regions = $region->findAll();
        */
        $header = $this->view->load("assets/header");
        $side = $this->view->load("assets/sideBar");
        $top = $this->view->load("assets/topBar");
        $reg = $this->view->load("clients/add");
        $footer = $this->view->load("assets/footer");
        $tab = array($header,$side,$top,$reg,$footer);
        return $tab;
    }
    public function save()
    {
        $nomR = $_POST["nomR"];
        $client = new ClientDb();
        $data="";
        if($client->add($nomR)){
            echo "Ajout réussie avec succès";
        }else{
           echo "Erreur d'ajout";
        }
    }
    public function getAll()
    {
        $client = new ClientDb();
        $clients = $client->findAll();
        return $this->view->load("clients/add",$clients);
    }
    public function delete($id)
    {
        echo $id; 
    }
    public function edit($id)
    {
        echo $id; 
    }
    public function update()
    {
        $nom = $_POST["nom"];
        
        return $this->view->load("roles/getAll");
    }
}


?>