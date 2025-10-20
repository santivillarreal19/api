<?php

function RegistrarUsuario($conn,$nombre,$apellido,$username,$pass)
{
    $sql = "INSERT INTO usuarios(nombre,apellido,username,pass) VALUES (?,?,?,?)";
    $stmt = mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"ssss",$nombre,$apellido,$username,$pass);
    
    if (mysqli_stmt_execute($stmt)) {
        return true;
    }

}
?>