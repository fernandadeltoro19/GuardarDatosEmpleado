<?php
$idEmpleado = $_POST["idEmpleado"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empleados";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM empleados WHERE idEmpleado='" . $idEmpleado . "'";

if (mysqli_query($conn, $sql)) 
{
  $conn->close();
  header("location:tabladeEmpleados.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>