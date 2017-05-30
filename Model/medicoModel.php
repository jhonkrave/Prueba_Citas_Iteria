<?php
//include_once('../model/masterModel.php');
include_once "../Model/personaModel.php";
class Medico{
		

		public function __construct(){


		}

		/* esta funcion deberia estar en la clase afiliados */
		// fuction listar pacientes
		public function listarPacientes(){
			$list= oci_parse($conn,"BEGIN Nombre_paquete.NOmbre.funvion(Aqui los values) END ");
			// $list= oci_parse($conn,"SELECT * FROM CITAS");
			oci_execute($list);
		}

		public function Add_medico($array = array()){
		 /* recibe estos parametros 
 		 $request['inp_document']
 		 $request['inp_nomb']
 		 $request['inp_apell']
 		 $request['inp_tel']
 		 $request['inp_cel']
 		 $request['rdio_sex']
 		 $request['slt_especia']	
 		 $request['inp_nick']*/
		 $person = new Persona();
		 $respon = $person->crearPersona($array); // dentro de esta funcion debe insertar en la tabla persona, si es exitoso la insercion, debe pasar el if siguiente e insertar en la tabla medicos
		 if(isset($respon['exito'])){
		   $request['slt_especia'];
		   $request['inp_document'];	
		 }
		}

		public function Get_all_medicos(){
			$array[] = array("id"=>1222,"name"=>"carlos","apell"=>"enrique","tel"=>55666,"espe"=>"odontologia");
			$array[] = array("id"=>22,"name"=>"juan","apell"=>"enrique","tel"=>455,"espe"=>"Medico general");
			return $array;
			/* selecciona todos los medicos, con sus especialidades */
		}

		public function Get_all_medico_by_especialidad($id){
			/* selecciona todosl os medicos por especialidad */
			if($id == "01"){
				$array[] = array("id"=>1222,"name"=>"carlos enrique");
				$array[] = array("id"=>22,"name"=>"juan enrique");
				return $array;
			}
		}

		public function Get_all_agenda_medico($id_medico){
			/* selecciona toda la agenda de un medico particular*/
			/* selecciona solo fechas  */
			if($id_medico == "1222"){
			  $array[] = array("id"=>1,"name"=>"martes (30) 8:00am - 8:20am");
			  $array[] = array("id"=>2,"name"=>"martes (30) 9:00am - 9:20am");
			  $array[] = array("id"=>3,"name"=>"martes (30) 9:20am - 8:40am");
			  return $array;
			}
		}

		public function Get_especilista(){
			/* selecciona todas las especialidades */
			$array[] = array("id"=>01,"name"=>"Odontologia");
			$array[] = array("id"=>02,"name"=>"Medico General");
			return $array;
		}



		public function Set_especialidad($array = array()){
			/* recibe estos parametros */
			$array['inp_codigo']; // codigo de la especialidad
			$array['inp_especializa']; // nombre de la especialidad
		}

		

		// function crear ttraige 




	// function ver categorias cie_10
		public function verCategoria(){
			$array[] = array("id"=>"A00-B99","name"=>"Ciertas enfermedades infecciosas y parasitarias");
			$array[] = array("id"=>"C00-D48","name"=>"Neoplasias");
			$array[] = array("id"=>"D50-D89","name"=>"Enfermedades de la sangre y de los órganos hematopoyéticos y otros trastornos que afectan el mecanismo de la inmunidad");
			$array[] = array("id"=>"E00-E90","name"=>"Enfermedades endocrinas, nutricionales y metabólicas");
			$array[] = array("id"=>"F00-F99","name"=>"Trastornos mentales y del comportamiento");
			$array[] = array("id"=>"G00-G99","name"=>"Enfermedades del sistema nervioso");
			$array[] = array("id"=>"H00-H59","name"=>"Enfermedades del ojo y sus anexos");
			$array[] = array("id"=>"H60-H95","name"=>"Enfermedades del oído y de la apófisis mastoides");
			$array[] = array("id"=>"I00-I99","name"=>"Enfermedades del sistema circulatorio");
			return $array;
			/*
			$array=array(
				'CATEGORIA_ID'=>$categoria_id
				);

			$consult= oci_parse($conn,"BEGIN Ips$_sndCitas.Ver_subcie10  END ");
			// $consult= oci_parse($conn,"SELECT * FROM SUBCATEGORIA_CIE10");
			oci_execute($consult);
			*/
		}
	// function  sub categoria 
		public function verSubCategoria($id){
			if($id == "A00-B99"){
			  $array[] = array("id"=>"A00","name"=>"Colera");
			  $array[] = array("id"=>"A01","name"=>"Fiebre tifoidea, Fiebre paratifoidea.");
			  $array[] = array("id"=>"A02","name"=>"Otras infecciones por Salmonella");
			}else if($id == "C00-D48"){
			  $array[] = array("id"=>"C00","name"=>"Tumor maligno del Labio");
			  $array[] = array("id"=>"C01","name"=>"Neoplasias malignas de la base de la lengua");
			  $array[] = array("id"=>"C02","name"=>"Neoplasias malignas de otras partes y sin especificar de la lengua");
			}else if($id == "D50-D89"){

			}else if($id == "E00-E90"){

			}else if($id == "F00-F99"){

			}else if($id == "G00-G99"){

			}else if($id == "H00-H59"){

			}
			return $array;
			/*
			$array=array(
				'CATEGORIA_ID'=>$ategoria_id
				);

			$consult= oci_parse($conn,"BEGIN Ips$_sndCitas.Ver_subcie10 =Aqui_el_valor END ");
			oci_execute($consult);
			^*/
		}


		/* esta funcion deberia estar en el modelo Afiliado */

		// function Consultor Afiliados 
		public function Afiliados(){
			$consult=oci_parse($conn,"Ips$_sndCitas.fn_getAfiliados");
			oci_execute($consult);
		}

		

	
}

?>