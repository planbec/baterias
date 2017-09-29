<?php
$tratamientos = array('quimioterapia','radioterapia','cirugia');
$staff = array('mauricio-riofrio','carlos-freire','monica-jarrin','ericka-serrano');
$uri =  $_SERVER['REQUEST_URI'];
$parts = explode('/',$uri);
$uri = end($parts);
$uri = str_replace('.php','',$uri);
$uri = (empty($uri)) ? 'index' : $uri;
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>AB Accesorios para Baterias | Página principal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="author" content="Carlos Zambrano M. - PlanB.ec | Francisco Aguilera G. - http://franciscoamk.com">
	
	<link rel="stylesheet" href="css/master.css" >
	<link rel="stylesheet" href="css/normalize.css" >

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Raleway:300,400,700" rel="stylesheet">
	
	<!--link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="favicon.ico">

	<!--[if (gte IE 6)&(lte IE 8)]>
	  <script type="text/javascript" src="js/selectivizr-min.js"></script>
	  <script type="text/javascript" src="js/html5shiv.js"></script>
	<![endif]-->


<script type="text/javascript">
$(document).on("scroll",function(){
    if($(document).scrollTop()>100){
        $("header").removeClass("large").addClass("small");
    } else{
        $("header").removeClass("small").addClass("large");
    }
});
</script>
</head>