<?php
    header("Content-Type:application/json");
    include("con.php");
        $out = $conn->query("SELECT * FROM plat_menu");
        $out->fetchAll();
        echo (json_encode($out));

?>