<?php
include('./includes/header.php');
include "./class/Sum.php";
?>
<br><br>
<form action="index.php" method="post">
    <label> Ingresar valor N</label>
    <input type="number" name="num" required>
    <input type="submit" value="ENVIAR">
</form>
<br><br>
<?php
$sums = new Sums("");
$results = $sums->get_all_sums();
echo '<table border=1>
            <tr>
                    <th>ID</th>
                    <th>n</th>
                    <th>Factorial</th>
                    <th>Sumatoria</th>
                    <th>Editar</th>
                    </tr>';

foreach ($results as $row) {
    echo '<tr> 
                     <td>' . $row['ID'] . '</td>' .
        '<td>' . $row['n'] . '</td>' .
        '<td>' . $row['factorial'] . '</td>' .
        '<td>' . $row['sumatoria'] . '</td>'.
        '<td><a href=editar.php?id='.$row["ID"].'> Editar</a>';
    echo '</tr>';
}
echo '</table>';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sums = new Sums($_POST['num']);
    $result = $sums->insert_new_sum();

    if ($result) {
        echo "Guardado";
        header('Location: index.php');
        die();
    } else
        echo "Fallo el registro";
}

?>
</div>
<?php include('./includes/footer.php');?>