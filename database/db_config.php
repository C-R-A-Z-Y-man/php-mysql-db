<?php

    $db_name = "first_year_project";
    $db_username = "root";
    $db_pass = "";
    $host_name = "localhost";

    $connec_to_db = mysqli_connect($host_name, $db_username , $db_pass, $db_name);

    if (!$connec_to_db) { 
        die("Not able to connect DB". mysqli_connect_error());
     }