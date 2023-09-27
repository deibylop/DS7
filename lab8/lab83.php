<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.3</title>
</head>

<body>
    <form action="lab83.php" method="post">
        <label>Ingrese un valor par</label>
        <br>
        <br>
        <input type="number" name="valorN">
        <input type="submit" name="enviar">
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        include("./class_lib.php");
        $valorN = $_POST["valorN"];
        $matrizIdentidad = new MatrizIdentidad($valorN);
        $resultado = $matrizIdentidad->validarPar();
        print_r($resultado);
    }
    ?>
</body>

</html>
