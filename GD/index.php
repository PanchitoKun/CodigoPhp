<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<title>Login</title>
<link rel="icon" type="image/png" href="https://cdn.discordapp.com/attachments/1060253839351103520/1163572436684505098/latest.png">
<style>
    .centered-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    background-image: url();
        width: 50%;
    }
  
  
</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<div class="centered-text">
    <h1>Iniciar Sesión</h1>
    <form method="post">
        <label for="correo">Correo Electrónico:</label>
        <input type="text" name="correo" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required>
        <br>
        <input type="submit" name="login" value="Iniciar Sesión">
        <input type="button" value="Cambiar contraseña" onclick="window.location.href='cambiar.php'">
    </form>
</div>

<?php
if (isset($_POST['login'])) {
    include("Conexion.php");
    $cnn = Conectar();
    
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $query = "SELECT * FROM funcionario WHERE CORREO_ELEC = '$correo' AND CONTRASEÑA = '$contrasena'";
    $result = mysqli_query($cnn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Inicio de sesión exitoso, asigna valores a las variables de sesión
        $_SESSION['correo'] = $row['CORREO_ELEC'];
        $_SESSION['tipo'] = $row['TIPO_CARGO'];
        $_SESSION['nom'] = $row['NOMBRE'];
        $_SESSION['car'] = $row['TIPO_CARGO'];

        // Redirige según el tipo de usuario
        switch ($_SESSION['tipo']) {
            case 1:
                echo "<script>alert('Usted es $_SESSION[nom] y tiene cargo $_SESSION[car]')</script>";
                echo "<script type='text/javascript'>window.location='Principal.php'</script>";
            break;

            case 2:
                echo "<script>alert('Usted es $_SESSION[nom] y tiene cargo $_SESSION[car]')</script>";
                echo "<script type='text/javascript'>window.location='Principal.php'</script>";
            break;

            case 3:
                echo "<script>alert('Usted es $_SESSION[nom] y tiene cargo $_SESSION[car]')</script>";
                echo "<script type='text/javascript'>window.location='Alumno.php'</script>";
            break;

            case 4:
                echo "<script>alert('Usted es $_SESSION[nom] y tiene cargo $_SESSION[car]')</script>";
                echo "<script type='text/javascript'>window.location='Principal.php'</script>";
            break;
            case 5:
                echo "<script>alert('Usted es $_SESSION[nom] y tiene cargo $_SESSION[car]')</script>";
                echo "<script type='text/javascript'>window.location='Principal.php'</script>";
            break;

            case 6:
                echo "<script>alert('Usted es $_SESSION[nom] y tiene cargo $_SESSION[car]')</script>";
                echo "<script type='text/javascript'>window.location='Principal.php'</script>";
            break;

            case 7:
                echo "<script>alert('Usted es $_SESSION[nom] y tiene cargo $_SESSION[car]')</script>";
                echo "<script type='text/javascript'>window.location='Principal.php'</script>";
            break;
                                                    
            default:
                echo "<script>alert('Usted NO es Usuario')</script>";
                echo "<script type='text/javascript'>window.location='index.php'</script>";
            break;
        }
        exit; // Asegúrate de que no haya más código después de la redirección.
    } else {
        echo "Credenciales incorrectas. Intente nuevamente.";
    }

    mysqli_close($cnn);
}
?>

</body>
</html>
