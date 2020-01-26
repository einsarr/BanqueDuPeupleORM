<?php
//$base_url = "http://localhost:8080/mesprojets/orm/";
?>
<div class="container-fluid">
       <!-- DataTales Example -->
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Liste des régions</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Téléphone</th>
                      <th>Email</th>
                      <th>Adresse</th>
                      <th>options</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $num=1;foreach($data as $key=>$value) : ?>
                    <tr>
                      <td><?php echo $num++; ?></td>
                      <td><?php echo $value->getNom() ?></td>
                      <td><?php echo $value->getPrenom() ?></td>
                      <td><?php echo $value->getTelephone() ?></td>
                      <td><?php echo $value->getEmail() ?></td>
                      <td><?php echo $value->getAdresse() ?></td>
                      <td>
                          <a href="<?php echo $base_url."Compte/delete/".$value->getId() ?>" class="btn btn-danger" onclick="return confirm('Etes-vous sûre de vouloir supprimer la région?')"><span class="fas fa-trash"></span></a>
                          <a href="<?php echo $base_url."Compte/edit/".$value->getId() ?>" class="btn btn-warning"><span class="fas fa-edit"></span></a>
                          <a href="" id=<?php echo $value->getId() ?>" class="btn btn-info view_client" data-toggle="modal" data-target="#dataModal"><span class="fas fa-eye"></span></a>
                          <a href="<?php echo $base_url."Compte/addCompte/".$value->getId() ?>" class="btn btn-success" data-toggle="modal" data-target="#myModalAddCompte"><span class="fas fa-plus"></span></a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  

</div>



<div class="modal fade" id="myModalAddCompte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter un compte</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="text-danger">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Entrez le numéro" id="numero" name="numero">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Entrez le solde" id="solde" name="solde">
                </div>
                <div class="form-group">
                  <select id="etat" class="form-control" name="etat">
                  <option value="">--- Selectionner l'état ---</option>  
                      <option value="actif">Activé</option>
                      <option value="Inactif">Désactivé</option>
                  </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="addCompte">Add</button>
                    <button type="button" class="btn btn-primary" id="btnUpdate"style="display:none;">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>



  <div id="dataModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Détails du client</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="text-danger">×</span>
          </button>
        </div>
			<div class="modal-body" id="client_details"></div>
		</div>
	</div>
</div>