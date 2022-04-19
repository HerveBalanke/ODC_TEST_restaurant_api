<?php
    header("Content-Type:application/json");
    include("con.php");
    if (isset($_GET['mid'])){
        $mid=  $_GET['mid'];
        $out = $conn->query("SELECT * FROM menu WHERE mid = '$mid'");
        $out->fetch();
        echo (json_encode($out));
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }

?>