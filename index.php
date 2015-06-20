<?php
include ('includes/clase_conexion.php');
/*
$cnx = conectar();
if($errorDbConexion==false){
    // se manda a llamar a la funcion para mostrar la lista de usuarios

    $consultaUsuarios= consultaUsers($cnx);
    echo($consultaUsuarios);
}
else
{
    //regresamos el error en la base de datos
    echo($consultaUsuarios);
    $consultaUsuarios='
       <tr id="sinDatos">
        <td colspan="5" class="centerTXT">Error al conectar con la BD</td>
       </tr>
    ';
}*/
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

<script type="text/javascript" src="ajax.js"></script>
    <!--ESTILO CAMARA -->
    <link rel="stylesheet" href="css_prueba.css" type="text/css"/>
    <!--<link rel="stylesheet" href="css/estilos.css" type="text/css"/> -->
<style type="text/css">
    /* jQuery lightBox plugin - Gallery style */
    #cuadro_camara {

        background-color: #444;
        padding-left:10px;
        padding-top:5px;
    }
    #titulo_camara {
    background-color: #666;
    color:#FFF;
    padding-left: 30px;
    font-size: 14px;
    text-align:center;
    }
    .botones_cam {
        background-color:#FFF;
        color:#333;
        font-family: "Comic Sans MS", cursive;
        font-size:14px;
        margin-top:10px;
        width:100px;
        height:40px;
    }
    .formulario {
        background-color:#FFF;
        margin-top:10px;
        width:400px;
        height:300px;
        float: left;

    }

    .th
    {
        text-align: center;
    }
  
    </style>


   
    <link rel="stylesheet" href="css/css_prueba.css" type="text/css"/> 
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />

    <script type="text/javascript" src="js/jquery-1.11.3"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
    <!--<script type="text/javascript" src="js/ajax.js"></script>-->
    <script type="text/javascript" src="js/webcam.js"></script>
    

  

