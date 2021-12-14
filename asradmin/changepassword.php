<?php
include("include/db_connect.php");
include("include/constants.php");
include("include/adminsession.php");

$title = "select * from tbl_settings ";
$titex = mysqli_query($mysqli,$title);
$titarr = mysqli_fetch_array($titex);
$fronttitle = $titarr['varFortitle'];

if(isset($_POST['Submit']))
{
$old  		= $_POST['old'];
$new		=$_POST['new1'];
$confirm	=$_POST['confirm1'];

$passqry = "select * from  tbl_admin where adminid ='$sesonadminid'";
$passres = mysqli_query($mysqli,$passqry)or die(mysqli_error());
$passarr = mysqli_fetch_array($passres);
$pass=$passarr[mem_password];
if($pass == $old)
{
if($new == $confirm)
{
$updqry="UPDATE tbl_admin SET password='$new' where adminid ='$sesonadminid'"or die("ERROR:".mysqli_error());
$updres=mysqli_query($mysqli,$updqry);
header("Location:changepassword.php?flug=success");
}
else
{
$flag1 = "error";
}
}
else
{
$flag = "error";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><?php echo $fronttitle;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="keywords" name="<?php echo $txtMetakeyword;?>" />
<meta content="<?php echo $txtMetadesc;?>" name="description" />
<meta content="Coderthemes" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.png">
<!-- Plugins css-->
<link href="assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/summernote/summernote-bs4.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />

<!-- Plugins css -->
<link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />
<!-- App css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];    
function ValidateSingleInput(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
</script>
<script type="text/javascript">
//Function to allow only numbers to textbox
function validate(key)
{
//getting key code of pressed key
var keycode = (key.which) ? key.which : key.keyCode;
var phn = document.getElementById('mobile');
//comparing pressed keycodes
if (!(keycode==8 || keycode==46)&&(keycode < 48 || keycode > 57))
{
return false;
}
else
{
}
}

</script>
</head>
<body>
<!-- Navigation Bar-->
<?php include("include/header_callmanagement.php");?>
<!-- End Navigation Bar-->
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
<div class="wrapper">
<div class="container-fluid">
<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box">
<div class="page-title-right">
<ol class="breadcrumb m-0">
<li class="breadcrumb-item"><a href="javascript: void(0);">Database Provider</a></li>
<li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
<li class="breadcrumb-item active">Change Password</li>
</ol>
</div>
<h4 class="page-title">Change Password</h4>
</div>
</div>
</div>
     <?php if($flag == "error") { ?>
      <div class="row"> <div class="col-xl-12"  style="color:#F00;" align="center">Old password is incorrect<br><br></div>
    </div>
      <?php } if($flag1 == "error") { ?>
      <div class="row"> <div class="col-xl-12"  style="color:#F00;" align="center">New & Confirm password is incorrect<br><br></div>
    </div>
          <?php } if($_REQUEST['flug'] == "success") { ?>
      <div class="row"> <div class="col-xl-12"  style="color:#F00;" align="center">Password Changed Successfully<br><br></div>
    </div>
      <?php } ?>
<!-- end page title -->
<form name="changepassword" action="changepassword.php" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-6">
<div class="card-box">
<h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Change Password</h5>
<div class="form-group mb-3">
<label for="product-name">Old Password <span class="text-danger">*</span></label>
<input type="password" required name="old" id="old" placeholder="Please enter old password" class="form-control"> 
</div>

<div class="form-group mb-3">
<label for="product-description">New Password<span class="text-danger">*</span></label>
<input type="password" required name="new1" id="new1" placeholder="Please enter new password" class="form-control">
</div>

<div class="form-group mb-3">
<label for="product-description">Confirm Password<span class="text-danger">*</span></label>
<input type="password" required name="confirm1" id="confirm1" placeholder="Please enter confirm password" class="form-control">
</div>

</div>
<div class="text-center mb-3" align="center">
<!--<button type="button" class="btn w-sm btn-light waves-effect">Cancel</button>-->
<button type="submit" name="Submit" class="btn w-sm btn-success waves-effect waves-light">Submit</button><!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="reset" value="Reset" class="btn w-sm btn-danger waves-effect waves-light">Delete</button>-->
</div>
<!-- end card-box -->
</div>
<!-- end col -->

<!-- end row -->

</form>
<!-- end row -->
</div>
<!-- end container -->
</div>
<!-- end wrapper -->
<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
<!-- Footer Start -->
<?php include("include/footer_callmanagement.php");?>
<!-- end Footer -->
<!-- Right Sidebar -->

<!-- /Right-bar -->
<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>
<!-- Summernote js -->
<script src="assets/libs/summernote/summernote-bs4.min.js"></script>
<!-- Select2 js-->
<script src="assets/libs/select2/select2.min.js"></script>
<!-- Dropzone file uploads-->
<script src="assets/libs/dropzone/dropzone.min.js"></script>
<!-- Init js -->
<script src="assets/js/pages/add-product.init.js"></script>
<!-- Plugins js-->
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="assets/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
<!-- Init js-->
<script src="assets/js/pages/form-pickers.init.js"></script>
<!-- App js-->
<script src="assets/js/app.min.js"></script>
</body>
</html>