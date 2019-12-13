
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
                  <form class="form-horizontal"  action="Control_categoria.php" method="post">
              
                      <div class="form-group">
                        <label for="ID_P" class="col-lg-2 control-label">ID </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="ID_I" placeholder=" Ingrese ID de la Categoria"required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nombre" class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="NOMBRE_I" placeholder="Nombre de Categoria"required>

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
              <form class="form-horizontal" action="Control_categoria.php" method="post">
                
                  <div class="form-group">
                    <label for="ID_P" class="col-lg-2 control-label">ID </label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="ID_B" placeholder=" Ingrese ID De la Categoria"required>
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
                    <form class="form-horizontal" action="Control_categoria.php" method="post">
                        <div class="form-group">
                          <label for="ID_P" class="col-lg-2 control-label">ID </label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" name="ID_U" placeholder=" Ingrese ID de la Categoria"required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="nombre" class="col-lg-2 control-label">Nombre</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" name="NOMBRE_U" placeholder="Ingrese Nombre de la Categoria"required>

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


