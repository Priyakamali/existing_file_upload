<?php
include("include/db_connect.php");
include("include/constants.php");

if($sesonadminid != '')
{
header("Location:view_orders.php");  	
}

$ipaddress=$_SERVER['REMOTE_ADDR'];
 

if(isset($_POST["Submit"]))
{
$strUsername = $_POST['txtUsername'];
$strPassword = $_POST['txtPassword'];

//$objResult1 = mysqli_query($mysqli,"SELECT * from tbl_ipaddress WHERE `varstatus`='active' and `varipaddress` = '$ipaddress' ") or die ("Error:".mysqli_error());
//if (mysqli_num_rows($objResult1) != 0) 
//{
	
$objResult = mysqli_query($mysqli,"SELECT * from tbl_admin WHERE `varstatus`='active'  and `username` = '$strUsername'  and `password` = '$strPassword' ") or die ("Error:".mysqli_error());
if (mysqli_num_rows($objResult) != 0) 
{
$objUserdetails = mysqli_fetch_array($objResult);
$intUserId = $objUserdetails['adminid'];
$login_date = $objUserdetails['login_date'];


session_start();
$_SESSION["sesonadminid"]		 = $intUserId;


$currentdate=date("d-m-Y H:i:s");
$update55 = "UPDATE tbl_admin SET `login_date`='$currentdate',`lastlogin_date`='$login_date' WHERE `adminid` = '$intUserId'";   
$upexe55=mysqli_query($mysqli,$update55);


header("Location:view_orders.php");
}
else
{
header("Location:index.php?log=error");
}
//}
//else
//{
//header("Location:index.php?iplog=error");
//}
}

$title = "select * from tbl_settings";
$titex = mysqli_query($mysqli,$title);
$titarr = mysqli_fetch_array($titex);
$admintitle = $titarr['varAdmtitle'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><?php echo $varFortitle;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="keywords" name="<?php echo $txtMetakeyword;?>" />
<meta content="<?php echo $txtMetadesc;?>" name="description" />
<meta content="Coderthemes" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- App favicon -->
<link rel="shortcut icon" href="">
<!-- App css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
<script>
function CheckData()
{
with(document.Login)
{
if(txtPassword.value.match(/\ /)) {
alert("Please enter the password without space");
txtPassword.focus();
txtPassword.value="";
return false;
}
}
return true;
}
</script>
</head>
<body class="authentication-bg authentication-bg-pattern">
<div class="account-pages mt-5 mb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-pattern">
          <div class="card-body p-4">
            <div class="text-center w-75 m-auto"> <a href="index.php"> <span style="font-size:32px; font-weight:bold;">T20 Crackers</span> </a>
			
<?php if($_REQUEST['log'] == "error"){  ?>
<p class="text-muted mb-4 mt-3" ><span style="color:#F00;">Invalid Login</span></p>
<?php
}
elseif($_REQUEST['iplog'] == "error"){ 
?>
<p class="text-muted mb-4 mt-3" ><span style="color:#F00;">Can't access your account. You login valid IP address system only</span></p>
<?php
}
else
{
?>
<p class="text-muted mb-2" >&nbsp;</p>
<?php
}

?>
            </div>
            <form action="index.php" method="post" name="Login" id="Login" class="utopia" onSubmit="return CheckData()">
              <div class="form-group mb-3">
                <label for="emailaddress">Username</label>
                <input class="form-control" type="text" name="txtUsername" id="txtUsername" value="" required placeholder="Enter your username">
              </div>
              <div class="form-group mb-3">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="txtPassword" id="txtPassword" required  placeholder="Enter your password">
              </div>
              <div class="form-group mb-3">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                  <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                </div>
              </div>
              <div class="form-group mb-0 text-center">
                <button class="btn btn-info btn-block" type="submit" name="Submit"> Log In </button>
              </div>
            </form>
            <div class="text-center">
              <h5 class="mt-3 text-muted">Sign in with</h5>
              <ul class="social-list list-inline mt-3 mb-0">
                <li class="list-inline-item"> <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a> </li>
                <li class="list-inline-item"> <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a> </li>
                <li class="list-inline-item"> <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a> </li>
                <li class="list-inline-item"> <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a> </li>
              </ul>
            </div>
          </div>
          <!-- end card-body -->
        </div>
        <!-- end card -->
        <div class="row mt-3">
          <div class="col-12 text-center">
            <p> <a href="forgotpassword.php" class="text-white-50 ml-1">Forgot your password?</a></p>
            <!--<p class="text-white-50">Don't have an account? <a href="pages-register.html" class="text-white ml-1"><b>Sign Up</b></a></p>-->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end col -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</div>
<!-- end page -->
<footer class="footer footer-alt"> © 2021 All Rights Reserved -  Developed by  <a href="http://www.t20crackers.com" target="_blank" class="text-white-50">T20 Crackers</a> </footer>
<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>
<!-- App js -->
<script src="assets/js/app.min.js"></script>
</body>
</html>