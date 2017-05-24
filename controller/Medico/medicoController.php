<?php


include_once('../model/medico/MedicoModel.php');
class MedicoController {
    
    public function crear() {

    	
        include_once('../view/Medico/medico/crear.html.php');
    }
    public function listar() {
    	$sqlmedico="SELECT * FROM medico";
    	$objMedico=new mastermodel();
    	
    	$objMedico=$objMedico->select($sqlmedico);
        include_once('../view/Medico/medico/listar.html.php');
    }

   
}

?>