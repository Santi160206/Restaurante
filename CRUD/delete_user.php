<?php

require "../Database/conexion.php";  // aquí obtienes $conn (PDO)

$Id = $_GET["Id"]; // recibimos el ID por la URL

// Consulta DELETE segura usando parámetros
$sql = "DELETE FROM usuarios WHERE Id = :Id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':Id', $Id, PDO::PARAM_INT);

// Ejecutar
$stmt->execute();

// Volver al index
header("Location: CRUD.php");
exit();

?>
