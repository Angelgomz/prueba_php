<?php
require_once('Models/ConexionModels.php');
require_once('Controllers/ProductosController.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conexion =new Database();
        $controller =new ProductosController($conexion);
        $controller->read(); 
}
else{
    $conexion = new Database();
    $controller = new ProductosController($conexion);
    $controller->Index(); 
}


?>