<?php
    include("con.php");
    if (isset($_POST['bid'])){
        $bid =  $_POST['bid'];
        $del = $conn->query("DELETE FROM boisson WHERE bid='$bid'");
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }


?>