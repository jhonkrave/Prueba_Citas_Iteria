<?php
class Afiliado_Model{

	function __construct(){

	}

	function add_afiliado($array = array()){
		// parametros que recibe en esta funcion para almacenar un afiliado, al momento de guardarlo, debe retornar 
		// 
		$tipo_identificacion_id = $array['slt_tip_document']; // tipo de documento
		$nick = $array['inp_nick_user']; // nick del usuario
		$firstname = $array['inp_name']; // nombre
		$lastname = $array['inp_apelli']; // apellido
		$array['slt_tip_afilia']; // tipo de afiliado
		$array['inp_fecha']; // fecha de nacimiento
		$phone_number1 = $array['inp_tel'];
		$phone_number2 = 0;	
		$array['rdio_sex']; // sexo de la persona 1 = femenino 2 masculino
		$num_ident = (int)$array['inp_document']; // id del documento 
		$user="sys";
        $db="localhost:1522/orcl2";
        $pass="12345678";
		$conn = oci_connect('system', '12345678', 'orcl2');
		if(!$conn){
		    echo "Falla en la conexion.!".var_dump(oci_error());
		    die();
		}else{
		    echo "conexion exitosa";
		}
		$query1 =  oci_parse($conn,"BEGIN IPS\$_inserciones.pr_persona(:PERSONA_ID,:TIPO_IDENTIFICACION_ID,:NUM_IDENT,:FIRSTNAME,:LASTNAME,:PHONE_NUMBER1,:PHONE_NUNMBER2,:SEX,TO_DATE(:FECHA_NACIMIENTO,'DD-MM-YYYY')); END;");
		$persona_id = 10;
		$phone_nunmber2="76767";
		$sex=121;
		$fecha_nacimiento = date_create('05-05-2017');
		$fecha_nacimiento = date_format($fecha_nacimiento,'d-m-Y');
		/* esto evita inyeciones porque forma enlace con orcale y el cacche*/
		oci_bind_by_name($query1, ":PERSONA_ID", $persona_id);
		oci_bind_by_name($query1, ":TIPO_IDENTIFICACION_ID", $tipo_identificacion_id);
		oci_bind_by_name($query1, ":NUM_IDENT", $num_ident);
		oci_bind_by_name($query1, ":FIRSTNAME", $firstname);
		oci_bind_by_name($query1, ":LASTNAME", $lastname);
		oci_bind_by_name($query1, ":PHONE_NUMBER1", $phone_number1);
		oci_bind_by_name($query1, ":PHONE_NUNMBER2", $phone_nunmber2);
		oci_bind_by_name($query1,":SEX",$sex);
		oci_bind_by_name($query1,":FECHA_NACIMIENTO",$fecha_nacimiento);
		$respon = oci_execute($query1);
		var_dump($respon);
		oci_free_statement($query1);
		/*echo "BEGIN IPS\$_inserciones.pr_persona(".$persona_id.",'".$tipo_identificacion_id."',".$num_ident.",'".$firstname."','".$lastname."','".$phone_number1."','".$phone_nunmber2."','".$sex."',".$fecha_nacimiento."); END;";*/
		oci_close($conn);



	}

	function Get_all_afiliados(){
	  /* en la consulta debe devolver un conjunto de arrays asociativos con keys asociando los valores traido de la db los keys son 
		tipo_doc 
		name
		apell
		tel
		cel
		tipo
	  */
	  $array[] = array("tipo_doc"=>"Cedula","id"=>1144125,"name"=>"Jose","apell"=>"enrique","tel"=>4555,"cel"=>4555,"tipo"=>"POS");
	  $array[] = array("tipo_doc"=>"Cedula","id"=>1555,"name"=>"Carlos","apell"=>"enrique","tel"=>4555,"cel"=>4555,"tipo"=>"POS");
	  $array[] = array("tipo_doc"=>"Cedula","id"=>667,"name"=>"Carlos","apell"=>"enrique","tel"=>4555,"cel"=>4555,"tipo"=>"POS");
	  return $array;
		/* consultar todos los afiliados */
	}

	function Get_Afiliado($id){ 
		/* recibe el id del afiliado 
	 	 puede ser el id o el documento, usted decide, el hecho es que la consulta debe devolver un array con las siguientes keys
	 	 tipo_doc 
	 	 id 
	 	 apell
	 	 tel
	 	 cel
	 	 tipo
		*/
		$array[] = array("tipo_doc"=>"Cedula","id"=>1144125,"name"=>"Jose","apell"=>"enrique","tel"=>4555,"cel"=>4555,"tipo"=>"POS");
		return $array;
		/* recibe parametros id de afiliado y debe devolver info de el*/
		// debe devolver info del afiliado y fecha de nacimiento o diciendo si es mayor de edad o no, esto es para activar el campo acompañante
	}
}