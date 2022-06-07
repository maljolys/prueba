<?php 
/* llamo   las librerias de mi menu*/
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
<div class="col s10">
    
<center><img src="imagenes/personas-pie-cola-tienda_23-2148594615.jpg" width="600" height="400"></center>

<section>
    


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

