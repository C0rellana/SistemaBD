
<?php

ob_start(); 
  //header("refresh: 3; url = revisar_detalles.php"); 
   


ob_end_flush();

    include ('cabecera.php');
    include ('../../controlador/conexion.php'); // Se incluye el archivo conexion.php para iniciar la conexión
    if(!$connection){ //Si la conexión falla...
        header("Location: ../../controlador/fallo_conexion.php"); // Redirige a una vista que indica error de conexión
        exit(); //Se termina esta vista
    }else{
        if(isset($_POST['OPCION1'])){ 


                                $seleccion = "SELECT * FROM ULTIMA_ENCUESTA";

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
                                


                                
                                while (($row = oci_fetch_array($variable, OCI_BOTH)) != false) {

                                        $ID= $row['NROENCUESTA']  ;                      
                            
                                                              
                                }         

           


            $OPCION1 = $_POST['OPCION1']; 
            $OPCION2 = $_POST['OPCION2'];
            $OPCION3 =$_POST['OPCION3'];
            $TEXTO = $_POST['TEXTO'];


            //Con OCIParse se hace la conversión de php a sql
            $query = OCIParse($connection, "begin ACTUALIZAR_ENCUESTA(:ID,:OPCION1, :OPCION2 ,:OPCION3,:TEXTO,:retorno, :er); end;");
            //Los oci_bind se encargar de vincular las variables del php con las del procedimiento
            oci_bind_by_name($query, ':ID', $ID);
            oci_bind_by_name($query, ':OPCION1', $OPCION1);
            oci_bind_by_name($query, ':OPCION2',$OPCION2);
            oci_bind_by_name($query, ':OPCION3',$OPCION3);    
            oci_bind_by_name($query, ':TEXTO',$TEXTO);    

            //Las siguientes 2 variables son tipo OUT del procedimiento, que retornan el tipo de error y lo que dice el error
            oci_bind_by_name($query, ':retorno',$salida,50);
            oci_bind_by_name($query, ':er',$er,50);
            //Se ejecuta la consulta luego de hacer el parse y el bind
            //oci_execute al fallar tira un error instantáneo en la vista.
            //Para evitar ese error agregamos el @ antes del oci_execute..
            $sp=oci_execute($query);
            
            //Siendo $er la variable que retorna del procedimiento indicando si hay error o no se toma una decisión
            
          
            if ($er=='FALSE') {
                $status = FALSE;                        
            }else{
                $status = TRUE;
            }
            //Se eliminar la consulta realizada a la base de datos
            oci_free_statement($query);
            //Se cierra la conexión
            oci_close($connection);
        }
    



    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">    
                <?php if($status==FALSE){ ?>
                <div class="alert alert-danger" role="alert">                        
                    <?php echo $salida;?>
                </div>          
                <?php }else{ ?>
                <div class="alert alert-success" role="alert">                        
                    <?php echo $salida;

                        ob_start(); 
                          header("refresh: 2; url = index.php"); 
                            
                        ob_end_flush();

           ?>
                </div> 
                <?php } ?>
            </div>
        </div>
        <!-- /.row -->
    </div>
    
</body>
</html>



