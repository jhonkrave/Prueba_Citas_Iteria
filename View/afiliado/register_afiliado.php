<div class="container-fluid" id="panel_register_afiliado">
	 <form class="form-horizontal" id="form_register">
	  <fieldset>
		<!-- Form Name -->
		<legend>Registrar Afiliado</legend>

		 <!-- Text input-->
		<div class="form-group">
  		 <label class="col-md-4 control-label" for="Company Name">Nombre</label>  
  		 <div class="col-md-6">
  			<input id="Company Name" name="inp_name" type="text" placeholder="Nombre completo" class="form-control input-md" required="">
  		 </div>
		</div>
		<div class="form-group">
  		 <label class="col-md-4 control-label" for="Company Name">Apellido</label>  
  		 <div class="col-md-6">
  			<input id="Company Name" name="inp_apelli" type="text" placeholder="Apellido completo" class="form-control input-md" required="">
  		 </div>
		</div>

		<!-- Textarea -->
		<div class="form-group">
  		 <label class="col-md-4 control-label" for="Address">Sexo</label>
  		 <div class="col-md-4">          
  		    <label>F           
    		<input type="radio" name="rdio_sex" value="1"></label>
    		<label>M       
    		<input type="radio" name="rdio_sex" value="2"></label>
  		 </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
  		 <label class="col-md-4 control-label" for="User Name">Fecha de nacimiento</label>  
  		 <div class="col-md-6">
  		  <input  name="inp_fecha_nacimi" type="date" placeholder="Fecha de nacimiento" class="form-control input-md" required="">
 		 </div>
		</div>

		<div class="form-group">
  		 <label class="col-md-4 control-label" for="Tipo de afiliado">Tipo de afiliado</label>  
  		 <div class="col-md-6">
  		  <select class="form-control" name="slt_tip_afilia">
  		  	<option></option>
  		  	<option value="1">Tarjeta de identidad</option>
  		  	<option value="2">Cedula</option>
  		  	<option value="3">Tarjeta de extranjero</option>
  		  </select>
 		 </div>
		</div>
		<div class="form-group">
  		 <label class="col-md-4 control-label" for="Nick de usuario">Nick de usuario</label>  
  		 <div class="col-md-6">
  		  <input  name="inp_nick_user" type="text" placeholder="Nick de usuario" class="form-control input-md" required="">
 		 </div>
		</div>
		<!-- Button -->
		<div class="form-group">
  		 <label class="col-md-4 control-label" for=""></label>
  		 <div class="col-md-4">
    	   <button id="" type="submit" class="btn btn-success">Guardar</button>
  	   	 </div>
		</div>
	   </fieldset>
      </form>  
</div>