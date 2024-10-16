<html>
    <head>
        <title>GD Index</title>
        <link rel="icon" type="image/png" href="https://cdn.discordapp.com/attachments/1060253839351103520/1163572436684505098/latest.png">
        <style>
                    body{
                background-image: url("https://cdn.discordapp.com/attachments/1060253839351103520/1163594283526389820/MANU.gif");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            max-width: 400px;
            margin: 0 auto;}
    </style>
    <audio autoplay loop>
            <source src="https://cdn.discordapp.com/attachments/1060253839351103520/1163581232135807086/menuLoop.mp3" type="audio/mpeg">
                <p>Tu navegador no soporta HTML5</p>
            </audio><br> 
</head>
<body>
<center><img id="image" width="1000" height="105" src="https://cdn.discordapp.com/attachments/1060253839351103520/1164727888277426276/image.png">
    <form method="post">
    <?php error_reporting(0); ?>
        <label for="txtRut">Ingrese el RUT del alumno:</label>
        <input type="text" name="txtRut" required>
        <a href="Principal.php"><img id="image" width="45" height="45" src="https://cdn.discordapp.com/attachments/1060253839351103520/1164718148877033583/PA_TRA.png"></img></a>
        <center><input type="image" name="txtBus" value="Buscar" width="130" height="45" src="https://cdn.discordapp.com/attachments/1060253839351103520/1164726555189190676/btnBuscar.png">
        </form>
    <?php
if(isset($_POST['txtBus_x']) && isset($_POST['txtBus_y'])){
    include("Conexion.php");
    $cnn = Conectar();
    $rut = $_POST['txtRut'];

    // Buscar al alumno por RUT
    $query = "SELECT * FROM alumnos WHERE RUT = '$rut'";
    $result = mysqli_query($cnn, $query);

    if (mysqli_num_rows($result) > 0) {
        $alumno = mysqli_fetch_assoc($result);
        $nombre = $alumno['NOMBRE'];
        $apellido = $alumno['APELLIDO'];
        $fnac = $alumno['FNAC'];
        $curso = $alumno['CURSO'];
        $direccion = $alumno['DIRECCION'];

        // Mostrar datos del alumno
        echo "<h2>Datos del Alumno</h2>";
        echo "<p>RUT: $rut</p>";
        echo "<p>Nombre: $nombre $apellido</p>";
        echo "<p>Fecha de Nacimiento: $fnac</p>";
        echo "<p>Curso: $curso</p>";
        echo "<p>Dirección: $direccion</p>";

        // Buscar anotaciones del alumno
        $query = " SELECT * FROM `alumnos` WHERE='$rut'";
        $result = mysqli_query($cnn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<h2>Anotaciones del Alumno</h2>";
            echo "<table border='1'>";
            echo "<tr><th>N° Anotación</th><th>Descripción</th><th>Fecha</th><th>Hora</th><th>Tipo Anotación</th><th>Funcionario</th><th>Asignatura</th></tr>";

            while ($anotacion = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$anotacion['N°ANOTACIONES']."</td>";
                echo "<td>".$anotacion['DESCRIPCION']."</td>";
                echo "<td>".$anotacion['FECHA']."</td>";
                echo "<td>".$anotacion['HORA']."</td>";
                echo "<td>".$anotacion['TIPO_ANOTACION']."</td>";
                echo "<td>".$anotacion['FUNCIONARIO']."</td>";
                echo "<td>".$anotacion['ASIGNATURA']."</td>";
                echo "</tr>";
            }
            if (mysqli_num_rows($result) > 0) {
                // Resto del código para mostrar datos y anotaciones
            } else {
                echo "El RUT ingresado no corresponde a ningún alumno.";
            }
            

            echo "</table>";
        } else {
            echo "Este alumno no tiene anotaciones.";
        }
    } else {
        echo "El RUT ingresado no corresponde a ningún alumno.";
    }


    mysqli_close($cnn);
}
?>
</body>
</html>


