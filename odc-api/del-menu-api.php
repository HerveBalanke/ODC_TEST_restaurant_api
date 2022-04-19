<?php
    include("con.php");
    if (isset($_POST['mid'])){
        $mid =  $_POST['mid'];
        $del = $conn->query("DELETE FROM menu WHERE mid='$mid'");
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }


?>