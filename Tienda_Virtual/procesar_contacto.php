<?php
// conexion a la base de datos
$conexion = new mysqli("localhost", "root", "", "formulario_rincon_cafe");

// verificar la conexion
if ($conexion->connect_error) {
    die("connexion fallida: " . $conexion->connect_error);
}

// capturar datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

//insertar datos en la tabla
$sql = "INSERT INTO contacto (nombre, email, asunto, mensaje) VALUES ('$nombre', '$email', '$asunto', '$mensaje')";
if ($conexion->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>