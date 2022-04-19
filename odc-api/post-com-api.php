<?php
    include("con.php");
    if (isset($_POST['jl'],$_POST['hl'],$_POST['lieu'],$_POST['ctel'])){
        $jl =  $_POST['jl'];
        $hl = $_POST['hl'];
        $lieu = $_POST['lieu'];
        $ctel = $_POST['ctel'];

        $in = $conn->prepare("INSERT INTO commande (jl, hl, lieu, ctel) values(?,?,?,?)");
        $in->execute(array($jl ,$hl, $lieu, $ctel ));
    }else{
        echo "Renseignez tous les parametres de l'API SVP";
    }

?>