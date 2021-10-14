<?php
try {

    if ($conex = mysqli_connect("localhost", "root", "", "login_prueba")) {
        //do something
    } else {
        throw new Exception('Unable to connect');
    }
} catch (Exception $e) {
    echo "<h1>Se produjo un error al conectar a la base de datos.</h1>";
    die();
}
