<?php
session_start();
require "../Database/conexion.php";

$Usuario      = $_POST['Usuario'];
$Nombre = $_POST['Nombre'];
$Rol = $_POST['Rol'];
$Correo = $_POST['Correo'];
$Contraseña   = $_POST['Contraseña'];
$Contraseña2  = $_POST['Contraseña2'];

if ($Contraseña !== $Contraseña2) {
    header("Location: register.php?error=Las contraseñas no coinciden");
    exit();
}

// Con esto miramos si ya existe un usuario en la bd
$sql = "SELECT * FROM usuarios WHERE Usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$Usuario]);

if ($stmt->rowCount() > 0) {
    header("Location: register.php?error=El usuario ya existe");
    exit();
}

// Aqui insertamos usuario en la bd
$sql = "INSERT INTO usuarios (Usuario, Contraseña, Rol, Correo, Nombre) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt->execute([$Usuario, $Contraseña, $Rol, $Correo, $Nombre])) {
    $_SESSION['Usuario'] = $Usuario;
    header("Location: register.php?ok=1");
    exit();
} else {
    header("Location: register.php?error=Error al registrar");
    
    exit();
}
?>
