<?php
    include("con.php");
    if (isset($_POST['pid'])){
        $pid =  $_POST['pid'];
        $del = $conn->query("DELETE FROM plat WHERE pid='$pid'");
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }


?>