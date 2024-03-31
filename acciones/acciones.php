<?php
/*
ini_set('display_errors', 1);
error_reporting(E_ALL);
*/


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("../config/config.php");
    $usuario = "usuario";

    $carpeta            = trim($_POST['carpeta']);
    $citado             = trim($_POST['citado']);
    $direccion          = trim($_POST['direccion']);
    $investigado        = trim($_POST['investigado']);
    $delito             = trim($_POST['delito']);
    $agraviado          = trim($_POST['agraviado']);
    $disposicion        = trim($_POST['disposicion']);
    $disposicionnumero  = trim($_POST['disposicionnumero']);
    $fecha              = trim($_POST['fecha']);



    // Mover el archivo a la ubicación deseada
     $sql = "INSERT INTO `usuario` (carpeta, citado, direccion, investigado, delito, agraviado, disposicion, disposicionnumero, fecha) 
    VALUES ('$carpeta', '$citado', '$direccion', '$investigado', '$delito', '$agraviado', '$disposicion', '$disposicionnumero', '$fecha')";

}

/**
 * Función para obtener todos los empleados 
 */

function obtenerEmpleados($conexion)
{
    $sql = "SELECT * FROM `usuario` ORDER BY id ASC";
    $resultado = $conexion->query($sql);
    if (!$resultado) {
        return false;
    }
    return $resultado;
}
