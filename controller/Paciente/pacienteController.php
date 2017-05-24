<?php
include_once'../model/paciente/PacienteModel.php';
class PacienteController
{
	public function crear(){
		include_once('../view/Paciente/paciente/crear.html.php');
	}
	public function listar(){
		include_once('../view/Paciente/paciente/listar.html.php');
	}
	
}
?>