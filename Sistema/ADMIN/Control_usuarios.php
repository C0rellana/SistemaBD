
<?php

ob_start(); 
  header("refresh: 3; url = revisar_usuarios.php"); 
   

ob_end_flush(); 

    include ('cabecera.php');
    include ('../../controlador/conexion.php'); // Se incluye el archivo conexion.php para iniciar la conexión
    if(!$connection){ //Si la conexión falla...
        header("Location: ../../controlador/fallo_conexion.php"); // Redirige a una vista que indica error de conexión
        exit(); //Se termina esta vista
    }else{
        if(isset($_POST['LOGIN_I'])){ 
            $LOGIN_I = $_POST['LOGIN_I']; 
            $PASS_I = $_POST['PASS_I'];
            $NIVEL_I = $_POST['NIVEL_I'];
            
            //Con OCIParse se hace la conversión de php a sql
            $query = OCIParse($connection, "begin INGRESA_USUARIO(:LOGIN_I, :PASS_I, :NIVEL_I,:retorno, :er); end;");
            //Los oci_bind se encargar de vincular las variables del php con las del procedimiento
            oci_bind_by_name($query, ':LOGIN_I', $LOGIN_I);
            oci_bind_by_name($query, ':PASS_I',$PASS_I);
            oci_bind_by_name($query, ':NIVEL_I',$NIVEL_I);

            
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
        if(isset($_POST['LOGIN_B'])){ 
            $LOGIN_B = $_POST['LOGIN_B']; //Pasamos las variables que llegan por POST desde el formulario y las asignamos a variables
             
            //Con OCIParse se hace la conversión de php a sql
            $query = OCIParse($connection, "begin DELETE_USUARIO(:LOGIN_B, :retorno, :er); end;");
            //Los oci_bind se encargar de vincular las variables del php con las del procedimiento
            oci_bind_by_name($query, ':LOGIN_B', $LOGIN_B);

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
        if(isset($_POST['LOGIN_U'])){ 
            $LOGIN_U = $_POST['LOGIN_U']; 
            $PASS_U = $_POST['PASS_U'];
            $NIVEL_U = $_POST['NIVEL_U'];;

            //Con OCIParse se hace la conversión de php a sql
            $query = OCIParse($connection, "begin ACTUALIZAR_USUARIO(:LOGIN_U, :PASS_U, :NIVEL_U, :retorno, :er); end;");
            //Los oci_bind se encargar de vincular las variables del php con las del procedimiento
            oci_bind_by_name($query, ':LOGIN_U', $LOGIN_U);
            oci_bind_by_name($query, ':PASS_U',$PASS_U);
            oci_bind_by_name($query, ':NIVEL_U',$NIVEL_U);
            
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



