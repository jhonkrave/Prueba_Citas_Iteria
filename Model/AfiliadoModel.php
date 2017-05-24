<?php 

class AfiliadoModel{


	public function crearRegistroAfi($id_persona,$tipoIdentificaion,$nombres,$apellidos,$telefono,$telefono2){
		$array = array(
					  'id_persona'=>"$identificacion",
					  'tipo_identificacion'=>"$tipoIdentificaion",
					  'nombres'=>"$nombres",
					  'apellidos'=>"$apellidos",
					  'telefono'=>"$telefono",
					  'telefono2'=>"$telefono2",
				    );

	// inserts //

		$insert = 'INSERT INTO persona (persona_id ,tipo_identificacion_id ,num_ident ,firstname ,lastname ,phone_number1 ,phone_nunmber2) VALUES();';

		$persona = 'INSERT INTO afiliado(afiliado_id,persona_id,tipo_afiliacion) VALUES();';
		$triage = 'INSERT INTO triage(triage_id,afiliado_id,fecha,aspecto_id,presion_Arterial,frec_respiratoria,frec_cardiaca,tension,glasgow_ocular,glasgow_verbal ,glasgow_motora,alerta,obnublado,estupor,coma,sintomas,antec_relevantes,subcategoria_id,nivel_triage_id) VALUES()';
		
		$medico = 'INSERT INTO medico(medico_id,persona_id,titulo_pregrado)VALUES() ';
		$cita = 'INSERT INTO cita(cita_id,afiliado_id,medico_id,fecha,estado) VALUES()';

	// selecta 
		// muestra el listado de medicos con sus especialidades
		$sql = 'SELECT med.medico_id,per.firstname,per.lastname,per.phone_number1,GROUP_CONTACT(es.descripcion)
				FROM medico_especialidad med 
				INNER JOIN persona per ON per.num_ident = med.medico_id 
				INNER JOIN especialidad es ON es.especialidad_id = med.medico_id';

		$sql = 'SELECT afiliado_id,per.firstname,per.lastname
				FROM afiliado afi 
				INNER JOIN persona per ON per.num_ident = afi.persona_id';
		/*
		$espe = 'INSERT INTO especialidad(especialidad_id,descripcion) VALUES()';
		
		$aspecto = 'INSERT INTO aspecto_triage(aspecto_id,descripcion )VALUES()';
		*/

		$nivel_triage = '';
		$insert = $this->select($asociacion);
	}
}