<?php
    include("con.php");
    if (isset($_POST['pmid'])){
        $pmid =  $_POST['pmid'];
        $del = $conn->query("DELETE FROM plat_menu WHERE pmid='$pmid'");
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }


?>