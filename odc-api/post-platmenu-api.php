<?php
    include("con.php");
    if (isset($_POST['pid'], $_POST['mid'])){
        $pid =  $_POST['pid'];
        $mid =  $_POST['mid'];

        $in = $conn->prepare("INSERT INTO plat_menu(plat, menu) values(?,?)");
        $in->execute(array($pid, $mid));
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }

?>