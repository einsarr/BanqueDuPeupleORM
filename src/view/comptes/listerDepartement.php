<?php

    foreach($data as $key=>$value)
    {
        echo "N° : ".$value->getIdD()." - role : ".$value->getNomD()." - Région : ".$value->getRegion()->getNomR()."</br>";
    }
?>