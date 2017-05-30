<div class="container-fluid well">
     <form id="form_buscar">
      <div class="col-xs-6">
       <label>Tipo de identidad</label>
       <select class="form-control" name="slt_tip_ident" required>
        <option value=""></option>
      	<option value="1">Tarjeta de Identidad</option>
      	<option value="2">Cedula</option>
      	<option value="3">Tarjeta extrangero</option>	
       </select>
      </div>
      <div class="col-xs-4">
        <label>Documento</label>
      	<input type="text" class="form-control" name="inp_tip_ident" required> 
      </div>
      <div class="col-xs-2"><br>
      	<button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>	
      </div>
     </form>
    </div>
    <div class="container-fluid well">
     <form id="form_register_triage">
      <fieldset>
      	<legend>Registrar Triage</legend>
      	<div class="container-fluid">
      	 <div class="col-xs-3">
      	  <label>Fecha</label> 
      	  <input class="form-control" type="date" name="inp_fecha" required>
      	 </div>
      	 <div class="col-xs-9">
      	  <label>Nivel del triage</label>
      	  <select class="form-control" name="slt_nivel_triage" required>
      	  	<option></option>
      	  	<option value="1">Nivel 1</option>
      	  	<option value="2">Nivel 2</option>
      	  	<option value="3">Nivel 3</option>
      	  	<option value="4">Nivel 4</option>
      	  	<option value="5">Nivel 5</option>
      	  </select>
      	 </div>
      	</div>

      	<div class="container-fluid">
      	 <div class="col-xs-3">
      	  <label>Presion arterial</label>
      	  <input type="text" class="form-control" name="inp_pres_art" required>
      	 </div>
      	 <div class="col-xs-3">
      	  <label>Frecuencia respiratoria</label>
      	  <input type="text" class="form-control" name="inp_respira" required>
      	 </div>
      	 <div class="col-xs-3">
      	  <label>Frecuencia cardiaca</label>
      	  <input type="text" class="form-control" name="inp_frecuenc" required>
      	 </div>
      	</div>
      	<div class="container-fluid padding-0">
      	 <div class="col-xs-7 padding-0 well">
      	  <div class="col-xs-6 padding-0">
      	    <div class="container-fluid">	
      	   	  <label>Tension</label>
      	   	  <input type="text" class="form-control" name="inp_tension" required>
      	    </div>
      	    <div class="container-fluid padding-0">
      	     <fieldset>
      	   	  <legend>Glasrow</legend>
      	   	  <div class="col-xs-4">
      	   	   <label>Verbal</label>
      	   	   <select class="form-control" name="slt_verbal" required>
      	   	    <option value="1">1</option>
      	   	    <option value="2">2</option>
      	   	    <option value="3">3</option>
      	   	    <option value="4">4</option>
      	   	    <option value="5">5</option>
      	   	   </select>
      	   	  </div>
      	   	  <div class="col-xs-4">
      	   	   <label>Ocular</label>
      	   	   <select class="form-control" name="slt_ocular" required>
      	   	    <option value="1">1</option>
      	   	    <option value="2">2</option>
      	   	    <option value="3">3</option>
      	   	    <option value="4">4</option>
      	   	    <option value="5">5</option>
      	   	   </select>	
      	   	  </div>
      	   	  <div class="col-xs-4">
      	   	   <label>Motora</label >
      	   	   <select class="form-control" name="slt_motora" required>
      	   	    <option></option>
                <option value="1">1</option>
      	   	    <option value="2">2</option>
      	   	    <option value="3">3</option>
      	   	    <option value="4">4</option>
      	   	    <option value="5">5</option>
      	   	   </select>	
      	   	  </div>
      	     </fieldset> 
      	    </div>
      	    <div class="container-fluid padding-0">
      	     <div class="col-xs-3">Alerta</div>
      	     <div class="col-xs-9"><input type="text" class="form-control" name="inp_alert" required></div>
      	     <div class="col-xs-3">Obnublado</div>
      	     <div class="col-xs-9"><input type="text" class="form-control" name="inp_obnubla" required></div>
      	    </div>
      	  </div><!--col-xs-6-->
      	  <div class="col-xs-6 padding-0">
      	   <div class="container-fluid padding-0">
      	   	 <label>Estupor</label>
      	   	 <input type="text" name="inp_estup" class="form-control" required>
      	   </div>
      	   <div class="container-fluid">
      	   	 <label>Coma</label>
      	   	 <input type="text" name="inp_coma" class="form-control" required>
      	   </div>
      	   <div class="container-fluid">
      	   	 <label>Sintomas</label>
      	   	 <input type="text" name="inp_sinto" class="form-control" required>
      	   </div>
      	   <div class="container-fluid">
      	    <fieldset>
      	     <legend>Categoria sintoma</legend>
             <div class="col-xs-6">
              <select class="form-control" name="slt_cate_sint" required></select>
             </div>
             <div class="col-xs-6">
              <legend>Subcategoria sintoma</legend>
              <select class="form-control" name="slt_sub_cate" required></select>	
             </div> 
      	    </fieldset>
      	   </div>
      	  </div>
      	 </div> 
      	 <div class="col-xs-5 padding-0 well"><!-- panel derecho -->
      	  <div class="container-fluid padding-0">
      	   <fieldset>
      	   	<legend>Antecedentes</legend>
      	   	<textarea rows="4" name="txt_area" class="form-control" required></textarea>
      	   </fieldset>
      	  </div>
      	  <div class="container-fluid padding-0">
      	   <fieldset>
      	   	<legend>Descripcion de aspecto</legend>
      	   	<textarea rows="4" name="text_descrip_aspect" class="form-control" required></textarea>
      	   </fieldset>
      	  </div>
          <div class="container-fluid padding-0">
            <button type="button" class="btn btn-default pull-right">Guardar</button>
            <input type="hidden" name="register_triage">
            <input type="hidden" name="hidden_user">
          </div>
      	 </div>	
      	</div>
      </fieldset>	
     </form>	
    </div>


