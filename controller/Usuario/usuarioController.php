<?php
include_once'../model/usuario/UsuarioModel.php';
class usuarioController
{
	public function crear(){
		include_once('../view/Usuario/usuario/formSesion.html.php');
	}
	public function registrarse(){
		include_once('../view/Usuario/usuario/registroCita.html.php');
	}
	public function contacto(){
		include_once('../view/Usuario/usuario/contacto.html.php');
	}
	public function pantalla(){
		include_once('../view/pantalla/pantalla.html.php');
	}
	public function registrarCita(){
		echo "hola undo";
	}
}
?>