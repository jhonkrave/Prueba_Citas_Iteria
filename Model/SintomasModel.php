<?php
 class SintomasModel{
   function __construct(){

   }

   function Get_sub_sintomas($id){
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
   }
 }
?> 