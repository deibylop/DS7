<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include_once '../configuracion/conexion.php';
include_once '../objetos/productos.php';

$conex = new Conexion();
$db = $conex->obtenerConexion();

$product = new Producto($db);

$product->id = isset($_GET['id']) ? $_GET['id'] : die();

$product->eliminar_producto();
if($product){
    http_response_code(200);
    echo json_encode(array('Message'=> "Producto eliminado con exito"));
}
else{
    http_response_code(400);
    echo json_encode(array("Message"=> "Producto no se elimino o no existe"));
}
