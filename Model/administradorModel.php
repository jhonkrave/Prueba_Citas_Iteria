<?php
class Administrador extends masterModel
{
	// fuction actualizar medico
		public function actializarMedico($medico_id,$persona_id,$titulo_pregrado){
			$array=array(
			'MEDICO_ID'=>$medico_id,
			'PERSONA_ID'=>$persona_id,
			'TITULO_PREGRADO'=>$titulo_pregrado
			);
			$update= oci_parse($conn,"BEGIN Nombre_paquete.NOmbre.funvion(Aqui los values) END ");
			// $update= oci_parse($conn,"UPDATE MEDICO SET TITULO_PREGRADO WHERE medico_id=");
			oci_execute($update);

		}
	// function crear medico 
		public function crearMedico($medico_id,$persona_id,$titulo_pregrado){
			$array=array(
			'MEDICO_ID'=>$medico_id,
			'PERSONA_ID'=>$persona_id,
			'TITULO_PREGRADO'=>$titulo_pregrado
			);
			$insert= oci_parse($conn,"BEGIN Nombre_paquete.NOmbre.funvion(Aqui los values) END ");
			// $insert= oci_parse($conn,"INSERT into MEDICO (MEDICO_ID,PERSONA_ID,TITULO_PREGRADO) values() ");
			oci_execute($insert);

		}
		
}
?>