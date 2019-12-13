
<?php

ob_start(); 
  header("refresh: 3; url = revisar_despachador.php"); 
   

ob_end_flush();


    include ('cabecera.php');
    include ('../../controlador/conexion.php'); // Se incluye el archivo conexion.php para iniciar la conexión
    if(!$connection){ //Si la conexión falla...
        header("Location: ../../controlador/fallo_conexion.php"); // Redirige a una vista que indica error de conexión
        exit(); //Se termina esta vista
    }else{
        if(isset($_POST['RUT_I'])){ 
            $RUT_I = $_POST['RUT_I']; //Pasamos las variables que llegan por POST desde el formulario y las asignamos a variables
            $NOMBRE_I = $_POST['NOMBRE_I'];
            $EDAD_I = $_POST['EDAD_I'];
            $SEXO_I = $_POST['SEXO_I'];
            $ESTADO_I = $_POST['ESTADO_I'];
            $NUM_I=$_POST['NUM_I'];

            
            //Con OCIParse se hace la conversión de php a sql
            $query = OCIParse($connection, "begin INGRESA_DESPACHADOR(:RUT_I, :NOMBRE_I, :SEXO_I,:EDAD_I, :ESTADO_I,:NUM_I, :retorno, :er); end;");
            //Los oci_bind se encargar de vincular las variables del php con las del procedimiento
            oci_bind_by_name($query, ':RUT_I', $RUT_I);
            oci_bind_by_name($query, ':NOMBRE_I',$NOMBRE_I);
            oci_bind_by_name($query, ':SEXO_I',$SEXO_I);
            oci_bind_by_name($query, ':EDAD_I',$EDAD_I);
            oci_bind_by_name($query, ':ESTADO_I',$ESTADO_I);
            oci_bind_by_name($query, ':NUM_I',$NUM_I);

            //Las siguientes 2 variables son tipo OUT del procedimiento, que retornan el tipo de error y lo que dice el error
            oci_bind_by_name($query, ':retorno',$salida,50);
            oci_bind_by_name($query, ':er',$er,50);
            //Se ejecuta la consulta luego de hacer el parse y el bind
            //oci_execute al fallar tira un error instantáneo en la vista.
            //Para evitar ese error agregamos el @ antes del oci_execute..
            $sp=@oci_execute($query);
            
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
        //_--------------------------ELIMINAR
        if(isset($_POST['RUT_B'])){ 
            $RUT_B = $_POST['RUT_B']; //Pasamos las variables que llegan por POST desde el formulario y las asignamos a variables
             
            //Con OCIParse se hace la conversión de php a sql
            $query = OCIParse($connection, "begin DELETE_DESPACHADOR(:RUT_B, :retorno, :er); end;");
            //Los oci_bind se encargar de vincular las variables del php con las del procedimiento
            oci_bind_by_name($query, ':RUT_B', $RUT_B);

            //Las siguientes 2 variables son tipo OUT del procedimiento, que retornan el tipo de error y lo que dice el error
            oci_bind_by_name($query, ':retorno',$salida,50);
            oci_bind_by_name($query, ':er',$er,50);
            //Se ejecuta la consulta luego de hacer el parse y el bind
            //oci_execute al fallar tira un error instantáneo en la vista.
            //Para evitar ese error agregamos el @ antes del oci_execute..
            $sp=@oci_execute($query);
            
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
        //---------------------------
        if(isset($_POST['RUT_U'])){ 
            $RUT_U = $_POST['RUT_U']; //Pasamos las variables que llegan por POST desde el formulario y las asignamos a variables
            $NOMBRE_U = $_POST['NOMBRE_U'];
            $EDAD_U = $_POST['EDAD_U'];
            $SEXO_U = $_POST['SEXO_U'];
            $ESTADO_U = $_POST['ESTADO_U'];
            $NUM_U =$_POST['NUM_U'];

            //Con OCIParse se hace la conversión de php a sql
            $query = OCIParse($connection, "begin ACTUALIZAR_DESPACHADOR(:RUT_U, :NOMBRE_U, :SEXO_U,:EDAD_U, :ESTADO_U,:NUM_U, :retorno, :er); end;");
            //Los oci_bind se encargar de vincular las variables del php con las del procedimiento
            oci_bind_by_name($query, ':RUT_U', $RUT_U);
            oci_bind_by_name($query, ':NOMBRE_U',$NOMBRE_U);
            oci_bind_by_name($query, ':SEXO_U',$SEXO_U);
            oci_bind_by_name($query, ':EDAD_U',$EDAD_U);
            oci_bind_by_name($query, ':ESTADO_U',$ESTADO_U);
            oci_bind_by_name($query, ':NUM_U',$NUM_U);
            
            //Las siguientes 2 variables son tipo OUT del procedimiento, que retornan el tipo de error y lo que dice el error
            oci_bind_by_name($query, ':retorno',$salida,50);
            oci_bind_by_name($query, ':er',$er,50);
            //Se ejecuta la consulta luego de hacer el parse y el bind
            //oci_execute al fallar tira un error instantáneo en la vista.
            //Para evitar ese error agregamos el @ antes del oci_execute..
            $sp=@oci_execute($query);
            
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
                    <?php echo $salida;?>
                </div> 
                <?php } ?>
            </div>
        </div>
        <!-- /.row -->
    </div>
    
</body>
</html>



