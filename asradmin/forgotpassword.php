<?php
include("include/db_connect.php");
include("include/constants.php");

if($sesonadminid != '')
{
header("Location:view_orders.php"); 	
}
if(isset($_POST['Submit']))
{
$uname  		= $_POST['txtUsername'];

$cqry="select * from tbl_admin where username='admin'";
$cres=mysqli_query($mysqli,$cqry)or die(mysqli_error());
$numrows1 = mysqli_num_rows($cres);
$carr=mysqli_fetch_array($cres);

if($numrows1 != 0)
{

$password=$carr['mem_password'];
$email="gmkumar@gmail.com";

$Msg = '<table width="865" border="0">
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>Dear Staff,</td>
</tr>

<tr>
<td>Admin Panel Password from Database Provider</td>
</tr>

<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>Below is Member Login Email:<br />
Login Email: '.$uname.'<br />
Password: '.$password.'</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>Yours sincerely,<br />
Database Provider/</td>
</tr>
</table>';

$Subject="Admin Panel Password from Database Provider";
//echo $mailformat;

//$mailheaders = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= 'From: T20 Crackers <support@t20crackers.com>' . "\r\n";


mail($email,$Subject,$Msg,$headers);


}
else
{
$flagnew="error";
}

$flagf="success";

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
<link rel="shortcut icon" href="assets/images/favicon.png">
<!-- App css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="authentication-bg authentication-bg-pattern">
<div class="account-pages mt-5 mb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-pattern">
          <div class="card-body p-4">
            <div class="text-center w-75 m-auto"> <a href="index.html"> <span style="font-size:32px; font-weight:bold;">T20 Crackers</span> </a>             
              <?php if($flagnew =="error"){  ?>
<p class="text-muted mb-4 mt-3" ><span style="color:#F00;">Sorry,Email Id Does Not Exist</span></p>
<?php
}
elseif($flagf =="success"){ 
?>
<p class="text-muted mb-4 mt-3" ><span style="color:#F00;">Password successfully sent to your Mailid</span></p>
<?php
}
else
{
?>
<p class="text-muted mb-4 mt-3">Enter your email address and we'll send you an email with instructions to reset your password.</p>
<?php
}

?>
            </div>
             <form action="forgotpassword.php" method="post" name="Login" id="Login" class="utopia" onSubmit="return admin_validation();">
              <div class="form-group mb-3">
                <label for="emailaddress">Email address</label>
                <input class="form-control" type="email" name="txtUsername" id="txtUsername" value="" required placeholder="Enter your email">
              </div>
              <div class="form-group mb-0 text-center">
                <button class="btn btn-info btn-block" type="submit" name="Submit"> Reset Password </button>
              </div>
            </form>
          </div>
          <!-- end card-body -->
        </div>
        <!-- end card -->
        <div class="row mt-3">
          <div class="col-12 text-center">
            <p class="text-white-50">Back to <a href="index.php" class="text-white ml-1"><b>Log in</b></a></p>
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
<footer class="footer footer-alt"> © 2021 All Rights Reserved -  Developed by <a href="http://www.t20crackers.com" target="_blank" class="text-white-50">T20 Crackers</a> </footer>
<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>
<!-- App js -->
<script src="assets/js/app.min.js"></script>
</body>
</html>