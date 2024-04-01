<?php
include_once 'Conexion/conexion.php';
$conexion = new conexion();
if($conexion->conexion()){
    header('location:Vista/Login/login.php');
}else{
    header('location:Vista/Error/error.php');
}
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de ingreso</title>
</head>
<body>
    <div>
        <h1>Inicio</h1>
    </div>    
</body>
</html> 