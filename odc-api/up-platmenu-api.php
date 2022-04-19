<?php
    include("con.php");
    if (isset($_POST['pmid'],$_POST['pid'], $_POST['mid'])){
        $pmid =  $_POST['pmid'];
        $pid =  $_POST['pid'];
        $mid =  $_POST['mid'];

        $up = $conn->query("UPDATE plat_menu SET plat='$pid', menu='$mid' WHERE pmid='$pmid'");
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }


?>