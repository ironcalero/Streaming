<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <?php
    session_start();
    if (isset($_SESSION['usuE'])) {
        echo "<h3>Ya existe un usuario con ese nombre.</h3>";
    }
    ?>
    <form action="procesaRegistro.php" method="post">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="passwordC">Repite la Contraseña: </label>
        <input type="password" id="passwordC" name="passwordC" required><br>

        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
