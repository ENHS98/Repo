<?php
$res=mostrarCiudades($link);
 ?>
 <h3>Ciudades</h3>
 <table>
   <thead>

   </thead>
   <tbody>
       <colspan="2"><a href="index.php?mod=new" class="btn btn-primary" disabled >Nuevo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg></a>
     <?php
     while ($data=mysqli_fetch_array($res))
     {
    include 'cardC.vw.php';
}
?>


   </tbody>
 </table>
