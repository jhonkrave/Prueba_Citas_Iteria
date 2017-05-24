<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		.padding-0{
			padding: 0 !important;
		}
	</style>
</head>
<body>
 <div class="container-fluid">
  <div class="nav navbar navbar-inverse">
   	 <button class="btn btn-default pull-right">Salir</button>
  </div>
  <div class="col-xs-3">
    <ul class="list-group">
     <li class="list-group-item" id="opcion_crear_afilia"><a href="#">Crear Afiliado</a></li>
     <li class="list-group-item" id="opcion_crear_medico"><a href="#">Crear Medico</a></li>	
     <li class="list-group-item" id="opcion_ver_citas"><a href="#">Ver Citas</a></li>	
     <li class="list-group-item" id="opcion_ver_client"><a href="#">Ver Clientes</a></li>
     <li class="list-group-item" id="opcion_ver_medic"><a href="#">Ver Medicos</a></li>	
    </ul>
  </div>
  <div class="col-xs-9" id="panel_opcion"> 
    	
  </div>
 </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
 $(function(){
   $("#opcion_crear_afilia").click(function(){
   	 $("#panel_opcion").load("View/afiliado/register_afiliado.php");
   });
   $("#opcion_crear_medico").click(function(){
   	 $("#panel_opcion").load("View/medico/registrar_medico.php");
   });
   $("#opcion_ver_citas").click(function(){
   	 $("#panel_opcion").load("View/medico/agenda.php");
   });

   $("#opcion_ver_client").click(function(){
   	 $("#panel_opcion").load("View/afiliado/list_afiliado.php");
   });
   $("#opcion_ver_medic").click(function(){
   	 $("#panel_opcion").load("View/medico/list_medicos.php");
   });
 });
</script>
