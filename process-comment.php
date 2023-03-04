<?php
$servername = "localhost";
$username = "admin";
$password = "1";
$dbname = "COMENTARIOS";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

session_start();
if(isset($_SESSION['username'])) {
    $name = $_SESSION['username'];
}

/* $name = $usuario['username']; */
$comment = $_POST['comment'];

$sql = "INSERT INTO comments (name, comentario, hora) VALUES ('$name', '$comment', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Comentario enviado correctamente";
    header('Location: ./index.php');
} else {
    echo "Error al enviar comentario: " . $conn->error;
}

$conn->close();
?>
