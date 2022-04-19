<?php
    $user = "root";
    $server = "localhost";
    $pass = "";

    try{
    $conn = new PDO("mysql:host=$server", $user, $pass);
    $conn->query("CREATE DATABASE restaurant");
    $conn = null;
    echo "DB created";
    }Catch(PDOException $e){
        echo "Error:". $e->getMessage();
    } 

?>