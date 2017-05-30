<div class="container-fluid" id="panel_register_cita">
     <form id="form_register_cita">
       <fieldset>
       	<legend>Registrar cita</legend>
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
       	 <select name="slt_medico" class="form-control" required></select>
        </div>
        <div class="container-fluid">
       	 <label>Acompañante</label>
       	 <input type="text" name="inp_acompa" class="form-control">
        </div>
        <div class="container-fluid">
         <label>Fecha</label>
       	 <select class="form-control" name="slt_fecha" required></select>
        </div>
        <div class="container-fluid">
         <br>
         <button class="btn btn-default pull-right">Guarda</button>
         <input type="hidden" name="register_cita">
        </div>
       </fieldset>	
     </form>
</div>