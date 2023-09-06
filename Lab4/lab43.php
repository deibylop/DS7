<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.3</title>
</head>

<body>
    <form action="lab43.php" method="post">
        <label>Generar arreglo de 20 posiciones</label>
        <br>
        <br>
        <input type="submit" name="enviar">
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        generarNumeros();
    }

    function generarNumeros()
    {
        $arrValores = array();

        for ($i = 0; $i < 20; $i++) {
            $numeroAleatorio = rand(1, 100);
            $arrValores[] = validarArreglo($arrValores,$numeroAleatorio);
            echo "El valor de la posicion [$i] es = $arrValores[$i] <br>";
        }
        return buscarValorMayor($arrValores);
    }
    function validarArreglo($arr, $valor)
    {
        while (in_array($valor, $arr)) {
           return rand($valor + 1, 100);
        }
        return $valor;
    }

    function buscarValorMayor($arr)
    {
        $valorMayor = max($arr);
        $posicion = array_search($valorMayor, $arr);
        echo "<br>El valor mayor es: $valorMayor <br>";
        echo "La posicion es mayor es: $posicion";

    }
    ?>
</body>

</html>