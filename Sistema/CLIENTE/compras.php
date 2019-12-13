
<?php $var= $_GET['var']; 
//echo "variable = $var"; 


?>

 <?php 
   session_start(); 

 $_SESSION["categoria"] = $var;

 ?>

<?php include("cabecera.php"); ?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<meta content="jquery, forumlario dinamico, timersys, tutorial" name="keywords"/>

<link href="Dinamico/estilo.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Dinamico/jquery-3.1.1.js"></script>
<script type="text/javascript" src="Dinamico/jquery.addfield.js"></script>
</head>

<br><br><br><br>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			
		</div>
		<div class="col-md-6">

		</div>
	</div>
</div>

<br>
<br>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">

		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>






<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">

			<div class="panel panel-success">
			  <div class="panel-heading">
			  	<center>
			    <h3 class="panel-title">PRODUCTOS DISPONIBLES</h3></center>
			  </div>
			  <div class="panel-body">
			     				  <div class="">
								    <table class="table table-striped table-hover">
				                    <thead>
				                        <tr class="success">

				                            <td>ID</td>
				                            <td>Nombre</td>
				                            <td>PRECIO</td>
				                            <td>STOCK</td>
				                            <td>CATEGORIA</td>

				                        </tr>
				                    </thead>
				                    <tbody>
				                        <?php
				                            //Se incluye el archivo de conexion
				                            include ("../../controlador/conexion.php");
				                            //Se verifica que exista la conexión
				                            if($connection){                    
				                                $seleccion = "SELECT * FROM PRODUCTO_CATEGORIA WHERE CATEGORIA=$var and STOCK>0";


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
				                                        <td><?php echo $row['NOMBRE']?></td>
				                                        <td><?php echo $row['PRECIO']?></td>
				                                        <td><?php echo $row['STOCK']?></td> 
				                                        <td><?php echo $row['CATEGORIA']?></td>

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
			</div>


		</div>
		<div class="col-md-6">

			<div class="panel panel-warning">
			  <div class="panel-heading">
			    <center><h3 class="panel-title">AGREGAR AL CARRO</h3></center>
			  </div>
			  <div class="panel-body">
			  	         
			  	  <center>  
						  <form class="form-horizontal" action="Control_detalles.php?confirma='NO'" method="post">
                    <fieldset>
                  
                      <div class="form-group">
                        <label for="PRODUCTO_I" class="col-lg-2 control-label">PRODUCTO</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="PRODUCTO_I" placeholder="Ingrese Numero de Producto">

                        </div>
                      </div>

                      <div class="form-group">
                        <label for="CANTIDAD_I" class="col-lg-2 control-label">CANTIDAD</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="CANTIDAD_I" placeholder="Ingrese Cantidad">

                        </div>
                      </div>

                  


                      <center>
                      <div class="form-group">
                        <div class="col-lg-8 col-lg-offset-2">
                   
                          <input class= 'btn btn-primary' type='submit' name='boton1' value='AGREGAR'>
                        </div>
                      </div>
                      </center>
                    </fieldset>
				</center> 

			  </div>
			</div>


		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-info">
			  <div class="panel-heading">
			  	<center>
			    <h3 class="panel-title">PRODUCTOS DEL CARRITO</h3>
			    </center>
			  </div>
			  			<div class="panel-body">

			     				  <div class="">
								    <table class="table table-striped table-hover">
				                    <thead>
				                        <tr class="success">

				                            <td>ID</td>
				                            <td>Nombre</td>
				                            <td>PRECIO</td>
				                            <td>CANTIDAD</td>
				                            <td>TOTAL</td>

				                        </tr>
				                    </thead>
				                    <tbody>
				                        <?php
				                            //Se incluye el archivo de conexion
				                            include ("../../controlador/conexion.php");
				                            //Se verifica que exista la conexión
				                            if($connection){                    
				                                $seleccion = "SELECT * FROM CARRITO";


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
				                                        <td><?php echo $row['NOMBRE']?></td>
				                                        <td><?php echo $row['PRECIO']?></td>
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
				                        No hay Productos
				                    </div>             
				                <?php } 
				                    oci_free_statement($variable);                                
				                    oci_close($connection);
				                ?>
				            </div> 
			  </div>
			</div>

		</div>
		<div class="col-md-6">

			
			<div class="panel panel-primary">
			  <div class="panel-heading">
			    <center><h3 class="panel-title">BORRAR DEL CARRO</h3></center>
			  </div>
			  <div class="panel-body">
			  	         
			  	  <center>  
						  <form class="form-horizontal" action="Control_detalles.php?confirma='NO'" method="post">
                    <fieldset>
                  
                      <div class="form-group">
                        <label for="PRODUCTO_I" class="col-lg-2 control-label">PRODUCTO</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="PRODUCTO_U" placeholder="Ingrese Numero de Producto">

                        </div>
                      </div>

            

                  


                      <center>
                      <div class="form-group">
                        <div class="col-lg-8 col-lg-offset-2">
                   
                          <input class= 'btn btn-primary' type='submit' name='boton3' value='BORRAR'>
                        </div>
                      </div>
                      </center>
                    </fieldset>
				</center> 

			  </div>
			</div>


		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
		</div>
		<div class="col-md-6">



			<center>
				<div class="panel panel-danger">
				  <div class="panel-heading">
				    <h3 class="panel-title">CONFIRMAR CAMBIOS</h3>
				  </div>
				  <div class="panel-body">
				  
						 
						<input  class= 'btn btn-primary' type='submit' name='boton2' value='CONFIRMAR'> 
						</form> 
				  
				  	<br>
				  	<hr>
				    Presione el boton para realizar la compra
				    <br>
				    
				  </div>
				</div>
			</center>

		</div>
	</div>
</div>




