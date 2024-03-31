<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("../config/config.php");

$carpeta            = trim($_POST['carpeta']);
$citado             = trim($_POST['citado']);
$direccion          = trim($_POST['direccion']);
$investigado        = trim($_POST['investigado']);
$delito             = trim($_POST['delito']);
$agraviado          = trim($_POST['agraviado']);
$disposicion        = trim($_POST['disposicion']);
$disposicionnumero  = trim($_POST['disposicionnumero']);
$fecha              = trim($_POST['fecha']);

    // Actualiza los datos en la base de datos
    $sql = "UPDATE `usuario` SET `carpeta` = '$carpeta', `citado` ='$citado', `direccion` ='$direccion', `investigado` ='$investigado', `delito` ='$delito', `agraviado` = '$agraviado', `disposicion` = '$disposicion', `disposicionnumero` = '$disposicionnumero', `fecha` = '$fecha'";

    $sql .= " WHERE id='$id'";

    if ($conexion->query($sql) === TRUE) {
        header("location:../");
    } else {
        echo "Error al actualizar el registro: " . $conexion->error;
    }
}
