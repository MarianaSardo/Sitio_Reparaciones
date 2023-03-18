<?php
/*  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "reparaciones";

  // Create connection
  $conexion = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conexion->connect_error) {
     die("Connection failed: " . $conexion->connect_error);
  }
*/

session_start();

$MYSQLHOST=$_ENV["MYSQLHOST"];
$MYSQLDATABASE=$_ENV["MYSQLDATABASE"];
$MYSQLPASSWORD=$_ENV["MYSQLPASSWORD"];
$MYSQLPORT=$_ENV["MYSQLPORT"];
$MYSQLUSER=$_ENV["MYSQLUSER"];


$conexion=mysqli_connect("$MYSQLHOST","$MYSQLUSER","$MYSQLPASSWORD","$MYSQLDATABASE","$MYSQLPORT");

?>
