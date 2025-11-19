<?php
require "../Database/conexion.php";  // aquí obtienes $conn

$sql = "SELECT * FROM usuarios";
$stmt = $conn->prepare($sql);
$stmt->execute();
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC); // <-- aquí va la data
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/CRUD.css">
    <title>Users CRUD</title>
</head>

<body>

    <div class="users-form">
        <h1>Crear usuario</h1>
        <form action="insert_user.php" method="POST">
        <input type="text" name="Nombre" placeholder="Nombre" required>
        <input type="text" name="Usuario" placeholder="Usuario" required>
        <input type="text" name="Rol" placeholder="Rol" required>
        <input type="text" name="Correo" placeholder="Correo" required>
        <input type="password" name="Contraseña" placeholder="Contraseña" required>
        <input type="password" name="Contraseña2" placeholder="Confirmar contraseña" required>
        <button type="submit">Agregar</button>
        </form>

    </div>

    <div class="users-table">
        <h2>Usuarios registrados</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Rol</th>
                    <th>Correo</th>
                    <th>Nombre</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($usuarios as $row): ?>
                    <tr>
                        <td><?= $row['Id'] ?></td>
                        <td><?= $row['Usuario'] ?></td>
                        <td><?= $row['Contraseña'] ?></td>
                        <td><?= $row['Rol'] ?></td>
                        <td><?= $row['Correo'] ?></td>
                        <td><?= $row['Nombre'] ?></td>

                        <td><a href="update.php?Id=<?= $row['Id'] ?>" class="users-table--edit">Editar</a></td>
                        <td><a href="delete_user.php?Id=<?= $row['Id'] ?>" class="users-table--delete">Eliminar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>

</body>

</html>
