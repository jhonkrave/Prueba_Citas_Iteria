<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
</head>
<body>
 <div class="nav navbar">
 	
 </div>
 <div class="container">
  <div class="col-xs-6 well">   
   <form id="form_register">
    <fieldset>
    	<legend>Registrar Usuario</legend>
    	<div class="form-group-inline">
    	  <label>Documento</label>
    	  <input class="form-control" type="text" name="inp_document">	
    	</div>
    	<div class="form-group-inline">
    	  <label>Nombre</label>
    	  <input class="form-control" type="text" name="inp_nomb">	
    	</div>
    	<div class="form-group-inline">
    	  <label>Apellido</label>
    	  <input class="form-control" type="text" name="inp_apellid">	
    	</div>
    	<div class="form-group-inline">
    	 <label>fecha de nacimiento</label>
    	 <input type="date" class="form-control" name="inp_fecha">	
    	</div>
    	<div class="form-group-inline">
    	  <label>Sexo</label>
    	  F
    	  <input type="radio" class="inp_sex" value="1">
    	  M
    	  <input type="radio" class="inp_sex" value="2">
    	</div>
    	<div class="form-group-inline">
    	  <label>Tipo de afiliado</label>
    	  <select class="form-control">
    	  	<option></option>
    	  	<option></option>
    	  </select>
    	</div>
    	<div class="container-fluid" style="padding: 0">
    	 <br>
    	  <button class="btn btn-default pull-right" type="submit">Guardar</button>	
    	</div>
    </fieldset>
   </form>
  </div>
  <div class="col-xs-6"></div>
 </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>