<?php 
include("include/db_connect.php");
include("include/constants.php");
include("include/adminsession.php");
include("include/primaryfunctions.php");
include("include/paging.php");



$currentdate = date('Y-m-d');	

$Query_Limit	=	"SELECT * FROM tbl_settings ";
$Result_Limit	=	mysqli_query($mysqli,$Query_Limit);
$Fetch_Limit	=	mysqli_fetch_array($Result_Limit);

$Oid=$_REQUEST['id'];

$objResult    = mysqli_query($mysqli,"SELECT * from tbl_orders WHERE  `Oid` = '$Oid'") or die ("Error:".mysqli_error());
$Fetch        = mysqli_fetch_array($objResult);

$particulardata=$Fetch['order_details'];

$itiarrayval1 = explode('Category:', $particulardata);
$source1 = $itiarrayval1[1];
$itiarray1 = explode('loremmark', $source1);
$arrval1 = $itiarray1[0];
$categoryarray = explode(",nxt", $arrval1);



$itiarrayval2 = explode('Product:', $particulardata);
$source2 = $itiarrayval2[1];
$itiarray2 = explode('loremmark', $source2);
$arrval2 = $itiarray2[0];
$productarray = explode(",nxt", $arrval2);


$itiarrayval3 = explode('Umtype:', $particulardata);
$source3 = $itiarrayval3[1];
$itiarray3 = explode('loremmark', $source3);
$arrval3 = $itiarray3[0];
$umtypearray = explode(",nxt", $arrval3);

$itiarrayval4 = explode('Originalprice:', $particulardata);
$source4 = $itiarrayval4[1];
$itiarray4 = explode('loremmark', $source4);
$arrval4 = $itiarray4[0];
$originalpricearray = explode(",nxt", $arrval4);

$itiarrayval5 = explode('Offerprice:', $particulardata);
$source5 = $itiarrayval5[1];
$itiarray5 = explode('loremmark', $source5);
$arrval5 = $itiarray5[0];
$offerpricearray = explode(",nxt", $arrval5);

$itiarrayval6 = explode('Qty:', $particulardata);
$source6 = $itiarrayval6[1];
$itiarray6 = explode('loremmark', $source6);
$arrval6 = $itiarray6[0];
$qtyarray = explode(",nxt", $arrval6);

$resultcount = count($qtyarray);

$itiarrayval7 = explode('Total:', $particulardata);
$source7 = $itiarrayval7[1];
$itiarray7 = explode('loremmark', $source7);
$arrval7 = $itiarray7[0];
$totalarray = explode(",nxt", $arrval7);

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

<!-- End Navigation Bar-->
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="wrapper">
<div class="container-fluid">
<!-- start page title -->


<!-- end page title -->
<!-- end row -->
<div class="row">
<div class="col-12">
<div class="card-box">
<!--<a href="create_campaign_advanced.php" ><button type="button" class="btn btn-sm btn-blue waves-effect waves-light float-right"><i class="mdi mdi-plus-circle"></i>Add Campaign</button></a>-->
<table class="table-hover m-0 table-centered dt-responsive" width="100%" >
<tr>
<td style="font-size:36px; font-weight:bold">T20 Crackers</td>
<td colspan="5">&nbsp;</td>
<td colspan="2" align="right"><div  style="padding-right:20px;">
<?php echo $Fetch['name'];  ?><br>
<?php echo $Fetch['mobile'];  ?><br>
<?php echo $Fetch['address'];  ?>
</div></td></tr>
<tr><td style="height:50px;">&nbsp;</td></tr>
</table>
<table class="table table-hover m-0 table-centered dt-responsive wrap w-100" >
<thead>
<tr>
<th>S.No</th>
<th>Category</th>
<th>Product Name</th>
<th>UM</th>
<th>Original Price(Rs.)</th>
<th>Offer Price(Rs.)</th>
<th>Qty</th>
<th>Total(Rs.)</th>
</tr>
</thead>
<tbody>
<?php
$j="0";
for($i=0;$i<$resultcount;$i++)
{	
if($qtyarray[$i]!="")
{
$j++;

$catid=$categoryarray[$i];

$objResult1    = mysqli_query($mysqli,"SELECT * from tbl_category WHERE  `Cid` = '$catid'") or die ("Error:".mysqli_error());
$Fetch1        = mysqli_fetch_array($objResult1);

?>
<tr>
<td><?php echo $j; ?></td>
<td><?php echo $Fetch1['category'];  ?></td>
<td><?php echo $productarray[$i];  ?></td>
<td><?php echo $umtypearray[$i];  ?></td>
<td><?php echo $originalpricearray[$i];  ?></td>
<td><?php echo $offerpricearray[$i];  ?></td>
<td><?php echo $qtyarray[$i];  ?></td>
<td><?php echo $totalarray[$i];  ?></td>
</tr>
<?php 
}
}
?>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><br><br>Total Amount: </td>
<td><br><br><?php echo $Fetch['total_qty'];  ?></td>
<td><br><br>Rs. <?php echo $Fetch['total_amount'];  ?></td>
</tr>

</tbody>
</table>

</div>
</div>
 
<!-- end col -->
</div>

<!-- end row -->
</div>
<!-- end container -->
</div>
<!-- end wrapper -->
<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
<!-- Footer Start -->

<!-- end Footer -->
<!-- Right Sidebar -->
<script type="text/javascript">
window.onafterprint = window.close;
         window.print();
</script> 
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