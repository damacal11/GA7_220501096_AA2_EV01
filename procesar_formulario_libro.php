<?php
// Incluir el archivo de configuración de la base de datos
include("conexion_bd.php");

// Obtener los datos del formulario
$titulo = $_POST['titulo'];
$edicion = $_POST['edicion'];
$autor = $_POST['autor'];
$precio = $_POST['precio'];

// Verificar si se proporcionó un ID
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];

    // Preparar la consulta SQL para actualizar los datos en la base de datos
    $sql = "UPDATE libros SET titulo = ?, edicion = ?, autor = ?, precio = ? WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssssd", $titulo, $edicion, $autor, $precio, $id);
} else {
    // Si no se proporcionó un ID, se inserta un nuevo registro
    $sql = "INSERT INTO libros (titulo, edicion, autor, precio) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssd", $titulo, $edicion, $autor, $precio);
}

// Ejecutar la consulta
if ($stmt->execute()) {
    // Mensaje de éxito en alerta
    echo "<script>alert('Libro añadido/modificado correctamente'); window.location.href = 'formulario_libro.php';</script>";
} else {
    // Mensaje de error en alerta
    echo "<script>alert('Error al añadir/modificar libro: " . $stmt->error . "'); window.location.href = 'formulario_libro.html';</script>";
}

// Cerrar la conexión a la base de datos
$stmt->close();
$conexion->close();
?>


