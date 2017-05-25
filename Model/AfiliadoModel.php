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

		$ci10 = 'INSERT INTO categoria_cie10(id_subcategoria,descripcion)VALUES()';
		$subci10 = 'INSERT INTO subcategoria_cie10 ';
	// selecta 
		// muestra el listado de medicos con sus especialidades
		$sql = 'SELECT med.medico_id,per.firstname,per.lastname,per.phone_number1,GROUP_CONTACT(es.descripcion)
				FROM medico_especialidad med 
				INNER JOIN persona per ON per.num_ident = med.medico_id 
				INNER JOIN especialidad es ON es.especialidad_id = med.medico_id';


		// consulta todos los afiliados
		$sql = 'SELECT afiliado_id as id ,per.firstname as nombre,per.lastname as apellido
				FROM afiliado afi 
				INNER JOIN persona per ON per.num_ident = afi.persona_id';

		// consulta todas las fechas, especial para los administradores cuando consulte todas las citas
		$sql = 'SELECT cita_id,CONCAT(per2.firstname," ",per2.lastname) as nombre_afilia,CONCAT(per.firstname," ",per.lastname) as nombre_medico,fecha,estado
				FROM cita ci
				INNER JOIN persona per ON per.num_ident = ci.medico_id 
				INNER JOIN persona per2 ON per2.num_ident = ci.afiliado_id 
				GROUP BY 1';

		// consulta todas las fechas de citas de los afiliados, este permite al mismo afiliado ver sus citas
		$sql = 'SELECT cita_id,CONCAT(per2.firstname," ",per2.lastname) as nombre_afilia,CONCAT(per.firstname," ",per.lastname) as nombre_medico,fecha,estado
				FROM cita ci
				INNER JOIN persona per ON per.num_ident = ci.medico_id 
				INNER JOIN persona per2 ON per2.num_ident = ci.afiliado_id 
				WHERE afiliado_id = "'.$var_id_afiliado.'"
				GROUP BY 1';

		// select de consulta si existe usuario, uso para login, si existe, muestra el perfil donde servira para direccionarlo en el perfil
		$sql = 'SELECT id_persona as id,perf.descripcion as perfil
				FROM Usuario user
				INNER JOIN Perfil perf ON perf.id_perfil = user.id_usuario 
				WHERE user.email = "" 
				OR username = 
				AND password_Usu = ""';

		$sql = 'SELECT id_subcategoria,descripcion
				FROM categoria_cie10';

		$sql = 'SELECT id_subcategoria,descripcion
				FROM subcategoria_cie10 
				WHERE id_categoria = '.$var_id_catego_cie10.'';
		/*
		$espe = 'INSERT INTO especialidad(especialidad_id,descripcion) VALUES()';
		
		$aspecto = 'INSERT INTO aspecto_triage(aspecto_id,descripcion )VALUES()';
		*/

		$nivel_triage = '';
		$insert = $this->select($asociacion);
	}
}