<?php
    include("con.php");
    if (isset($_POST['mdate'])){
        $mdate =  $_POST['mdate'];

        $in = $conn->prepare("INSERT INTO menu(mdate) values(?)");
        $in->execute(array($mdate));
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }

?>