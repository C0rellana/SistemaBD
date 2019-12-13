<?php include("cabecera.php"); ?>

        

<?php

if(isset($_POST['boleta_I'])){ 
            $ID_B = $_POST['boleta_I'];
    }

?>



    <div class="container">
      <!-- Example row of columns -->
        <div class="row">            
            <div class="col-md-12">
                <h2> </h2> 
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                      

                            </div>
                            <div class="col-md-4">
                                <center>
                                       <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">DETALLES DE BOLETAS</h3>
                                            </div>
                                            <div class="panel-body">


                                                <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                                    <div class="form-group">
                                                      <div class="col-lg-12">
                                                        <center>
                                                        <input type="text" name="Boleta1" class="form-control" id="BOLETA1" placeholder="INGRESE BOLETA" required>
                                                        </center>
                                                      </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="form-group">
                                                      <div class="col-lg-8 col-lg-offset-2">
                                                        <button name="boton1" value="1" type="BuscarX" class="btn btn-primary">Buscar</button>
                                                      </div>
                                                    </div>
                                                    

                                                </form


                                            </div>
                                     </div>
                                </center>

                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                    </div>

            




                <hr> 
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="success">
                            <td>BOLETA</td>
                            <td>PRODUCTO</td>
                            <td>CANTIDAD</td>
                            <td>TOTAL</td>

                       


                        </tr>
                    </thead>
                    <tbody>


                 


                           


                        <?php
                        //ini_set('display_errors','off');
                            //Se incluye el archivo de conexion
                            include ("../../controlador/conexion.php");
                            //Se verifica que exista la conexión
                            if($connection){   


                                if(isset($_POST['boton1']))

                                        {

                                        $boleta1 = $_POST['Boleta1'];

                                    
                                         $seleccion = "SELECT * FROM Detalle where NUMERO_B= $boleta1";


                                 }else{
                                    
                                    $seleccion = "SELECT * FROM Detalle ";
                                 }


                                


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
                                  
                                        <td><?php echo $row['NUMERO_B']?></td>
                                        <td><?php echo $row['PRODUCTO']?></td>
                                        <td><?php echo $row['CANTIDAD']?></td>
                                        <td><?php echo $row['TOTAL_D']?></td>

                                

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
                        No hay Detalles
                    </div>             
                <?php } 
                    oci_free_statement($variable);                                
                    oci_close($connection);
                ?>
            </div>            
        </div>
    <!-- /.container -->
    </div>