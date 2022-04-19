<?php
    header("Content-Type:application/json");
    include("con.php");
    if (isset($_GET['pid'])){
        $pid=  $_GET['pid'];
        $out = $conn->query("SELECT * FROM plat WHERE pid = '$pid'");
        $out->fetch();
        echo (json_encode($out));
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }

?>