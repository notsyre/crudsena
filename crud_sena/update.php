<?php

include("conexion.php");
$con=conectar();

$codigo_alumno=$_POST['codigo_alumno'];
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

$sql="UPDATE alumno SET id='$id',nombre='$nombre',apellido='$apellido' WHERE codigo_alumno='$codigo_alumno'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>