<div class="container-fluid">
      <div class="jumbotron">
       <h2>Configuracion de especializacion</h2>
      </div>
     <form id="form_add_especia">
      <fieldset>
       <legend>Registrar especialista</legend>
 	   <div class="col-xs-2">
 	    <label>ID especializacion</label>
 	   </div>
 	   <div class="col-xs-3">
 	    <input type="number" name="inp_codigo" class="form-control">
 	   </div>
 	   <div class="col-xs-5">
 	    <input type="text" class="form-control" name="inp_especializa">
 	   </div>
 	   <div class="col-xs-2">
 	  	 <button class="btn btn-default pull-right"><i class="glyphicon glyphicon-save"></i> Guardar</button>
 	   </div>
 	  </fieldset>
     </form>
    </div>
    <div class="container-fluid panel panel-default well" style="margin-top: 20px">
      <table class="table table-hover table-striped" id="table_especia">
       <thead>
       	 <th style="text-align: center"><label class="label label-primary"> ID especialista</label></th>
       	 <th style="text-align: center"><label class="label label-primary">Nombre</label></th>
       </thead>	
       <tbody></tbody>
      </table>	
    </div>