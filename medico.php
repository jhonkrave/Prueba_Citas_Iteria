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
  <div class="nav navbar">
   	 <button class="btn btn-default pull-right">Salir</button>
  </div>
  <div class="col-xs-3">
    <ul class="list-group">
     <li class="list-group-item" id="opcion_crear"><a href="#">Ver Agenda</a></li>
     <li class="list-group-item" id="opcion_consult"><a href="#">Crear Triage</a></li>	
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
      $("#opcion_crear").click(function(){
        $("#panel_opcion").load("View/medico/agenda.php");
      });
      $("#opcion_consult").click(function(){
        $("#panel_opcion").load("View/medico/triage.php");
      });
  });
</script>