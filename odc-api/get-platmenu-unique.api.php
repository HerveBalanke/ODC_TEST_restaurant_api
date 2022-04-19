<?php
    header("Content-Type:application/json");
    include("con.php");
    if (isset($_GET['pmid'])){
        $pmid=  $_GET['pmid'];
        $out = $conn->query("SELECT * FROM plat_menu WHERE pmid = '$pmid'");
        $out->fetch();
        echo (json_encode($out));
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }

?>