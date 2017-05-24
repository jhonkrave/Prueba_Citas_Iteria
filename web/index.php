<?php

	include_once('../lib/helper.php');
	
	include_once('../lib/global.php');

	if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
		include_once ('templates/admin/header.html.php');
    	#include_once ('templates/adminGentella/sidebar-left.html.php');
      
	}
	 
	if (isset($_GET['controlador']) && isset($_GET['modulo']) && isset($_GET['accion']))
	{
		$modulo = ucwords($_GET['modulo']); 
		$controlador = $_GET['controlador'];
		$accion  = $_GET['accion'];
		$rutaControlador = "../controller/".$modulo."/".$controlador."Controller.php";	
		include_once ($rutaControlador);
		$nombreClase=ucwords($controlador)."Controller";
		$objControlador = new $nombreClase();
		$objControlador->$accion();
	}else{
		
        include_once ('templates/admin/principal.html.php');        
	}
    
    
        

    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
		include_once ('templates/admin/footer.html.php');	
    }
?>