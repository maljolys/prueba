<?php
$conexion = mysqli_connect('localhost', 'tienda', 'tienda','prueba_m');
mysqli_select_db($conexion,'prueba_m');
mysqli_set_charset($conexion,'utf8');
mysqli_query($conexion,"SET NAMES 'utf8'"); 
?>