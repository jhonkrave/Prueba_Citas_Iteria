<?php
class Ruta{

	function __construct(){
	 if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
	 	$request = json_decode($_POST['request'],true);
	    if(isset($request['registrar_afiliado'])){
	      
	    }

	    if(isset($request['register_cita']) or 
	       isset($request['buscar_cita']) or 
	       isset($request['get_all_citas']) or // la agenda medica
	       isset($request['get_citas_afi']) or 
	       isset($request['register_cita_from_opera']) or 
	       isset($request['listar_citas_user']) or
	       isset($request['delete_cita']) // usuario da clicl en eliminar cita
	     ){
	      include_once "CitasController.php";
	      $controller = new CitasController($request);
	    }

	    if(isset($request['register_afiliado']) or 
	       isset($request['get_all_afiliados']) or 
	       isset($request['buscar_afiliado']) // busca un afiliado si existe
	       ){
	       include_once "AfiliadoController.php";
	       $controller = new AfiliadoController($request);
	    }

	    if(isset($request['register_especialista']) or 
	       isset($request['register_medico']) or 
	       isset($request['get_agenda_medico']) or// lista las fechas que esta ocupado el medico, solo para select
	       isset($request['get_especialidad']) or // lista en select las especialidades 
	       isset($request['get_all_medicos']) or 
	       isset($request['get_medicos_by_specialidad']) or 
	       isset($request['get_sintomas']) // para los select
	     ){ 
	       include_once "MedicoController.php";
	       $controller = new MedicoController($request);
	    }

	  
	    if(isset($request['register_triage']) or 
	       isset($request['get_triage_by_user'])){
	       include_once "TriageController.php";
	       $controller = new TriageController($request);
	    }
	    if(isset($request['Subsintomas'])){
	    	include_once "../Model/SintomasModel.php";
	    	$controller = new SintomasModel($request);
	    }
	    return $controller;
	 }
	}
}

new Ruta();