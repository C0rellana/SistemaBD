
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
                  <form class="form-horizontal"  action="Control_despachador.php" method="post">
                
                      
                      <div class="form-group">
                        <label for="RUT_I" class="col-lg-2 control-label">RUT </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="RUT_I" placeholder=" Ingrese Rut del Despachador"required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="NOMBRE_I" class="col-lg-2 control-label">NOMBRE</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="NOMBRE_I" placeholder="Ingrese Nombre del Despachador"required>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="SEXO_I" class="col-lg-2 control-label">SEXO</label>
                        <div class="col-lg-10">
                            <div class="radio">
                              <label>
                                <input type="radio" name="SEXO_I" id="optionsRadios1" value="M" checked="">
                               Hombre
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="SEXO_I" id="optionsRadios2" value="F">
                                Mujer
                              </label>
                            </div>

                        </div>
                      </div>

                     <div class="form-group">
                        <label for="EDAD_I" class="col-lg-2 control-label">EDAD</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="EDAD_I" placeholder="Ingrese Sexo del Despachador"required>

                        </div>
                      </div>


                      <div class="form-group">
                        <label for="ESTADO_I" class="col-lg-2 control-label">Estado</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="ESTADO_I" placeholder="Ingrese Estado del Despachador"required>

                        </div>
                      </div>

                      <div class="form-group">
                        <label for="NUM_I" class="col-lg-2 control-label">N DIPS</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="NUM_I" placeholder="Ingrese Cantidad De Despachos Disponibles "required>

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
                      <form class="form-horizontal" action="Control_despachador.php" method="post"> 
                       
                          <div class="form-group">
                            <label for="RUT_B" class="col-lg-2 control-label">RUT </label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="RUT_B" placeholder=" Ingrese Rut del Despachador"required>
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
                      <form class="form-horizontal" action="Control_despachador.php" method="post">
                        
                          <div class="form-group">
                            <label for="RUT_U" class="col-lg-2 control-label">RUT </label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="RUT_U" placeholder=" Ingrese Rut del Despachador"required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="NOMBRE_U" class="col-lg-2 control-label">NOMBRE</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="NOMBRE_U" placeholder="Ingrese Nombre del Despachador"required>

                            </div>
                          </div>
                          <div class="form-group">
                            <label for="EDAD_U" class="col-lg-2 control-label">EDAD</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="EDAD_U" placeholder="Ingrese Edad del Despachador"required>

                            </div>
                          </div>

                        <div class="form-group">
                        <label for="SEXO_U" class="col-lg-2 control-label">SEXO</label>
                        <div class="col-lg-10">
                            <div class="radio">
                              <label>
                                <input type="radio" name="SEXO_U" id="optionsRadios1" value="M" checked="">
                               Hombre
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="SEXO_U" id="optionsRadios2" value="F">
                                Mujer
                              </label>
                            </div>

                        </div>
                      </div>


                         <div class="form-group">
                            <label for="ESTADO_U" class="col-lg-2 control-label">ESTADO</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="ESTADO_U" placeholder="Ingrese Estado del Despachador"required>

                            </div>
                          </div>


                      <div class="form-group">
                        <label for="NUM_U" class="col-lg-2 control-label">N DISP</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="NUM_U" placeholder="Ingrese Cantidad De Despachos Disponibles "required>

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

