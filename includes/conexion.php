<?php

function conexion(){

$con = mysql_connect("localhost","root","juanes");

if (!$con){

die('Could not connect: ' . mysql_error());
}

mysql_select_db("webcam", $con);

return($con);

}

?>