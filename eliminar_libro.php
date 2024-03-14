<?php
// Incluir el archivo de configuración de la base de datos
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
    <title>Confirmación de Eliminación</title>
    <link rel="stylesheet" href="estilos/styles.css">
    <link rel="stylesheet" href="estilos/normalize.css">
</head>
<body>
<div class="gestionary-page">
        <div class="form">
            <h1>Eliminar Libro</h1> 
            <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
            <input type="text" name="titulo" value="<?php echo $libro['titulo']; ?>" placeholder="Título del libro" required>
            <input type="text" name="edicion" value="<?php echo $libro['edicion']; ?>" placeholder="Edición del libro" required>
            <input type="text" name="autor" value="<?php echo $libro['autor']; ?>" placeholder="Autor del libro" required>
            <input type="text" name="precio" value="<?php echo $libro['precio']; ?>" placeholder="Precio del libro" required>
            </form>
        </div>
    </div>
    <div class="confirm-delete">
    <h1>¿Está seguro de eliminar este artículo?</h1>
</div>

<nav class="navbar">
    <ul class="menu">
        <li><a class="boton" href="#" onclick="confirmarEliminar(<?php echo $libro['id']; ?>)">Borrar</a></li>
        <li><a class="boton" href="gestionar.html">Cancelar</a></li>
    </ul>
</nav>

<script>
    function confirmarEliminar(id) {
        // Mostrar un mensaje de alerta para confirmar la eliminación
        if (confirm("¿Está seguro de eliminar este artículo?")) {
            // Si el usuario confirma, redireccionar al archivo eliminar_libro.php con el ID del libro
            window.location.href = "eliminar_libro_1.php?id=" + id;
        }
    }
</script>

    
    
</body>
</html>
