<?php
include("conexion.php");
$con=conectar();

$codigo_alumno=$_POST['codigo_alumno'];
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];


$sql="INSERT INTO alumno VALUES('$codigo_alumno','$id','$nombre','$apellido')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>