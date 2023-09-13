<?php
$max = 1000000;
$imgValidations = [
    "image/png",
    "image/jpeg",
    "image/gif",
    "image/jpg"
];
$ext = $_FILES["nombre_archivo_cliente"]["type"];
var_dump($ext);
if ($_FILES["nombre_archivo_cliente"]["size"] < $max && in_array($ext,$imgValidations))
    {
    if (is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])) {
    $nombreDirectorio = "archivos/";
    $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
    $nombreCompleto = $nombreDirectorio . $nombrearchivo;
    if (is_file($nombreCompleto)) {
        $idUnico = time();
        $nombrearchivo = $idUnico . "-" . $nombrearchivo;
        echo "Archivo repetido, se cambiara el nombre a $nombrearchivo <br><br>";
    }
    move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombrearchivo);
    echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
}   
    else
    echo "No se ha podido subir el archivo <br>";
}
    else
    {
        echo "El archivo es mayor a 1M y no tiene formato de imagen valido <br>";
    }
