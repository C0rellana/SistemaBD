 <?php 

ob_start(); 
  header("refresh: 3; url = index.php"); 
   

ob_end_flush();
include ('cabecera.php');



//PROCEDIMIENTO INICIALIZAR

include ('../../controlador/conexion.php');

    if(!$connection){ //Si la conexión falla...
        header("Location: ../../controlador/fallo_conexion.php"); // Redirige a una vista que indica error de conexión
        exit(); //Se termina esta vista
    }else{
        
        $var1=0;

            //Con OCIParse se hace la conversión de php a sql
            $query = OCIParse($connection, "begin BOTON_INICIALIZAR(:var1, :retorno, :er); end;");
                    

            //Los oci_bind se encargar de vincular las variables del php con las del procedimiento
            oci_bind_by_name($query, ':var1', $var1);

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
                <div class="alert alert" role="alert">                        
                    
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-4">
                            </div>

                            <div class="col-md-4">
                              <div class="panel panel-danger">
                                <div class="panel-heading">
                                  <h3 class="panel-title"><center>EL SISTEMA NO SE PUDO INICIALIZAR</center></h3>
                                </div>
                                <center>
                                <div class="panel-body" >
                                <p class="text-success"> <em> Sera Redirigido en 3 Segundos</em></p>
                                 
                                </div>
                                </center>
                              </div>

                            </div>

                            <div class="col-md-4">
                            </div>
                          </div>
                        </div>





                </div>          
                <?php }else{ ?>
                <div class="alert alert" role="alert">                        
                        
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">
                              <div class="panel panel-success">
                                <div class="panel-heading">
                                  <h3 class="panel-title"><center>SISTEMA FUNCIONANDO CORRECTAMENTE</center></h3>
                                </div>
                                <center>
                                <div class="panel-body" >
                                <p class="text-success"> <em> Sera Redirigido en 3 Segundos</em></p>
                                 
                                </div>
                                </center>
                              </div>

                            </div>
                            <div class="col-md-4">
                            </div>
                          </div>
                        </div>



                </div> 
                <?php } ?>
            </div>
        </div>
        <!-- /.row -->
    </div>
    
</body>
</html>



  