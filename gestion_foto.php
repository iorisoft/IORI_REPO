<?php
include("clase_conexion.php");
$cnx = conectar();
$data = rand(0,9000).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90))."-".date("dmy");
$id=$_POST['id_foto'];//20120214052450.jpg
$matricula=$_POST['n_matricula'];
$nombre=$_POST['nombre'];
$app=$_POST['app'];
$apm=$_POST['apm'];
$calle=$_POST['calle'];
$colonia=$_POST['colonia'];
$carrera=$_POST['carrera'];
$grado=$_POST['grado'];
$fecha=date("d/m/Y");//extraemos la fecha del servidor
$sub=(substr($id,-18));
$id_foto=str_replace(".jpg", "", $sub);//20120214052450
$consul="update fotos set id_foto=id_foto, matricula='$matricula', nombre='$nombre'
 ,app='$app', apm='$apm', calle='$calle', colonia='$colonia', carrera='$carrera', grado='$grado'
 ,fecha='$fecha', serial='$data' where id_foto='$id_foto'";
$modifica=mysql_query($consul,$cnx);
print("<script>window.location.replace('index.php');</script>");  

?>