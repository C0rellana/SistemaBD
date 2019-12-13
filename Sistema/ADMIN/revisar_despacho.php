<?php include("cabecera.php"); ?>


    <div class="container">
      <!-- Example row of columns -->
        <div class="row">            
            <div class="col-md-12">
                <h2>DESPACHOS </h2>   
                <hr> 
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="success">
                            <td># CODIGO</td>
                            <td>TIEMPO</td>
                            <td>DESPACHADOR</td>
                            <td>ESTADO</td>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //Se incluye el archivo de conexion
                            include ("../../controlador/conexion.php");
                            //Se verifica que exista la conexión
                            if($connection){                    
                                $seleccion = "SELECT * FROM DESPACHO";


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
                                  
                                        <td><?php echo $row['CODIGO']?></td>
                                        <td><?php echo $row['TIEMPOE']?></td>
                                        <td><?php echo $row['DESPACHADOR']?></td>
                                        <td><?php echo $row['ESTADO']?></td> 

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
    <!-- /.container -->
    </div>