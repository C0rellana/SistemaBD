
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
                  <form class="form-horizontal" action="Control_despacho.php" method="post" >
                    <fieldset>
                      
                      <div class="form-group">
                        <label for="ID_I" class="col-lg-2 control-label">Codigo </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="ID_I" placeholder=" Ingrese Codigo Del Despacho"required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="TIEMPO_I" class="col-lg-2 control-label">Tiempo</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="TIEMPO_I" placeholder="Ingrese Tiempo de Entrega"required>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="DESPACHADOR_I" class="col-lg-2 control-label">Encargado</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="DESPACHADOR_I" placeholder="Ingrese Rut Del DESPACHADOR"required>

                        </div>
                      </div>

                      <div class="form-group">
                        <label for="ESTADO_I" class="col-lg-2 control-label">Estado</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="ESTADO_I" placeholder="Ingrese Estado Del Despacho"required>

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
                    </fieldset>
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
                      <form class="form-horizontal" action="Control_despacho.php" method="post">
                        <fieldset>
                          <div class="form-group">
                            <label for="ID_B" class="col-lg-2 control-label">Codigo </label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="ID_B" placeholder=" Ingrese Numero del Despacho"required>
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
                        </fieldset>
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
                      <form class="form-horizontal" action="Control_despacho.php" method="post">
                        <fieldset>
                          <div class="form-group">
                            <label for="ID_U" class="col-lg-2 control-label">Codigo </label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="ID_U" placeholder=" Ingrese Codigo Del Despacho"required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TIEMPO_U" class="col-lg-2 control-label">Tiempo</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="TIEMPO_U" placeholder="Ingrese Tiempo de Entrega"required>

                            </div>
                          </div>
                          <div class="form-group">
                            <label for="DESPACHADOR_U" class="col-lg-2 control-label">Encargado</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="DESPACHADOR_U" placeholder="Ingrese Rut Del DESPACHADOR"required>

                            </div>
                          </div>

                          <div class="form-group">
                            <label for="ESTADO_U" class="col-lg-2 control-label">Estado</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="ESTADO_U" placeholder="Ingrese Estado Del Despacho"required>

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
                        </fieldset>
                      </form>
                      
                  </div>
                </div>

        



    </div>
  </div>
</div>

