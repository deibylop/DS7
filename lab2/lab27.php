<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2.5</title>
</head>

<body>
    <?php
    $posicion = "arriba";

    switch ($posicion) {
        case "arriba":
            echo "la variable contiene";
            echo "el valor arriba";
            break;
        case "abajo":
            echo "la variable contiene";
            echo "el valor abajo";
            break;
        default:
            echo "la variable contiene otro valor";
            echo "distinto de arriba y abajo";
            break;
    }
    ?>

</body>

</html>