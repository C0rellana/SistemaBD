

    <?php
    include ('conexion.php'); // Se incluye el archivo conexion.php para iniciar la conexión

    if(isset($_POST['nombre'])){ //comprobamos si viene algún dato por el input con nombre "rut" a través del POST
            $nombre = $_POST['nombre'];
            $pass = $_POST['pass'];
            $tipo = $_POST['optionsRadios'];
           
            echo "nombre= $nombre";

            echo "pass= $pass";
            echo "tipo= $tipo";

                                
           $seleccion = "SELECT * FROM USUARIO ; --where login =$nombre and pass=$pass";
           $variable = oci_parse($connection,$seleccion);                                  
           $estado=@oci_execute($variable);
           if(!$estado){
                     $error = oci_error($variable);  
                      echo $error['message'];
            }                         
            
             while (($row = oci_fetch_array($variable, OCI_BOTH)) != false) {
                ?>                        
                    <tr>
                        <td><?php echo $row['RUT']?></td>
                        <td><?php echo $row['NOMBRE']?></td>
                        <td><?php echo $row['EDAD']?></td>
                        <td><?php echo $row['SALARIO']?></td>                                    
                    </tr>

            <?php                                    
                }   
}
    
?>


   
