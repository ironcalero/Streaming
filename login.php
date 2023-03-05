<?php

// Conecta a la base de datos
$servername = "localhost";
$username = "admin";
$password = "1";
$dbname = "comentarios";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Procesa el formulario de inicio de sesión
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Obtiene la información del usuario de la base de datos
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            echo "Inicio de sesión exitoso";
            session_start();
            $_SESSION['id']=$row['id'];
            $_SESSION['username']=$row['username'];
            header("Location: live.php");
        } else {
            echo "Nombre de usuario o contraseña incorrectos.";
            $boton = "<form action=\"index.html\" method=\"POST\">"
                        ."<input type=\"submit\" value=\"Inicio\">"
                    ."</form>";
            echo $boton;
        }
    } else {
        echo "Nombre o contraseña incorectos.";
        $boton = "<form action=\"index.html\" method=\"POST\">"
                    ."<input type=\"submit\" value=\"Inicio\">"
                ."</form>";
        echo $boton;
    }
}