<?php
    include("con.php");
    if (isset($_POST['bid'], $_POST['libelle'],$_POST['prix'],$_POST['cat'])){
        $bid =  $_POST['bid'];
        $libelle =  $_POST['libelle'];
        $prix = $_POST['prix'];
        $cat = $_POST['cat'];

        $up = $conn->query("UPDATE boisson SET libelle='$libelle', prix='$prix', cat='$cat' WHERE bid='$bid'");
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }


?>