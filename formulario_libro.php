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
    <?php
    include("conexion_bd.php");
    ?>
   
    <div class="login-page">
        <div class="form">
            <div class="welcome-title">
    <div class="add-book-form">
        <h1>Formulario para Añadir Libro</h1>
     <!-- Actualiza la acción del formulario para que apunte al script PHP adecuado -->
<form action="procesar_formulario_libro.php" method="post">
    <input type="text" name="titulo" placeholder="Título del libro" required>
    <input type="text" name="edicion" placeholder="Edición del libro" required>
    <input type="text" name="autor" placeholder="Autor del libro" required>
    <input type="text" name="precio" placeholder="Precio del libro" required>
    <button type="submit">Añadir Libro</button>
</form>

    </div>
</div>
</div>
</div>
</body>
</html>
