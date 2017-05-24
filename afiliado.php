<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid">
   <div class="nav navbar">
   	 <button class="btn btn-default pull-right">Salir</button>
   </div>
   <div class="col-xs-3 well" style="height: 100%">
    <ul class="list-group">
     <li class="list-group-item" id="opcion_crear"><a href="#">Agendar cita</a></li>
     <li class="list-group-item" id="opcion_consult"><a href="#">Consultar cita</a></li>	
    </ul>
   </div>
   <div class="col-xs-9 well" style="height: auto;" id="panel_opcion">
    
    
   </div>	
  </div>
</body>
</html>
<div class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar cita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿ Desea eliminar cita ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Si</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(function(){
      $("#opcion_crear").click(function(){
      	$("#panel_opcion").load("View/afiliado/form_afiliado.php");
      });
      $("#opcion_consult").click(function(){
      	$("#panel_opcion").load("View/afiliado/list_cita.php");
      });
	});
</script>


