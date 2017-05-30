<?php
/**
* 
*/
class User 
{
	// funcion crear usuario 
		public function crearUser($user,$password,$login){
			$array=array(
				'USER_ID'=>$user,
				'PASSWORD'=>$password,
				'LOGIN'=>$login
			);

			$insert=oci_parse($conn,"BEGIN Nombre_paquete.NOmbre.funvion(Aqui los values) END ");
			// $insert= oci_parse($conn,"INSERT into USER (USER_ID,PASSWORD,LOGIN) values() ");
			oci_execute($insert);

		}
		public function actualizarUsuario($user,$password,$login){
			$array=array(
				'USER_ID'=>$user,
				'PASSWORD'=>$password,
				'LOGIN'=>$login
			);
			$update=oci_parse($conn,"BEGIN Nombre_paquete.NOmbre.funvion(Aqui los values) END ");
			// $update= oci_parse($conn,"UPDATE into USER (USER_ID,PASSWORD,LOGIN) values() ");
			oci_execute($update);
		}

		public function Loguear($email,$nick,$pass){

			/* valida por email o nick y password */
			/* tiene que devolver un array asociativo con 
			  $respon['perfil'] // perfil de usuario (administrador,operador, afiliado, medico)
			  $respon['id'] // id del afiliado*/

		}
}
?>