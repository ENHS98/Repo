<?php
session_start();

if (!$_SESSION['personas'])
{
  $_SESSION['personas']=[];
}
$nombre="";
$apellido="";
$fechanac="";
if ($_POST)
{
   array_push($_SESSION['personas'],
   [
     "nombre"=> $_POST['nombre'],
     "apellido"=> $_POST['apellido'],
     "fechanac"=> $_POST['fechanac'],
    ] );
   $nombre= $_POST['nombre'];
   $apellido= $_POST['apellido'];
   $fechanac= $_POST['fechanac'];
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h3>Ingresa tus datos</h3>
    <div id="formulario">
      <form class="" action="formulario.php" method="post">
        <input type="text" name="nombre" value="" placeholder="Nombre">
        <input type="text" name="apellido" value="" placeholder="Apellido">
        <input type="date" name="fechanac" value="" placeholder="ingrese Fecha de Nacimiento">
        <button type="submit" name="boton">Enviar</button>
      </form>   
<table>
  <thead>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Fecha Nac.</th>
  </thead>
<tbody>

<?php
$personas=$_SESSION['personas'];
foreach ($personas as $key => $value) { ?>
  <tr>
      <td><?php echo $value['nombre']; ?></td>
      <td><?php echo $value['apellido']; ?></td>
      <td><?php echo $value['fechanac']; ?></td>
<?php } ?>

  </tr>
</tbody>
</table>
<a href="finalizar.php">Cerrar Session</a>
    </div>
  </body>
</html>
