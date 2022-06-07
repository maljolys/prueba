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
    
<form name="formu" method="post" action="" enctype="multipart/form-data" onsubmit="return validar(this);"  style="
    
"><br><br>
<div class="container">
<div class="row">


 <div class="input-field col s12">
    
    <input id="nombre" name="nombre" type="text" placeholder="Nombre del producto" required class="validate"  style="
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
    
    <input id="sku" name="sku" type="text" placeholder="SKU" required class="validate"  style="
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
          <textarea id="descripcion" name="descripcion" required placeholder="Descripción" class="materialize-textarea" style="background-color: #ffffffa6;
    border-style: outset;
    border-color: #a9a9a969;
      height: 233px;
    border-radius: 3px;
    border: 1px solid #D1D1D1;
    outline: 0;
    margin-top: -11px;
"></textarea>
        </div>

         <div class="input-field col s12">
    
    <input id="valor" name="valor" type="text" placeholder="Valor" required class="validate"  style="
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
      <option value="0" selected>Tienda</option>
      <?php 
      while ($arreglo= mysqli_fetch_array($query))
      {
      echo"<option value='".$arreglo["id"]."'>".$arreglo["nombre"]."</option>";
    }?>
    </select>
  </div>


            <div class="input-field col l12">

 <div class="file-field input-field">
      <div class="btn">
        <span>Subir Foto</span>
        <input type="file" multiple="" name="foto">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" >
      </div>
    </div>
        </div>

</div>
<div class="col l12"><br>

<button class="waves-effect waves-light btn" type="submit"  value="ingresar" id="subir_producto"   name="subir_producto">Enviar</button>  
    </div>
</div>

      
<?php 
include_once 'php/conf_archivo.php';/* variables  */
include_once 'php/conexion.php';/* variables */

if (isset($_POST['subir_producto'])) {
    
    
$hora=date("i");
$fechaActual = date('Y-m-d');
    $nombre_archivo = $_FILES['foto']['name'];

    /* aplicamos una reduccion en el tamaño de la imagen  */
if ($_FILES["foto"]["size"] > 300000) {
    $ruta_n = $_FILES["foto"]["tmp_name"];
    $porcentaje = 0.5;
    list($ancho, $alto) = getimagesize($ruta_n);
    $nuevo_ancho = $ancho * $porcentaje;
    $nuevo_alto = $alto * $porcentaje;
    //Redimensionar
    $imagen_p = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
    $imagen = imagecreatefromjpeg($ruta_n);
    imagecopyresampled($imagen_p, $imagen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
    /* Sobreescribimos la imagen original con la reescalada */
    imagejpeg($imagen_p, $ruta_n);
    /* Actualizo el tamaño al que tiene la imagen reescalada */
                    $ruta =$_FILES['foto']['size']= filesize($ruta_n);

 }else{

      $ruta_n = $_FILES["foto"]["tmp_name"];

 }

     $destino = "productos/" . $nombre_archivo; /* guardamos la imagen en la ruta dada */
if ($nombre_archivo != ""){
        if (copy($ruta_n, $destino)) { 
 $nombre= $_POST['nombre'];
     $sku= $_POST['sku'];
     $descripcion= $_POST['descripcion'];
          $valor= $_POST['valor'];
     $boxBuscar5= $_POST['boxBuscar5'];

$sql="select sku from  productos where  sku ='".$sku."'";     /* validamos que no se repita el producto */  
$rs=mysqli_query($conexion, $sql);
      $i=0;
      if(mysqli_num_rows($rs)>0){

  
 echo '<script language = javascript>
  swal({
  title: "Id del producto ya esta publicado, por favor revise",
  text: "",
  confirmButtonColor: "#007dc0",
  confirmButtonText: "Ok!",
  closeOnConfirm: true
},
function(isConfirm){
  if (isConfirm) {
    window.location ="index.php"
  } 
});
  </script>';  

    }else{

$patron='/^[[:digit:]]+$/';  /* patron para permitir solo numero */

if (preg_match($patron, $valor)) {/* validamos que el valor introducido cumplan con el patron dado */



 $db=new Conect_MySql();/* conexion */
         
/* insertamos valores */

      $regi = "insert into   productos (nombre,sku,descripcion,valor,tienda,imagen) values ('".utf8_encode($nombre)."','".$sku."','".utf8_encode($descripcion)."','".$valor."','".$boxBuscar5."','".$nombre_archivo."')";  
         
$db->execute($regi);/* ejecutamos la sentencia*/


/* Monstramos el mensaje de exito */
             
echo '<script language = javascript>
  swal({
  title: "Se ha subido el registro con exito",
  text: "",
  confirmButtonColor: "#007dc0",
  confirmButtonText: "Ok!",
  closeOnConfirm: true
},
function(isConfirm){
  if (isConfirm) {
    window.location ="productos.php"
  } 
});
  </script>'; 


}else{

     echo '<script language = javascript>
  swal({
  title: "Valor incorrecto",
  text: "",
  confirmButtonColor: "#007dc0",
  confirmButtonText: "Ok!",
  closeOnConfirm: true
},
function(isConfirm){
  if (isConfirm) {
    window.location ="productos.php"
  } 
});
  </script>'; 
}


}  

}}else{
     echo '<script language = javascript>
            swal("Error, no se ha podido subir el archivo , por favor verifique.")
  </script>';
        }

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

