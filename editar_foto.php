<?php
include ('includes/clase_conexion.php');
 $serial=$_GET['serial'];

$resultado = mysqli_query($mysqli, "SELECT nombre FROM fotos") or die('Could not look up user information; ' . mysqli_error($mysqli)); 
    printf("La selección devolvió %d filas.\n", mysqli_num_rows($resultado));
echo "el nombre es ".$resultado;


 echo "tu serial es".$serial;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/vizcaya.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Area De Registro</title>


    <!--ESTILO CAMARA -->
    <link rel="stylesheet" href="css_prueba.css" type="text/css"/>
   
    <link rel="stylesheet" href="css/css_prueba.css" type="text/css"/> 
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />

    <script type="text/javascript" src="js/jquery-1.11.3"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>

    <script type="text/javascript" src="js/webcam.js"></script>
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  </head>

  <body>
  	<div class="navbar navbar-inverse"> 
        <a class="navbar-brand" href="#">@IoriSoft</a> 
        <ul class="nav navbar-nav"> 
                <li class="active"><a href="index.php">Inicio</a></li> 
                <li><a href="#">Buscar</a></li> 
                <li><a href="#">Configuraciones</a></li> 
                <li class="dropdown"> 
    <a class="dropdown-toggle" href="#" data-toggle="dropdown" >otro_menu <b class="caret"></b></a> 
        <ul class="dropdown-menu"> 
                <li><a href="#">opcion 1</a></li> 
                <li><a href="#">opcion 2</a></li> 
                <li class="divider"></li> 
                <li><a href="#">opcion 3</a></li> 
        </ul> 
</li>

        </ul> 
        
</div>

  <div class="row">
  <div class="col-md-4">
  
  </div>
      
  <div class="col-md-4">
  		<div class="formulario" >
         <form action="gestion_foto.php" method="post">
          <div class="form-group">
           <label for="imputemail3" class="col-sm-2 control-label">Matricula</label>
            <div class="col-sm-10">
              <div class="input-group">
                <span class="input-group-addon">
                 <span class="glyphicon glyphicon-barcode"></span>
                </span>
                  <input autofocus type="text" name="n_matricula" id="n_matricula" class="form-control" id="inputemail3" placeholder="#_matricula" required>
              </div>
            </div>
        </div>
                    
                    <div class="form-group">
                    <label for="imputemail3" class="col-sm-2 control-label">Matricula</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-user"></span>
                    </span>
                    <input type="text" name="nombre" id="nombre" class="form-control" id="inputemail3" placeholder="Nombres" required>
                    </div>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="imputemail3" class="col-sm-2 control-label">App</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-barcode"></span>
                    </span>
                    <input type="text" name="app" id="app" class="form-control" id="inputemail3" placeholder="Apellido_Paterno" required>
                    </div>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="imputemail3" class="col-sm-2 control-label">Apm</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-barcode"></span>
                    </span>
                    <input type="text" name="apm" id="apm" class="form-control" id="inputemail3" placeholder="#_matricula" required>
                    </div>
                    </div>
                    </div>
                    
                    
                    <div class="form-group">
                    <label for="imputemail3" class="col-sm-2 control-label">Calle</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-barcode"></span>
                    </span>
                    <input type="text" name="calle" id="calle" class="form-control" id="inputemail3" placeholder="calle_y_numero" required>
                    </div>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="imputemail3" class="col-sm-2 control-label">Colonia</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-barcode"></span>
                    </span>
                    <input type="text" name="colonia" id="colonia" class="form-control" id="inputemail3" placeholder="Colonia" required>
                    </div>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="imputemail3" class="col-sm-2 control-label">Carrera</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-barcode"></span>
                    </span>
                    <input type="text" name="carrera" id="carrera" class="form-control" id="inputemail3" placeholder="Colonia" required>
                    </div>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="imputemail3" class="col-sm-2 control-label">Grado</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-barcode"></span>
                    </span>
                    <input type="text" name="grado" id="grado" class="form-control" id="inputemail3" placeholder="Colonia" required>
                    </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <center><input class="btn btn-mini btn-success" type="submit" name="button" id="button" value="Enviar" /></center>
                    <center><input class="btn btn-mini btn-warning" type="submit" name="button" id="button" value="Enviar" /></center>
                    </div>
                    </form>
                    </div>

         </div>

  <div class="col-md-4">
     
  </div>

  	
  </body>