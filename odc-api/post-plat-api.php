<?php
    include("con.php");
    if (isset($_POST['prix'],$_POST['livraison'],$_POST['uid'])){
        $prix =  $_POST['prix'];
        $livraison = $_POST['livraison'];
        $uid = $_POST['uid'];

        $in = $conn->prepare("INSERT INTO plat(prix, livraison, uid) values(?,?,?)");
        $in->execute(array($prix ,$livraison, $uid ));
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }

?>