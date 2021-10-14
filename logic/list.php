<?php

include("./logic/con_db.php");

try {
    $usuarios = $conex->query("SELECT * FROM user", MYSQLI_USE_RESULT);
} catch (Exception $e) {
}
