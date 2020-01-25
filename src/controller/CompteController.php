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
        $header = $this->view->load("assets/header");
        $side = $this->view->load("assets/sideBar");
        $top = $this->view->load("assets/topBar");
        $reg = $this->view->load("comptes/lister");
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
        $nomD = $_POST["nomD"];
        $region_id = $_POST["region_id"];
        $departement = new CompteDb();
        $ok = $departement->add($nomD,$region_id);
        $data="";
        if($ok != 0){
            $data = "Ajout réussie avec succès";
        }else{
            $data = "Erreur d'ajout";
        }
    }
    public function getAll()
    {
        $departement = new CompteDb();
        $departements = $departement->findAll();
        return $this->view->load("departements/getAll",$departements);
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


    public function selectionRegion($connect)
	{
		$output = '';
        $region = new RegionDb();
        $result = $region->findAll();
		while($row = mysqli_fetch_array($result))
		{
			$output .= '<option value="'.$row["idR"].'">'.$row["nomR"].'</option>';
		}
		return $output;
	}


    public function selectionDepartement($connect)
    {
        $output = '';
        $departement = new DepartementDb();
        $result = $departement->findAll();
        while($row = mysqli_fetch_array($result))
        {
            $output .='<div class="col-md-3">';
            $output .= '<div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["nomD"].'';
            $output .= '</div>';
            $output .= '</div>';
        }
        return $output;
    }

    public function listerDepartement($idRegion)
    {
        $output = '';
        $departement = new DepartementDb();
        $result = $departement->findById($idRegion);
        $output ='<option value="">---Sélectionner le département ---</option>';
		while($row = mysqli_fetch_array($result))
		{
			$output .= '<option value="'.$row["idD"].'">'.$row["nomD"].'</option>';
		}
		echo json_encode($output);
    }
    
}

?>
