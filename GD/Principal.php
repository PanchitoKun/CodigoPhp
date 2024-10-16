<?php
  session_start();

	if(! isset($_SESSION['tipo'])){
		session_destroy();
		header("Location: index.php");
	}
    
    if (isset($_GET['cerrarSesion'])) {
        session_destroy();
        header("Location: index.php");
        exit;
    }

?>
<html>
    <head>
        <title>GD Index</title>
        <link rel="icon" type="image/png" href="https://cdn.discordapp.com/attachments/1060253839351103520/1163572436684505098/latest.png">
<!-- ESTO ES EL FONDO DE LA PAGINA -->

        <style>
            body{
                background-image: url("https://cdn.discordapp.com/attachments/1060253839351103520/1163594283526389820/MANU.gif");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
        </style> 
    </head>

    <a href="?cerrarSesion=1"><input type="image" name="txtCer" value="Cerrar" width="60" height="60" src="https://cdn.discordapp.com/attachments/1060253839351103520/1176691248837439581/X.png"></a>
        <body><nav></nav>
        <center>
<img id="image" width="1100" height="140" src="https://cdn.discordapp.com/attachments/1060253839351103520/1164718551039488050/ANOJAJA.png"></img>
    <body>
        <form method="post">
            <br>
            <br>
            <br>
            <?php error_reporting(0); ?>
            <a href="agregar.php"><img id="image" width="150" height="150" src="https://cdn.discordapp.com/attachments/1060253839351103520/1163581943405875342/Anadir.png"></a>
            <img id="image" width="60" height="60" src="https://cdn.discordapp.com/attachments/1060253839351103520/1163586257868312636/ESPACIOS.png">
            <a href="Buscar.php"><img id="image" width="200" height="200" src="https://cdn.discordapp.com/attachments/1060253839351103520/1163581958639591424/Buscar.png"></a>
            <img id="image" width="60" height="60" src="https://cdn.discordapp.com/attachments/1060253839351103520/1163586257868312636/ESPACIOS.png">
            <a href="Modificar.php"><img id="image" width="150" height="150" src="https://cdn.discordapp.com/attachments/1060253839351103520/1163581951442178069/Modificar.png"></a>
            
        </form>
    </body>
    <?php
if(isset($_POST['txtCer_x']) && isset($_POST['txtCer_y'])){
	session_destroy();
	header("Location: index.php");
	exit;
	}
?>
</html>

<audio autoplay loop>
            <source src="https://cdn.discordapp.com/attachments/1060253839351103520/1163581232135807086/menuLoop.mp3" type="audio/mpeg">
                <p>Tu navegador no soporta HTML5</p>
            </audio><br> 

            
            