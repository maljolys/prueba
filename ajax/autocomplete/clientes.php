<?php
if (isset($_GET['term'])){
include("../../php/conexion3.php");
$return_arr = array();
/* If connection to database, run sql statement. */
if ($con)
{
	
	$fetch = mysqli_query("SELECT * FROM cliente where cedula_client like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,50"); 
	
	/* Retrieve and store in array the results of the query.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$cedula_client=$row['cedula_client'];
		$row_array['value'] = $row['cedula_client'];
		$row_array['cedula_client']=$cedula_clients;
		$row_array['nombre']=$row['nombre'];
		
		array_push($return_arr,$row_array);
    }
	
}

/* Free connection resources. */
mysqli_close($con);

/* Toss back results as json encoded array. */
echo json_encode($return_arr);

}
?>