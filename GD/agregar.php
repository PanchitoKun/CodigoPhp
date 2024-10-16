<html>
    <head>
        <title>GD Add</title>
        <link rel="icon" type="image/png" href="https://cdn.discordapp.com/attachments/1060253839351103520/1163572436684505098/latest.png">
    <style>
                    body{
                background-image: url("https://cdn.discordapp.com/attachments/1060253839351103520/1163594283526389820/MANU.gif");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"],
        button {
            background-color: #0077b6;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

    </style>
</head>
<body>
<img id="image" width="800" height="115" src="https://cdn.discordapp.com/attachments/1060253839351103520/1164722496948420658/ANOTAVICHO.png"></img>
    <form method="post">
        <?php error_reporting(0); ?>
        N° De anotacion:
        <input type="number" name="NAnotaEl" value="" min="1"max="99999999999" maxlength="11" required>
        <br>
        Rut del Estudiante:
        <input type="text" name="RutNo" value="" required>
        
        Asignatura:
        <input type="text" name="AsiTrabajo" value="" required>

        Fecha:
        <input type="date" name="fechahizo" value="" required>
        Hora:
        <input type="time" name="HoraNada" value="" required><br>
        Tipo de anotación
        <select name="TipoAnotaEn" required>
                            <option value="0">Ninguna</option>
                            <option value="1">Positva</option>
                            <option value="2">Negativa</option>
                            <option value="3">Observación</option>
                            <option value="4">CITA/ENTREVISTA AL APODERADO</option>
                        </select><br>
        Rut del encargado de la anotación:
        <input type="text" name="encargadoeste" value="" required>

        Descripción de la Anotación:
        <textarea name="descripciondilan" value="" rows="4" cols="50" value="" required></textarea>

        <center><input type="image" name="btnGrabar" value="Registrar" width="45" height="45" src="https://cdn.discordapp.com/attachments/1060253839351103520/1164720614934847568/SEXO.png"alt="Publicar Anotación"><br></center>
        <a href="Principal.php"><img id="image" width="45" height="45" src="https://cdn.discordapp.com/attachments/1060253839351103520/1164718148877033583/PA_TRA.png"></img></a>
       
        <?php
include("Conexion.php");

if (isset($_POST['btnGrabar_x']) && isset($_POST['btnGrabar_y'])) {
    $cnn = Conectar();
    $el = $_POST['NAnotaEl'];
    $dilan = $_POST['descripciondilan'];
    $no = $_POST['RutNo'];
    $hizo = $_POST['fechahizo'];
    $nada = $_POST['HoraNada'];
    $en = $_POST['TipoAnotaEn'];
    $este = $_POST['encargadoeste'];
    $trabajo = $_POST['AsiTrabajo'];

    // Verificar si el valor de $no existe en la tabla alumnos
    $sql_verificar = "SELECT RUT FROM alumnos WHERE RUT = '$no'";
    $resultado = mysqli_query($cnn, $sql_verificar);

    if (mysqli_num_rows($resultado) > 0) {
        // El valor de $no existe en la tabla alumnos, puedes proceder con la inserción
        $sql = "INSERT INTO anotaciones VALUES ('$el', '$dilan', '$no', '$hizo', '$nada', '$en', '$este', '$trabajo')";

        if (mysqli_query($cnn, $sql)) {
            echo "<script>alert('Se han grabado los datos.')</script>";
        }
    } else {
        // El valor de $no no existe en la tabla alumnos, muestra un mensaje de error
        echo "<script>alert('El alumno no existe en la tabla de alumnos.')</script>";
    }
}
?>


    </form>
</body>
</html>


<audio autoplay loop>
            <source src="https://cdn.discordapp.com/attachments/1060253839351103520/1163581232135807086/menuLoop.mp3" type="audio/mpeg">
                <p>Tu navegador no soporta HTML5</p>
            </audio><br> 
