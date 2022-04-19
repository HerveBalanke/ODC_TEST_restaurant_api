<?php
    include("con.php");
    if (isset($_POST['bmid'],$_POST['bid'], $_POST['mid'])){
        $bmid =  $_POST['bmid'];
        $bid =  $_POST['bid'];
        $mid =  $_POST['mid'];

        $up = $conn->query("UPDATE boi_menu SET boisson='$bid', menu='$mid' WHERE bmid='$bmid'");
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }


?>