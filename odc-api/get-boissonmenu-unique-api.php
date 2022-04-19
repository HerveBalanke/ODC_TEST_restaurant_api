<?php
    header("Content-Type:application/json");
    include("con.php");
    if (isset($_GET['bmid'])){
        $bmid=  $_GET['bmid'];
        $out = $conn->query("SELECT * FROM boi_menu WHERE bmid = '$bmid'");
        $out->fetch();
        echo (json_encode($out));
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }

?>