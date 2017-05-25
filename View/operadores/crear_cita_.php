<div class="container-fluid" id="panel_register_cita">
    <div class="container-fluid well">
     <form id="form_user">
      <div class="col-xs-7">
       <label>documento</label>
       <input type="text" name="inp_document" class="form-control" required>
      </div>
      <div class="col-xs-3">
        <label>Tipo de documento</label>
        <select name="form_tip_docu" class="form-control" required>
          <option value="1">Cedula</option>
          <option value="2">Targeta de identidad</option>
        </select>
      </div>
      <div class="col-xs-2"> <br>
       <button class="btn btn-default" type="submit"><i class="glyphonico glyphonico-search"></i> Buscar</button>
      </div>
     </form>
    </div>
    <div class="container-fluid well">
     <form id="form_register_cita">
       <fieldset>
       	<legend>Registrar cita</legend>
       	<div class="container-fluid">
       	 <label>Documentos</label>
       	 <input type="text" name="inp_document" class="form-control" readonly>
        </div>
       	<div class="container-fluid">
       	 <label>Tipo de especialidad</label>
       	 <select name="slt_tip_espe" class="form-control">
            <option></option>
            <option value="1">Higiene Oral</option> 
            <option value="2">Medicina General</option>
         </select>
        </div>
        <div class="container-fluid">
       	 <label>Medico</label>
       	 <select name="slt_medi" class="form-control"></select>
        </div>
        <div class="container-fluid">
       	 <label>Acompañante</label>
       	 <input name="inp_acomp" type="text" class="form-control">
        </div>
        <div class="container-fluid">
         <label>Fecha</label>
       	 <input name="inp_fech" type="date" class="form-control">
        </div>
        <div class="container-fluid">
         <br>
         <button type="submit" class="btn btn-default pull-right">Guarda</button>
        </div>
       </fieldset>	
     </form>
    </div>
</div>