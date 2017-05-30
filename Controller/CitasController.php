<?php 
session_start();
include_once "../Model/citasModel.php";
include_once "Validar.php";
class CitasController{
	private $citas = null;
	function __construct($request = array()){
	 $this->citas = new Citas();	
	 if(isset($request['register_cita'])){ // desde el afiliado
	 	$respon = $this->Add_cita_medica($request);
	 }

	 if(isset($request['register_cita_from_opera'])){
	 	$respon =  $this->Add_cita_medica($request);
	 }

	 if(isset($request['get_all_citas'])){ // devuelve todas la agenda de un medico
	 	$respon =  $this->Get_all_citas_by_medico();
	 }

	 if(isset($request['get_citas_afi'])){ // obtiene las citas de un afiliado desde el perfil afiliado
	 	//if(isset($_SESSION['session__$%id']) and !empty($_SESSION['session__$%id'])){
	 	 $respon =  $this->Get_all_citas_by_afi(/*$_SESSION['session__$%id']*/2);
	 	//}
	 }

	 if(isset($request['buscar_cita'])){ // obtiene las citas de un afiliado desde el perfil operador
	 	$respon =  $this->Get_all_citas_by_afi2($request);
	 }

	 if(isset($request['listar_citas_user'])){ // lista desde un operador
	 	$respon =  $this->Get_citas_from_operador($request);
	 }

	 if(isset($request['delete_cita'])){
	 	$respon = $this->Delete_cita($request);
	 }
	 echo json_encode($respon);
	}

	private function Add_cita_medica($request = array()){
		include_once "../Model/Afiliado_Model.php";
		$afiliado = new Afiliado_Model();
		$respon = $afiliado->Get_Afiliado($request['inp_document_']); // debe haber un array asociativo
		if(isset($respon['id'])){
		 if(Validar::validarVacios($request['inp_document_']) and Validar::validarVacios($request['slt_tip_espe']) and 
		   Validar::validarVacios($request['inp_fech']) and Validar::validate_fecha_extendi($request['inp_fech']) and 
		   Validar::validarVacios($request['slt_medi'])){
		   if(Validar::is_mayor_edad($respon['fecha_nacimient'])){ // campo que llama de la bd, en array asociativo
		   	if(Validar::validarVacios($request['inp_acomp'])){
		   	 $response = $this->citas->crearCitas($request);	
		   	}else{
		   		$response = array("error"=>"Debe existir un acompañante");
		   	}
		   }else{
		   	 $response = $this->citas->crearCitas($request);
		   }
		 }else{
		 	$response = array("error"=>"Uno de los campos esta mal diligenciado");
		 } 	
		}else{
			$response = array("error"=>"No existe el usuario, por favor creelo");
		}
		return $response;
	}

	private function Get_all_citas_by_medico(){
	 //if(isset($_SESSION['session__$%id']) and !empty($_SESSION['session__$%id'])){	
	  //$id =	$_SESSION['session__$%id'];
	  return $this->citas->Get_all_citas_by_medico($id);
	 //}
	}
	
	private function Get_all_citas_by_afi($id){
	 return $this->citas->Get_all_citas_by_afiliado($id);
	}

	private function Get_all_citas_by_afi2($request){ // funcion que usa el operador para buscar
	  if(isset($request['document'])){
	    return $this->citas->Get_all_citas_by_afiliado($request['document']);
	  }else{
	  	return array("error"=>"no existen citas");
	  }
	}

	private function Get_citas_from_operador($request){
	 if(Validar::validarVacios($request['inp_document'])){
	   return $this->citas->Get_all_citas_by_operador($request['inp_document']);
	 }
	}

	private function Delete_cita($request){
	 if(Validar::validarVacios($request['hidden_id_cita']) and Validar::Validar_numerico($request['hidden_id_cita'])){
	  if($_SESSION['session__$%'] == base64_decode("user_1_234%$")){	
	   return $this->citas->eliminarCita($request['hidden_id_cita']);
	  }
	 }
	}


}



?>