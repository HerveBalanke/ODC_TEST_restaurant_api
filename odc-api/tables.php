<?php
    include("con.php");

    $c = $conn->query("CREATE TABLE IF NOT EXISTS categorie(
                cat_id int(11) primary key not null auto_increment,
                descp varchar(30) not null
    )");

    $b = $conn->query("CREATE TABLE IF NOT EXISTS boisson(
        bid int(11) primary key not null auto_increment,
        libelle varchar(30) not null,
        prix int(11) not null,
        cat int(11) not null,
        FOREIGN KEY (cat) REFERENCES categorie(cat_id)
    )");

    $m = $conn->query("CREATE TABLE IF NOT EXISTS menu(
    mid int(11) primary key not null auto_increment,
    mdate date not null
    )");

    $u = $conn->query("CREATE TABLE IF NOT EXISTS utilisateur(
        uid int(11) primary key not null auto_increment,
        uname varchar(30) not null
        )");


    $p= $conn->query("CREATE TABLE IF NOT EXISTS plat(
        pid int(11) primary key not null auto_increment,
        prix varchar(30) not null,
        livraison boolean not null,
        uid int(11) not null,
        FOREIGN KEY (uid) REFERENCES utilisateur(uid)
        )");

    $com = $conn->query("CREATE TABLE IF NOT EXISTS commande(
        cid int(11) primary key not null auto_increment,
        jl date not null,
        hl date not null,
        lieu varchar(30) not null,
        ctel varchar(30) not null
        )");

       $bm =  $conn->query("CREATE TABLE IF NOT EXISTS boi_menu(
            bmid int(11) primary key not null auto_increment,
            boisson int(11) not null,
            menu int(11) not null,
            FOREIGN KEY (boisson) REFERENCES boisson(bid),
            FOREIGN KEY (menu) REFERENCES menu(mid)
            )");
        
       $pm =  $conn->query("CREATE TABLE IF NOT EXISTS plat_menu(
            pmid int(11)primary key not null auto_increment,
            plat int(11) not null,
            menu int(11) not null,
            FOREIGN KEY (plat) REFERENCES plat(pid),
            FOREIGN KEY (menu) REFERENCES menu(mid)
            )");
        
        $pc = $conn->query("CREATE TABLE IF NOT EXISTS plat_com(
            pcid int(11)primary key not null auto_increment,
            plat int(11) not null,
            com int(11) not null,
            FOREIGN KEY (plat) REFERENCES plat(pid),
            FOREIGN KEY (com) REFERENCES commande(cid)
            )");

?>