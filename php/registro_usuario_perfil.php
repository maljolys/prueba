<?php
	require "entrada.php";

	class Formulario{
		var $conn;
		var $conexion;
		var $mensajeExito;
		var $mensajeError;
		function Formulario(){
			$this->conexion= new  Conexion();				
			$this->conn=$this->conexion->conectarse();
			$this->mensajeExito="Registro Exitoso";
			$this->mensajeError="Error al Registrar";
		}
		//---------------------------------------------------------------------------------------------------------------------------		
	/* recibo mis parametro y procedo a eliminar */
function eliminar_user2_1($pk){
            $queryDelete = "delete from  productos where sku ='".$pk."'";
            $delete =mysqli_query($this->conn, $queryDelete);
            if($delete){                                                
                echo '<script language = javascript>
                swal({
  title: "Se ha eliminado sastifactoriamente el producto",
  text: "",
  type: "warning",
  confirmButtonColor: "#1e88e5",
  confirmButtonText: "Regresar!",
  closeOnConfirm: false
},
function(isConfirm){
  if (isConfirm) {
    window.location ="../index.php"
  } 
});
    </script>';             
            


            }else{
                echo 'swal({
  title: "No se ha eliminado la información del sistema",
  text: "",
  type: "warning",
  confirmButtonColor: "#1e88e5",
  confirmButtonText: "Regresar!",
  closeOnConfirm: false
},
function(isConfirm){
  if (isConfirm) {
    window.location ="../index.php"
  } 
});
    </script>'; 
                }
        }







}

	

?>

		</body>
</html>