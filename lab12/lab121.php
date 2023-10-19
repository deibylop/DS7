<?php
session_start();
?>
<HTML LANG="es">

<HEAD>
    <TITLE>Laboratorio 12</TITLE>
    <LINK REL="stylesheet" TYPE="text/css" HREF="./estilo.css">
</HEAD>

<BODY>
    <H1>Manejo de sesiones</H1>
    <H2>Paso 1: se crea la variable de sesion y se almacena</H2>
    <?php
    $var = "Ejemplo Sesiones";
    $_SESSION['var'] = $var;
    print("<P>Valor de la variable de sesion: $var</P>\n");
    ?>
    <A HREF="lab122.php">Paso 2</A>
</BODY>

</HTML>