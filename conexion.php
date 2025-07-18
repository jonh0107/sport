<?php
$servername = "localhost";  // normalmente localhost en XAMPP
$username = "root";         // usuario por defecto de XAMPP
$password = "";             // contraseña por defecto está vacía en XAMPP
$database = "sportzone";   // la base de datos que creaste

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conectado exitosamente";
?>
