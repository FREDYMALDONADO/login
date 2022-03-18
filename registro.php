<?php

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root', '', 'login');
    $result = $conn->query("select * from tbl_usuario where username='$username'");

    $tbl_usuario = $result->fetch_all()[0];
   
    if (!isset($usuario))
        echo "el usuario no existe";
    else {
        if ($usuario[2] === $password)
            echo "bienvenido";
        else
            echo "Email o contrasenia incorrectos";
    }


    $conn->close();
   
}
