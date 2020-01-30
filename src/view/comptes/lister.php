<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">GESTION DES COMPTES</h1>
     
       <!-- DataTales Example -->
       <div class="card shadow mb-4">
         <div id="message">
           
         </div>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
                <a  href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary">
                  <i class="fas fa-plus"></i>
                  Nouveau
                </a>
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th>Numero</th>
                      <th>Solde</th>
                      <th>Etat</th>
                      <th>options</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $num=1;foreach($data as $key=>$value) : ?>
                    <tr>
                      <td><?php echo $num++; ?></td>
                      <td><?php echo $value->getNumero() ?></td>
                      <td><?php echo $value->getSolde() ?></td>
                      <td>
                          <?php 
                          if($value->getEtat()==1):
                            echo "<a href='' class='text-success'>Activé</a>"; 
                          else:
                            echo "<a href='' class='text-danger'>Désactivé</a>"; 
                          endif;
                          ?>
                      </td>
                      <td>
                          <a href="<?php echo $base_url."Compte/delete/".$value->getId() ?>" class="btn btn-danger" onclick="return confirm('Etes-vous sûre de vouloir supprimer la région?')"><span class="fas fa-trash"></span></a>
                          <a href="<?php echo $base_url."Compte/edit/".$value->getId() ?>" class="btn btn-warning"><span class="fas fa-edit"></span></a>
                          <a href="" id="<?php echo $value->getId() ?>" class="btn btn-info view_compte" data-toggle="modal" data-target="#dataModal"><span class="fas fa-eye"></span></a>
                          <a href="" id="<?php echo $base_url."Compte/addCompteClient/".$value->getId() ?>" class="btn btn-success"><span class="fas fa-plus"></span></a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <input type="text" class="form-control" placeholder="Entrez le nom" id="nom" name="nom">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Entrez le prénom" id="prenom" name="prenom">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Entrez le téléphone" id="telephone" name="telephone">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email" id="email" name="email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Adresse" id="adresse" name="adresse">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Numéro" id="numero" name="numero">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Solde initial" id="solde" name="solde">
                </div>
                <div class="form-group">
                  <select id="etat" class="form-control" name="etat">
                  <option value="">--- Selectionner l'état ---</option>  
                      <option value="1">Activé</option>
                      <option value="0">Désactivé</option>
                  </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="insert">Add</button>
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
          <h5 class="modal-title" id="exampleModalLabel">Détails du compte</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="text-danger">×</span>
          </button>
        </div>
			<div class="modal-body" id="compte_details"></div>
		</div>
	</div>
</div>
 