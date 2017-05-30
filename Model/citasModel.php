<?php
class Citas{
	
	// function crear citas 
		public function crearCitas($request = array()){
			/*recibe parametros*/
			$request['inp_document_'];
			$request['slt_tip_espe'];
		   	$request['inp_fech'];
		   	$request['slt_medi'];
		    $request['inp_acomp'];




			$array=array(
					'CITA_ID'=>$cita_id,
					'AFILIADO_ID'=>$afiliado_id,
					'MEDICO_ID'=>$medico_id,
					'FECHA'=>$fecha,
					'ESTADO'=>$estado
			);
			$insert=oci_parse($conn,"BEGIN Nombre_paquete.NOmbre.funvion(Aqui los values) END ");
			// $insert= oci_parse($conn,"INSERT into CITA (CITA_ID,AFILIADO_ID,MEDICO_ID,FECHA,ESTADO) values() ");
			oci_execute($insert);
		}

		public function Get_all_citas_by_medico($id){
		  /* selecciona todas la agenda que tiene un medico, id, nombre paciente y hora*/	
		   	$array['result'][] = array("id"=>4,"title"=>"cita 1","date_start"=>"2017-05-06T16:00:00","date_end"=>"2017-05-06T17:00:00");
 			$array['result'][] = array("id"=>5,"title"=>"cita 2","date_start"=>"2017-05-06T18:00:00","date_end"=>"2017-05-06T18:40:00");
 			$array['result'][] = array("id"=>6,"title"=>"cita 3","date_start"=>"2017-05-06T19:00:00","date_end"=>"2017-05-06T19:30:00");
 			$array['result'][] = array("id"=>7,"title"=>"cita 4","date_start"=>"2017-05-06T20:00:00","date_end"=>"2017-05-06T20:30:00");
		  	return $array;
		}

		public function Get_all_citas_by_afiliado($id){
			/* recibe el codigo del afiliado y muestra las citas */
			$array[] = array("medico"=>"Juan Carlos (especialista)","id_cita"=>23,"fecha"=>"2005-06-08 09:15:00am");
			return $array;
			/* selecciona todas las citas por un afiliado, selecciona id, nombre medico, y hora*/
		}

		public function Get_all_citas_by_operador($id){
			$array[] = array("afilia"=>"Carlos eduardo","medico"=>"Juan Carlos (especialista)","id_cita"=>23,"fecha"=>"2005-06-08 09:15:00am");
			$array[] = array("afilia"=>"Jose eduardo","medico"=>"Juan Carlos (especialista)","id_cita"=>24,"fecha"=>"2006-06-08 09:15:00am");
			return $array;
			/* selecciona todas las citas que estan reservadas, selecciona id, nombre paciente, medico y hora*/
		}




	// fucntion eliminar citas
		public function eliminarCita($id_cita){
			$array=array(
				'CITA_ID'=>$cita_id,
				 'ESTADO'=>$estado
				);

		//	$delete=oci_parse($conn,"BEGIN Nombre_paquete.NOmbre.funvion(Aqui los values) END ");
			// $delete=oci_parse($conn,"UPDATE CITA SET ESTADO='' WHERE CITA_ID= ");
		//	oci_execute($delete);
		}
	//obtener citas
	public function citas(){
		//$insert=oci_parse($conn,"BEGIN Ips$_sndCitas.fn_getCitas  END ");
		//oci_execute($insert);
	}
}

?>