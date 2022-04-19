<?php
    include("con.php");
    if (isset($_POST['bid'], $_POST['mid'])){
        $bid =  $_POST['bid'];
        $mid =  $_POST['mid'];

        $in = $conn->prepare("INSERT INTO boi_menu(boisson, menu) values(?,?)");
        $in->execute(array($bid, $mid));
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }

?>