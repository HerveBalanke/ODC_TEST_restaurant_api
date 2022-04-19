<?php
    include("con.php");
    if (isset($_POST['cid'])){
        $cid =  $_POST['cid'];
        $del = $conn->query("DELETE FROM commande WHERE cid='$cid'");
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }


?>