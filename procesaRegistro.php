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

// Procesa el formulario de registro
if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["passwordC"])) {

    $sql = "SELECT * FROM users WHERE username='$_POST[username]'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        session_start();
        $_SESSION['usuE']=1;
        header('Location: ./registro.php');
    } else {

        if ( $_POST["password"] == $_POST["passwordC"] ) {
            $username = $_POST["username"];
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

            // Inserta el usuario en la base de datos
            $sql = "INSERT INTO users (username, password)
                    VALUES ('$username', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo "Usuario registrado exitosamente";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Comprueba que has escrito la misma contraseña las dos veces.";
        }
    }
}

$conn->close();

?>
