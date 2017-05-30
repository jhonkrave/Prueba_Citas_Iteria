<?php
class Afiliado_Model{

	function __construct(){

	}

	function add_afiliado($array = array()){
		// parametros que recibe en esta funcion para almacenar un afiliado, al momento de guardarlo, debe retornar 
		// 
		$array['slt_tip_document']; // tipo de documento
		$array['inp_nick_user']; // nick del usuario
		$nombre = $array['inp_name']; // nombre
		$array['inp_apelli']; // apellido
		$array['slt_tip_afilia']; // tipo de afiliado
		$array['inp_fecha']; // fecha de nacimiento
		$array['rdio_sex']; // sexo de la persona 1 = femenino 2 masculino
		$id = $array['inp_document']; // id del documento


		package.guardar_afiado($id,$nombre);
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