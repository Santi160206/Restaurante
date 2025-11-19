<?php 
require "../Database/conexion.php"; // Aquí se carga $conn (PDO)

$Id = $_GET['Id']; // ID recibido por GET

// Consulta del usuario por ID
$sql = "SELECT * FROM usuarios WHERE Id = :Id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':Id', $Id, PDO::PARAM_INT);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/CRUD.css">
    <title>Editar usuario</title>
</head>

<body>

    <div class="users-form">
        <h1>Editar usuario</h1>

        <form action="edit_user.php" method="POST">

            <!-- Oculto para enviar ID -->
            <input type="hidden" name="Id" value="<?= $row['Id'] ?>">

            <form action="insert_user.php" method="POST">
        <input type="text" name="Nombre" placeholder="Nombre" required>
        <input type="text" name="Usuario" placeholder="Usuario" required>
        <input type="text" name="Rol" placeholder="Rol" required>
        <input type="text" name="Correo" placeholder="Correo" required>
        <input type="password" name="Contraseña" placeholder="Contraseña" required>


            <button type="submit">Actualizar</button>
        </form>
    </div>

</body>
</html>
