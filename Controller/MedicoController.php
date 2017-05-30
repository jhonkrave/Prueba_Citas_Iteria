<?php 
session_start();
include_once "Validar.php";
include_once "../Model/medicoModel.php";
 class MedicoController{
 	public $medico = null;
 	function __construct($request = array()){
 	 $this->medico = new Medico();
 	 if(isset($request['register_medico'])){
 	 	$respon = $this->Add_medico($request);
 	 }
 	 if(isset($request['register_especialista'])){
 	   $respon =  $this->Add_especialistas($request);
 	 }
 	 if(isset($request['register_triage'])){
 	 	$respon =  $this->Add_triage($request);
 	 }
 	 if(isset($request['get_all_medicos'])){
 	   $respon =  $this->Get_all_medicos_();
 	 }

 	 if(isset($request['get_medicos_by_specialidad'])){ // recibe por parametro el id de la especialidad  
 	 	 if(Validar::validarVacios($request['specialidad'])){
 	 	  $respon =  $this->Get_all_medico_by_especialidad($request['specialidad']);
 	   }
 	 }

   if(isset($request['get_especialidad'])){
     $respon = $this->Get_especialidades();
   }

 	 if(isset($request['get_agenda_medico'])){
 	  if(Validar::validarVacios($request['id'])){
 	   $respon =  $this->Get_agenda_disponible($request['id']);
 	  }
 	 }

   if(isset($request['get_sintomas'])){
     $respon = $this->Get_sintomas();
   }
   
   echo json_encode($respon);
 	}


 	private function Add_medico($request = array()){
 	  if(Validar::validarVacios($request['inp_document']) and 
 		 Validar::validarVacios($request['inp_nomb']) and
 		 Validar::validarVacios($request['inp_apell']) and
 		 Validar::validarVacios($request['inp_tel']) and
 		 Validar::validarVacios($request['inp_cel']) and
 		 Validar::validarVacios($request['rdio_sex']) and
 		 Validar::validarVacios($request['slt_especia']) and
 		 Validar::validarVacios($request['inp_nick'])){
 	   $response = $this->medico->Add_medico($request); // guarda primero en tabla persona y despues en medico
    }else{
 	  	$response = array("error"=>"no hubo guardado en base de datos");
 	  }
 	}

 	private function Add_especialistas($request = array()){
 	  if(Validar::validarVacios($request['inp_codigo']) and Validar::validarVacios($request['inp_especializa'])){
 	  	$respon = $this->medico->Set_especialidad($request); 
 	    return $respon;
    }
 	}

  private function Get_all_medicos_(){
    $respon =  $this->medico->Get_all_medicos();
    return $respon;	
  }

  private function Get_all_medico_by_especialidad($id_especia){
    	/* selecciona los medicos por medio de la especialidad */
    	/* select id_medico,nombre y especialidad */
  	return $this->medico->Get_all_medico_by_especialidad($id_especia);
  }

  private function Get_agenda_disponible($id_medico){ // trae la agenda de un medico
   	return $this->medico->Get_all_agenda_medico($id_medico);
  }

  private function Get_especialidades(){
   	$x = $this->medico->Get_especilista();
    return $x;
  }

  private function Get_sintomas(){ // cie10
    return $this->medico->verCategoria();
  }

  
 }


?>