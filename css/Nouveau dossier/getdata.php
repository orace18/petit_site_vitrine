<?php

    header('Access-Control-Allow-Origin: *');

    $link = mysqli_connect("localhost","root","","hlabdatabase");
    if(mysqli_connect_error()){
        die('Nous avons une Erreur');
    }

    $query = "SELECT * FROM signal_button_poussoir";

    $rows = array();

    if($result = mysqli_query($link,$query)){
        while($r = mysqli_fetch_assoc($result)){
            $rows[] = $r;
        }
        print json_encode($rows);
    }
    $link -> close();
?>
