<?php 
		class Conexion{
			var $host;//variables declaradas 
			var $usuario;
			var $contrasena;
			var $baseDatos;
		
			function Conexion(){
				$this->host="localhost"; //
				$this->usuario="tienda"; //usuario que tengas definido
				$this->contrasena="tienda"; //contraseña que tengas definidad
				$this->baseDatos="prueba_m"; //base de datos personas, si quieres utilizar otra base de datos solamente cambiala
			}
			
			function conectarse(){//funcion 
				$enlace = mysqli_connect($this->host, $this->usuario, $this->contrasena, $this->baseDatos);
				
			 mysqli_set_charset($enlace,'utf8');
				mysqli_query($enlace,"SET NAMES 'utf8'"); 
				//le pasamos los parametros declarado a la funcion mysql, 
				//para asignarla luego a la variable enlace
				if($enlace){
					//echo "Conexion exitosa";	//si la conexion fue exitosa nos muestra este mensaje como prueba, despues lo puedes poner comentarios de nuevo: //
				}else{
					die('Error de Conexión (' . mysqli_connect_errno() . ') '.mysqli_connect_error());
				}
				return($enlace);
				mysqli_close($enlace); //cierra la conexion a nuestra base de datos, un ounto de seguridad importante.
	//mysql_set_charset('utf8');		


			}

		}

?>
