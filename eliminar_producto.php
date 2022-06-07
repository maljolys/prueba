<!DOCTYPE html>
<html>
<head>
 <link href="sweetalert/css/main.css" rel="stylesheet">
    <!-- Scroll Menu -->
    <link href="sweetalert/css/sweetalert.css" rel="stylesheet">
	<title></title>
</head>
<body>
 <script src="sweetalert/js/functions.js"></script>
    <!-- Sweet Alert Script -->
    <script src="sweetalert/js/sweetalert.min.js"></script>

<?php 
/* declaro todos los archivos que necesitare para invocar la funcion */
	require("php/registro_usuario_perfil.php");
	$objFormulario = new Formulario();
	$mensajeExito="Registro Exitoso";
	$mensajeError="Error al Registrar: Datos Incompletos";	
	//---------------------------------------------------------------------------------------------------------------------------	
	//-------------------------ELIMINAR USUARIO-------------------------	
	if(isset($_GET["eliminar"])){
		?>
<script>
swal({
	
	title: "¿Deseas eliminar este producto?", 
  text: "",
  ttype: "warning",   
  showCancelButton: true,   
  confirmButtonColor: "#0072c0",
  confirmButtonText: "Si",   
cancelButtonText: "No",  
 closeOnConfirm: false,   
		closeOnCancel: false 
},
function(isConfirm){
  if (isConfirm) {
    location.href="eliminar_producto.php?confirmacion=si&codigo_user=<?php echo $_GET["sku"]; ?>";
  }else{
   location.href="index.php";

  	}
/* de confirmar que voy a eliminar pasos mis parametros a mi funcion */
});
	</script>

		
		<?php
	}
	if(isset($_GET["confirmacion"])){
		$objFormulario->eliminar_user2_1($_GET["codigo_user"]);
		/* envios mis parametros a mi funcion*/
	}	
?>


</body>

</html>