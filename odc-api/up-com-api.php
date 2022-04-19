<?php
    include("con.php");
    if (isset($_POST['cid'],$_POST['jl'],$_POST['hl'],$_POST['lieu'],$_POST['ctel'])){
        $jl =  $_POST['jl'];
        $hl = $_POST['hl'];
        $lieu = $_POST['lieu'];
        $ctel = $_POST['ctel'];

        $up = $conn->query("UPDATE commande SET jl='$jl', hl='$hl', lieu='$lieu', ctel='$ctel' WHERE cid='$cid'");
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }


?>