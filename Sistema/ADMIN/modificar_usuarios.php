
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
                  <form class="form-horizontal"  action="Control_usuarios.php" method="post">
              
                      <div class="form-group">
                        <label for="LOGIN_I" class="col-lg-2 control-label">LOGIN </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="LOGIN_I" placeholder="  Ingrese Login del Usuario"required>
                        </div>
                      </div>

                     <div class="form-group">
                        <label for="PASS_I" class="col-lg-2 control-label">PASS </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="PASS_I" placeholder="  Ingrese Pass del Usuario "required>
                        </div>
                      </div>

                      
                      <div class="form-group">
                        <label for="NOMBRE_I" class="col-lg-2 control-label">NIVEL</label>
                        <div class="col-lg-10">
                            <div class="radio">
                              <label>
                                <input type="radio" name="NIVEL_I" id="optionsRadios1" value="1" checked="">
                               CLIENTE
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="NIVEL_I" id="optionsRadios2" value="2">
                                ANALISTA
                              </label>
                            </div>
                          <div class="radio">
                              <label>
                                <input type="radio" name="NIVEL_I" id="optionsRadios1" value="3" checked="">
                               ADMINISTRADOR
                              </label>
                            </div>

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
              <form class="form-horizontal" action="Control_usuarios.php" method="post">
                
                  <div class="form-group">
                    <label for="LOGIN_B" class="col-lg-2 control-label">LOGIN </label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="LOGIN_B" placeholder=" Ingrese Login del Usuario"required>
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
                    <form class="form-horizontal"  action="Control_usuarios.php" method="post">
              
                      <div class="form-group">
                        <label for="LOGIN_U" class="col-lg-2 control-label">LOGIN </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="LOGIN_U" placeholder="  Ingrese Login del Usuario"required>
                        </div>
                      </div>

                     <div class="form-group">
                        <label for="PASS_U" class="col-lg-2 control-label">PASS </label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="PASS_U" placeholder="  Ingrese Pass del Usuario "required>
                        </div>
                      </div>

                      
                      <div class="form-group">
                        <label for="NIVEL_U" class="col-lg-2 control-label">NIVEL</label>
                        <div class="col-lg-10">
                            <div class="radio">
                              <label>
                                <input type="radio" name="NIVEL_U" id="optionsRadios1" value="1" checked="">
                               CLIENTE
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="NIVEL_U" id="optionsRadios2" value="2">
                                USUARIO2
                              </label>
                            </div>
                          <div class="radio">
                              <label>
                                <input type="radio" name="NIVEL_U" id="optionsRadios1" value="3" checked="">
                               ADMINISTRADOR
                              </label>
                            </div>

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


