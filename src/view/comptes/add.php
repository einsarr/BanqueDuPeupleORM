<div class="container-fluid">

<div class="col-md-6">
    <h1 class="h3 mb-4 text-gray-800">GESTION DES DEPARTEMENTS</h1>
     <div id="message" class="text-success"></div>
      <form method="post">
        <div class="form">
            <div class="form-group">
              <label for="nomD">Nom du département:</label>
              <input type="text" class="form-control" placeholder="Entrez le nom du département" id="nomD" name="nomD">
            </div>
            <div class="form-group">
              <label for="region_id">Région</label>
              <select id="region_id" class="form-control" name="region_id">
              <option value="">--- Selectionner la région ---</option>  
              <?php foreach($data as $key=>$value): ?>
                  <option value="<?php echo $value->getIdR() ?>"><?php echo $value->getNomR() ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="insertD">Valider</button>
              <button type="reset" class="btn btn-danger">Annuler</button>
            </div>
          </div>
      </form>
  </div><br>

       <!-- DataTales Example -->
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Liste des départements</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th>identifiant départements</th>
                      <th>Nom départements</th>
                      <th>Nom région</th>
                      <th>options</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>
                          <a href="" class="btn btn-danger" onclick="return confirm('Etes-vous sûre de vouloir supprimer la région?')"><span class="fas fa-trash"></span></a>
                          <a href="" class="btn btn-warning"><span class="fas fa-edit"></span></a>
                          <a href="" class="btn btn-info"><span class="fas fa-eye"></span></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Donna Snider</td>
                      <td>Donna Snider</td>
                      <td>27</td>
                      <td>2011/01/25</td>
                      <td>
                          <a href="" class="btn btn-danger" onclick="return confirm('Etes-vous sûre de vouloir supprimer la région?')"><span class="fas fa-trash"></span></a>
                          <a href="" class="btn btn-warning"><span class="fas fa-edit"></span></a>
                          <a href="" class="btn btn-info"><span class="fas fa-eye"></span></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
</div>
