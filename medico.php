<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href='View/dist/fullcalendar.css' rel='stylesheet' />
  <link href='View/dist/fullcalendar.print.css' rel='stylesheet' media='print'/>
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
     <li class="list-group-item" id="opcion_crear"><a href="#">Ver Agenda</a></li>
     <li class="list-group-item" id="opcion_consult"><a href="#">Crear Triage</a></li>	
    </ul>
  </div>
  <div class="col-xs-9 well" id="panel_opcion"> 
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
      $("#opcion_crear").click(function(){
        $("#panel_opcion").load("View/medico/agenda.php");
        setTimeout(function(){
         calendar();
        },200);
      });
      $("#opcion_consult").click(function(){
        $("#panel_opcion").load("View/medico/triage.php");
        Get_sintomas();
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
      function Buscar(){
        var form = serealizar("form_buscar");
        var params = {"buscar_afiliao":form};
        $.post("Controller/Ruta.php",{"request":JSON.stringify(params)},function(data){
          var data = $.parseJSON(data);
          if(data !== null){
            $("input[name='hidden_user']").val(data.cedula);
          }
        });
      }

      function Get_sintomas(){
        setTimeout(function(){
         var params = {"get_sintomas":""};
         $.post("Controller/Ruta.php",{"request":JSON.stringify(params)},function(data){
          var data = $.parseJSON(data);
          if(data !== null){
            $.each(data,function(key,val){
              var option = '<option value='+val.id+'>'+val.name+'</option>';
              $(option).appendTo($("select[name='slt_cate_sint']"));
            });
          }
         });
        },200);
      }

      $(document).on('submit',"#form_buscar",function(e){
        e.preventDefault();
        Buscar();
      });
      $(document).on('submit','#form_register_triage',function(e){
        e.preventDefault();
        Enviar("form_register_triage");
      });



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
           var params = {"get_all_citas":""};
           $.ajax({
              url: 'Controller/Ruta.php',
              type: 'POST',
              dataType: 'json',
              data: {
                request:JSON.stringify(params),
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
  });
</script>