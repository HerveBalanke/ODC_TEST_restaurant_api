<?php
    header("Content-Type:application/json");
    include("con.php");
        $out = $conn->query("SELECT * FROM menu");
        $out->fetchAll();
        echo (json_encode($out));

?>