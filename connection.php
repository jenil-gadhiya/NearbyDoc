

<?php

    $database= new mysqli("localhost","root","","hacknuthon");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

echo "Connected successfully";
?>