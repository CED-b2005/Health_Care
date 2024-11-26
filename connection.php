<?php

    $database= new mysqli("localhost","root","Thuy@2005","edoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>