
<?php include("cabecera.php"); ?>

<br>
<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
        <div class="panel panel-success">
          <div class="panel-heading">
            <center>
            <h3 class="panel-title">Panel de Ingresar</h3>
            </center>
          </div>
          <div class="panel-body">
                  <form class="form-horizontal"  action="Control_cliente.php" method="post">
              
                      <div class="form-group">
                        <label for="ID_P" class="col-lg-2 control-label">RUT </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="RUT_I" placeholder=" Ingrese Rut" required>
                        </div>
                      </div>

                     <div class="form-group">
                        <label for="NOMBRE1_I" class="col-lg-2 control-label">NOMBRE </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="NOMBRE1_I" placeholder=" Ingrese Primer Nombre " required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="NOMBRE2_I" class="col-lg-2 control-label">NOMBRE2 </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="NOMBRE2_I" placeholder=" Ingrese Segundo Nombre " required>
                        </div>
                      </div>

                     <div class="form-group">
                        <label for="APELLIDO1_I" class="col-lg-2 control-label">APELLIDO </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="APELLIDO1_I" placeholder=" Ingrese Primer Apellido "required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="APELLIDO2_I" class="col-lg-2 control-label"> APELLIDO2 </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="APELLIDO2_I" placeholder=" Ingrese Segundo Apellido"required>
                        </div>
                      </div>



                      <div class="form-group">
                        <label for="PASS_I" class="col-lg-2 control-label">PASS </label>
                        <div class="col-lg-10">
                          <input type="password" class="form-control" name="PASS_I" placeholder=" Ingrese contraseña"required>
                        </div>
                      </div>

                      
                      <div class="form-group">
                        <label for="NOMBRE_I" class="col-lg-2 control-label">SEXO</label>
                        <div class="col-lg-10">
                                                    <div class="radio">
                              <label>
                                <input type="radio" name="OPCION_I" id="optionsRadios1" value="M" checked="">
                               Hombre
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="OPCION_I" id="optionsRadios2" value="F">
                                Mujer
                              </label>
                            </div>

                        </div>
                      </div>




                      <div class="form-group">
                        <label for="EMAIL_I" class="col-lg-2 control-label">EMAIL</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="EMAIL_I" placeholder="Ingrese Correo"required>

                        </div>
                      </div>

                      <div class="form-group">
                        <label for="DIRECCION_I" class="col-lg-2 control-label">DIRECCION</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="DIRECCION_I" placeholder="Ingrese Direccion"required>

                        </div>
                      </div>

                      <div class="form-group">
                        <label for="CALLE_I" class="col-lg-2 control-label">CALLE</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="CALLE_I" placeholder="Ingrese Calle"required>

                        </div>
                      </div>

                     <div class="form-group">
                        <label for="NUMERO_I" class="col-lg-2 control-label">NUMERO</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="NUMERO_I" placeholder="Ingrese Numero"required>

                        </div>
                      </div>
                      <center>
                      <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                          <button type="reset" class="btn btn-default">Cancelar</button>
                          <button type="submit" class="btn btn-primary">Aceptar</button>
                        </div>
                      </div>
                      </center>
                   
                  </form>
          </div>
        </div>


        



    </div>
    <div class="col-md-4">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <center>
              <h3 class="panel-title">Panel Eliminacion</h3>
              </center>
            </div>
            <div class="panel-body">
              <form class="form-horizontal" action="Control_cliente.php" method="post">
                
                  <div class="form-group">
                    <label for="RUT_B" class="col-lg-2 control-label">RUT </label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="RUT_B" placeholder=" Ingrese Rut del Cliente"required>
                    </div>
                  </div>
                  
                  <center>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-default">Cancelar</button>
                      <button type="submit" class="btn btn-primary">Aceptar</button>
                    </div>
                  </div>
                  </center>
              </form>

            </div>
          </div>

        


    </div>
   
    <div class="col-md-4">
                <div class="panel panel-warning">
                  <div class="panel-heading">
                    <center>
                    <h3 class="panel-title">Panel Actualizar</h3>
                    </center>
                  </div>
                  <div class="panel-body">
                                      <form class="form-horizontal"  action="Control_cliente.php" method="post"required>
              
                      <div class="form-group">
                        <label for="RUT_U" class="col-lg-2 control-label">RUT </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="RUT_U" placeholder=" Ingrese Rut"required>
                        </div>
                      </div>

                     <div class="form-group">
                        <label for="NOMBRE1_U" class="col-lg-2 control-label">NOMBRE </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="NOMBRE1_U" placeholder=" Ingrese Primer Nombre "required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="NOMBRE2_U" class="col-lg-2 control-label">NOMBRE2 </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="NOMBRE2_U" placeholder=" Ingrese Segundo Nombre "required>
                        </div>
                      </div>

                     <div class="form-group">
                        <label for="APELLIDO1_U" class="col-lg-2 control-label">APELLIDO </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="APELLIDO1_U" placeholder=" Ingrese Primer Apellido "required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="APELLIDO2_U" class="col-lg-2 control-label"> APELLIDO2 </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="APELLIDO2_U" placeholder=" Ingrese Segundo Apellido"required>
                        </div>
                      </div>



                      <div class="form-group">
                        <label for="PASS_U" class="col-lg-2 control-label">PASS </label>
                        <div class="col-lg-10">
                          <input type="password" class="form-control" name="PASS_U" placeholder=" Ingrese contraseña"required>
                        </div>
                      </div>

                      
                      <div class="form-group">
                        <label for="OPCION_U" class="col-lg-2 control-label">SEXO</label>
                        <div class="col-lg-10">
                                                    <div class="radio">
                              <label>
                                <input type="radio" name="OPCION_U" id="optionsRadios1" value="M" checked="">
                               Hombre
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="OPCION_U" id="optionsRadios2" value="F">
                                Mujer
                              </label>
                            </div>

                        </div>
                      </div>




                      <div class="form-group">
                        <label for="EMAIL_U" class="col-lg-2 control-label">EMAIL</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="EMAIL_U" placeholder="Ingrese Correo"required>

                        </div>
                      </div>

                      <div class="form-group">
                        <label for="DIRECCION_U" class="col-lg-2 control-label">DIRECCION</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="DIRECCION_U" placeholder="Ingrese Direccion"required>

                        </div>
                      </div>

                      <div class="form-group">
                        <label for="CALLE_U" class="col-lg-2 control-label">CALLE</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="CALLE_U" placeholder="Ingrese Calle"required>

                        </div>
                      </div>

                     <div class="form-group">
                        <label for="NUMERO_U" class="col-lg-2 control-label">NUMERO</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="NUMERO_U" placeholder="Ingrese Numero"required>

                        </div>
                      </div>
                      <center>
                      <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                          <button type="reset" class="btn btn-default">Cancelar</button>
                          <button type="submit" class="btn btn-primary">Aceptar</button>
                        </div>
                      </div>
                      </center>
                   
                  </form>
                  </div>
                </div>

        



    </div>
  </div>
</div>


