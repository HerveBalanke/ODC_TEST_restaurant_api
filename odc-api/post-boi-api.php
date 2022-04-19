<?php
    include("con.php");
    if (isset($_POST['libelle'],$_POST['prix'],$_POST['cat'])){
        $libelle =  $_POST['libelle'];
        $prix = $_POST['prix'];
        $cat = $_POST['cat'];

        $in = $conn->prepare("INSERT INTO boisson(libelle, prix, cat) values(?,?,?)");
        $in->execute(array($libelle ,$prix, $cat));
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }

?>