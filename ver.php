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

<?php 
$sku=$_GET['sku'];

 require ("php/conexion.php");
  $sentencia1 =  "SELECT productos.nombre,productos.sku,productos.descripcion,productos.valor,productos.tienda,productos.imagen,tienda.nombre as nombre_ca,tienda.id FROM productos INNER JOIN tienda on tienda.id=productos.tienda WHERE productos.sku='".$sku."'";
  $query1= mysqli_query($conexion,$sentencia1);
      while ($arreglo1= mysqli_fetch_array($query1))
      {
               
               
              
                              $nombre=$arreglo1["nombre"];
                              $sku=$arreglo1["sku"];
                              $descripcion=$arreglo1["descripcion"];
                            $valor=$arreglo1["valor"];
                            $id=$arreglo1["id"];
                        $nombre=$arreglo1["nombre"];
                        $nombre_ca=$arreglo1["nombre_ca"];


          }

 ?>
<div class="col s10" style="margin-left: 24%;">
    

<section>
    
<form name="formu" method="post" action="" enctype="multipart/form-data" onsubmit="return validar(this);"  style="
    
"><br><br>
<div class="container">
<div class="row">


 <div class="input-field col s12">
    
    <input id="nombre" name="nombre" type="text"   value="<?php echo $nombre ?>" style="
background-color: #ffffffa6;
    border-style: outset;
    border-color: #a9a9a969;
  height: 42px;
    border-radius: 3px;
    border: 1px solid #D1D1D1;
    outline: 0;
    margin-top: -44px;">

</div>

 <div class="input-field col s12">
    
    <input id="sku" name="sku" type="text"   value="<?php echo $sku ?>"  style="
background-color: #ffffffa6;
    border-style: outset;
    border-color: #a9a9a969;
  height: 42px;
    border-radius: 3px;
    border: 1px solid #D1D1D1;
    outline: 0;
    margin-top: -44px;">

</div>

 <div class="input-field col s12">
          <textarea id="descripcion" name="descripcion"  class="materialize-textarea" style="background-color: #ffffffa6;
    border-style: outset;
    border-color: #a9a9a969;
      height: 233px;
    border-radius: 3px;
    border: 1px solid #D1D1D1;
    outline: 0;
    margin-top: -11px;
"><?php echo $descripcion ?>"</textarea>
        </div>

         <div class="input-field col s12">
    
    <input id="valor" name="valor" type="number"   value="<?php echo $valor ?>"  style="
background-color: #ffffffa6;
    border-style: outset;
    border-color: #a9a9a969;
  height: 42px;
    border-radius: 3px;
    border: 1px solid #D1D1D1;
    outline: 0;
    margin-top: -44px;">

</div>


<?php 
  require ("php/conexion.php");
  $sentencia = "SELECT tienda.nombre, tienda.id FROM tienda ";
  $query= mysqli_query($conexion,$sentencia);
?>
        <div class="input-field col l6">
          

    <select  name="boxBuscar5" id="boxBuscar5" >
      <option value="0" selected><?php echo $nombre_ca ?></option>
      <?php 
      while ($arreglo= mysqli_fetch_array($query))
      {
      echo"<option value='".$arreglo["id"]."'>".$arreglo["nombre"]."</option>";
    }?>
    </select>
  </div>


            

</div>
<div class="col l12"><br>

<button class="waves-effect waves-light btn" type="submit"  value="ingresar" id="subir_producto"   name="subir_producto">Actualizar</button>  
    </div>
</div>

      
<?php 
include_once 'php/conf_archivo.php';
include_once 'php/conexion.php';

if (isset($_POST['subir_producto'])) {
    

 $nombre= $_POST['nombre'];
     $sku= $_POST['sku'];
     $descripcion= $_POST['descripcion'];
          $valor= $_POST['valor'];
     $boxBuscar5= $_POST['boxBuscar5'];


 $db=new Conect_MySql();
          


$regi2= "update  productos set  nombre ='".utf8_encode($nombre)."',descripcion ='".utf8_encode($descripcion)."',valor ='".$valor."',tienda ='".$boxBuscar5."'  where sku ='".$sku."'  ";  
                      
$db->execute($regi2);

             
echo '<script language = javascript>
  swal({
  title: "Se ha actualizado el registro con exito",
  text: "",
  confirmButtonColor: "#007dc0",
  confirmButtonText: "Ok!",
  closeOnConfirm: true
},
function(isConfirm){
  if (isConfirm) {
    window.location ="ver.php?sku='.$sku.'"
  } 
});
  </script>'; 


} 

?>

  
   </form>

</section>







</div>

 <style>
    .container-1 input#search::-webkit-input-placeholder {
   color: #65737e;
}
 
.container-1 input#search:-moz-placeholder { /* Firefox 18- */
   color: #65737e;  
}
 
.container-1 input#search::-moz-placeholder {  /* Firefox 19+ */
   color: #65737e;  
}
 
.container-1 input#search:-ms-input-placeholder {  
   color: #65737e;  
}
   .container-1{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}
     
     .container-1 input#search{
  width: 300px;
height: 44px;  background: #e1e3e8;
  border: none;
  font-size: 10pt;
  float: left;
  color: #63717f;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 25px;
}
    
    .container-1 .icon{
 position: absolute;
top: 0%;
margin-top: 11px;
z-index: 1;
color: #15181a;
left: 10px;
}
    
    </style>


</div>
       

   





<?php 
include("footer.php")
?>


  
  </body>
</html>

