<?php
include_once "../Model/AfiliadoModel.php";
include_once "Validar.php";
class AfiliadoController{
	private $afi = null;
	function __construct($request = array()){
	 $this->afi = new Afiliado_Model();
	 if(isset($request['register_afiliado'])){
	 	$respon = $this->Add_afiliado($request);
	 }
	 if(isset($request['get_all_afiliados'])){
	 	$respon =  $this->Get_all_afiliados();
	 }
	 if(isset($request['buscar_afiliado'])){
	 	$respon = $this->Get_afiliado($request);
	 }
	 echo json_encode($respon);
	}


	private function Get_all_afiliados(){
	  return $this->afi->Get_All_Afiliados();
	}

	private function Get_afiliado($array = array()){
	  if(Validar::validarVacios($array['inp_document'])){
	   return $this->afi->Get_Afiliado($array['inp_document']);	// debe devolver info del afiliado y fecha de nacimiento o diciendo si es mayor de edad o no, esto es para activar el campo acompañante
	  }
	}
		//Validar::Validar_numerico(); 
		//Validar::is_mayor_edad();
	private function Add_afiliado($array = array()){ 
		if(Validar::validarVacios($array['inp_document']) and 
		   Validar::validarVacios($array['inp_name']) and  Validar::validarVacios($array['inp_apelli']) and 
		   Validar::validarVacios($array['inp_nick_user']) and 
		   Validar::validarVacios($array['slt_tip_document']) and Validar::validarEnteros($array['slt_tip_document'],1,3) and 
		   Validar::validarVacios($array['slt_tip_afilia']) and Validar::Validar_numerico($array['slt_tip_afilia']) and
		   Validar::validate_fecha_comun($array['inp_fecha']) and  
		   Validar::validarEnteros($array['rdio_sex'],1,2)){
		   $respon = $this->afi->add_afiliado($array);
		}else{
	  		$respon = array("error"=>"Tiene campos sin diligenciar");
	  	}
	  	return $respon;	
	}
}