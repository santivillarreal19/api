<?php

header('Content-Type: application/json');
require_once('conn.php');
require_once('funciones.php');

$data = json_decode(file_get_contents("php://input"), true);

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    
    if ($data) {
        $nombre = $data['nombre']??'';
        $apellido = $data['apellido']??'';
        $username = $data['username']??'';
        $pass = $data['pass']??'';
    }

        if (!empty($nombre) && !empty($apellido) && !empty($username) && !empty($pass)) {
        
        if (RegistrarUsuario($conn,$nombre,$apellido,$username,$pass)) {
            echo json_encode(["mensaje" => "Usuario Insertado"]);
        }
        else {
            echo json_encode(["mensaje" => "Usuario no Insertado"]);
        }

    }else {
    echo "no se recibio respuesta";
        }
}
else {
    echo "no se recibio respuesta";
}



?>