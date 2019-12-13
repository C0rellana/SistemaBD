
<?php


ob_start(); 
  //header("refresh: 3; url = revisar_cliente.php"); 
   

ob_end_flush();

    include ('cabecera.php');
    include ('../../controlador/conexion.php'); // Se incluye el archivo conexion.php para iniciar la conexión
    if(!$connection){ //Si la conexión falla...
        header("Location: ../../controlador/fallo_conexion.php"); // Redirige a una vista que indica error de conexión
        exit(); //Se termina esta vista
    }else{

        if(isset($_POST['RUT_I'])){ 
            $RUT_I = $_POST['RUT_I']; 
            $NOMBRE1_I = $_POST['NOMBRE1_I'];
            $NOMBRE2_I = $_POST['NOMBRE2_I'];
            $APELLIDO1_I = $_POST['APELLIDO1_I'];
            $APELLIDO2_I = $_POST['APELLIDO2_I'];
            $PASS_I = $_POST['PASS_I']; 
            $OPCION_I = $_POST['OPCION_I'];
            $EMAIL_I = $_POST['EMAIL_I'];
            $DIRECCION_I = $_POST['DIRECCION_I'];
            $CALLE_I = $_POST['CALLE_I'];
            $NUMERO_I = $_POST['NUMERO_I'];


            
            //Con OCIParse se hace la conversión de php a sql
            $query = OCIParse($connection, "begin INSERTAR_CLIENTE(:RUT_I, :PASS_I, :OPCION_I,:EMAIL_I, :NOMBRE1_I,:NOMBRE2_I, :APELLIDO1_I,:APELLIDO2_I,:DIRECCION_I,:CALLE_I,:NUMERO_I,:retorno, :er); end;");
            
            //Los oci_bind se encargar de vincular las variables del php con las del procedimiento
            oci_bind_by_name($query, ':RUT_I', $RUT_I);
            oci_bind_by_name($query, ':PASS_I',$PASS_I);
            oci_bind_by_name($query, ':OPCION_I',$OPCION_I);
            oci_bind_by_name($query, ':EMAIL_I',$EMAIL_I);
            oci_bind_by_name($query, ':NOMBRE1_I',$NOMBRE1_I);
            oci_bind_by_name($query, ':NOMBRE2_I', $NOMBRE2_I);
            oci_bind_by_name($query, ':APELLIDO1_I',$APELLIDO1_I);
            oci_bind_by_name($query, ':APELLIDO2_I',$APELLIDO2_I);
            oci_bind_by_name($query, ':DIRECCION_I',$DIRECCION_I);
            oci_bind_by_name($query, ':CALLE_I',$CALLE_I);
            oci_bind_by_name($query, ':NUMERO_I',$NUMERO_I);

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
            $query = OCIParse($connection, "begin BORRAR_CLIENTE(:RUT_B, :retorno, :er); end;");
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
            $RUT_U = $_POST['RUT_U']; 
            $NOMBRE1_U = $_POST['NOMBRE1_U'];
            $NOMBRE2_U = $_POST['NOMBRE2_U'];
            $APELLIDO1_U = $_POST['APELLIDO1_U'];
            $APELLIDO2_U = $_POST['APELLIDO2_U'];
            $PASS_U = $_POST['PASS_U']; 
            $OPCION_U = $_POST['OPCION_U'];
            $EMAIL_U = $_POST['EMAIL_U'];
            $DIRECCION_U = $_POST['DIRECCION_U'];
            $CALLE_U = $_POST['CALLE_U'];
            $NUMERO_U = $_POST['NUMERO_U'];

            //Con OCIParse se hace la conversión de php a sql
            $query = OCIParse($connection, "begin ACTUALIZA_CLIENTE(:RUT_U, :PASS_U, :OPCION_U,:EMAIL_U, :NOMBRE1_U,:NOMBRE2_U, :APELLIDO1_U,:APELLIDO2_U,:DIRECCION_U,:CALLE_U,:NUMERO_U,:retorno, :er); end;");
            
            oci_bind_by_name($query, ':RUT_U', $RUT_U);
            oci_bind_by_name($query, ':PASS_U',$PASS_U);
            oci_bind_by_name($query, ':OPCION_U',$OPCION_U);
            oci_bind_by_name($query, ':EMAIL_U',$EMAIL_U);
            oci_bind_by_name($query, ':NOMBRE1_U',$NOMBRE1_U);
            oci_bind_by_name($query, ':NOMBRE2_U', $NOMBRE2_U);
            oci_bind_by_name($query, ':APELLIDO1_U',$APELLIDO1_U);
            oci_bind_by_name($query, ':APELLIDO2_U',$APELLIDO2_U);
            oci_bind_by_name($query, ':DIRECCION_U',$DIRECCION_U);
            oci_bind_by_name($query, ':CALLE_U',$CALLE_U);
            oci_bind_by_name($query, ':NUMERO_U',$NUMERO_U);;
            
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
                    <?php echo $salida;?>
                </div> 
                <?php } ?>
            </div>
        </div>
        <!-- /.row -->
    </div>
    
</body>
</html>



