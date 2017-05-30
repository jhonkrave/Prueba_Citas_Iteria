<?php
/**
* 
*/
class Triage extends Mastermodel
{
	
	// function crea triage
		public function crearTriage($array = array()){
			$array=array(
					'TRIAGE_ID'=>$triage_id,
					'AFILIADO_ID'=>$afiliado_id,
					'FECHA'=>$fecha,
					'ASPECTO_ID'=>$aspecto_id,
					'PRESION_ARTERIAL'=>$presion_arterial,
					'FREC_RESPIRATORIA'=>$frec_respiratoria,
					'FREC_CARDIACA'=>$frec_cardiaca,
					'TENSION'=>$tension,
					'GLASGOW_OCULAR'=>$glasgow_ocular,
					'GLASGOW_VERBAL'=>$glasgow_verbal,
					'GLASGOW_MOTORA'=>$glasgow_motora,
					'ALERTA'=>$alerta,
					'OBNUBLADO'=>$obnublado,
					'ESTUPOR'=>$estupor,
					'COMA'=>$coma,
					'SINTOMAS'=>$sintomas,
					'ANTEC_RELEVANTES'=>$antec_relevantes,
					'SUBCATEGORIA_ID'=>$subcategoria_id,
					'NIVEL_TRIAGE_ID'=>$nivel_triage_id

				);
			$insert= oci_parse($conn,"BEGIN Nombre_paquete.NOmbre.funvion(Aqui los values) END ");
			// $insert= oci_parse($conn,"INSERT into TRIAGE (TRIAGE_ID,AFILIADO_ID,FECHA,ASPECTO_ID,PRESION_ARTERIAL,FREC_RESPIRATORIA,FREC_CARDIACA,TENSION,GLASGOW_OCULAR,GLASGOW_VERBAL,GLASGOW_MOTORA,ALERTA,OBNUBLADO
			// ESTUPOR,COMA,SINTOMAS,ANTEC_RELEVANTES,SUBCATEGORIA_ID,NIVEL_TRIAGE_ID
			// ) values()");
			oci_execute($insert);

		}

		public function Get_triage_by_afi($id){
			/* debe devolver un triage por el id */
		}

	// fucntion ver categoria de c10
		public function verCategoria(){
			$array=array(
				'CATEGORIA_ID'=>$categoria_id
				);

			$consult= oci_parse($conn,"BEGIN Ips$_sndCitas.Ver_subcie10  END ");
			// $consult= oci_parse($conn,"SELECT * FROM SUBCATEGORIA_CIE10");
			oci_execute($consult);

		}
	// ver subcategoria 
		public function verSubCategoria(){

			$array=array(
				'CATEGORIA_ID'=>$ategoria_id
				);

			$consult= oci_parse($conn,"BEGIN Ips$_sndCitas.Ver_subcie10 =Aqui_el_valor END ");
			oci_execute($consult);
		}
	//ver categoria 
		public function categoria(){
			$consult=oci_parse($conn,"BEGIN Ips$_sndCitas.fn_Ver_cie10  END ");
			oci_execute($consult);
		}

	//ver subcategoria
		public function subcategoria(){
			$consult=oci_parse($conn,"BEGIN Ips$_sndCitas.Ver_subcie10 =".$_POST['CATEGORIA_ID']." END ");
			oci_execute($consult);
		}

}
?>