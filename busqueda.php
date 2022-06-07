<?php 
include("menu.php")
?>
   
<html>
  <body> 
   <div class="row">
<div class="col l2">
<nav> <!-- navbar content here  --> </nav>

  <ul id="nav-mobile" class="sidenav sidenav-fixed" style="width: 350px;box-shadow: 4px 4px 3px 1px #cecccc;">
  
    <li><a href="index.php" style="background-color: white;color: #46baeb;"><i class="material-icons" style="color: #46baeb;">home</i>Inicio</a></li><br>


 
    <li><a href="tienda.php" style="color: white;"><i class="material-icons" style="color: white;">assignment</i>Registro de tienda</a></li><br>


    <li><a href="productos.php" style="color: white;"><i class="material-icons" style="color: white;">assignment</i>Registro de productos</a></li><br>

  
    <li><a href="busqueda.php" style="color: white;"><i class="material-icons" style="color: white;">assignment</i>Busquedas</a></li><br>
       
    

  </ul>

</div>


<div class="col s10" style="margin-left: 24%;">

<section>
    
<?php 
/* select de los productos agregados*/
include_once 'php/conexion.php';
 $sql="SELECT productos.nombre,productos.sku,productos.descripcion,productos.valor,productos.tienda,productos.imagen,tienda.nombre as nombre_tienda FROM productos INNER JOIN tienda on tienda.id=productos.tienda";
      $rs=mysqli_query($conexion, $sql);
      $i=0;
      if(mysqli_num_rows($rs)<1){
        echo ""; 
      }else{
    
       echo "<table border='3' align='center' class='responsive-table'  >";
       echo "<thead>
       <tr>
      <center>Productos</center>
<th>Sku</th>
 <th>Valor</th>
 <th>Tienda</th>
 <th>Editar</th>
 <th>Eliminar</th>


                              

           </tr>
        </thead>";
       while ($row = mysqli_fetch_array($rs)){ 

      echo '
    <tbody>
       <tr> 
    
          <td>'.$row['sku'].'</td>
               
               
        <td>'.number_format($row['valor'],2).'</td>
                
                                <td>'.$row['nombre_tienda'].'</td>


 <td><a href="ver.php?sku='.$row["sku"].'"><i class="material-icons" style="
    color: #2c7593;">announcement</a></i></td> 

    <td><a href="eliminar_producto.php?eliminar=si&sku='.$row["sku"].'"><i class="material-icons" style="
    color: #2c7593;">announcement</a></i></td>

';
}

}
/* 1 ver resultados
2 eliminar resultado */
 ?>

</section>







</div>

<?php 
include("footer.php")
?>


</div>
       

   


<br><br><br><br><br><br>





  
  </body>
</html>

