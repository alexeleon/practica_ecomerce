<?php
$usuario=$_POST["USUARIO"];
$CLAVE=$_POST["CLAVE"];

//CONECTAR A LA BASE DE DATOS
$CONEXION=mysqli_conect("localhost"; ""; "bdprueba");
$consulta="select * from usuarios where usuario="$usuario" AND CLAVE="$CALVE"";
$RESULTADO=mysqli_QUERY($CONEXION; $CONSULTA);

$FILAS=mysqli_NUM_ROWS($RESULTADO);
IF ($FILAS>0)  {
HEADER("LOCATION: BIENBENIDO.HTML");
}
ELSE {
ECHO"ERROR EN LA AUTENTIFICACION";
}
mysqli_FREE_RESULT($RESULTADO);
mysqli_CLOSE($CONEXION);