<?php

include 'includes/conexion.php';


$q=$_POST[q];
//echo'<table class="table table-striped ">';
echo '<td height="202"></td>';
echo '<td colspan="2" valign="top"><table class="table table-striped " width="350" border="1" cellpadding="0" cellspacing="0">';
        echo '<tr>';
        echo '<th class="th">Nombre</th>';
        echo '<th class="th">APP</th>';
        echo '<th class="th">APM</th>';
        echo '<th class="th">OPCIONES</th>';
        echo '</tr>';
$con=conexion();

$sql="select serial,nombre,app,apm from fotos where nombre LIKE '".$q."%' ORDER BY nombre ASC";
$res=mysql_query($sql,$con);

if(mysql_num_rows($res)==0){

echo '<b>No hay sugerencias</b>';

}else{

//echo '<b>Sugerencias:</b><br />';


while($fila=mysql_fetch_array($res)){

//echo $fila['nombre'].'<br />';
//echo '<a data-accion="editar" class="btn btn-mini btn-warning" href="editar_foto.php?serial='.$listadoOK['serial'].'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
//echo '<a data-accion="editar" href="editar_foto.php?serial='.$fila['serial'].'">'.$fila[nombre].'</a>';
  echo "<tr>";

              echo"<td class='th'>".$fila['nombre']."</td>";
              echo"<td class='th'>".$fila['app']."</td>";
              echo"<td class='th'>".$fila['apm']."</td>";
              echo"<td class='centerTXT'>";
              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
              echo'<a data-accion="editar" class="btn xsmall btn-warning" href="editar_foto.php?serial='.$fila['serial'].'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
              echo'<a data-accion="editar" class="btn btn-mini btn-danger" href="'.$fila['serial'].'"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
              echo'<tr>';
              echo'</table>';

}

}

?>