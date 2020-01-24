<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <b><?php if(isset($data)){echo $data;}; ?></b>
            <div class="col-md-8">
                <form method="POST" action="http://localhost:8080/mesprojets/orm/Roles/save">
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enrégistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>