
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
                  <form class="form-horizontal" action="Control_boleta.php" method="post">
                    <fieldset>
                  
                      <div class="form-group">
                        <label for="ID_I" class="col-lg-2 control-label">ID </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="ID_I" placeholder=" Ingrese Numero De Boleta" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="cliente" class="col-lg-2 control-label">Cliente</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="CLIENTE_I" placeholder="Ingrese Rut del Cliente"required>

                        </div>
                      </div>

                      <div class="form-group">
                        <label for="ENCUESTA_I" class="col-lg-2 control-label">ENCUESTA</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="ENCUESTA_I" placeholder="Ingrese ENCUESTA"required>

                        </div>
                      </div>

                   
                      <div class="form-group">
                        <label for="DESPACHO_I" class="col-lg-2 control-label">DESPACHO</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="DESPACHO_I" placeholder="Ingrese DESPACHO"required>

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
                <form class="form-horizontal" class="form-horizontal" action="Control_boleta.php" method="post">
                        <div class="form-group">
                          <label for="ID_B" class="col-lg-2 control-label">ID </label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" name="ID_B" placeholder=" Ingrese Numero de Boleta"required>
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
                    <form class="form-horizontal" class="form-horizontal" action="Control_boleta.php" method="post">
                      <fieldset>
                    
                        <div class="form-group">
                          <label for="ID_U" class="col-lg-2 control-label">ID </label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" name="ID_U" placeholder=" Ingrese Numero De Boleta"required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="CLIENTE_U" class="col-lg-2 control-label">Cliente</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" name="CLIENTE_U" placeholder="Ingrese Rut del Cliente"required>

                          </div>
                        </div>

                      <div class="form-group">
                        <label for="ENCUESTA_U" class="col-lg-2 control-label">ENCUESTA</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="ENCUESTA_U" placeholder="Ingrese Encuesta"required>

                        </div>
                      </div>

                    
                      <div class="form-group">
                        <label for="DESPACHO_U" class="col-lg-2 control-label">DESPACHO</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="DESPACHO_U" placeholder="Ingrese Despacho"required>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="TOTAL_U" class="col-lg-2 control-label">TOTAL</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="TOTAL_U" placeholder="Ingrese Total"required>

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





