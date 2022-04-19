<?php
    header("Content-Type:application/json");
    include("con.php");
    if (isset($_GET['pcid'])){
        $pcid=  $_GET['pcid'];
        $out = $conn->query("SELECT * FROM plat_com WHERE pcid = '$pcid'");
        $out->fetch();
        echo (json_encode($out));
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }

?>