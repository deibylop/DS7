<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>laboratorio 9.1</title>
    <link rel="stylesheet" href="./src/css/estilo.css">
</head>

<body>
    <h1>Consulta noticias</h1>
    <?php
    require_once('./class/noticias.php');
    $obj_noticias = new noticias();
    $noticias = $obj_noticias->consultar_noticias();
    $nfilas = count($noticias);

    if ($nfilas > 0) {
        echo '<table>
            <tr>
            <th>Titulo</th>
            <th>Texto</th>
            <th>Categoria</th>
            <th>Fecha</th>
            <th>Imagen</th>
            </tr>';

        foreach ($noticias as $resultado) {
            print('<tr> 
                <td>' . $resultado['titulo'] . '</td><br/>' .
                '<td>' . $resultado['texto'] . '</td><br/>' .
                '<td>' . $resultado['categoria'] . '</td><br/>' .
                '<td>' . date('j/n/Y') . strtotime($resultado['fecha']) . '</td><br/>');

            if ($resultado['imagen'] != "") {
                print("<td> 
                    <a target='_blank' href='src/img/" . $resultado['imagen'] . "'>
                    <img border='0' src=src/img/iconotexto.gif>
                    </a>
                    </td> <br>");
            } else {
                print("<td>&nbsp;</td>");
            }
            print('</tr>');
        }
        print('</table>');
    }
    ?>

</body>

</html>