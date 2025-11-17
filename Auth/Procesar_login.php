<?php
session_start();
require "../Database/conexion.php";

$Usuario = $_POST['Usuario'] ?? '';
$Contraseña = $_POST['Contraseña'] ?? '';

$sql = $conn->prepare("SELECT * FROM usuarios WHERE Usuario = :u AND Contraseña = :p");
$sql->bindParam(":u", $Usuario);
$sql->bindParam(":p", $Contraseña);
$sql->execute();

if ($sql->rowCount() > 0) {

    $_SESSION['Usuario'] = $Usuario;

    unset($_SESSION['login_error']);

    header("Location: ../index.php");
    exit();

} else {

    $_SESSION['login_error'] = "Credenciales incorrectas";

    header("Location: login.php");
    exit();
}
?>
