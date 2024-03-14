
<?php
include("conexion_bd.php");

// Obtener el ID del libro desde la URL
$id_libro = $_GET['id'] ?? null;

// Consultar la información del libro
$sql = "SELECT * FROM libros WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id_libro);
$stmt->execute();
$resultado = $stmt->get_result();
$libro = $resultado->fetch_assoc();

// Cerrar la consulta
$stmt->close();
$conexion->close();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Tecnilibros Cultural</title>
    <link rel="stylesheet" href="estilos/styles.css">
    <link rel="stylesheet" href="estilos/normalize.css">
</head>
<body>
    <!-- Barra de tareas -->
   
    <div class="gestionary-page">
        <div class="form">
            <h1>Editar Libro</h1>
            <form action="procesar_formulario_libro.php" method="post">
            <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
            <input type="text" name="titulo" value="<?php echo $libro['titulo']; ?>" placeholder="Título del libro" required>
            <input type="text" name="edicion" value="<?php echo $libro['edicion']; ?>" placeholder="Edición del libro" required>
            <input type="text" name="autor" value="<?php echo $libro['autor']; ?>" placeholder="Autor del libro" required>
            <input type="text" name="precio" value="<?php echo $libro['precio']; ?>" placeholder="Precio del libro" required>
            <button type="submit">Guardar Cambios</button>
            </form>
        </div>
    </div>
</body>
</html>