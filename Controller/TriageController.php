<?php
include_once "../Model/triageModel.php";
include_once "Validar.php";
class TriageController{
	private $triage = null;
	function __construct($request){
		$this->triage = new Triage();
		if(isset($request['register_triage'])){
		  $respon =	$this->Add_triage($request);
		}
		if(isset($request['get_triage_by_user'])){
		 if(Validar::validarVacios($request['id_afi']){
		  $respon = $this->Get_triage_by_afiliado();
		 }
		}
		echo json_encode($respon);
	}

	private function Add_triage($request = array()){
 		/*
 				id_trieage VARCHAR2(10),id_afiliado VARCHAR2(10),fecha DATE ,id_aspecto VARCHAR2(10),presion_Arterial VARCHAR2(10),
			frecuancia_respiratoria VARCHAR2(10),frecuancia_cardiaca VARCHAR2(10),tension VARCHAR2(10),glasgow_ocular VARCHAR2(20),
			glasgow_verbal VARCHAR2(50),glasgow_motora VARCHAR2(50),alerta VARCHAR2(20),obnublado VARCHAR2(10),estupor VARCHAR2(10), coma VARCHAR2(2),
			sintomas VARCHAR2(40),antecedentes_relevantes VARCHAR2(40),id_subcategoria VARCHAR2(10),id_nivel_triage VARCHAR2(10) */
		if(Validar::validarVacios($request['inp_fecha']) and 
			Validar::validarVacios($request['slt_nivel_triage']) and
			Validar::validarVacios($request['inp_pres_art']) and
			Validar::validarVacios($request['inp_respira']) and
			Validar::validarVacios($request['inp_frecuenc']) and
			Validar::validarVacios($request['inp_tension']) and
			Validar::validarVacios($request['slt_verbal']) and
			Validar::validarVacios($request['slt_ocular']) and
			Validar::validarVacios($request['slt_motora']) and
			Validar::validarVacios($request['inp_alert']) and
			Validar::validarVacios($request['inp_obnubla']) and
			Validar::validarVacios($request['inp_estup']) and
			Validar::validarVacios($request['inp_coma']) and
			Validar::validarVacios($request['inp_sinto']) and
			Validar::validarVacios($request['slt_cate_sint']) and
			Validar::validarVacios($request['slt_sub_cate']) and
			Validar::validarVacios($request['txt_area']) and
			Validar::validarVacios($request['text_descrip_aspect']) and
			Validar::validarVacios($request['hidden_user'])){
			$respon = $this->triage->crearTriage($request);
		}else{
			$respon = array("error"=>"No ha diligenciado todos los campos");
		}
		return $respon;
 	}

 	private function Get_triage_by_afiliado($id){
 		$respon = $this->triage->Get_triage_by_afi($id);
 		return $respon;
 	}
}


