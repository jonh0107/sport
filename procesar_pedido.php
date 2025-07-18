<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "sportzone");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recoger datos del formulario
$nombre = $_POST['nombre_cliente'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];

// Preparar y ejecutar la consulta
$stmt = $conexion->prepare("INSERT INTO pedidos (nombre_cliente, email, telefono, producto, cantidad) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssssi", $nombre, $email, $telefono, $producto, $cantidad);

if ($stmt->execute()) {
    echo "<h2>Pedido enviado correctamente.</h2>";
    echo "<a href='pagina.html?usuario=admin'>Volver a la tienda</a>";
} else {
    echo "Error al guardar el pedido: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>
