<?php
$nombre=$_GET["nombre"];
$ApellidoPaterno=$_GET["ApellidoPaterno"];
$ApellidoMaterno=$_GET["ApellidoMaterno"];
$Telefono=$_GET["Telefono"];
$Correo=$_GET["Correo"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empleados";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO empleados (nombre, ApellidoPaterno, ApellidoMaterno, Telefono, Correo)
VALUES ('".$nombre."', '".$ApellidoPaterno."', '".$ApellidoMaterno."', '".$Telefono."', '".$Correo."')";


if ($conn->query($sql) === TRUE) 
{
  $conn->close();
  header("location:tabladeEmpleados.php");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

//Ctrl+D Selecciona las siguientes palabras
//Shift+Alt Selecion de los caracteres
?>