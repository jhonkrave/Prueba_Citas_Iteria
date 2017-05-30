<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
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

<div id="modal_cancel" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h3 class="modal-title">Eliminar cita</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body alert alert-danger">
        <p><strong>¿ Desea eliminar cita ?</strong></p>
      </div>
      <div class="modal-footer">
       <form id="form_cancel">
        <button type="submit" class="btn btn-primary">Si</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="hidden" name="hidden_id_cita">
        <input type="hidden" name="delete_cita">
       </form>
      </div>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="View/js/select_especialidad.js"></script>

<script type="text/javascript">
	$(function(){
      $("#opcion_crear").click(function(){
      	$("#panel_opcion").load("View/afiliado/form_afiliado.php");
      });
      $("#opcion_consult").click(function(){
      	$("#panel_opcion").load("View/afiliado/list_cita.php");
        var params = {"get_citas_afi":""};
        Get_all_registros("table_list_cits",params);
      });

      

      function serealizar(form){
       var form_ = $("#"+form).serializeArray();
       var json = {};
       $.each(form_,function(key,val){
        json[val.name] = val.value;
       });
       return json;
      }
      function Enviar(form){
       //if(Validar(form)){
        var json = serealizar(form);
        $.post("Controller/Ruta.php",{"request":JSON.stringify(json)},function(data){
         var data = $.parseJSON(data);
         if(data.exito){
          alert("guardado con exito");
         }
        });
      //}
      }

      function Get_all_registros(table,params){
       $('#'+table+' tbody').html("");
       setTimeout(function(){
        $.post("Controller/Ruta.php",{"request":JSON.stringify(params)},function(data){
         var data = $.parseJSON(data); 
         if(data !== null){
           $.each(data,function(key,val){
            var t = '<tr><td>'+val.medico+'</td><td>'+val.fecha+'</td><td><a href="#" data-toggle="modal" data-target="#modal_cancel" class="btn btn-default btn-xs btn_cancel_cita" data-id='+val.id_cita+'>Cancelar cita</a></td></tr>';
             $(t).appendTo($('#'+table+' tbody')); 
           });
         }
        });
       },200);
      }

      $(document).on('submit','#form_register_cita',function(e){
        e.preventDefault();
        Enviar("form_register_cita");
      });

      $(document).on('submit','#form_cancel',function(e){
        e.preventDefault();
        Enviar("form_cancel");
      });

      
      $(document).on('click','.btn_cancel_cita',function(){
        var id = $(this).attr('data-id');
        $("input[name='hidden_id_cita']").val(id);
      });
	});
</script>


