

  
  $(document).on("click",".modalAjax", function(){
    
    var url = $(this).attr("data-url");
    var target = $(this).attr("data-target");
    
    
    $.ajax({
        url: url,
        type: "GET",
        success: function(data){
            $(target+" > .modal-dialog > .modal-content > .modal-body").html(data);
        }
    });
    });
  
  
    

  function cerraventana(){
    $(".modal").css("display","none");
  }
  
  
  $("#buscador").keyup(function(){
    var url = $(this).attr('data-url');
    var target = $(this).attr('data-target');

    $.ajax({
      type:"POST",
      url:url,
      data:{respuesta:$("#buscador").val()}
    })
    .done(function(data){
      $(target+ "> tbody").html(data);
    });
  });

  function modal(id,url){
    
    $.ajax({
       url:url,
       type:"POST",
       data:"id="+id,
       success: function(data){
            $(".eliminar").html(data);
            $(".eliminar").css("display","block");
        }
    });
}

function cerrarVerMas(){
  $(".flotanteGlobal").css("display","none");

}