<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>laboratorio 11.1</title>
    <link rel="stylesheet" href="./src/css/estilo.css">
</head>

<body>
    <h1>Consulta noticias</h1>
    <?php
    require_once('./class/noticias.php');
    $obj_noticias = new noticias();
    $noticias = $obj_noticias->consultar_noticias_rows();
    $noticiasPorPagina = 4; 
    $totalNoticias = (int)$noticias[0];
    $totalPaginas = (int)ceil($totalNoticias / $noticiasPorPagina);

    $paginaActual = isset($_GET['pg']) ? (int)$_GET['pg'] : 1;
    if ($paginaActual < 1 || $paginaActual > $totalPaginas) {
        header('Location: lab111.php?pg=1');
    }




if(isset($noticias))
{        
    $obj_noticias = new noticias();
    $inicio = ($paginaActual - 1) * $noticiasPorPagina;
    $noticiasPaginadas = $obj_noticias->consultar_noticias_paginadas($inicio, $noticiasPorPagina);    
}

    if ($totalNoticias > 0) {
        echo '<table>
            <tr>
            <th>Titulo</th>
            <th>Texto</th>
            <th>Categoria</th>
            <th>Fecha</th>
            <th>Imagen</th>
            </tr>';

        foreach ($noticiasPaginadas as $resultado) {
            echo '<tr> 
                <td>' . $resultado['titulo'] . '</td><br/>' .
                '<td>' . $resultado['texto'] . '</td><br/>' .
                '<td>' . $resultado['categoria'] . '</td><br/>' .
                '<td>' . date('j/n/Y', strtotime($resultado['fecha'])) . '</td><br/>';

            if ($resultado['imagen'] != "") {
                echo "<td> 
                    <a target='_blank' href='src/img/" . $resultado['imagen'] . "'>
                    <img border='0' src='src/img/iconotexto.gif'>
                    </a>
                    </td> <br>";
            } else {
                echo "<td>&nbsp;</td>";
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '<div class="pagination">';
        echo "<br>Mostrando noticias $inicio a $noticiasPorPagina de un total de $noticias[0] <br>  ";

        for ($i = 1; $i <= $totalPaginas; $i++) {
            if ($i == $paginaActual) {
                echo "<span> Siguiente </span>";
            } else {
                echo "<a href='lab111.php?pg=$i'> Anterior </a>";
            }
        }
        echo '</div>';
    }
    ?>
</body>

</html>
