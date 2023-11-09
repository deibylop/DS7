<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laboratorio 18</title>
</head>

<body>
    <h1>Registro de nuevo usuario</h1>

    <form action="lab181.php" method="post">
        <input type="text" required name="nombre" placeholder="Nombre">
        <input type="text" required name="apellido" placeholder="Apellido">
        <input type="email" required name="email" placeholder="Email" 
        pattern="/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/">
        <input type="password" required name="contrasena" placeholder="Contraseña" 
        pattern="/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/">
        <input type="password" required name="repetir_contrasena" placeholder="Repetir contraseña"
        pattern="/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/">
        <input type="text" required name="ip" placeholder="ip" value=<?php echo $_SERVER['REMOTE_ADDR']; ?> 
        pattern ="/^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])">

        <input type="submit" value="Registrar usuario">
    </form>

    <?php

    if (array_key_exists('nombre',$_POST) && array_key_exists('apellido',$_POST) && array_key_exists('email',$_POST) && array_key_exists('contrasena',$_POST)  && array_key_exists('repetir_contrasena',$_POST)) {
        $email = $_POST['email'];
        $password = $_POST['contrasena'];
        $ip = $_POST['ip'];
        if (verificar_email($email) || verificar_password_strenght($password) || verificar_ip($ip)) {
            echo 'Usuario registrado exitosament';
        } else
            echo "Datos incorrectos / invalidos";
    }


    function verificar_email($email)
    {
        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
            return true;
        }
        return false;
    }

    function verificar_password_strenght($password)
    {
        if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password)) echo "Su password es seguro.";
        else echo "Su password no es seguro.";
    }

    function verificar_ip($ip)
    {
        return preg_match("/^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])" . "(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$/", $ip);
    }
