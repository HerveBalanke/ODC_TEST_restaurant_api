<?php
    include("con.php");
    if (isset($_POST['pid'], $_POST['prix'],$_POST['livraison'])){
        $pid =  $_POST['prix'];
        $prix =  $_POST['prix'];
        $livraison = $_POST['livraison'];

        $up = $conn->query("UPDATE plat SET prix='$prix', livraison='$livraison' WHERE pid='$pid'");
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }


?>