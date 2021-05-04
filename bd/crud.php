<?php
include_once 'conexion.php';

$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Necesario para recibir parametros con Axios
$_POST = json_decode(file_get_contents("php://input"), true);

// Recepcion de los datos enviados mediante POST desde main.js
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$marca = (isset($_POST['marca'])) ? $_POST['marca'] : '';
$modelo = (isset($_POST['modelo'])) ? $_POST['modelo'] : '';
$stock = (isset($_POST['stock'])) ? $_POST['stock'] : '';

switch($opcion){
    case 1: //INSERTAR  
        $consulta = "INSERT INTO moviles (marca, modelo, stock) VALUES ('$marca', '$modelo', '$stock') ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;
    case 2: //Modificar
        $consulta = "UPDATE moviles SET marca='$marca', modelo='$modelo', stock='$stock' WHERE id='$id' ";
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3: //Borrar
        $consulta = "DELETE FROM moviles WHERE id='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;
    case 4: //listar
        $consulta = "SELECT id, marca, modelo, stock FROM moviles";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;  
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a js
$conexion = NULL;