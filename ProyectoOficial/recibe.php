<?php

$usuario = $_POST["nombre"];
$password = $_POST["contraseña"];

if ($usuario == "admin" && $password == "admin") {
    echo "<h1>Haz iniciado sesión correctamente</h1>";
    
}
else{
    echo "<h1>Credenciales incorrectas</h1>";
    
}

?>