function objetoAjax(){
        var xmlhttp=false;
        try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
                try {
                   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (E) {
                        xmlhttp = false;
                }
        }

        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
                xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
}
//------------------------------------------------------------------------------------------------------
function ajax_(datos){
     $('#modal1').openModal()
     dismissible: true
        divResultado = document.getElementById('resultado');
        ajax=objetoAjax();
		//alert(datos);
        ajax.open("POST", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                        LimpiarCampos();
                }
        }
        ajax.send(null)
}
//------------------------------------------------------------------------------------------------------
function ajax_2(datos){
    
        divResultado = document.getElementById('resultado_2');
        ajax=objetoAjax();
		//alert(datos);
        ajax.open("POST", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                        LimpiarCampos();
                }
        }
        ajax.send(null)
}
//------------------------------------------------------------------------------------------------------
function ajax_3(datos){
        divResultado = document.getElementById('resultado_3');
        ajax=objetoAjax();
		//alert(datos);
        ajax.open("POST", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                        LimpiarCampos();
                }
        }
        ajax.send(null)
}
//------------------------------------------------------------------------------------------------------
function ajax_4(datos){
        divResultado = document.getElementById('resultado_4');
        ajax=objetoAjax();
		//alert(datos);
        ajax.open("POST", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                        LimpiarCampos();
                }
        }
        ajax.send(null)
}
//------------------------------------------------------------------------------------------------------
function ajax_5(datos){
        divResultado = document.getElementById('resultado_5');
        ajax=objetoAjax();
		//alert(datos);
        ajax.open("´POST", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                        LimpiarCampos();
                }
        }
        ajax.send(null)
}
function LimpiarCampos(){
    document.formu.cedula_emple.value="";
    document.formu.nombre.value="";
    document.formu.apellido.value="";
     document.formu.direccion.value="";
    document.formu.telefono.value="";
    document.formu.cedula_emple.focus();
}