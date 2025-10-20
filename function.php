<?php

header('Content-Type: Application/json');
header('Acces-Control-Allow-Origin: *');

require_once('conn.php');

    $sql = "SELECT * FROM usuarios";
    $res = mysqli_query($conn,$sql);

    $usuarios = array();

    

    while ($row = mysqli_fetch_assoc($res)) {
        $usuarios[] = $row;
    }


    echo json_encode($usuarios);

?>