
<div class="container" style="    background-color: #909498;
    width: 75%;
    padding: 2%;
    border-radius: 1%;
    height: 406px;
    margin-top: 2%;
    margin-bottom: 2%;">
    <h2>Contactenos</h2>
			<form class="form-horizontal form-label-left" action="<?php echo crearUrl("Usuarios", "persona", "postCrear")?>" method="POST">
	


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
				<label for="mail" class="control-label col-md-3 col-sm-3 col-xs-12">mail *<span class="required"></span>
				</label>
				<div class="form-group col-md-3">
					<input type="email" class="form-control" required="required" id="mail" name="mail">
				</div>

				<label for="Direccion" class="control-label col-md-3 col-sm-3 col-xs-12">Direccion *<span class="required"></span>
				</label>
				<div class="form-group col-md-3">
					<input type="text" class="form-control" required="required" id="Direccion" name="Direccion">
				</div>
			</div>
		
			<div class="form-group">

				<label for="Observaciones" class="control-label col-md-3 col-sm-3 col-xs-12">Observaciones*<span class="required"></span>
				</label>
				<div class="form-group col-md-3">
					 <textarea rows="4" cols="95 required">
	
					</textarea>
				</div>
			</div>
			
			<div class="form-group">
		
				<div class="form-group col-md-3">
					<input type="submit" class="btn btn-warning" style="margin-left: 217%" onclick="validacion();" id="validacion" value="Guardar">
				</div>
			</div>
		</form>
</div>