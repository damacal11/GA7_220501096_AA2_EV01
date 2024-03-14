<?php
// Incluir el archivo de configuración de la base de datos
include("conexion_bd.php");

// Verificar si se recibió el ID del libro a eliminar
if (isset($_GET['id'])) {
    // Obtener el ID del libro a eliminar
    $id_libro = $_GET['id'];

    // Preparar la consulta SQL para eliminar el libro
    $sql = "DELETE FROM libros WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id_libro);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Mostrar alerta de éxito
        echo "<script>alert('El libro se eliminó exitosamente'); window.location.href = 'eliminacion_exitosa.php';</script>";
    } else {
        // Mostrar alerta de error
        echo "<script>alert('Error al eliminar el libro: " . $stmt->error . "'); window.location.href = 'error_eliminar.php';</script>";
    }

    // Cerrar la consulta y la conexión a la base de datos
    $stmt->close();
    $conexion->close();
} else {
    // Si no se recibió el ID del libro, redireccionar a una página de error
    echo "<script>alert('No se proporcionó un ID de libro válido'); window.location.href = 'error_eliminar.php';</script>";
}
?>
