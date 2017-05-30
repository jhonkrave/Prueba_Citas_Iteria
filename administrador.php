<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href='View/dist/fullcalendar.css' rel='stylesheet' />
  <link href='View/dist/fullcalendar.print.css' rel='stylesheet' media='print' />
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
  <div class="col-xs-3 well">
    <ul class="list-group">
     <li class="list-group-item" id="opcion_crear_afilia"><a href="#">Crear Afiliado</a></li>
     <li class="list-group-item" id="opcion_crear_medico"><a href="#">Crear Medico</a></li>	
     <li class="list-group-item" id="opcion_ver_citas"><a href="#">Ver Citas</a></li>	
     <li class="list-group-item" id="opcion_ver_client"><a href="#">Ver Clientes</a></li>
     <li class="list-group-item" id="opcion_ver_medic"><a href="#">Ver Medicos</a></li>
     <li class="list-group-item" id="opcion_config"><a href="#">Agregar Especialista</a></li>	
     <li class="list-group-item" id="opcion_file"><a href="#">Subir archivo</a></li>	
    </ul>
  </div>
  <div class="col-xs-9" id="panel_opcion"> 
    
  </div>
 </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js'></script>
<script src='View/dist/fullcalendar.js'></script>

<script type="text/javascript">
 $(function(){
   $("#opcion_crear_afilia").click(function(){
   	 $("#panel_opcion").load("View/afiliado/register_afiliado.php");
   });
   $("#opcion_crear_medico").click(function(){
   	 $("#panel_opcion").load("View/medico/registrar_medico.php");
     Get_especialidad("slt_especia"); 
   });
   $("#opcion_ver_citas").click(function(){
   	 $("#panel_opcion").load("View/medico/agenda.php");
     var params = {"get_all_citas":""};
     //Get_all_registros("table_afiliado",params);
     setTimeout(function(){
      calendar();
     },200);
   });

   $("#opcion_ver_client").click(function(){
   	 $("#panel_opcion").load("View/afiliado/list_afiliado.php");
     var params = {"get_all_afiliados":""}; 
     Get_all_registros("table_afiliado",params);
   });
   $("#opcion_ver_medic").click(function(){
   	 $("#panel_opcion").load("View/medico/list_medicos.php");
     var params = {"get_all_medicos":""}; 
     Get_all_registros("table_medicos",params);
   });

   $("#opcion_config").click(function(){
   	 $("#panel_opcion").load("View/admin/add_especialista.php");
     Get_especialidad("slt_especia"); 
   });
   $("#opcion_file").click(function(){
   	 $("#panel_opcion").load("View/admin/subir_archivo.php");
   });

   function Get_especialidad(select){
    setTimeout(function(){
      var params = {"get_especialidad":""};
      $('select[name='+select+']').html("");
      $.post("Controller/Ruta.php",{"request":JSON.stringify(params)},function(data){
        var data = $.parseJSON(data); 
        if(data !== null){
          $.each(data,function(key,val){
            var t = '<option value='+val.id+'>'+val.name+'</option>';
            $(t).appendTo($('select[name='+select+']'));
          });
        }
      });
    },200);
    
   }
   function Get_all_registros(table,params){
    $("#table_medicos tbody").html("");
    setTimeout(function(){
      $.post("Controller/Ruta.php",{"request":JSON.stringify(params)},function(data){
       var data = $.parseJSON(data); 
       if(data !== null){
        $.each(data,function(key,val){
          var t = '<tr>';
          $.each(val,function(key_,val_){
            t += '<td>'+val_+'</td>';
          });
          t += '</tr>';
          $(t).appendTo($('#'+table+' tbody')); 
        });
       }
      });
    },200);
   }
   
   
   function Validar(form){
    var validar = false;
    $.each('#'+form,function(key,val){
      if(val.value == null || val.value == ""){
        return false;
      }else{
        validar = true;
      }
    });
    return validar;
   }

   
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

   function calendar(){ 
    $('#calendar').fullCalendar({
        header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2017-05-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
        events: function(start, end, timezone, callback) {
           $.ajax({
              url: 'Controller/fechas.php',
              type: 'POST',
              dataType: 'json',
              data: {
                start: start.format(),
                end: end.format()
              },
              success: function(doc) {
                var events = [];
                if(!!doc.result){
                    $.map( doc.result, function( r ) {
                        events.push({
                            id: r.id,
                            title: r.title,
                            start: r.date_start,
                            end: r.date_end
                        });
                    });
                }
                callback(events);
              }
           });
        }
    });
   }  

   $(document).on('submit','#form_register',function(e){
     e.preventDefault();
     Enviar("form_register");
   });
   $(document).on('submit','#form_register_medico',function(e){
     e.preventDefault();
     Enviar("form_register_medico");
   });
   $(document).on('submit','#form_add_especia',function(e){
     e.preventDefault();
     Enviar("form_add_especia");
   });
//https://fullcalendar.io/docs/event_data/events_function/
   
   
 });
</script>



