<?php
$dbhost = "localhost";
$dbuser ="root";
$dbpass = "";
$dbname = "test";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn)
{
    die("No Hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    //header("Location: pagina.html")
    //echo "Bienvenido:" .$nombre;
    header("Location: https://www.steren.com.mx/camara-de-seguridad-wi-fi-ethernet-full-hd-robotizada-con-seguidor-de-movimiento-para-exterior.html");

}
elseif($nr == 0)
{
    echo "No ingreso";
}
?>