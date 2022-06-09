<?php
require ("db_config.php")
require ("hasher.php")

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$password = $_POST["password"];
$hasheada = hash_password($password);


$sql_statement = "INSERT INTO usuarios(nombre,apellido,email,password) VALUES ($1, $2, $3, $4)"
$result = pg_query_params($db_conn, $sql_statement, array($nombre, $apellido, $email, $hasheada));

if ($result) (
    echo("Registrado con exito!");
)
?>
