<div class="container-fluid" id="">
    <div class="container-fluid well">
     <form id="form_user">
      <div class="col-xs-7">
       <label>documento</label>
       <input type="text" name="inp_document" class="form-control" required>
      </div>
      <div class="col-xs-3">
        <label>Tipo de documento</label>
        <select name="slt_tip_docu" class="form-control" required>
          <option value="1">Cedula</option>
          <option value="2">Targeta de identidad</option>
        </select>
      </div>
      <div class="col-xs-2"> <br>
       <button class="btn btn-default" type="submit"><i class="glyphicon  glyphicon-search"></i> Buscar</button>
       <input type="hidden" name="buscar_afiliado">
      </div>
     </form>
    </div>
    <div class="container-fluid well" id="panel_register_cita" style="display: none">
     <form id="form_register_cita">
       <fieldset>
       	<legend>Registrar cita</legend>
       	<div class="container-fluid">
       	 <label>Documentos</label>
       	 <input type="text" name="inp_document_" class="form-control" readonly>
        </div>
       	<div class="container-fluid">
       	 <label>Tipo de especialidad</label> 
       	 <select name="slt_tip_especia" class="form-control" required>
            <option></option>
            <option value="1">Higiene Oral</option> 
            <option value="2">Medicina General</option>
         </select>
        </div>
        <div class="container-fluid">
       	 <label>Medico</label>
       	 <select name="slt_medico" required class="form-control"></select>
        </div>
        <div class="container-fluid">
       	 <label>Acompañante</label> 
       	 <input name="inp_acomp" type="text" required class="form-control">
        </div>
        <div class="container-fluid">
         <label>Fecha</label>
       	 <select name="slt_fecha"  required class="form-control"></select>
        </div>
        <div class="container-fluid">
         <br>
         <button type="submit" class="btn btn-default pull-right">Guarda</button>
         <input type="hidden" name="register_cita_from_opera">

        </div>
       </fieldset>	
     </form>
    </div>
</div>