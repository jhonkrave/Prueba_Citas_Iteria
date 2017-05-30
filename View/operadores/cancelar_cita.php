<div class="container-fluid" id="panel_cancelar_cita">
      <div class="container-fluid">
       <form id="form_cancel_cita">
        <div class="col-xs-4">
          <label>Documento</label>
          <select class="form-control" name="slt_tipo_document" required>
           <option value="1">Targeta de identidad</option>
           <option value="2">Cedula</option>
           <option value="3">Tarjeta de extrangeria</option>
          </select>
        </div> 
        <div class="col-xs-6">
         <br>
         <div class="col-xs-8">
          <input type="text" name="inp_document" class="form-control" required>
         </div>
         <div class="col-xs-4">
          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
          <input type="hidden" name="listar_citas_user">
         </div>
        </div>
       </form>
      </div>
      <div class="container-fluid">
        <table class="table table-hover" id="table_cita"> 
         <thead>
           <th style="text-align: center">Cita</th>
           <th style="text-align: center">Medico</th>
           <th></th>
         </thead>
         <tbody></tbody>
        </table> 
      </div>
</div>