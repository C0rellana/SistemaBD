

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> PRODUCTOS JC</title>
    <!-- Archivos CSS DISEÑO-->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">    
    
    
    <!-- Archivos JS-->
    <!-- Jquery debe ir siempre de los primeros, es el motor de los js -->
    <script src="../../js/jquery-1.12.4.min.js"></script>
   <!-- Se pueden importar todos los JS que se quieran, pero siempre debajo del jquery.min.js-->
   <script src="../../js/bootstrap.min.js"></script>
    
    <!-- Se puede definir un estilo de página, en este caso se ajusta la sección body (borrar para ver que ocurre) -->
    <style>
        body{
            padding-top: 70px;
        }
    </style>
</head>

<body background="../../fonts/FONDO1.jpg">
    <!-- Navigation -->
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
        <a class="navbar-brand" rel="home" href="index.php" > ADMIN   </a>
     
    </div>

    <div class="collapse navbar-collapse  navbar-right" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">PRODUCTOS <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="revisar_stock.php">REVISAR STOCK</a></li>
                   <li class="divider"></li>
                   <li><a href="modificar_producto.php">MODIFICAR PRODUCTO</a></li>

           

          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CATEGORIAS<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="revisar_categoria.php">REVISAR CATEGORIAS</a></li>
            <li class="divider"></li>
            <li><a href="modificar_categoria.php">MODIFICAR CATEGORIA</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">BOLETAS<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="revisar_boletas.php">REVISAR BOLETAS</a></li>
            <li class="divider"></li>
            <li><a href="modificar_boleta.php">MODIFICAR BOLETA</a></li>
          </ul>
        </li>
   

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">DESPACHOS<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="revisar_despacho.php">REVISAR DESPACHOS</a></li>
            <li class="divider"></li>
            <li><a href="modificar_despacho.php">MODIFICAR DESPACHO</a></li>

          </ul>
        </li>
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">DESPACHADOR<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="revisar_despachador.php">REVISAR DESPACHADORES</a></li>
            <li class="divider"></li>
            <li><a href="modificar_despachador.php">MODIFICAR DESPACHADOR</a></li>

          </ul>
        </li>



         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ENCUESTAS<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="revisar_encuesta.php">REVISAR ENCUESTAS</a></li>

          </ul>
        </li>

       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">USUARIOS<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="revisar_usuarios.php">REVISAR USUARIOS</a></li>
            <li class="divider"></li>
            <li><a href="modificar_usuarios.php">MODIFICAR USUARIOS</a></li>
            <li class="divider"></li>

          </ul>
        </li>

         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CLIENTES<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="revisar_cliente.php">REVISAR CLIENTES</a></li>
                <li class="divider"></li>
                <li><a href="modificar_clientes.php">MODIFICAR CLIENTE</a></li>
                <li class="divider"></li>
              </ul>
            </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">DETALLES<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="revisar_detalles.php">REVISAR DETALLES</a></li>
                <li class="divider"></li>
                <li><a href="modificar_detalles.php">MODIFICAR DETALLES</a></li>
                <li class="divider"></li>
              </ul>
            </li>

             <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">OPCIONES<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class=""><a href="START.php">START <span class="sr-only">(current)</span></a></li>
                <li class="divider"></li>
                 <li class=""><a href="../../index.php">SALIR <span class="sr-only">(current)</span></a></li>
                <li class="divider"></li>
              </ul>
            </li>

          


         



      </ul>


    </div>
  </div>
</nav>






    
</body>
</html>