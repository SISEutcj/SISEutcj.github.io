<?php
$conexion = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexion, "falso");

// Verificar si los datos recibidos están completos
if(isset($_GET["usu"]) && isset($_GET["contra"])) {
    // Obtener los datos del formulario
    $usu = $_GET["usu"];
    $contra = $_GET["contra"];

    // Preparar la consulta SQL para insertar los datos en la tabla datos
    $sql = "INSERT INTO datos (usu, contra) VALUES ('$usu', '$contra')";

    // Ejecutar la consulta y verificar si fue exitosa
    if (mysqli_query($conexion, $sql)) {
        echo "Los datos se han guardado correctamente en la base de datos.";
    } else {
        echo "Error al guardar los datos en la base de datos: " . mysqli_error($conexion);
    }
} else {
    echo "Los datos recibidos no están completos.";
}

// Cerrar la conexión
mysqli_close($conexion);
?>