<?php
    include("con.php");
    if (isset($_POST['mid'], $_POST['mdate'])){
        $mid =  $_POST['mid'];
        $mdate =  $_POST['mdate'];

        $up = $conn->query("UPDATE menu SET mdate='$mdate' WHERE mid='$mid'");
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }


?>