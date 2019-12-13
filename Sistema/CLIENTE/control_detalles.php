
<?php
include ('cabecera.php');
include ('../../controlador/conexion.php'); // Se incluye el archivo conexion.php para iniciar la conexión

session_start(); 

$categoria=$_SESSION["categoria"];
$CLIENTE=$_SESSION["Conectado"];


if(isset($_POST['boton1'])) 
{ 
     //

        if(!$connection){ //Si la conexión falla...
                header("Location: ../../controlador/fallo_conexion.php"); // Redirige a una vista que indica error de conexión
                exit(); //Se termina esta vista
             }else
             {
            if(isset($_POST['PRODUCTO_I'])){ 

            $PRODUCTO_I = $_POST['PRODUCTO_I'];
            $CANTIDAD_I = $_POST['CANTIDAD_I'];

         


            //Con OCIParse se hace la conversión de php a sql
            $query = OCIParse($connection, "begin INGRESA_DETALLE(:PRODUCTO_I,:CANTIDAD_I,:retorno,:er); end;");
            //Los oci_bind se encargar de vincular las variables del php con las del procedimiento
        
            oci_bind_by_name($query, ':PRODUCTO_I',$PRODUCTO_I);
            oci_bind_by_name($query, ':CANTIDAD_I',$CANTIDAD_I);    
             
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


            ob_start(); 
              header("refresh: 2; url = compras.php?var=$categoria"); 
               

            ob_end_flush();

        }
    }


    //
} 
else if(isset($_POST['boton2'])) 
{ 
            if(!$connection){ //Si la conexión falla...
                header("Location: ../../controlador/fallo_conexion.php"); // Redirige a una vista que indica error de conexión
                exit(); //Se termina esta vista
             }else
             {

            $var1 = 0;
            settype($var1, "integer");
            $var2 = 0;
            settype($var2, "integer");

            //Con OCIParse se hace la conversión de php a sql
            $query = OCIParse($connection, "begin BOTON_CONFIRMAR(:var1,:var2,:CLIENTE,:retorno, :er); end;");
            //Los oci_bind se encargar de vincular las variables del php con las del procedimiento
        
            oci_bind_by_name($query, ':var1',$var1);
            oci_bind_by_name($query, ':var2',$var2);  
            oci_bind_by_name($query, ':CLIENTE',$CLIENTE);   

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

              

            ob_start(); 
              header("refresh: 4; url = modificar_encuesta.php"); 
               

            ob_end_flush();
          

    
        
    }
     }

if(isset($_POST['boton3'])) 
{ 
     //

        if(!$connection){ //Si la conexión falla...
                header("Location: ../../controlador/fallo_conexion.php"); // Redirige a una vista que indica error de conexión
                exit(); //Se termina esta vista
             }else
             {
            if(isset($_POST['PRODUCTO_U'])){ 

            $PRODUCTO_U = $_POST['PRODUCTO_U'];
                   


            //Con OCIParse se hace la conversión de php a sql
            $query = OCIParse($connection, "begin BOTON_BORRAR(:PRODUCTO_U,:retorno,:er); end;");
            //Los oci_bind se encargar de vincular las variables del php con las del procedimiento
        
            oci_bind_by_name($query, ':PRODUCTO_U',$PRODUCTO_U);
               
             
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


            ob_start(); 
              header("refresh: 2; url = compras.php?var=$categoria"); 
               

            ob_end_flush();

        }
    }


    //
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



