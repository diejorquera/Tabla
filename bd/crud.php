<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$codigo = (isset($_POST['codigo'])) ? $_POST['codigo'] : '';
$valor = (isset($_POST['valor'])) ? $_POST['valor'] : '';
$cantidad_i = (isset($_POST['cantidad_i'])) ? $_POST['cantidad_i'] : '';
$cantidad_a = (isset($_POST['cantidad_a'])) ? $_POST['cantidad_a'] : '';
$dato = (isset($_POST['dato'])) ? $_POST['dato'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion){
    case 1:
        $consulta = "INSERT INTO hereramientas (nombre,codigo,valor,cantidad_i,cantidad_a,dato) VALUES('$nombre', '$codigo', '$valor', '$cantidad_i', '$cantidad_a', '$dato') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM herramientas ORDER BY user_id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE herramientas SET nombre='$nombre', codigo='$codigo', valor='$valor', cantidad_i='$cantidad_i', cantidad_a='$cantidad_a', dato='$dato' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM herramientas WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM herramientas WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM herramientas";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;