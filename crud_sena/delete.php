<?php

include("conexion.php");
$con=conectar();

$codigo_alumno=$_GET['id'];

$sql="DELETE FROM alumno  WHERE codigo_alumno='$codigo_alumno'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>