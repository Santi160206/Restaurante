<?php

require "../Database/conexion.php";  // carga $conn (PDO)

$Id          = $_POST["Id"];
$Usuario     = $_POST['Usuario'];
$Nombre      = $_POST['Nombre'];
$Rol         = $_POST['Rol'];
$Correo      = $_POST['Correo'];
$Contraseña  = $_POST['Contraseña'];

// Consulta UPDATE con parámetros seguros
$sql = "UPDATE usuarios 
        SET Usuario = :usuario,
            Nombre = :nombre,
            Rol = :rol,
            Correo = :correo,
            Contraseña = :contrasena
        WHERE Id = :id";

$stmt = $conn->prepare($sql);

// Asignar parámetros
$stmt->bindParam(':usuario', $Usuario);
$stmt->bindParam(':nombre', $Nombre);
$stmt->bindParam(':rol', $Rol);
$stmt->bindParam(':correo', $Correo);
$stmt->bindParam(':contrasena', $Contraseña);
$stmt->bindParam(':id', $Id, PDO::PARAM_INT);

// Ejecutar
$stmt->execute();

// Redireccionar
header("Location: CRUD.php");
exit();
