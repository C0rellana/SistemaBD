<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Oracle Test</title>
    <!-- Archivos CSS DISEÑO-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">    
    
    
    <!-- Archivos JS-->
    <!-- Jquery debe ir siempre de los primeros, es el motor de los js -->
    <script src="../js/jquery-1.12.4.min.js"></script>
   <!-- Se pueden importar todos los JS que se quieran, pero siempre debajo del jquery.min.js-->
   <script src="../js/bootstrap.min.js"></script>
    
    <!-- Se puede definir un estilo de página, en este caso se ajusta la sección body (borrar para ver que ocurre) -->
    <style>
        body{
            padding-top: 70px;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/../oracle/">Start Bootstrap</a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Ver Usuarios</a>
                    </li>
                    <li>
                        <a href="#">Algo 2</a>
                    </li>
                    <li>
                        <a href="#">Algo 3</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Zona de Pruebas</h1>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <div class="container">
      <!-- Example row of columns -->
        <div class="row">            
            <div class="col-md-12">
                <h2>Formulario</h2>
                <p>Form e.e</p>     
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>Rut</td>
                            <td>Nombre</td>
                            <td>Edad</td>
                            <td>Salario</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //Se incluye el archivo de conexion
                            include ("conexion.php");
                            //Se verifica que exista la conexión
                            if($connection){                    
                                $seleccion = "SELECT * FROM EMPLEADO";
                                // Se hace la conversión de la consulta con la conexión
                                $variable = oci_parse($connection,$seleccion);                                  
                                $estado=@oci_execute($variable);
                                if(!$estado){
                                    $error = oci_error($variable);  
                                    echo $error['message'];
                                }                         
                                //La consulta retorna un arreglo de valores que se debe recorrer con oci_fetch
                                //Cada valor entre los [] es una columna de la tabla en la base de datos
                                while (($row = oci_fetch_array($variable, OCI_BOTH)) != false) {?>                        
                                    <tr>
                                        <td><?php echo $row['RUT']?></td>
                                        <td><?php echo $row['NOMBRE']?></td>
                                        <td><?php echo $row['EDAD']?></td>
                                        <td><?php echo $row['SALARIO']?></td>                                    
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
                        No hay usuarios Registrados
                    </div>             
                <?php } 
                    oci_free_statement($variable);                                
                    oci_close($connection);
                ?>
            </div>            
        </div>
    <!-- /.container -->
    </div>   
</body>
</html>