<?php
    include("con.php");
    if (isset($_POST['pcid'])){
        $pcid =  $_POST['pcid'];
        $del = $conn->query("DELETE FROM plat_com WHERE pcid='$pcid'");
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }


?>