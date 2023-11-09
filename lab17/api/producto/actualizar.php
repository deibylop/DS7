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

$producto = new Producto($db);

$producto->id = isset($_GET['id']) ? $_GET['id'] : die();
$data = json_decode(file_get_contents("php://input"));
if(!empty($data->nombre) && !empty($data->precio) && !empty($data->descripcion) && !empty($data->categoria_id)){
    $producto->nombre = $data->nombre;
    $producto->precio = $data->precio;
    $producto->descripcion = $data->descripcion;
    $producto->categoria_id = $data->categoria_id;
    if($producto->actualizar_producto()){
        $product_arr = array(
            "id" => $producto->id,
            "nombre" => $producto->nombre,
            "descripcion" => $producto->descripcion,
            "precio" => $producto->precio,
            "categoria_id" => $producto->categoria_id,
            "categoria_desc" => $producto->categoria_desc
            );
        http_response_code(200);
        echo json_encode(array("Message"=> "Producto #".$producto->id ." Actualizado","Data"=> $product_arr));
    }
    else{
        http_response_code(400);
        echo json_encode(array("message" => "No se puede actualizar el producto."));
    }
}
else{
    http_response_code(404);
    echo json_encode(array("message" => "Validar informacion"));

}

// $product->actualizar_producto();
// if($product->nombre!=null){

// $product_arr = array(
// "id" => $product->id,
// "nombre" => $product->nombre,
// "descripcion" => $product->descripcion,
// "precio" => $product->precio,
// "categoria_id" => $product->categoria_id,
// "categoria_desc" => $product->categoria_desc
// );

// http_response_code(200);
// echo json_encode(array("Message"=> "Producto".$id."Actualizado","Data"=> $product_arr));
// }
// else{
//     http_response_code(400);
//     echo json_encode(array("Message"=> "Producto no encontrado"));
// }
