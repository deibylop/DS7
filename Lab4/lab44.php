<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.4</title>
</head>
<body>
    <form action="lab44.php" method="post">
        <label>Introduzca un número par</label>
        <br><br>
        <input type="number" name="numero" required>
        <br><br>
        <input type="submit" name="enviar">
    </form>

    <?php
    session_start();

    if (!isset($_SESSION['arreglo'])) {
        $_SESSION['arreglo'] = array();
    }

    if (isset($_POST['enviar'])) {
        $numero =  $_POST["numero"];
        if ($numero == "") {
            echo "No puede enviar un valor en blanco";
        } else {
            validarPar($numero);
        }
    }

    function validarPar($numero)
    {
        if (($numero % 2) == 0) {
            insertarValor($numero);
        } else {
            echo "Debe ingresar un valor Par";
        }
    }

    function insertarValor($valor)
    {
        $_SESSION['arreglo'][] = $valor;
        mostrarArreglo($_SESSION['arreglo']);
    }

    function mostrarArreglo($arregloN)
    {
        echo "Valores ingresados: ";
        foreach ($arregloN as $valor) {
            echo $valor . "-";
        }
    }
    ?>
</body>
</html>
