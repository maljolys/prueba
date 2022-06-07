 <?php
$navigator_user_agent = (isset($_SERVER['HTTP_USER_AGENT'])) ? strtolower($_SERVER['HTTP_USER_AGENT']):'';
if(
stristr($navigator_user_agent, "iphone")or
stristr($navigator_user_agent, "ipad")or
stristr($navigator_user_agent, "kindle")or
stristr($navigator_user_agent, "Mobile")or
stristr($navigator_user_agent, "BlackBerry")or
stristr($navigator_user_agent, "Opera min")or
stristr($navigator_user_agent, "Sony")or
stristr($navigator_user_agent, "MOT")or
stristr($navigator_user_agent, "Motorola")or
stristr($navigator_user_agent, "Nokia")or
stristr($navigator_user_agent, "samsung")

) 
{
header("Location:");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Gestión</title>

<link href="https://fonts.googleapis.com/css?family=Poppins:500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/jquery.desoslide.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <link rel="stylesheet" type="text/css" href="sweetalert/css/sweetalert.css"/>
   <link href="sweetalert/js/sweetalert.min.js" rel="stylesheet"/>
   <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <link href="css/hover.css" type="text/css" rel="stylesheet"  media="screen,projection"/>
  
  <link href="fontawesome/css/all.css"  type="text/css" rel="stylesheet"/> <!--load all styles -->
 
<script type="text/javascript" src="ajax/ajax.js"></script>
<script src="sweetalert/js/functions.js"></script>
    <script src="sweetalert/js/sweetalert.min.js"></script>
  

	</head>

