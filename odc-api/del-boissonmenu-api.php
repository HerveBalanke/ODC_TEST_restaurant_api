<?php
    include("con.php");
    if (isset($_POST['bmid'])){
        $bmid =  $_POST['pmid'];
        $del = $conn->query("DELETE FROM boi_menu WHERE bmid='$bmid'");
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }


?>