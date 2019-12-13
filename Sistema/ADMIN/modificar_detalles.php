
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
                  <form class="form-horizontal" action="Control_detalles.php" method="post">
                    <fieldset>
                  
                      <div class="form-group">
                        <label for="ID_I" class="col-lg-2 control-label">BOLETA </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="ID_I" placeholder=" Ingrese Numero De Boleta"required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="PRODUCTO_I" class="col-lg-2 control-label">PRODUCTO</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="PRODUCTO_I" placeholder="Ingrese Numero de Producto"required>

                        </div>
                      </div>

                      <div class="form-group">
                        <label for="CANTIDAD_I" class="col-lg-2 control-label">CANTIDAD</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="CANTIDAD_I" placeholder="Ingrese Cantidad"required>

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
                <form class="form-horizontal" class="form-horizontal" action="Control_detalles.php" method="post">
                        <div class="form-group">
                          <label for="ID_B" class="col-lg-2 control-label">BOLETA </label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" name="ID_B" placeholder=" Ingrese Numero de Boleta"required>
                          </div>
                        </div>
                        
                       <div class="form-group">
                          <label for="ID_P" class="col-lg-2 control-label">PRODUCTO </label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" name="ID_P" placeholder=" Ingrese Numero de Producto"required>
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
                    <form class="form-horizontal" class="form-horizontal" action="Control_detalles.php" method="post">
                      <fieldset>
                    
                      <div class="form-group">
                        <label for="ID_U" class="col-lg-2 control-label">BOLETA </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="ID_U" placeholder=" Ingrese Numero De Boleta"required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="PRODUCTO_U" class="col-lg-2 control-label">PRODUCTO</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="PRODUCTO_U" placeholder="Ingrese Numero De Producto"required>

                        </div>
                      </div>

                      <div class="form-group">
                        <label for="CANTIDAD_U" class="col-lg-2 control-label">CANTIDAD</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="CANTIDAD_U" placeholder="Ingrese Cantidad"required>

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





