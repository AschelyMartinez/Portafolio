<?php
// Conexión a la base de datos
$servername = "localhost"; // Cambia por tu servidor
$username = "root"; // Cambia por tu usuario de base de datos
$password = ""; // Cambia por tu contraseña
$dbname = "Portafolio"; // Cambia por el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Insertar datos en la base de datos
$sql = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Mensaje enviado exitosamente.');
        window.location.href='index.html'; // Cambia por la página a la que quieras redirigir
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
