<form class="form-horizontal form-label-left" action="<?php echo crearUrl('inventario', 'instalacionSenal', 'postCrear')?>" method="POST" style="background-color: rgba(69,58,173,.28);width: 20%;padding: 2%; border-radius: 8%;">
                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"><span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="email" name="login" id="login" class="" minlength="0" maxlength="45" placeholder="micorreo@homecare.com" required>
                        </div>
                    </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"><span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="password" name="password" id="password" class="input" minlength="0" maxlength="45" placeholder="contraseña" required>
                        </div>
                    </div>
                    
                   
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <input type="submit" class="btn btn-warning" onclick="validacion();" id="validacion" value="Enviar">
                        </div>
                    </div>
</form>