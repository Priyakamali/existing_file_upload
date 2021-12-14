<?php 
include("include/db_connect.php");
include("include/constants.php");
include("include/adminsession.php");
include("include/primaryfunctions.php");
include("include/paging.php");

$currentdate = date('Y-m-d');	



$flug=$_REQUEST['flug'];

$flug1=$_REQUEST['flug1'];

//For Viewing the Question

$SortBy	= $_REQUEST['sortby'];
$name	= $_REQUEST['name'];

if(($SortBy == "") || ($SortBy == "all")) { echo $SortList = ""; } else { $SortList = $SortBy; }


# GET LIMIT VALUE

$Query_Limit	=	"SELECT * FROM tbl_settings ";
$Result_Limit	=	mysqli_query($mysqli,$Query_Limit);
$Fetch_Limit	=	mysqli_fetch_array($Result_Limit);
$flag	= $_REQUEST['flag'];
$mid	= $_REQUEST['mid'];

#For Display the Result

$rflag	=	$_REQUEST['rflag'];	
$rType	=	$_REQUEST['rtype'];	


$Q_Check = "SELECT * FROM tbl_orders where  `name` != '' ORDER BY Oid desc";
$R_Check	= mysqli_query($mysqli,$Q_Check) or die(mysqli_error());
$C_Check	= mysqli_num_rows($R_Check);
$total		= mysqli_num_rows($R_Check);	
$page = $_REQUEST['page']; 
$limit = $Fetch_Limit['varrow']; 

//$limit = 1; 

$pager  = getPagerData($total, $limit, $page); 

$offset = $pager->offset; 
$limit  = $pager->limit; 
$page   = $pager->page; 

$Q_Check1 = "SELECT * FROM tbl_orders where  `name` != '' ORDER BY Oid desc";
$R_Check1	= mysqli_query($mysqli,$Q_Check1);

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
<!-- third party css -->
<link href="assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
<!-- third party css end -->
<!-- App css -->
<!-- Plugins css -->
<link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />

<!-- App css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="../main.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 
<script src="../main.js"></script>
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
<form name="callrecords" action="" method="post" autocomplete="off">
<div class="row">
<div class="col-12">
<div class="page-title-box">
<div class="page-title-right">
<ol class="breadcrumb m-0">
<li class="breadcrumb-item"><a href="javascript: void(0);">Orders</a></li>
<li class="breadcrumb-item active">View Orders</li>
</ol>
</div>
<h4 class="page-title">
<table width="900" border="0">
  <tr>
  <td>View Orders</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</h4><br>
</div>
</div>
</div>
<!-- end page title -->
<!-- end row -->
<div class="row">
<div class="col-12">
<div class="card-box">
<!--<a href="create_campaign_advanced.php" ><button type="button" class="btn btn-sm btn-blue waves-effect waves-light float-right"><i class="mdi mdi-plus-circle"></i>Add Campaign</button></a>-->
<?php
if($_REQUEST[rflag] == "success") 
{ 
?>
<div style="color:#F00;" align="center">Status updated successfully</div>
<?php } ?>
<table class="table table-hover m-0 table-centered dt-responsive wrap w-100" id="tickets-table">
<thead>
<tr>
<th>S.No</th>
<th>Order Id</th>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Address</th>
<th>State</th>
<th>City</th>
<th>Referal Code</th>
<th>Quantity</th>
<th>Total Amount</th>
<th>Delivery Status</th>
<th>Payment Status</th>
<th>Date</th>
<th>View Orders</th>
</tr>
</thead>
<tbody>
<?php if($C_Check==0) { ?>
<tr><td style="color:#F00;" align="center" colspan="13" height="100px;">Data Not Found</td></tr>
<?php } else {

$i = 0;
while($F_Check = mysqli_fetch_array($R_Check1)) {  $i++;

?>
<tr>
<td><?php echo $i;  ?></td>
<td><?php echo $F_Check['Order_id'];  ?></td>
<td><?php echo $F_Check['name'];  ?></td>
<td><?php echo $F_Check['mobile'];  ?></td>
<td><?php echo $F_Check['email'];  ?></td>
<td><?php echo $F_Check['address'];  ?></td>
<td><?php echo $F_Check['state'];  ?></td>
<td><?php echo $F_Check['city'];  ?></td>
<td><?php echo $F_Check['referal_code'];  ?></td>
<td><?php echo $F_Check['total_qty'];  ?></td>
<td><?php echo $F_Check['total_amount'];  ?></td>
<td><?php echo $F_Check['varstatus'];  ?></td>
<td><?php echo $F_Check['amount_status'];  ?></td>
<td><?php echo $F_Check['date'];  ?></td>
<td><a href="order_details.php?id=<?php echo $F_Check['Oid'];  ?>">View</a></td>
</tr>
<?php 
}
}
?>

</tbody>
</table>

</div>
</div>
 
<!-- end col -->
</div>
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
<!-- third party js -->
<script src="assets/libs/datatables/jquery.dataTables.js"></script>
<script src="assets/libs/datatables/dataTables.bootstrap4.js"></script>
<script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>
<!-- Plugins js-->
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="assets/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
<!-- Init js-->
<script src="assets/js/pages/form-pickers.init.js"></script>
<!-- Tickets js -->
<script src="assets/js/pages/tickets.js"></script>
<!-- App js-->
<script src="assets/js/app.min.js"></script>
</body>
</html>