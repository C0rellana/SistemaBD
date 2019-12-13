
/<?php include("cabecera.php"); 

session_start();
?>

<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
            <div class="panel panel-warning">
                  <div class="panel-heading">
                    <center>
                    <h3 class="panel-title">CONTESTAR ENCUESTA</h3>
                    </center>
                  </div>
                  <div class="panel-body">
                    <form class="form-horizontal" class="form-horizontal" action="control_encuesta.php" method="post">
                         
                        <div class="form-group">
                          <label class="col-lg-3 control-label">¿Esta Satisfecho?</label>
                          <div class="col-lg-1">
                            <div class="radio">
                              <label>
                                <input type="radio" name="OPCION1" id="optionsRadios1" value="SI" checked="">
                                  SI
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="OPCION1" id="optionsRadios2" value="NO">
                                NO
                              </label>
                            </div>
                          </div>
                        </div>
                        
                      <div class="form-group">
                        <center>
                          <label class="col-lg-3 control-label">¿Recomendaria esta Pagina? </label>
                          </center>
                          <div class="col-lg-1">
                            <div class="radio">
                              <label>
                                <input type="radio" name="OPCION2" id="optionsRadios1" value="SI" checked="">
                                  SI
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="OPCION2" id="optionsRadios2" value="NO">
                                NO
                              </label>
                            </div>
                          </div>
                        </div>
                      
                       <div class="form-group">
                        <center>
                          <label class="col-lg-3 control-label">¿Encontro lo que necesitaba?</label>
                          </center>
                          <div class="col-lg-1">
                            <div class="radio">
                              <label>
                                <input type="radio" name="OPCION3" id="optionsRadios1" value="SI" checked="">
                                  SI
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="OPCION3" id="optionsRadios2" value="NO">
                                NO
                              </label>
                            </div>
                          </div>
                        </div> 

                       <div class="form-group">
                          <label for="textArea" class="col-lg-2 control-label">Opinion</label>
                          <div class="col-lg-10">
                            <textarea class="form-control" rows="3" name="TEXTO" id="textArea"></textarea>
                            <span class="help-block">Ingrese sus dudas, consultas o cualquier cosa....</span>
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
    <div class="col-md-6">

        <div class="panel panel-success">
        <div class="panel-heading">
          <center>
          <h3 class="panel-title">BOLETA FINAL</h3></center>
        </div>
        <div class="panel-body">
                    <div class="">
                    <table class="table table-striped table-hover">
                            <thead>
                                <tr class="success">

                                    <td>TOTAL</td>
                                    <td>CLIENTE</td>
                                    <td>NUMERO DE BOLETA</td>
                                    <td>DESPACHADOR</td>
                                    <td>TIEMPO DE ESPERA</td>
                                  

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    //Se incluye el archivo de conexion
                                    include ("../../controlador/conexion.php");
                                    //Se verifica que exista la conexión
                                    if($connection){    

                                          
                                         $usuario= $_SESSION["usuario"] ;
                                         

                                        $seleccion = "SELECT * FROM BOLETA_ENCARGADO";


                                        // Se hace la conversión de la consulta con la conexión
                                        $variable = oci_parse($connection,$seleccion);

                                        $estado=@oci_execute($variable);
                                    

                                        if(!$estado){
                                          echo " error";
                                            $error = oci_error($variable);  
                                            echo $error['message'];
                                        }                         
                                        //La consulta retorna un arreglo de valores que se debe recorrer con oci_fetch
                                        //Cada valor entre los [] es una columna de la tabla en la base de datos
                                        


                                        while (($row = oci_fetch_array($variable, OCI_BOTH)) != false) {?>                        
                                            <tr class="warning">
                                          
                                                <td><?php echo $row['TOTAL_B']?></td>
                                                <td><?php echo $row['CLIENTE']?></td>
                                                <td><?php echo $row['NUMERO_B']?></td>
                                                <td><?php echo $row['NOMBRE']?></td>
                                                <td><?php echo $row['TIEMPOE']?></td> 
                                                

                                            </tr>
                                        <?php                                    
                                        }                      
                                    }else{
                                        header("Location: fallo_conexion.php");
                                        exit();
                                    }

                                ?>
                            </tbody>
                        </table>
                        
                        <?php if(oci_num_rows($variable)==0){ 
                            //En caso de que el número de filas sea cero, se muestra este mensaje
                        ?>
                            <div class="alert alert-info" role="alert">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <span class="sr-only">Info: </span>
                                No hay Productos
                            </div>             
                        <?php } 
                            oci_free_statement($variable);                                
                            oci_close($connection);
                        ?>
                    </div> 
        </div>
      </div>




    </div>
  </div>
</div>






   




