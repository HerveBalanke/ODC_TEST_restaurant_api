<?php
    include("con.php");
    if (isset($_POST['pcid'],$_POST['pid'], $_POST['cid'])){
        $pcid =  $_POST['pcid'];
        $pid =  $_POST['pid'];
        $cid =  $_POST['cid'];

        $up = $conn->query("UPDATE plat_com SET plat='$pid', com='$cid' WHERE pcid='$pcid'");
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }


?>