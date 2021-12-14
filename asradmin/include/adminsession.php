<?php
session_start();
$sesonadminid		= $_SESSION['sesonadminid'];

if(empty($sesonadminid)) { 
header("Location:index.php");
}
?>
