
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
                  <form class="form-horizontal"  action="Control_producto.php" method="post">
              
                      <div class="form-group">
                        <label for="ID_P" class="col-lg-2 control-label">ID </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="ID_I" placeholder=" Ingrese ID Del Producto"required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nombre" class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="NOMBRE_I" placeholder="Ingrese Nombre Del Producto"required>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="precio" class="col-lg-2 control-label">Precio</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="PRECIO_I" placeholder="Ingrese Precio Del Producto"required>

                        </div>
                      </div>

                      <div class="form-group">
                        <label for="stock" class="col-lg-2 control-label">Stock</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="STOCK_I" placeholder="Ingrese Stock Del Producto"required>

                        </div>
                      </div>

                      <div class="form-group">
                        <label for="categoria" class="col-lg-2 control-label">Categoria</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="CATEGORIA_I" placeholder="Ingrese Categoria Del Producto"required>

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
              <form class="form-horizontal" action="Control_producto.php" method="post">
                
                  <div class="form-group">
                    <label for="ID_P" class="col-lg-2 control-label">ID </label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="ID_B" placeholder=" Ingrese ID Del Producto"required>
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
                    <form class="form-horizontal" action="Control_producto.php" method="post">
                        <div class="form-group">
                          <label for="ID_P" class="col-lg-2 control-label">ID </label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" name="ID_U" placeholder=" Ingrese ID Del Producto"required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="nombre" class="col-lg-2 control-label">Nombre</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" name="NOMBRE_U" placeholder="Ingrese Nombre Del Producto"required>

                          </div>
                        </div>
                        <div class="form-group">
                          <label for="precio" class="col-lg-2 control-label">Precio</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" name="PRECIO_U" placeholder="Ingrese Precio Del Producto"required>

                          </div>
                        </div>

                        <div class="form-group">
                          <label for="stock" class="col-lg-2 control-label">Stock</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" name="STOCK_U" placeholder="Ingrese Stock Del Producto"required>

                          </div>
                        </div>

                        <div class="form-group">
                          <label for="categoria" class="col-lg-2 control-label">Categoria</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" name="CATEGORIA_U" placeholder="Ingrese Categoria Del Producto"required>

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


