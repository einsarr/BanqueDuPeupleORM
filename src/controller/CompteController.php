<?php
use libs\system\Controller;
use src\model\CompteDb;
use src\model\ClientDb;

class CompteController extends Controller
{
    public function login()
    {
        return $this->view->load("roles/login");
    }
    public function index()
    {
        $compte = new CompteDb();
        $comptes = $compte->findAll();
        $header = $this->view->load("assets/header");
        $side = $this->view->load("assets/sideBar");
        $top = $this->view->load("assets/topBar");
        $reg = $this->view->load("comptes/lister",$comptes);
        $footer = $this->view->load("assets/footer");
        $tab = array($header,$side,$top,$reg,$footer);
        return $tab;
    }
    
    public function add()
    {
        $compte = new CompteDb();
        $comptes = $compte->findAll();
        $header = $this->view->load("assets/header");
        $side = $this->view->load("assets/sideBar");
        $top = $this->view->load("assets/topBar");
        $reg = $this->view->load("comptes/add",$comptes);
        $footer = $this->view->load("assets/footer");
        $tab = array($header,$side,$top,$reg,$footer);
        return $tab;
    }
    public function save()
    {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $telephone = $_POST["telephone"];
        $email = $_POST["email"];
        $adresse = $_POST["adresse"];
        $numero = $_POST["numero"];
        $solde = $_POST["solde"];
        $etat = $_POST["etat"];
        $compte = new CompteDb();
        $compte->add($nom,$prenom,$telephone,$email,$adresse,$numero,$solde,$etat);
        $message = 'Ajout réussie avec succès';
        echo json_encode($message);
        
    }
    public function saveAdd($idClient)
    {
        $numero = $_POST["numero"];
        $solde = $_POST["solde"];
        $etat = $_POST["etat"];
        $compte = new CompteDb();
        $compte->addCompte($numero,$solde,$etat,$idClient);
        $message = 'Ajout réussie avec succès';
        echo json_encode($message);
    }
    public function getAll()
    {
        $departement = new CompteDb();
        $departements = $departement->findAll();
        return $this->view->load("departements/getAll",$departements);
    }
    public function select($idCompte){
        $compte = new CompteDb();
        $cpt = $compte->findById($idCompte);
        $output='';
        $output .='
				<div class="table table-responsive">
					<table class="table table-bordered">';
        foreach($cpt as $key=>$value)
        {
            $output .='
				<tr>
					<td width="30%"><label>Numéro</label></td>
					<td width="70%">'.$value->getNumero().'</td>
				</tr>
				<tr>
					<td width="30%"><label>Solde</label></td>
					<td width="70%">'.$value->getSolde().'</td>
				</tr>
				<tr>
					<td width="30%"><label>Etat</label></td>
                    <td width="70%">'
                        .$value->getEtat().
                    '</td>
				</tr>
			';
        }
        $output .="</table></div>";
		echo $output; 
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
