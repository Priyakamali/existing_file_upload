<?php
session_start();
ob_start();
error_reporting  (E_ERROR | E_WARNING | E_PARSE);
//Session Start
$sesonadminid		= $_SESSION['sesonadminid'];
if($sesonadminid == "")
{
header("Location:index.php");
}
unset($_SESSION['sesonadminid']);
$_SESSION["sesonadminid"] = "";

//session_destroy();
header("Location:index.php");
?>
