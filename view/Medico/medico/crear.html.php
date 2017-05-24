
<div class="container" style="    background-color: #909498;
    width: 75%;
    padding: 2%;
    border-radius: 1%;
    height: 406px;
    margin-top: 2%;
    margin-bottom: 2%;">
    <h2>Registro Medico</h2>
			<form class="form-horizontal form-label-left" action="<?php echo crearUrl("Usuarios", "persona", "postCrear")?>" method="post">
			<div class="form-group">
				<label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Documento *<span class="required"></span>
				</label>
				<div class="form-group col-md-3">
					<select name="tipoDoumento" class="form-control"" id="password">
		            	<option selected>----selecione----</option>
		            	<option>d</option>
		            	<?php?>
	            	</select>
				</div>

				<label for="Cedula" class="control-label col-md-3 col-sm-3 col-xs-12">Cedula *<span class="required"></span>
				</label>
				<div class="form-group col-md-3">
					<input type="number" class="form-control" required="required" id="Cedula" name="Cedula">
				</div>
			</div>


			<div class="form-group">
				<label for="Nombre" class="control-label col-md-3 col-sm-3 col-xs-12">Nombre *<span class="required"></span>
				</label>
				<div class="form-group col-md-3">
					<input type="text" class="form-control" required="required" id="Nombre" name="Nombre">
				</div>

				<label for="Apellido" class="control-label col-md-3 col-sm-3 col-xs-12">Apellidos *<span class="required"></span>
				</label>
				<div class="form-group col-md-3">
					<input type="text" class="form-control" required="required" id="Apellido" name="Apellido">
				</div>
			</div>

			<div class="form-group">
				<label for="Ciudad" class="control-label col-md-3 col-sm-3 col-xs-12">Ciudad *<span class="required"></span>
				</label>
				<div class="form-group col-md-3">
					<input type="text" class="form-control" required="required" id="Ciudad" name="Ciudad">
				</div>

				<label for="Direccion" class="control-label col-md-3 col-sm-3 col-xs-12">Direccion *<span class="required"></span>
				</label>
				<div class="form-group col-md-3">
					<input type="text" class="form-control" required="required" id="Direccion" name="Direccion">
				</div>
			</div>
		
			<div class="form-group">
				<label for="Telefono" class="control-label col-md-3 col-sm-3 col-xs-12">Telefono *<span class="required"></span>
				</label>
				<div class="form-group col-md-3">
					<input type="number" class="form-control" required="required" id="Telefono" name="Telefono">
				</div>

				<label for="Sexo" class="control-label col-md-3 col-sm-3 col-xs-12">Sexo *<span class="required"></span>
				</label>
				<div class="form-group col-md-3">
					 <select name="sexo" id="sexo" class="form-control">
	            	<option>----Selecione----</option>
	            	<option>fem</option>
	            	<?php?>
	            </select>
				</div>
			</div>
			
				<div class="form-group">
				<label for="Afiliado" class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Afiliado *<span class="required"></span>
				</label>
				<div class="form-group col-md-3">
					 <select name="Afiliado" id="Afiliado" class="form-control">
	            	<option>----Selecione----</option>
	            	<option>eeed</option>
	            	<?php?>
	            </select>
				</div>

				<div class="form-group col-md-3">
					<input type="submit" class="btn btn-warning" style="margin-left: 144%" onclick="validacion();" id="validacion" value="Guardar">
				</div>
			</div>
		</form>
</div>