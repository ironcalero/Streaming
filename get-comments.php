<?php
$servername = "localhost";
$username = "admin";
$password = "1";
$dbname = "COMENTARIOS";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM comments ORDER BY hora DESC LIMIT 20";
$result = $conn->query($sql);
$tcom="";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $tcom= "<p><strong>" . $row["name"] . ":</strong> " . $row["comentario"] . "</p>".$tcom;
    }
    echo $tcom;
} else {
    echo "No hay comentarios aún";
}

$conn->close();
?>
