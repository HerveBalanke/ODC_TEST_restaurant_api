<?php
    header("Content-Type:application/json");
    include("con.php");
    if (isset($_GET['bid'])){
        $bid=  $_GET['bid'];
        $out = $conn->query("SELECT * FROM boisson WHERE bid = '$bid'");
        $out->fetch();
        echo (json_encode($out));
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }

?>