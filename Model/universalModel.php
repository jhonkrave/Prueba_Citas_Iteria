<?php
class universal 
{
	

	//obtener medicos
	public function medicos(){
		$insert=oci_parse($conn,"BEGIN Ips$_sndCitas.fn_getMedicos END ");
		oci_execute($insert);
	}

	//obtener afiliados 
	public function afiliados(){
		$insert=oci_parse($conn,"BEGIN Ips$_sndCitas.fn_getAfiliados END ");
		oci_execute($insert);
	}

	//obtener citas
	public function citas(){
		$insert=oci_parse($conn,"BEGIN Ips$_sndCitas.fn_getCitas  END ");
		oci_execute($insert);
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
	
	// ver especialitas
	public function Especialistas(){
		$consult=oci_parse($conn,"BEGIN Ips$_sndCitas.fn_verEspecialistas END ");
	}
	



}
?>