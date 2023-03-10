<!DOCTYPE html>
<html>
<title>Resultados</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link href="estilo.css" rel="stylesheet">
<head>
</head>
<body>
<h1>Resultados</h1>
<div>
<?php
    require_once('config.ing.php');
    $conn = new mysqli($servername,$username,$password,$dbname);
    $consulta="select * from empleados";
    $datos = $conn->query($consulta);
    echo "<table class ='table table-striped table-dark'>";
    echo "
    <th scope=col>idEmpleado</th>
    <th scope=col>Nombre</th>
    <th scope=col>ApellidoPaterno</th>
    <th scope=col>ApellidoMaterno</th>
    <th scope=col>Telefono</th>
    <th scope=col>Correo</th>
    <th scope=col>estatus</th>
    <th scope=col></th>";

    while ($registro = $datos->fetch_assoc()) 
    {
        echo "<tr>";
        echo "<td class='table-secondary'>".$registro["idEmpleado"]."</td>";
        echo "<td class='table-secondary'>".$registro["Nombre"]."</td>";
        echo "<td class='table-secondary'>".$registro["ApellidoPaterno"]."</td>";
        echo "<td class='table-secondary'>".$registro["ApellidoMaterno"]."</td>";
        echo "<td class='table-secondary'>".$registro["Telefono"]."</td>";
        echo "<td class='table-secondary'>".$registro["Correo"]."</td>";
        echo "<td class='table-secondary'>".$registro["estatus"]."</td>";
        echo "<td class='table-secondary'>
                  <form action='eliminarDatos.php' method='post'>
                      <input type='hidden' name='idEmpleado' value='".$registro["idEmpleado"]."'>
                      <input class='btn btn-primary' type='submit' name='eliminar_".$registro["idEmpleado"]."' value='Eliminar'>
                  </form>
              </td>";
        echo "<td class='table-secondary'></td>"; 
        echo "<tr/>";
        echo "</div>";
    }
echo "</table>";
$conn->close();
?>

<form action="FormularioDatos.html" method="get">
    <input class="btn btn-primary" type="submit" value="Insertar">
</form>
</body>
</html>