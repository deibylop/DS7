<?php
session_start();

if (isset($_SESSION['visitas'])) {
    $visitas = $_SESSION['visitas'] + 1;
    $_SESSION['visitas'] = $visitas;
    $mensaje = 'Gracias por visitarnos por ' . $visitas . ' vez.';
} else {
    $_SESSION['visitas'] = 1;
    $mensaje = 'Bienvenido a nuestro sitio web.';
}

?>
<HTML XMLNS="http://www.w3.org/1999/xhtml" xml:lang="es" LANG="es">

<HEAD>
    <TITLE>Laboratorio 13</TITLE>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>

<BODY>
    <H1>Contador de visitas con Sesiones</H1>
    <P>
        <?php echo $mensaje; ?>
    </P>
</BODY>

</HTML>