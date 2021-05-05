<?php
$conexion = mysqli_connect('localhost','root','','BD1') or die("Error al conectarse" .mysqli_error($conexion).header("location:error.html"));

header("location:bienvenidos.html");
echo("se ha conectado a la base de datos")
?>