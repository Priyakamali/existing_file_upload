<?php
ob_start(); 
error_reporting(0);

$host_name = "localhost";
$host_user = "root";
$host_pass = "";
$host_db = "asragencies";

//$host_name = "localhost";
//$host_user = "asragencies_asruser";
//$host_pass = "m@]}mdmN)DgKk,LIMy";
//$host_db = "asragencies_crackers";

//$connect = @mysql_connect($host_name,$host_user,$host_pass)or die("Could not connect: ".mysqli_error());
//$db = mysql_select_db($host_db);

$mysqli = new mysqli($host_name, $host_user,$host_pass,$host_db);

session_start();
$sesonadminid		  = $_SESSION['sesonadminid'];

date_default_timezone_set('Asia/Kolkata');


$Query_Limit	=	"SELECT * FROM tbl_settings ";
$Result_Limit	=	mysqli_query($mysqli,$Query_Limit);
$Fetch_Limit	=	mysqli_fetch_array($Result_Limit);
$fronttitle=$Fetch_Limit['varFortitle'];
?>
