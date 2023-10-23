<?php
    session_start();
?>
<html lang="es">
<head>
    <title>Desconectar</title>
    <link rel="stylesheet" type="text/css" href="./src/css/estilo.css">
</head>
<body>
<?php
    if(isset($_SESSION["usuario_valido"])){
        session_destroy();
        print("<BR><BR><P ALIGN='CENTER'>Conexion finalizada</P>\n");
        print ("<P ALIGN='CENTER'> [ <A HREF='login.php'>Conectar</A>]");
    }else{
        print ("<BR><BR>\n");
        print ("<P ALIGN='CENTER'>No existe una conexion activa</P>\n");
        print ("<P ALIGN='CENTER'>[ <A HREF='login.php'>Conectar</A>]</P>\n");
    }
?>
</body>
</html>