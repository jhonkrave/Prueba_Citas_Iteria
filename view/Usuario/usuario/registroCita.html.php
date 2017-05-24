
<div class="container" style="    background-color: #909498;
    width: 75%;
    padding: 2%;
    border-radius: 1%;
    height: 406px;
    margin-top: 2%;
    margin-bottom: 2%;">
    <h2>Registro Citas</h2>
            <form class="form-horizontal form-label-left" action="<?php echo crearUrl("usuario", "usuario", "registrarCita")?>" method="POST">
    


            <div class="form-group">
                <label for="Cedula" class="control-label col-md-3 col-sm-3 col-xs-12">Cedula *<span class="required"></span>
                </label>
                <div class="form-group col-md-3">
                    <input type="number" class="form-control" required="required" id="Cedula" name="Cedula">
                </div>

                <label for="Nombre" class="control-label col-md-3 col-sm-3 col-xs-12">Nombre*<span class="required"></span>
                </label>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" required="required" id="Nombre" name="Nombre" readonly>
                </div>
            </div>

            <div class="form-group">
                <label for="Fecha" class="control-label col-md-3 col-sm-3 col-xs-12">Fecha *<span class="required"></span>
                </label>
                <div class="form-group col-md-3">
                    <select name="Fecha" class="form-control">
                        <option selected>----selecione----</option>
                        <option>d</option>
                        <?php?>
                    </select>
                </div>

                <label for="Especialidad" class="control-label col-md-3 col-sm-3 col-xs-12">Especialidad *<span class="required"></span>
                </label>
                <div class="form-group col-md-3">
                     <select name="Especialidad" class="form-control">
                        <option selected>----selecione----</option>
                        <option>d</option>
                        <?php?>
                    </select>
                </div>
            </div>
        
            <div class="form-group">

                <label for="Medico Tratante" class="control-label col-md-3 col-sm-3 col-xs-12">Medico Tratante*<span class="required"></span>
                </label>
                <div class="form-group col-md-3">
                    <select name="Especialidad" class="form-control">
                        <option selected>----selecione----</option>
                        <option>d</option>
                        <?php?>
                    </select>
                </div>
         
        
                <div class="form-group col-md-3">
                    <input type="submit" class="btn btn-warning" style="margin-left: 138%" onclick="validacion();" id="validacion" value="Guardar">
                </div>
            </div>
        </form>
</div>