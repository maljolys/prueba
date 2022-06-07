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

    <div class="input-field col s6">
    
    <input id="interno_tienda" name="interno_tienda" type="text" placeholder="Id de la tienda" required class="validate"  style="
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
    
    <input id="nombre" name="nombre" type="text" placeholder="Nombre de la tienda" required class="validate"  style="
background-color: #ffffffa6;
    border-style: outset;
    border-color: #a9a9a969;
  height: 42px;
    border-radius: 3px;
    border: 1px solid #D1D1D1;
    outline: 0;
    margin-top: -44px;">

</div>
        <div class="input-field col s6">


 <input id="fecha" name="fecha" type="text" placeholder="23/04/2022" required class="validate"  style="
background-color: #ffffffa6;
    border-style: outset;
    border-color: #a9a9a969;
  height: 42px;
    border-radius: 3px;
    border: 1px solid #D1D1D1;
    outline: 0;
    margin-top: -44px;">

</div>
</div>
<div class="col l12"><br>

<button class="waves-effect waves-light btn" type="submit"  value="ingresar" id="subir_producto"   name="subir_producto">Enviar</button>  
    </div>
</div>

      
<?php 
include_once 'php/conf_archivo.php';
include_once 'php/conexion.php';

if (isset($_POST['subir_producto'])) {
    
     $nombre= $_POST['nombre'];
     $fecha= $_POST['fecha'];
     $interno_tienda= $_POST['interno_tienda'];

$hora=date("i");
$fechaActual = date('Y-m-d');

    $sql="select id from  tienda where  id ='".$interno_tienda."'";      
$rs=mysqli_query($conexion, $sql);
      $i=0;
      if(mysqli_num_rows($rs)>0){

  
 echo '<script language = javascript>
  swal({
  title: "Id de tienda duplicado, por favor revise",
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

$patron='/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/';

if (preg_match($patron, $fecha)) {


             $nombre= $_POST['nombre'];
     $fecha= $_POST['fecha'];
     $interno_tienda= $_POST['interno_tienda'];

                
            
            $db=new Conect_MySql();
          
      $regi = "insert into   tienda (id,nombre,fecha_apertura) values ('".$interno_tienda."','".utf8_encode($nombre)."','".$fecha."')";  
      $ranting="0";
         
$db->execute($regi);

             
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
    window.location ="index.php"
  } 
});
  </script>'; 


} else {
    echo '<script language = javascript>
  swal({
  title: "Fecha incorrecta",
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
}


 } }      
    
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

