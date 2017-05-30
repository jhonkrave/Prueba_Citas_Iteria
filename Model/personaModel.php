<?php

class Persona{

	//funcion de crear persona 
		public function crearPersona($array = array()){

			$array=array(
				'PERSONA_ID'=>$persona_id,
				'TIPO_IDENTIFICACION_ID'=>$tipo_identificacion_id,
				'NUM_IDENT'=>$num_ident,
				'FIRSTNAME'=>$firstname,
				'LASTNAME'=>$lastname,
				'PHONE_NUMBER1'=>$phone_number1,
				'PHONE_NUNMBER2'=>$phone_nunmber2
			);
				$insert= oci_parse($conn,"BEGIN Nombre_paquete.NOmbre.funvion(Aqui los values) END ");
				// $insert= oci_parse($conn,"INSERT INTO PERSONA (PERSONA_ID,TIPO_IDENTIFICACION_ID,NUM_IDENT,FIRSTNAME,LASTNAME,PHONE_NUMBER1,PHONE_NUNMBER2) values ()");
				
				oci_execute($insert);
		}
	// funcion listar persona 	
		public function listar(){
			$list= oci_parse($conn,"BEGIN Nombre_paquete.NOmbre.funvion(Aqui los values) END ");
			// $list= oci_parse($conn,"SELECT * FROM PERSONA");
			oci_execute($list);

		}

	// funcion consultar persona
		public function consultar(){
			$consult= oci_parse($conn,"BEGIN Nombre_paquete.NOmbre.funvion(Aqui los values) END ");
			// $consult= oci_parse($conn,"SELECT PERSONA_ID,TIPO_IDENTIFICACION_ID,NUM_IDENT,FIRSTNAME,LASTNAME,PHONE_NUMBER1,PHONE_NUNMBER2 
			// 		 FROM PERSONA 
			// 		 WHERE PERSONA_ID");
			oci_execute($consult);
		}
	// funcion consultar afiliado 
		public function afiliados(){
			$insert=oci_parse($conn,"BEGIN Ips$_sndCitas.fn_getAfiliados END ");
			oci_execute($insert);
		}	
	// funcion actulizar registro persona
		public function actualizarPersona($persona_id,$tipo_identificacion_id,$num_ident,$firstname,$lastname,$phone_number1,$phone_nunmber2){
			
			$array=array(
			'PERSONA_ID'=>$persona_id,
			'TIPO_IDENTIFICACION_ID'=>$tipo_identificacion_id,
			'NUM_IDENT'=>$num_ident,
			'FIRSTNAME'=>$firstname,
			'LASTNAME'=>$lastname,
			'PHONE_NUMBER1'=>$phone_number1,
			'PHONE_NUNMBER2'=>$phone_nunmber2
			);
			$update= oci_parse($conn,"BEGIN Nombre_paquete.NOmbre.funvion(Aqui los values) END ");
				// $update= oci_parse($conn,"UPDATE PERSONA  SET TIPO_IDENTIFICACION_ID,FIRSTNAME,	LASTNAME,PHONE_NUMBER1,PHONE_NUNMBER2 WHERE NUM_IDENT=");
				oci_execute($update);
		}
	// function eliminar persona
		public function eliminarPesona($persona_id,$num_ident){
			$array=array(
			'PERSONA_ID'=>$persona_id,
			'NUM_IDENT'=>$num_ident,		
			);
			$delete= oci_parse($conn,"BEGIN Nombre_paquete.NOmbre.funvion(Aqui los values) END ");
			// $delete= oci_parse($conn,"DELETE FROM PERSONA WHERE NUM_IDENT=");
			oci_execute($delete);
		}

   
}


?>