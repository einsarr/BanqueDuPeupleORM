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
                      <th>identifiant région</th>
                      <th>Nom région</th>
                      <th>options</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php //$num=1;foreach($data as $key=>$value) : ?>
                    <tr>
                      <td>1<?php // echo $num++; ?></td>
                      <td>EEE<?php //echo $value->getIdR() ?></td>
                      <td>TTT<?php //echo $value->getNomR() ?></td>
                      <td>
                          <a href="<?php //echo $base_url."region/delete/".$value->getIdR() ?>" class="btn btn-danger" onclick="return confirm('Etes-vous sûre de vouloir supprimer la région?')"><span class="fas fa-trash"></span></a>
                          <a href="<?php //echo $base_url."region/edit/".$value->getIdR() ?>" class="btn btn-warning"><span class="fas fa-edit"></span></a>
                          <a href="<?php //echo $base_url."region/voir/".$value->getIdR() ?>" class="btn btn-info"><span class="fas fa-eye"></span></a>
                          <a href="<?php //echo $base_url."region/voir/".$value->getIdR() ?>" class="btn btn-success"><span class="fas fa-plus"></span></a>
                      </td>
                    </tr>
                    <tr>
                      <td>2<?php // echo $num++; ?></td>
                      <td>OIEE<?php //echo $value->getIdR() ?></td>
                      <td>UDGGG<?php //echo $value->getNomR() ?></td>
                      <td>
                          <a href="<?php //echo $base_url."region/delete/".$value->getIdR() ?>" class="btn btn-danger" onclick="return confirm('Etes-vous sûre de vouloir supprimer la région?')"><span class="fas fa-trash"></span></a>
                          <a href="<?php //echo $base_url."region/edit/".$value->getIdR() ?>" class="btn btn-warning"><span class="fas fa-edit"></span></a>
                          <a href="<?php //echo $base_url."region/voir/".$value->getIdR() ?>" class="btn btn-info"><span class="fas fa-eye"></span></a>
                          <a href="<?php //echo $base_url."region/voir/".$value->getIdR() ?>" class="btn btn-success"><span class="fas fa-plus"></span></a>
                      </td>
                    </tr>
                    <?php //endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  

</div>


