<?php
    include("con.php");
    if (isset($_POST['pid'], $_POST['cid'])){
        $pid =  $_POST['pid'];
        $cid =  $_POST['cid'];

        $in = $conn->prepare("INSERT INTO plat_com(plat, com) values(?,?)");
        $in->execute(array($pid, $cid));
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }

?>