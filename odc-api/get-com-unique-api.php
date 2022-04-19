<?php
    header("Content-Type:application/json");
    include("con.php");
    if (isset($_GET['cid'])){
        $cid=  $_GET['cid'];
        $out = $conn->query("SELECT * FROM commande WHERE cid = '$cid'");
        $out->fetch();
        echo (json_encode($out));
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }

?>