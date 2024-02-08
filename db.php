<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "falso");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Verificar si los datos del formulario se recibieron correctamente
if(isset($_POST['usu']) && isset($_POST['contra'])) {
    // Obtener los datos del formulario
    $usu = $_POST['usu'];
    $contra = $_POST['contra'];

    // Preparar la consulta SQL para insertar los datos en la tabla datos
    $sql = "INSERT INTO datos (usu, contra) VALUES ('$usu', '$contra')";

    // Ejecutar la consulta y verificar si fue exitosa
    if ($conexion->query($sql) === TRUE) {
        echo "Los datos se han guardado correctamente en la base de datos.";
    } else {
        echo "Error al guardar los datos en la base de datos: " . $conexion->error;
    }
} else {
    echo "Los datos del formulario no se recibieron correctamente.";
}

// Cerrar la conexión
$conexion->close();
?>