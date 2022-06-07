
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
     $('#modal_mensaje').modal('open');
        divResultado = document.getElementById('resultado');
        ajax=objetoAjax();
        encoding:"UTF-8",
		//alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_respuesta(datos){
     $('#modal_mensaje5').modal('open');
        divResultado = document.getElementById('resultado');
        ajax=objetoAjax();
        encoding:"UTF-8",
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}
//------------------------------------------------------------------------------------------------------
function ajax_2(datos){
     $('#modal_mensaje1').modal('open');
        divResultado = document.getElementById('resultado_2');
        ajax=objetoAjax();
		//alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}


function ajax_ac7878(datos){
     $('#modal_mensaje_cantidad').modal('open');
        divResultado = document.getElementById('resultado_cantidad');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}


function ajax_3(datos){
     $('#modal_mensaje3').modal('open');
        divResultado = document.getElementById('resultado_3');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_busca(datos){
     $('#modal_buscalibro').modal('open');
        divResultado = document.getElementById('resultado_2');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}
//-
//------------------------------------------------------------------------------------------------------
function ajax_rechazar(datos){
     $('#modal_mensaje_rechazar').modal('open');
        divResultado = document.getElementById('resultado_rechazar');
        ajax=objetoAjax();
        encoding:"UTF-8",
		//alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}
function ajax_info(datos){
     $('#modal_mensaje3_info').modal('open');
        divResultado = document.getElementById('resultado_3_info');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}
function ajax_3_donaciones(datos){
     $('#modal_mensaje3_donaciones').modal('open');
        divResultado = document.getElementById('resultado_3');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}
//------------------------------------------------------------------------------------------------------
function ajax_4(datos){
    $('#modal4').modal('open');
        divResultado = document.getElementById('resultado_4');
        ajax=objetoAjax();
		//alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_4_menssaje_q(datos){
    $('#modal_mensaje_direc').modal('open');
        divResultado = document.getElementById('resultado_dd');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}



function ajax_carrito(datos){
    $('#modal_mensaje_carrito').modal('open');
        divResultado = document.getElementById('resultado_carri');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_actua_carr(datos){
    $('#modal_actuali_canti').modal('open');
        divResultado = document.getElementById('resultado_carri');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_ac7878(datos){
    $('#mensaje_registro_completo').modal('open');
        divResultado = document.getElementById('resultado_ss');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}


function ajax_acege8(datos){
    $('#modal_compra').modal('open');
        divResultado = document.getElementById('resultado_compra');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

//------------------------------------------------------------------------------------------------------
function ajax_5(datos){
    $('#modal5').modal('open');
        divResultado = document.getElementById('resultado_5');
        ajax=objetoAjax();
		//alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_6(datos){
    $('#modal6').modal('open');
        divResultado = document.getElementById('resultado_6');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_7(datos){
    $('#modal7').modal('open');
        divResultado = document.getElementById('resultado_7');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_8(datos){
    $('#modal8').modal('open');
        divResultado = document.getElementById('resultado_8');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_9(datos){
    $('#modal9').modal('open');
        divResultado = document.getElementById('resultado_9');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_10(datos){
    $('#modal10').modal('open');
        divResultado = document.getElementById('resultado_10');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}


function ajax_11(datos){
    $('#modal11').modal('open');
        divResultado = document.getElementById('resultado_11');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_12(datos){
    $('#modal12').modal('open');
        divResultado = document.getElementById('resultado_12');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_13(datos){
    $('#modal13').modal('open');
        divResultado = document.getElementById('resultado_13');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_14(datos){
    $('#modal14').modal('open');
        divResultado = document.getElementById('resultado_14');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_15(datos){
    $('#modal15').modal('open');
        divResultado = document.getElementById('resultado_15');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_16(datos){
    $('#modal16').modal('open');
        divResultado = document.getElementById('resultado_16');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_17(datos){
    $('#modal17').modal('open');
        divResultado = document.getElementById('resultado_17');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_18(datos){
    $('#modal18').modal('open');
        divResultado = document.getElementById('resultado_18');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_19(datos){
    $('#modal19').modal('open');
        divResultado = document.getElementById('resultado_19');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_20(datos){
    $('#modal20').modal('open');
        divResultado = document.getElementById('resultado_20');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_21(datos){
    $('#modal21').modal('open');
        divResultado = document.getElementById('resultado_21');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_22(datos){
    $('#modal22').modal('open');
        divResultado = document.getElementById('resultado_22');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}



function ajax_23(datos){
    $('#modal23').modal('open');
        divResultado = document.getElementById('resultado_23');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_24(datos){
    $('#modal24').modal('open');
        divResultado = document.getElementById('resultado_24');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_25(datos){
    $('#modal25').modal('open');
        divResultado = document.getElementById('resultado_25');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_26(datos){
    $('#modal26').modal('open');
        divResultado = document.getElementById('resultado_26');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_27(datos){
    $('#modal27').modal('open');
        divResultado = document.getElementById('resultado_27');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_28(datos){
    $('#modal28').modal('open');
        divResultado = document.getElementById('resultado_28');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_29(datos){
    $('#modal29').modal('open');
        divResultado = document.getElementById('resultado_29');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_30(datos){
    $('#modal30').modal('open');
        divResultado = document.getElementById('resultado_30');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_31(datos){
    $('#modal31').modal('open');
        divResultado = document.getElementById('resultado_31');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}



function ajax_32(datos){
    $('#modal32').modal('open');
        divResultado = document.getElementById('resultado_32');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}




function ajax_33(datos){
    $('#modal33').modal('open');
        divResultado = document.getElementById('resultado_33');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_34(datos){
    $('#modal34').modal('open');
        divResultado = document.getElementById('resultado_34');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_35(datos){
    $('#modal35').modal('open');
        divResultado = document.getElementById('resultado_35');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_36(datos){
    $('#modal36').modal('open');
        divResultado = document.getElementById('resultado_36');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_37(datos){
    $('#modal37').modal('open');
        divResultado = document.getElementById('resultado_37');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_38(datos){
    $('#modal38').modal('open');
        divResultado = document.getElementById('resultado_38');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}


function ajax_39(datos){
    $('#modal39').modal('open');
        divResultado = document.getElementById('resultado_39');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_40(datos){
    $('#modal40').modal('open');
        divResultado = document.getElementById('resultado_40');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_41(datos){
    $('#modal41').modal('open');
        divResultado = document.getElementById('resultado_41');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_42(datos){
    $('#modal42').modal('open');
        divResultado = document.getElementById('resultado_42');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_43(datos){
    $('#modal43').modal('open');
        divResultado = document.getElementById('resultado_43');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_44(datos){
    $('#modal44').modal('open');
        divResultado = document.getElementById('resultado_44');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_45(datos){
    $('#modal45').modal('open');
        divResultado = document.getElementById('resultado_45');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}

function ajax_46(datos){
    $('#modal1').modal('open');
        divResultado = document.getElementById('resultado_1');
        ajax=objetoAjax();
        //alert(datos);
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        divResultado.innerHTML = ajax.responseText
                }
        }
        ajax.send(null)
}