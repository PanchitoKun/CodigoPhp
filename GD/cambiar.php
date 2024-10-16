<?php
include("Conexion.php");
$cnn = Conectar();
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnChangePassword'])) {
    $targetEmail = $_POST['email'];
    $newPassword = $_POST['newPassword'];

    $sql = "SELECT * FROM funcionario WHERE CORREO_ELEC='$targetEmail'";
    $result = $cnn->query($sql);

    if ($result && $result->num_rows > 0) {
        $updateSql = "UPDATE funcionario SET contraseña='$newPassword' WHERE CORREO_ELEC='$targetEmail'";
        if ($cnn->query($updateSql) === TRUE) {
            echo "<script>alert('Contraseña actualizada con éxito para el correo $targetEmail');</script>";
        } else {
            echo "<script>alert('Error al actualizar la contraseña para el correo $targetEmail: " . $cnn->error . "');</script>";
        }
    } else {
        echo "<script>alert('Correo $targetEmail no encontrado');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cambiar Contraseña</title>
</head>
<body>
    <h2>Cambiar Contraseña</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Correo Electrónico: <input type="text" name="email" required><br>
        Nueva Contraseña: <input type="password" name="newPassword" required><br>
        <input type="submit" name="btnChangePassword" value="Cambiar Contraseña">
    </form>
</body>
</html>

