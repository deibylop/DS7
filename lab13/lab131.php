<?php
session_start();

if (isset($_COOKIE['contador'])) {
    $contador = $_COOKIE['contador'] + 1;
    setcookie('contador', $contador, time() + 365 * 24 * 60 * 60);
    $mensaje = 'Gracias por visitarnos. Número de visitas: ' . $contador;
} else {
    setcookie('contador', 1, time() + 365 * 24 * 60 * 60);
    $mensaje = 'Bienvenido a nuestro sitio web';
}

?>
<HTML XMLNS="http://www.w3.org/1999/xhtml" xml:lang="es" LANG="es">

<HEAD>
    <TITLE>Laboratorio 13</TITLE>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>

<BODY>
    <H1>Contador de visitas con Cookies</H1>
    <P>
        <?php echo $mensaje; ?>
    </P>
</BODY>

</HTML>