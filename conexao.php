<?php
    $hostname = "localhost";
    $banco ="pato_donald";
    $usuario = "root";
    $senha = "";


    $mysqli = new mysqli ($hostname, $usuario, $senha, $banco);

    if($mysqli->connect_errno){
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
    }

?>