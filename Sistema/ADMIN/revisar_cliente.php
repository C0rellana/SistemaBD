<?php include("cabecera.php"); ?>


    <div class="container">
      <!-- Example row of columns -->
        <div class="row">            
            <div class="col-md-12">
                <h2>CLIENTES </h2>   
                <hr> 
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="success">
                            <td># RUT</td>
                            <td>PASS </td>
                            <td>SEXO</td>
                            <td>EMAIL</td>
                            <td>NOMBRE</td>
                            <td>SEGUNDO NOMBRE</td>
                            <td>APELLIDO</td>
                            <td>SEGUNDO APELLIDO</td>
                            <td>CUIDAD</td>
                            <td>CALLE</td>
                            <td>NUMERO</td>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        ini_set('display_errors','off');
                            //Se incluye el archivo de conexion
                            include ("../../controlador/conexion.php");
                            //Se verifica que exista la conexión
                            if($connection){                    
                                $seleccion = "SELECT * FROM VISTACLIENTE";


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
                                  
                                        <td><?php echo $row['RUT']?></td>
                                        <td><?php echo $row['PASS']?></td>
                                        <td><?php echo $row['SEXO']?></td>
                                        <td><?php echo $row['EMAIL']?></td>
                                        <td><?php echo $row['PRIMER_NOMBRE']?></td>
                                        <td><?php echo $row['SEGUNDO_NOMBRE']?></td>
                                        <td><?php echo $row['PRIMER_APELLIDO']?></td> 
                                        <td><?php echo $row['SEGUNDO_APELLIDO']?></td>
                                        <td><?php echo $row['DIRECCION']?></td>
                                        <td><?php echo $row['CALLE']?></td>
                                        <td><?php echo $row['NUMERO']?></td> 

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
                        No hay Clientes
                    </div>             
                <?php } 
                    oci_free_statement($variable);                                
                    oci_close($connection);
                ?>
            </div>            
        </div>
    <!-- /.container -->
    </div>