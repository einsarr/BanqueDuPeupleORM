<?php
//$base_url = "http://localhost:8080/mesprojets/orm/";
?>
<div class="container-fluid">

<div class="col-md-6">
    <div id="message" class="text-success"></div>
    <h1 class="h3 mb-4 text-gray-800">GESTION DES REGIONS</h1>
      <form method="post">
        <div class="form">
          <div class="form-group">
            <label for="nomR">Nom de la région:</label>
            <input type="text" class="form-control" placeholder="Entrez le nom de la région" id="nomR" name="nomR">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="insert">Valider</button>
            <button type="reset" class="btn btn-danger">Annuler</button>
          </div>
        </div>
      </form>
  </div><br>

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
                      <th>identifiant région</th>
                      <th>Nom région</th>
                      <th>options</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $num=1;foreach($data as $key=>$value) : ?>
                    <tr>
                      <td><?php echo $num++; ?></td>
                      <td><?php echo $value->getIdR() ?></td>
                      <td><?php echo $value->getNomR() ?></td>
                      <td>
                          <a href="<?php echo $base_url."region/delete/".$value->getIdR() ?>" class="btn btn-danger" onclick="return confirm('Etes-vous sûre de vouloir supprimer la région?')"><span class="fas fa-trash"></span></a>
                          <a href="<?php echo $base_url."region/edit/".$value->getIdR() ?>" class="btn btn-warning"><span class="fas fa-edit"></span></a>
                          <a href="<?php echo $base_url."region/voir/".$value->getIdR() ?>" class="btn btn-info"><span class="fas fa-eye"></span></a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  

</div>


