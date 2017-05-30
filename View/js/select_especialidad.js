$(function(){
 $(document).on('change',"select[name='slt_tip_especia']",function(){
        $("select[name='slt_medico']").html("");
        var id = $(this).val();
        var params = {"get_medicos_by_specialidad":"","specialidad":id};
        $.post("Controller/Ruta.php",{"request":JSON.stringify(params)},function(data){
          var data = $.parseJSON(data);
          if(data!== null){
            $.each(data,function(key,val){
              var option = '<option value='+val.id+'>'+val.name+'</option>';
              $(option).appendTo($("select[name='slt_medico']")); 
            });
          }
        });
  });
  $(document).on('change',"select[name='slt_medico']",function(){
        $("select[name='slt_fecha']").html("");
        var id = $(this).val();
        var params = {"get_agenda_medico":"","id":id};
        $.post("Controller/Ruta.php",{"request":JSON.stringify(params)},function(data){
          var data = $.parseJSON(data);
          if(data !== null){
            $.each(data,function(key,val){
             var option = '<option value='+val.id+'>'+val.name+'</option>';
             $(option).appendTo($("select[name='slt_fecha']"));
            });
          } 
        });
  });
});