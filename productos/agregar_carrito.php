<?php
session_start(); // Permite usar el carrito

// Si no existe el carrito, se crea como array
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Datos que vienen del producto
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$size = $_POST['size'];

// Si el producto ya existía en carrito, aumenta su cantidad
$existe = false;

foreach ($_SESSION['carrito'] as &$producto) {
    if ($producto['id'] == $id && $producto['size'] == $size) {
        $producto['cantidad']++;
        $existe = true;
        break;
    }
}

// Si no existe, agregarlo como nuevo item
if (!$existe) {
    $_SESSION['carrito'][] = [
        'id' => $id,
        'nombre' => $nombre,
        'precio' => $precio,
        'size' => $size,
        'cantidad' => 1
    ];
}

// Volver al producto
header("Location: carrito.php");
exit();
?>
