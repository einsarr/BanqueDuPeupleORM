<div class="col-md-4">
    <div class="panel panel-primary">
        <div class="panel-heading">Création de compte</div>
        <div class="panel-body">
            <form method="post" action="ClientController/saveAdd">
                <div class="form-group has-feedback">
                    <input type="text" name="id_client" value="<?php echo $data->getId()?>">
                    <input type="text" class="form-control" name="numero" placeholder="Nom de numéro">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="solde" placeholder="Solde">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                
                <div class="form-group">
                    <select name="etat" id="etat" class="form-control">
                        <option value="">Selectionner l'état du compte</option>
                        <option value="1">Actif</option>
                        <option value="0">Inactif</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit"  class="btn btn-primary" value="Enrégistrer">
                </div>
            </form>
        </div>
    </div>
</div>