<script language="JavaScript">
        webcam.set_api_url( 'test.php' );//PHP adonde va a recibir la imagen y la va a guardar en el servidor
        webcam.set_quality( 100 ); // calidad de la imagen
        webcam.set_shutter_sound( true ); // Sonido de flash
    </script>

        <script language="JavaScript">
        webcam.set_hook( 'onComplete', 'my_completion_handler' );
        
        function do_upload() {
            // subir al servidor
            document.getElementById('upload_results').innerHTML = '<h1>Cargando al servidor...</h1>';
            webcam.upload();
        }
        
        function my_completion_handler(msg) {
            
            if (msg.match(/(http\:\/\/\S+)/)) {
                var image_url = RegExp.$1;//respuesta de text.php que contiene la direccion url de la imagen
                
                // Muestra la imagen en la pantalla
                document.getElementById('upload_results').innerHTML = 
                    '<center><img width="280" height="280" src="' + image_url + '"></center>'+
                    '<div class="formulario" >'+
                    '<form action="gestion_foto.php" method="post">'+
                    '<input type="hidden" name="id_foto" id="id_foto" value="' + image_url + '"  />'+
                    '<div class="form-group">'+
                    '<label for="imputemail3" class="col-sm-2 control-label">Matricula</label>'+
                    '<div class="col-sm-10">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon">'+
                    '<span class="glyphicon glyphicon-barcode"></span>'+
                    '</span>'+
                    '<input autofocus type="text" name="n_matricula" id="n_matricula" class="form-control" id="inputemail3" placeholder="#_matricula" required>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    //'<label>Matricula </label><input type="text" name="n_matricula" id="n_matricula"/><br>'+
                    '<div class="form-group">'+
                    '<label for="imputemail3" class="col-sm-2 control-label">Matricula</label>'+
                    '<div class="col-sm-10">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon">'+
                    '<span class="glyphicon glyphicon-user"></span>'+
                    '</span>'+
                    '<input type="text" name="nombre" id="nombre" class="form-control" id="inputemail3" placeholder="Nombres" required>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    //'<label>nombre </label><input type="text" name="nombre" id="nombre"/><br>'+
                    '<div class="form-group">'+
                    '<label for="imputemail3" class="col-sm-2 control-label">App</label>'+
                    '<div class="col-sm-10">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon">'+
                    '<span class="glyphicon glyphicon-barcode"></span>'+
                    '</span>'+
                    '<input type="text" name="app" id="app" class="form-control" id="inputemail3" placeholder="Apellido_Paterno" required>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    //'<label>Apellido paterno</label><input type="text" name="app" id="app"/><br>'+
                    '<div class="form-group">'+
                    '<label for="imputemail3" class="col-sm-2 control-label">Apm</label>'+
                    '<div class="col-sm-10">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon">'+
                    '<span class="glyphicon glyphicon-barcode"></span>'+
                    '</span>'+
                    '<input type="text" name="apm" id="apm" class="form-control" id="inputemail3" placeholder="#_matricula" required>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    //'<label>Apellido Materno</label><input type="text" name="apm" id="apm"/><br>'+
                    //'<label>Calle</label><input type="text" name="calle" id="calle"/><br>'+
                    '<div class="form-group">'+
                    '<label for="imputemail3" class="col-sm-2 control-label">Calle</label>'+
                    '<div class="col-sm-10">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon">'+
                    '<span class="glyphicon glyphicon-barcode"></span>'+
                    '</span>'+
                    '<input type="text" name="calle" id="calle" class="form-control" id="inputemail3" placeholder="calle_y_numero" required>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    //'<label>Colonia</label><input type="text" name="colonia" id="colonia"/><br>'+
                    '<div class="form-group">'+
                    '<label for="imputemail3" class="col-sm-2 control-label">Colonia</label>'+
                    '<div class="col-sm-10">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon">'+
                    '<span class="glyphicon glyphicon-barcode"></span>'+
                    '</span>'+
                    '<input type="text" name="colonia" id="colonia" class="form-control" id="inputemail3" placeholder="Colonia" required>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    //'<label>Carrera</label><input type="text" name="carrera" id="carrera"/><br>'+
                    '<div class="form-group">'+
                    '<label for="imputemail3" class="col-sm-2 control-label">Carrera</label>'+
                    '<div class="col-sm-10">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon">'+
                    '<span class="glyphicon glyphicon-barcode"></span>'+
                    '</span>'+
                    '<input type="text" name="carrera" id="carrera" class="form-control" id="inputemail3" placeholder="Colonia" required>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    //'<label>Grado</label><input type="text" name="grado" id="grado"/><br>'+
                    '<div class="form-group">'+
                    '<label for="imputemail3" class="col-sm-2 control-label">Grado</label>'+
                    '<div class="col-sm-10">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon">'+
                    '<span class="glyphicon glyphicon-barcode"></span>'+
                    '</span>'+
                    '<input type="text" name="grado" id="grado" class="form-control" id="inputemail3" placeholder="Colonia" required>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<input type="hidden" name="fecha" id="fecha"/><br>'+
                    '<input type="submit" name="button" id="button" value="Enviar" /></form>'+
                    '</div>'
                    ;                    ;
                // reset camera for another shot
                webcam.reset();
            }
            else alert("PHP Error: " + msg);
        }
    </script>



    <!--ESTILO CAMARA -->
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
  <div class="panel panel-default">
         <div class="panel-body">
         <center><script language="JavaScript">
            document.write( webcam.get_html(320,480) );//dimensiones de la camara 320X240
            </script></center>
             <form>
       <center> <input type=button id="boton_confi" value="Configurar" onClick="webcam.configure()" class="botones_cam">
        <input type=button id="boton_foto" value="Tomar foto" onClick="webcam.freeze()" class="botones_cam">
        <input type=button id="boton_subir" value="subir" onClick="do_upload()" class="botones_cam">
        <input type=button id="boton_reset" value="Reset" onClick="webcam.reset()" class="botones_cam"></center>
    </form>    

         
         </div>
       </div>
   
  </div>
      
  <div class="col-md-4">
       <div class="panel panel-default">
         <div class="panel-body">
         <div id ="upload_results">
                
         </div>  
         </div>
       </div>
  </div>



Buscar <input type="text" id="bus" name="bus" onkeyup="loadXMLDoc()" required />
  <div class="col-md-4">
     
    <div id="myDiv" class="panel panel-default">
   
<!--<div id="myDiv"></div>-->

   </div>
</div>
  </body>
</html>

 