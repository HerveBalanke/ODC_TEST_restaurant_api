<?php
    $user = "root";
    $server = "localhost";
    $pass = "";
    $db = "restaurant";

    try{
    $conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
    }Catch(PDOException $e){
        echo "Error:". $e->getMessage();
    } 

?>