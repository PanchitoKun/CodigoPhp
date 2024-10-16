<?php
    function Conectar(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $bd   = "prueba_anotaciones";
        $cnn = mysqli_connect( $host , $user , $pass );
        mysqli_select_db( $cnn , $bd );
        return $cnn;
    }
?> 