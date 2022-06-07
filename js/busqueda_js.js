$(function(){
	
	
	
	$('#search1').on('keyup',function(){
		var dato = $('#search1').val();
		var url = 'php/busca_libros.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'dato='+dato,
		success: function(datos){
			$('#resultado_busqueda').html(datos);
		}
	});
	return false;
	});
	
});

function editarProducto(id){
	var url = '../php/editar_producto.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(valores){
				var datos = eval(valores);
				$('#cedula_client').val(id);
				$('#cedula_client').val(datos[0]);
				$('#nombre').val(datos[1]);
				$('#apellido').val(datos[2]);
				$('#cedula').val(datos[0]);
				  $('#modal4').openModal();
			  $('#modal2').closeModal();
			return false;
		}
	});
	return false;
}