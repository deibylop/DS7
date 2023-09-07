<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.5</title>
</head>

<body>
    <form action="lab45.php" method="post">
        <label>Ingrese un valor par</label>
        <br>
        <br>
        <input type="number" name="valorN">
        <input type="submit" name="enviar">
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        $valorN = $_POST["valorN"];
        validarPar($valorN);
    }

    function validarPar($valorN)
    {
        if (($valorN % 2) == 0) {
            generarMatriz($valorN);
        } else {
            echo "Debe ingresar un valor Par <br>";
        }
    }

    function generarMatriz($valorN)
    {
        echo "<table border=1>";
        for ($i = 0; $i < $valorN; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $valorN; $j++) {
                if ($i == $j) {
                    echo "<td>1</td>";
                } else {
                    echo "<td>0</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>
