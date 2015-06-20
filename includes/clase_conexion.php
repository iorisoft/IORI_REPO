<?php       
//LA QUE ME FUNCIONA A MI 
/*este es el archivo de conexion con la base de datos*/
$servidor = "localhost";
$basededatos ="webcam";
$usuario = "root";
$password = "juanes";
$conectar = mysql_connect($servidor, $usuario, $password) or trigger_error(mysql_error(),E_USER_ERROR);

function conectar(){
	global $servidor, $usuario, $password, $basededatos;
	$idcnx= mysql_connect($servidor, $usuario, $password) or die (mysql_error());
	mysql_select_db($basededatos, $idcnx);
	return $idcnx;
	}
	
	function filled_out($form_vars)
{
//comprueba estas variable teniendo un valor
	foreach($form_vars as $key => $value)
		{
			if (!isset($key) || ($value==""))
			return false;
			}
			return true;
	}
function desconectar()
{
	mysql_close();
}	

function conectar_db()
{
	mysql_connect("localhost", "root", "juanes");
	mysql_select_db("webcam");
}
	
function valid_email($address)
{
  // check an email address is possibly valid
  if (ereg("^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$", $address))
    return true;
  else 
    return false;
}

// Función para extraer el listado de usurios
/*function consultaUsers(){
	$cnx = conectar();

	//$statusTipo = array("Activo" => "btn-success",
	//					"Suspendido" => "btn-warning");

	$salida = '';

	$consulta = mysql_query("SELECT serial,nombre,app,apm FROM fotos ORDER BY nombre ASC", $cnx);

	//$consulta = $linkDB -> query("SELECT serial, nombre,app,apm FROM fotos ORDER BY nombre ASC");

	if($consulta -> num_rows != 0){
		
		// convertimos el objeto
		while($listadoOK = $consulta -> fetch_assoc())
		{
			//SE USARAN EN UN FUTURO NO MUY LEJANO
			//<td class="centerTXT"><span class="btn btn-mini '.$statusTipo[$listadoOK['usr_status']].'">'.$listadoOK['usr_status'].'</span></td>
			//		<td class="centerTXT"><a data-accion="editar" class="btn btn-mini" href="'.$listadoOK['id_user'].'">Editar</a> <a data-accion="eliminar" class="btn btn-mini" href="'.$listadoOK['id_user'].'">Eliminar</a></td>
			$salida .= '
				<tr>
					<td>'.$listadoOK['nombre'].'</td>
					<td>'.$listadoOK['app'].'</td>
					<td>'.$listadoOK['apm'].'</td>
					<td class="centerTXT">
					<a data-accion="editar" class="btn btn-mini btn-warning" href="editar_foto.php?serial='.$listadoOK['serial'].'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a data-accion="editar" class="btn btn-mini btn-danger" href="'.$listadoOK['serial'].'"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
				<tr>
			';
		}

	}
	else{
		$salida = '
			<tr id="sinDatos">
				<td colspan="5" class="centerTXT">NO HAY REGISTROS EN LA BASE DE DATOS</td>
	   		</tr>
		';
	}

	return $salida;
}*/

function conexion(){

$con = mysql_connect("localhost","root","juanes");

if (!$con){

die('Could not connect: ' . mysql_error());
}

mysql_select_db("webcam", $con);

return($con);

}






/* CONEXION MYSQLI DISQUE LA NUEVA FORMA DE CONEXION
$mysqli = new mysqli("localhost", "root", "juanes", "webcam");

/* comprobar la conexión 
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}

// Constantes conexión con la base de datos
//define("server", 'localhost');
//define("user", 'root');
//define("pass", 'juanes');
//define("mainDataBase", 'webcam');

// Variable que indica el status de la conexión a la base de datos
$errorDbConexion = false;


function conectar(){
	global $servidor, $usuario, $password, $basededatos;
	$idcnx= mysql_connect($servidor, $usuario, $password) or die (mysql_error());
	mysql_select_db($basededatos, $idcnx);
	return $idcnx;
	}



// Función para extraer el listado de usurios
function consultaUsers($linkDB){

	//$statusTipo = array("Activo" => "btn-success",
	//					"Suspendido" => "btn-warning");

	$salida = '';

	$consulta = $linkDB -> query("SELECT serial, nombre,app,apm
								  FROM fotos ORDER BY nombre ASC");

	if($consulta -> num_rows != 0){
		
		// convertimos el objeto
		while($listadoOK = $consulta -> fetch_assoc())
		{
			//SE USARAN EN UN FUTURO NO MUY LEJANO
			//<td class="centerTXT"><span class="btn btn-mini '.$statusTipo[$listadoOK['usr_status']].'">'.$listadoOK['usr_status'].'</span></td>
			//		<td class="centerTXT"><a data-accion="editar" class="btn btn-mini" href="'.$listadoOK['id_user'].'">Editar</a> <a data-accion="eliminar" class="btn btn-mini" href="'.$listadoOK['id_user'].'">Eliminar</a></td>
			$salida .= '
				<tr>
					<td>'.$listadoOK['nombre'].'</td>
					<td>'.$listadoOK['app'].'</td>
					<td>'.$listadoOK['apm'].'</td>
					<td class="centerTXT">
					<a data-accion="editar" class="btn btn-mini btn-warning" href="editar_foto.php?serial='.$listadoOK['serial'].'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a data-accion="editar" class="btn btn-mini btn-danger" href="'.$listadoOK['serial'].'"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
				<tr>
			';
		}

	}
	else{
		$salida = '
			<tr id="sinDatos">
				<td colspan="5" class="centerTXT">NO HAY REGISTROS EN LA BASE DE DATOS</td>
	   		</tr>
		';
	}

	return $salida;
}







// Verificar constantes para conexión al servidor
if(defined('server') && defined('user') && defined('pass') && defined('mainDataBase'))
{
	// Conexión con la base de datos
	
	$mysqli = new mysqli(server, user, pass, mainDataBase);
	
	// Verificamos si hay error al conectar
	if (mysqli_connect_error()) {
	    $errorDbConexion = true;
	}

	// Evitando problemas con acentos
	$mysqli -> query('SET NAMES "utf8"');
}


LA VIEJA FORMA DE CONEXION
/*class conexion{
var $serv="localhost";
var $usuario="root";
var $contra="juanes";
var $conexi;

function conecta()
 {
	$s=$this->serv;
	$u=$this->usuario;
	$c=$this->contra;
	$conex=mysql_connect($s,$u,$c);
	$this->conexi=$conex;
 }

 

}
$cono= new conexion();
$cono->conecta();
$c=$cono->conexi;
$select=mysql_select_db("webcam",$c);
*/

?>
