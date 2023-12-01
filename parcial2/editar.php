<form action="editar.php" method="post">
    <label> Ingresar valor N</label>
    <input type="number" name="num" required>
    <input type="submit" value="ENVIAR">
    <input type="hidden" name="id" value=<?php if(isset($_GET['id'])){echo $_GET['id'];}  ?>>
</form>

<?php
include('./includes/header.php');
include "./class/Sum.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $sums = new Sums($_POST['num']);
    // $sums->setN($_POST['num']);
    // $sums->setSumatoria($_POST['num']);
    $result = $sums->update_totals($id);
    if ($result) {
        header('Location: index.php');
        die();
    } else
        echo "Fallo el registro";
}

?>