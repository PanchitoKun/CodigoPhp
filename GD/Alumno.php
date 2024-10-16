<?php
  session_start();

  if (!isset($_SESSION['tipo'])) {
    session_destroy();
    header("Location: index.php");
  }

  if (isset($_POST['cerrarSesion'])) {
    session_destroy();
    header("Location: index.php");
    exit;
  }

?>
<html>
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="imagen/jpg" href="Img/Logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>Perfil de Alumno</title>
  <style>
            body {
                background: #f5f5f5;
                font-family: 'Arial', sans-serif;
            }

            .container {
                background: #fff;
                border-radius: 5px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                margin-top: 20px;
                padding: 30px;
            }

            .profile-img {
                width: 150px;
                height: 190px;
                border: 5px solid #fff;
                border-radius: 50%;
                display: block;
                margin: 0 auto 20px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            }

            .personal-details {
                background: #212F3C;
                color: #fff;
                padding: 20px;
                border-radius: 5px;
            }

            .nota {
                font-weight: bold;
                color: #e67e22;
            }

            .anotacion-positiva {
                color: #27ae60;
            }

            .anotacion-negativa {
                color: #c0392b;
            }
        </style>
    </head>
    <body>
        <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
            
<form method="post" action="">
        <button type="submit" name="cerrarSesion" class="btn btn-link">
          <img src="https://cdn.discordapp.com/attachments/1060253839351103520/1176691248837439581/X.png" width="60" height="60" alt="Cerrar Sesión">
        </button>
      </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                </div>
            </div>
        </nav>
        <div class="container">
            <h1 class="display-4 text-center">Perfil de Alumno</h1>
            <hr>

            <div class="row">
                <div class="col-md-6 personal-details">
                    <h2 class="h4">Datos Personales</h2>
                    <ul>
                        <li><strong>Nombre:</strong> Nombre del Alumno</li>
                        <li><strong>Curso:</strong> Curso del Alumno</li>
                        <li><strong>Fecha de Nacimiento:</strong> Fecha de Nacimiento del Alumno</li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <img src="Img/Matilde.png" class="img-fluid profile-img" alt="Foto del Alumno">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h2 class="h4">Notas</h2>
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Materia</th>
                                <th>Nota</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Materia 1</td>
                                <td class="nota">Nota 1</td>
                            </tr>
                            <tr>
                                <td>Materia 2</td>
                                <td class="nota">Nota 2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    <h2 class="h4">Anotaciones</h2>
                    <ul>
                        <li class="anotacion-positiva">Positivas: Anotación Positiva 1</li>
                        <li class="anotacion-positiva">Positivas: Anotación Positiva 2</li>
                        <li class="anotacion-negativa">Negativas: Anotación Negativa 1</li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
    <?php
if(isset($_POST['txtCer_x']) && isset($_POST['txtCer_y'])){
	session_destroy();
	header("Location: index.php");
	exit;
	}
?>
</html>