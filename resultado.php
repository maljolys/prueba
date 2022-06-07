<?php 
include("menu.php")
?>

<body>
<style type="text/css">
  input:not([type]), input[type=text]:not(.browser-default), input[type=password]:not(.browser-default), input[type=email]:not(.browser-default), input[type=url]:not(.browser-default), input[type=time]:not(.browser-default), input[type=date]:not(.browser-default), input[type=datetime]:not(.browser-default), input[type=datetime-local]:not(.browser-default), input[type=tel]:not(.browser-default), input[type=number]:not(.browser-default), input[type=search]:not(.browser-default), textarea.materialize-textarea {
    background-color: transparent;
    border: none;
    /* border-bottom: 1px solid #9e9e9e; */
    border-radius: 0;
    outline: none;
    height: 3rem;
    width: 100%;
    font-size: 16px;
    margin: 2px 0px 2px 0;
    padding: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-transition: border .3s, -webkit-box-shadow .3s;
    transition: border .3s, -webkit-box-shadow .3s;
    transition: box-shadow .3s, border .3s;
    transition: box-shadow .3s, border .3s, -webkit-box-shadow .3s;
    padding-left: 0px;
    margin-left: -117px;
}

</style>

 
<center>
<div class="container">
 <br><br>

 <?php 
 
 $letras = ["Bienvenidos", "a", "Treda", "Solutionesyyyy"];
 $len = 0;

    // Obtienes el string mas largo 
    for ($i = 0; $i < sizeof($letras); $i++) {
        if ($len < strlen($letras[$i])) {
            $len = strlen($letras[$i]);

           //echo $invertida = strrev($letras[$i]);
// devuelve odnuM aloH
        }

         



    }
     
 
 $letras = ["Bienvenidos", "a", "Treda", "Solutiones"];

//encontramos solo la cantidad de letras en la palabra más larga
$len = max(array_map('strlen', $letras));

// Combinamos el array  con el valor que obtenemos de su recorrido
$mapping = array_combine($letras, array_map('strlen', $letras));

//buscamos la key y valor del proceso anterior
$string = array_keys($mapping, max($mapping));
$string1 = implode(" ",$string); 
echo $invertida = strrev($string1);

  ?>

<?php

?>



<span style="font-size:12px;">Resultado</span>
       <div class="capsula">
      
<div class="row">

<div class="col l12">

       <form name= "formu6" class="col l12"  action="resultado.php" method="post" name="ingreso_acceso" id="ingreso_acceso"  style="
    margin-top: -44px;
"><br><br>

        <div class="input-field col s12">
          
<br>
<div id="env" style="    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px;
    border-style: solid;
    border-radius: 12px;
    width: 55%;
    border-color: #9fc0d0;
       ">
    <label_ex style="
top: 5px;
    text-align: center;
    position: relative;
    top: -15px;
    padding: 11px;
    height: 46px;
    color: black;
    width: 111px;
    left: 14%;
    font-size: 9px;
">Ingrese número</label_ex>      
    <input id="numero" name="numero" type="text" class="validate" style="width: 58%;
background-color: white;
color: black;text-align: center;">

        </div>
</div>












<div class="col l12">
<br>
<button class="boton_stilo" type="submit" value="inicio_sesion" style="">Iniciar</button>  
    </div>
      </form>
  

   
 
 

</div>

</div>
</div>
</div>

</center>
 




<?php 
include("footer.php")
?>




  
  </body>
</html>
