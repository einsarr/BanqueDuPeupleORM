<?php
$base_url = "http://localhost:8080/mesprojets/orm/Roles";
foreach($data as $key=>$value)
{
    echo "N° : ".$value->getId()." ".$value->getNom()."<a href='http://localhost:8080/mesprojets/orm/Roles/edit/".$value->getId()."'>Edit</a> | <a href='http://localhost:8080/mesprojets/orm/Roles/delete/".$value->getId()."'>Supprimer</a><br> ";
}