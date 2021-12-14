<?php 
include("asradmin/include/db_connect.php");

if(isset($_POST['Submit']))
{ 
   

foreach($_POST["category"] as $key1=>$val1){
	if(isset($val1))
		$data1.=$val1.",nxt";
}
$category="Category:".$data1."loremmark";

foreach($_POST["product"] as $key2=>$val2){
if(isset($val2))
$data2.=$val2.",nxt";
}
$product="Product:".$data2."loremmark";

foreach($_POST["umtype"] as $key3=>$val3){
if(isset($val3))
$data3.=$val3.",nxt";
}
$data3;
$umtype="Umtype:".$data3."loremmark";

foreach($_POST["originalprice"] as $key4=>$val4){
if(isset($val4))
$data4.=$val4.",nxt";
}
$originalprice="Originalprice:".$data4."loremmark";

foreach($_POST["offerprice"] as $key5=>$val5){
if(isset($val5))
$data5.=$val5.",nxt";
}
$offerprice="Offerprice:".$data5."loremmark";

foreach($_POST["qty"] as $key6=>$val6){
if(isset($val6))
$data6.=$val6.",nxt";
}
$qty="Qty:".$data6."loremmark";

foreach($_POST["total"] as $key7=>$val7){
if(isset($val7))
$data7.=$val7.",nxt";
}
$total="Total:".$data7."loremmark";

$totaldata= $category.$product.$umtype.$originalprice.$offerprice.$qty.$total;



$Insert_member = "INSERT INTO tbl_orders (`name`,`mobile`,`email`,`address`,`state`,`city`,`referal_code`,`order_details`,`total_qty`,`total_amount`,`varstatus`,`date`,`Order_id`,`amount_status`) VALUES ('".$_POST[name]."','".$_POST[mobile]."','".$_POST[email]."','".$_POST[address]."','".$_POST[state]."','".$_POST[city]."','".$_POST[referal_code]."','$totaldata','".$_POST[no_of_items]."','".$_POST[total_amount]."','Pending',CURDATE(),'test','Pending')";
$inexe=mysqli_query($mysqli,$Insert_member);
$order_id = mysqli_insert_id($mysqli);

$txn_id="ASRC48165".$order_id;

$updateuser = "UPDATE  tbl_orders SET `Order_id`='$txn_id' WHERE `Oid` = $order_id";
$upuserexe=mysqli_query($mysqli,$updateuser);

$name=$_POST[name];
$totalamount=$_POST[total_amount];

$email=$_POST[email];
$emailadmin="gmkumar@gmail.com";

$Msg = '<table width="865" border="0">
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>Dear '.$name.',</td>
</tr>

<tr>
<td>Order Confirmation Mail From ASR Agencies </td>
</tr>

<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>Below is the Order details:<br />
Order Id: '.$txn_id.'<br />
Total Amount: '.$totalamount.'</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>Yours sincerely,<br />
ASR Agencies</td>
</tr>
</table>';

$Msg1 = '<table width="865" border="0">
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>Dear admin,</td>
</tr>

<tr>
<td>Order Received Mail From ASR Agencies </td>
</tr>

<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>Below is the Order details:<br />
Order Id: '.$txn_id.'<br />
Total Amount: '.$totalamount.'</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>Yours sincerely,<br />
ASR Agencies</td>
</tr>
</table>';

$Subject="Order Received from ASR Agencies";
//echo $mailformat;

//$mailheaders = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= 'From: ASR Agencies <support@asragencies.com>' . "\r\n";


mail($email,$Subject,$Msg,$headers);
mail($emailadmin,$Subject,$Msg1,$headers);



header("location:thankyou.php?id=$order_id&rflag=success");

}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Document Meta
    ============================================= -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="OZYmqB9tPdy8ojsYzYrs4Pp3XDnhimmPaXx6Z62T">
<meta name="theme-color" content="#7a0a15">
<link rel="shortcut icon" type="image/x-icon" href="asradmin/assets/images/headerlogo.jpg">
<!--IE Compatibility Meta-->
<meta name="author" content="SERV BUDDY">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>ASR AGENCIES | 70% OFFER</title>
<meta name="description" content="ASR AGENCIES online sivakasi is the best place to Buy Crackers Online Shopping at Sivakasi factory price in India. We offer wide range of Sparklers, Garlands, Fancy Fireworks and more.">
<meta name="keywords" content="Crackers Online, Buy Crackers Online, Buy Crackers Online Shopping, Sivakasi Crackers Online, Crackers Gift Box Online Shopping, Crackers Gift Box Online Shopping in sivakasi">
<meta property="og:url" content="#">
<meta property="og:type" content="Ecommerce">
<meta property="og:title" content="ASR AGENCIES | 70% OFFER">
<meta property="og:description" content="ASR AGENCIES online sivakasi is the best place to Buy Crackers Online Shopping at Sivakasi factory price in India. We offer wide range of Sparklers, Garlands, Fancy Fireworks and more.">
<meta property="og:image" content="https://trnditweb.s3.ap-south-1.amazonaws.com/settings/Xd6XEAo3xYlw2szeoMHbeoOUvdpBxuu3S9jI98a2.png">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.jpg">
<link href="css2" rel="stylesheet" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
<noscript>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,600;1,500&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"
    type="text/css" >
</noscript>
<link href="plugins.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="floating-wpp.min.css">
<link href="sweetalert2.css" rel="stylesheet" type="text/css">
<style>
.logo img {
	margin-top:12px;
}
</style>
<script type="text/javascript">
function process(input){
 let value = input.value;
 let numbers = value.replace(/[^0-9]/g, "");
 input.value = numbers;
}

</script>
</head>
<body class="" style="overflow: auto;">
<div id="page" class="page clearfix">
  <div class="topheader ">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <marquee class="marquee">
          All type of crackers available with 70% offer . Our brands : SRI DURGESH FIREWORKS FACTORY, SUN INDIA FIREWORKS
          </marquee>
        </div>
      </div>
    </div>
  </div>
  <header class="header">
    <div class="main">
      <div class="container ">
        <div class="row">
          <div class="col-12 col-sm-6 text-center text-sm-left"> <a href="index.php" class="logo"> <img alt="Logo" src="headerlogo.jpg" > </a> </div>
           <div class="col-12 col-sm-6 d-flex align-items-center justify-content-center justify-content-sm-end"> <a href="https://web.whatsapp.com/send?text=dfd&phone=917373045517
" target="_blank"> <img alt="header right" class="header_img_right" src="images/headcontact.png" style="width: 350px; height:127px;"> </a> </div> 
        </div>

      </div>
    </div>
  </header>
  <div id="total_amount_html" class="total_amount_html">Rs. 0</div>
  <div class="container ">
    <div class="row bg-red text-white ml-0 mr-0">
      <div class="col-6 col-md-3 pt-2 pb-2 d-flex align-items-center justify-content-start">
        <!--?xml version="1.0" encoding="iso-8859-1"?-->
        <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="446.853px" height="446.853px" viewBox="0 0 446.853 446.853" style="enable-background:new 0 0 446.853 446.853;" xml:space="preserve">
          <g>
            <path d="M444.274,93.36c-2.558-3.666-6.674-5.932-11.145-6.123L155.942,75.289c-7.953-0.348-14.599,5.792-14.939,13.708
		c-0.338,7.913,5.792,14.599,13.707,14.939l258.421,11.14L362.32,273.61H136.205L95.354,51.179
		c-0.898-4.875-4.245-8.942-8.861-10.753L19.586,14.141c-7.374-2.887-15.695,0.735-18.591,8.1c-2.891,7.369,0.73,15.695,8.1,18.591
		l59.491,23.371l41.572,226.335c1.253,6.804,7.183,11.746,14.104,11.746h6.896l-15.747,43.74c-1.318,3.664-0.775,7.733,1.468,10.916
		c2.24,3.184,5.883,5.078,9.772,5.078h11.045c-6.844,7.617-11.045,17.646-11.045,28.675c0,23.718,19.299,43.012,43.012,43.012
		s43.012-19.294,43.012-43.012c0-11.028-4.201-21.058-11.044-28.675h93.777c-6.847,7.617-11.047,17.646-11.047,28.675
		c0,23.718,19.294,43.012,43.012,43.012c23.719,0,43.012-19.294,43.012-43.012c0-11.028-4.2-21.058-11.042-28.675h13.432
		c6.6,0,11.948-5.349,11.948-11.947c0-6.6-5.349-11.948-11.948-11.948H143.651l12.902-35.843h216.221
		c6.235,0,11.752-4.028,13.651-9.96l59.739-186.387C447.536,101.679,446.832,97.028,444.274,93.36z M169.664,409.814
		c-10.543,0-19.117-8.573-19.117-19.116s8.574-19.117,19.117-19.117s19.116,8.574,19.116,19.117S180.207,409.814,169.664,409.814z
		 M327.373,409.814c-10.543,0-19.116-8.573-19.116-19.116s8.573-19.117,19.116-19.117s19.116,8.574,19.116,19.117
		S337.916,409.814,327.373,409.814z"></path>
          </g>
        </svg>
        Minimum<br>
        Order amount Rs.2000 </div>
      <div class="col-6 col-md-3 pt-2 pb-2 d-flex align-items-center justify-content-start">
        <svg id="Layer_1" enable-background="new 0 0 512.058 512.058" height="512" viewBox="0 0 512.058 512.058" width="512" xmlns="http://www.w3.org/2000/svg">
          <g>
            <path d="m167.829 168.379h-30v-28.203h-30.437v77.949h90.875v-77.949h-30.438z"></path>
            <path d="m506.599 272.656-58.197-124.36h-39.545v124.36z"></path>
            <path d="m378.857 148.296h-43.197v263.719h23.742c1.071-33.725 28.821-60.835 62.801-60.835s61.73 27.11 62.801 60.835h27.053v-109.359h-133.2z"></path>
            <path d="m305.66 65.173h-305.66v227.957h305.66zm-228.268 182.952v-137.949h150.875v137.949z"></path>
            <path d="m0 323.13v88.885h27.053c1.071-33.725 28.821-60.835 62.801-60.835s61.73 27.11 62.801 60.835h153.005v-88.885z"></path>
            <!-- <circle cx="422.203" cy="414.033" r="32.852"></circle>
            <circle cx="89.854" cy="414.033" r="32.852"></circle> -->
          </g>
        </svg>
        <div> Free Shipping <span class="d-none d-sm-inline">above</span><br>
          Order amount Rs.4999</div>
      </div>
      <div class="col-6  col-sm-3 pt-2 pb-2 d-flex align-items-center justify-content-start">
        <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
          <g>
            <path d="m316.703 216.874 60.137-43.873c11.697-8.534 5.632-27.118-8.841-27.118h-74.267l-22.962-70.965c-4.463-13.788-24.071-13.816-28.543 0l-22.962 70.965h-74.267c-14.48 0-20.532 18.588-8.841 27.118l60.137 43.873-22.979 71.013c-4.464 13.797 11.405 25.277 23.112 16.736l60.07-43.825 60.07 43.825c11.638 8.488 27.587-2.907 23.112-16.736zm-31.886-1.098 12.091 37.367-31.567-23.031c-5.269-3.843-12.414-3.842-17.682 0l-31.567 23.031 12.091-37.367c1.995-6.166-.195-12.916-5.431-16.736l-31.741-23.157h39.168c6.505 0 12.269-4.193 14.271-10.382l12.05-37.24 12.05 37.24c2.003 6.188 7.767 10.382 14.271 10.382h39.168l-31.741 23.157c-5.236 3.82-7.426 10.57-5.431 16.736z"></path>
            <path d="m499.556 472.922-85.829-150.828c25.867-33.776 41.273-76.025 41.273-121.825-.001-110.429-89.496-200.269-199.501-200.269s-199.5 89.84-199.5 200.269c0 46.139 15.631 88.676 41.846 122.575l-85.404 150.081c-9.902 17.411 2.624 39.075 22.669 39.075h127.55c13.613 0 26.257-7.361 32.997-19.209l52.582-92.4c5.472.197 9.578.205 15.506-.038l52.596 92.437c6.741 11.85 19.385 19.211 32.998 19.211h127.55c20.022-.001 32.583-21.643 22.667-39.079zm-329.975 5.033c-1.419 2.495-4.071 4.045-6.922 4.045h-120.865l77.261-135.771c26.527 25.004 59.841 42.828 96.841 50.338zm-83.582-277.686c0-93.887 76.037-170.269 169.5-170.269s169.5 76.382 169.5 170.269-76.037 170.269-169.5 170.269-169.5-76.383-169.5-170.269zm263.34 281.731c-2.851 0-5.503-1.55-6.923-4.046l-46.413-81.569c36.942-7.678 70.176-25.643 96.594-50.766l77.607 136.381z"></path>
          </g>
        </svg>
        Premium Quality </div>
      <div class="col-6 col-sm-3 pt-2 pb-2 d-flex align-items-center justify-content-start">
        <svg id="_x33_0" enable-background="new 0 0 64 64" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg">
          <g>
            <path d="m19.707 37.293-1.414 1.414 4.774 4.774 10.701-12.841-1.536-1.28-9.299 11.159z"></path>
            <path d="m8 11c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4c.551 0 1 .449 1 1s-.449 1-1 1-1-.449-1-1 .449-1 1-1z"></path>
            <path d="m16 11c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4c.551 0 1 .449 1 1s-.449 1-1 1-1-.449-1-1 .449-1 1-1z"></path>
            <path d="m24 11c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4c.551 0 1 .449 1 1s-.449 1-1 1-1-.449-1-1 .449-1 1-1z"></path>
            <path d="m63 26c0-6.831-5.299-12.436-12-12.949v-9.051c0-1.654-1.346-3-3-3h-44c-1.654 0-3 1.346-3 3v56c0 1.654 1.346 3 3 3h46c2.757 0 5-2.243 5-5v-15c0-1.103-.897-2-2-2v-2.363c5.724-1.36 10-6.503 10-12.637zm-2 0c0 6.065-4.935 11-11 11s-11-4.935-11-11 4.935-11 11-11 11 4.935 11 11zm-23.885 1.642c.243 1.912.902 3.693 1.885 5.254v2.664c0 8.084-5.332 15.201-13 17.401-7.668-2.2-13-9.316-13-17.401v-7.659c4.825-.545 9.192-1.813 13-3.773 3.308 1.704 7.044 2.879 11.115 3.514zm-.095-2.04c-3.885-.646-7.431-1.812-10.547-3.484l-.473-.253-.473.253c-3.916 2.101-8.499 3.408-13.62 3.886l-.907.084v9.472c0 9.077 6.061 17.057 14.739 19.404l.261.071.261-.071c8.678-2.348 14.739-10.327 14.739-19.404v-.202c.596.574 1.246 1.091 1.943 1.543-.588 9.685-7.463 17.866-16.943 20.072-10.021-2.33-17-11.103-17-21.414v-11.564c6.001-.076 11.856-1.739 17-4.824 3.485 2.092 7.267 3.514 11.258 4.251-.142.708-.215 1.438-.238 2.18zm-33.02-22.602h44c.551 0 1 .449 1 1v9h-46v-9c0-.551.449-1 1-1zm-1 57v-45h40.103c-2.406 1.514-4.277 3.79-5.281 6.492-4.021-.717-7.818-2.169-11.293-4.34l-.53-.331-.53.331c-5.075 3.172-10.92 4.848-16.904 4.848h-1.565v13.561c0 11.329 7.724 20.958 18.783 23.415l.217.048.217-.048c10.163-2.258 17.635-10.795 18.65-21.037.682.294 1.397.523 2.133.697v2.364c-1.103 0-2 .897-2 2v15c0 1.13.391 2.162 1.026 3h-42.026c-.551 0-1-.449-1-1zm50-17v2h-6v-2zm-3 18c-1.654 0-3-1.346-3-3v-11h6v11c0 1.654-1.346 3-3 3zm1-20h-2v-2.051c.331.025.662.051 1 .051s.669-.025 1-.051z"></path>
            <path d="m49 25h2v2h-2z"></path>
            <path d="m53 25h2v2h-2z"></path>
            <path d="m45 25h2v2h-2z"></path>
          </g>
        </svg>
        Assured Delivery </div>
    </div>
  </div>
  <div class="container mb-5">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark1">
                  
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                     <a class="nav-item nav-link active" href="./index.php">Home <span class="sr-only">(current)</span></a>
                      <a class="nav-item nav-link" href="./about-us.php">About Us</a>
                      <a class="nav-item nav-link" href="./price-list.php">Price List</a>
                      <a class="nav-item nav-link" href="./gift-boxes.php">Gift Boxes</a>
                      <a class="nav-item nav-link" href="./index.php">Order Now</a>
                      <a class="nav-item nav-link" href="./contact.php">Contact</a>
                    
                    
                  </div>
                </div>
             </nav>
</div>
  <div class="container mb-5">
  <div class="header-style-1 text-center pt-3 pb-3 bg-red text-white rounded-0">
<h2>About us</h2>
<ol class="breadcrumb m-0 align-items-center justify-content-center fs-12 text-white" style="background: transparent;"><li class="breadcrumb-item"><a href="./index.php">Home</a></li><li class="active breadcrumb-item text-white" aria-current="page">About us</li></ol>
</div>
</div>

<div class="container mb-5">
  <p style="text-align: justify;">ASR Agencies is a manufacturer of high quality firecrackers with a tradition extending for more than 30 years. Our motto is to make every festival celebration bright and safe.This, we bring out with our wide range of firecrackers. With over 300 varieties of crackers developed and marketed every year, we are among the most sought brands in the Sivakasi region and around the country. We have been a wholesale and retail supply trader in firecrackers for about 15 years. Our products are known for their safety and we take great efforts to ensure that all our orders are delivered in a standard time frame with an economical pricing.</p>
</div>
<div class="container mb-5">
  <!-- Gallery -->
<div class="row">
  <div class="col-lg-3 ">
    <img
      src="./images/asr-store1-scaled.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""   />
    </div>
  <div class="col-lg-3 ">
    <img
      src="./images/asr-store2-scaled.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-3 ">
    <img
      src="./images/asr-store3-scaled.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
</div>
<div class="col-lg-3 ">
    <img
      src="./images/asr-store4-scaled.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-3 ">
    <img
      src="./images/asr-store5-scaled.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
</div>
<div class="col-lg-3 ">
    <img
      src="./images/asr-store6-scaled.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>
  <div class="col-lg-3 ">
    <img
      src="./images/asr-store7-scaled.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>
  <div class="col-lg-3 ">
    <img
      src="./images/asr-store8-scaled.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>
</div>
<!-- Gallery -->
  </div>

  
  <!-- <footer class="main-footer footer-style-two text-center">
    <div class="footer-bottom  text-left"> -->
     <!--  <div class="container  pt-5 pb-5">
        <div class="row" style="line-height: 30px;">
          <ul class="col-6 col-sm-3">
            <h4 class="mb-2">Main Pages</h4>
            <li><a href="https://magizhcrackers.com/wholesale-crackers-for-store">Wholesale Crackers for Store</a></li>
            <li><a href="https://magizhcrackers.com/corporate-gift-boxes">Corporate gift boxes</a></li>
          </ul>
          <ul class="col-6 col-sm-3">
            <h4 class="mb-2">Quick Links </h4>
            <li><a href="https://magizhcrackers.com/become-an-affliate">Become an Affliate</a></li>
          </ul>
          <ul class="col-6 col-sm-3">
            <h4 class="mb-2">Company</h4>
            <li><a href="https://magizhcrackers.com/about-us">About Us </a></li>
            <li><a href="https://magizhcrackers.com/blogs">Blogs</a></li>
            <li><a href="https://magizhcrackers.com/contact-us">Contact Us </a></li>
            <li><a href="https://magizhcrackers.com/faqs">FAQs </a></li>
          </ul>
          <ul class="col-6 col-sm-3">
            <h4 class="mb-2">Policy Information </h4>
            <li><a href="https://magizhcrackers.com/privacy-policy">Privacy Policy </a></li>
            <li><a href="https://magizhcrackers.com/terms-and-conditions">Terms &amp; Conditions </a></li>
            <li><a href="https://magizhcrackers.com/cancellation-and-refund">Cancellation &amp; Refund </a></li>
            <li><a href="https://magizhcrackers.com/fire-safety-tips">Fire Safety Tips </a></li>
          </ul>
        </div>
      </div> -->
      <!-- end outer row -->
  <!--   </div>
  </footer> -->
  <ul class="d-flex flex-column flex-sm-row align-items-center justify-content-center pt-3 pb-3 mb-0 " style="background:#f4f4f4;">
    <li class=""><a href="https://web.whatsapp.com/send?text=dfd&amp;phone=917373045517" target="_blank">
      <!--?xml version="1.0" encoding="iso-8859-1"?-->
      <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <svg class="social-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
        <path style="fill:#4CAF50;" d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104
	l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z"></path>
        <path style="fill:#FAFAFA;" d="M405.024,361.504c-6.176,17.44-30.688,31.904-50.24,36.128c-13.376,2.848-30.848,5.12-89.664-19.264
	C189.888,347.2,141.44,270.752,137.664,265.792c-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624,26.176-62.304
	c6.176-6.304,16.384-9.184,26.176-9.184c3.168,0,6.016,0.16,8.576,0.288c7.52,0.32,11.296,0.768,16.256,12.64
	c6.176,14.88,21.216,51.616,23.008,55.392c1.824,3.776,3.648,8.896,1.088,13.856c-2.4,5.12-4.512,7.392-8.288,11.744
	c-3.776,4.352-7.36,7.68-11.136,12.352c-3.456,4.064-7.36,8.416-3.008,15.936c4.352,7.36,19.392,31.904,41.536,51.616
	c28.576,25.44,51.744,33.568,60.032,37.024c6.176,2.56,13.536,1.952,18.048-2.848c5.728-6.176,12.8-16.416,20-26.496
	c5.12-7.232,11.584-8.128,18.368-5.568c6.912,2.4,43.488,20.48,51.008,24.224c7.52,3.776,12.48,5.568,14.304,8.736
	C411.2,329.152,411.2,344.032,405.024,361.504z"></path>
      </svg>
      <span> +91 73730 45517 </span></a></li>
    
    <!--<li class="pl-0 pr-0 pl-sm-2 pr-sm-2 "> <a href="" target="_blank">

      <svg class="social-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 112.196 112.196" style="enable-background:new 0 0 112.196 112.196;" xml:space="preserve">
        <g>
          <circle style="fill:#3B5998;" cx="56.098" cy="56.098" r="56.098"></circle>
          <path style="fill:#FFFFFF;" d="M70.201,58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34
		c0-5.964,2.833-15.303,15.301-15.303L71.56,21.81v12.51h-8.151c-1.337,0-3.217,0.668-3.217,3.513v7.585h11.334L70.201,58.294z"></path>
        </g>
      </svg>
      <span> / asragencies </span> </a></li>-->
    <li class="divider  d-none d-sm-block">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
    <li class="pl-0 pr-0 pl-sm-2 pr-sm-2 "> <a href="mailto:support@asragencies.com" target="_blank">
      <!--?xml version="1.0" encoding="iso-8859-1"?-->
      <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <svg class="social-icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 568.601 568.601" style="enable-background:new 0 0 568.601 568.601;" xml:space="preserve">
        <rect x="28.861" y="92.553" style="fill:#0BA4E0;" width="511.424" height="350.56"></rect>
        <g>
          <g>
            <polygon style="fill:#FFFFFF;" points="284.285,319.369 3.805,147.945 16.333,127.465 284.237,291.209 552.157,126.217 
			564.749,146.649 		"></polygon>
            <rect x="-45.389" y="342.94" transform="matrix(-0.6225 0.7826 -0.7826 -0.6225 439.5909 497.8454)" style="fill:#FFFFFF;" width="290.236" height="24"></rect>
            <rect x="456.912" y="209.842" transform="matrix(-0.7829 0.6222 -0.6222 -0.7829 1056.8655 341.1133)" style="fill:#FFFFFF;" width="24.001" height="290.249"></rect>
          </g>
        </g>
      </svg>
      <span> support@asragencies.com</span></a></li>
  </ul>
  <div class="container-fluid footer-copyright-home pt-3 pb-3" style="background: #e0e0e0;">
    <div class="row copy-holder ">
      <div class="text-center w-100"> Copyright © <strong>2021</strong> <a target="_blank" href="#">ASR AGENCIES</a>. All Rights Reserved.  </div>
    </div>
  </div>
  <div class="container footer-bot-home mt-3">
    <h5>Sivakasi Crackers Online - Enquire Online</h5>
    <p> As per the supreme court order, Online sale of firecrackers is not permitted ! Don't worry, Request a quote with us and get the details of our crackers, Please add and submit your Enquiry.</p>
  </div>
</div>
<div id="whatsapp" class="d-none d-sm-block" style="left: auto; right: 15px;">
  <div class="" style="width: 72px; height: 72px;">
    <!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="isolation:isolate" viewBox="0 0 800 800" width="0" height="0">
      <defs>
        <clippath id="_clipPath_A3g8G5hPEGG2L0B6hFCxamU4cc8rfqzQ">
          <rect width="800" height="800"></rect>
        </clippath>
      </defs>
      <g clip-path="url(#_clipPath_A3g8G5hPEGG2L0B6hFCxamU4cc8rfqzQ)">
        <g>
          <path d=" M 787.59 800 L 12.41 800 C 5.556 800 0 793.332 0 785.108 L 0 14.892 C 0 6.667 5.556 0 12.41 0 L 787.59 0 C 794.444 0 800 6.667 800 14.892 L 800 785.108 C 800 793.332 794.444 800 787.59 800 Z " fill="rgb(37,211,102)"></path>
        </g>
        <g>
          <path d=" M 508.558 450.429 C 502.67 447.483 473.723 433.24 468.325 431.273 C 462.929 429.308 459.003 428.328 455.078 434.22 C 451.153 440.114 439.869 453.377 436.434 457.307 C 433 461.236 429.565 461.729 423.677 458.78 C 417.79 455.834 398.818 449.617 376.328 429.556 C 358.825 413.943 347.008 394.663 343.574 388.768 C 340.139 382.873 343.207 379.687 346.155 376.752 C 348.804 374.113 352.044 369.874 354.987 366.436 C 357.931 362.999 358.912 360.541 360.875 356.614 C 362.837 352.683 361.857 349.246 360.383 346.299 C 358.912 343.352 347.136 314.369 342.231 302.579 C 337.451 291.099 332.597 292.654 328.983 292.472 C 325.552 292.301 321.622 292.265 317.698 292.265 C 313.773 292.265 307.394 293.739 301.996 299.632 C 296.6 305.527 281.389 319.772 281.389 348.752 C 281.389 377.735 302.487 405.731 305.431 409.661 C 308.376 413.592 346.949 473.062 406.015 498.566 C 420.062 504.634 431.03 508.256 439.581 510.969 C 453.685 515.451 466.521 514.818 476.666 513.302 C 487.978 511.613 511.502 499.06 516.409 485.307 C 521.315 471.55 521.315 459.762 519.842 457.307 C 518.371 454.851 514.446 453.377 508.558 450.429 Z  M 401.126 597.117 L 401.047 597.117 C 365.902 597.104 331.431 587.661 301.36 569.817 L 294.208 565.572 L 220.08 585.017 L 239.866 512.743 L 235.21 505.332 C 215.604 474.149 205.248 438.108 205.264 401.1 C 205.307 293.113 293.17 205.257 401.204 205.257 C 453.518 205.275 502.693 225.674 539.673 262.696 C 576.651 299.716 597.004 348.925 596.983 401.258 C 596.939 509.254 509.078 597.117 401.126 597.117 Z  M 567.816 234.565 C 523.327 190.024 464.161 165.484 401.124 165.458 C 271.24 165.458 165.529 271.161 165.477 401.085 C 165.46 442.617 176.311 483.154 196.932 518.892 L 163.502 641 L 288.421 608.232 C 322.839 627.005 361.591 636.901 401.03 636.913 L 401.126 636.913 L 401.127 636.913 C 530.998 636.913 636.717 531.2 636.77 401.274 C 636.794 338.309 612.306 279.105 567.816 234.565" fill-rule="evenodd" fill="rgb(255,255,255)"></path>
        </g>
      </g>
    </svg>
    <div class="floating-wpp-button-image"></div>
  </div>
  <div class="floating-wpp-popup" style="right: 0px;">
    <div class="floating-wpp-head" style="background-color: rgb(18, 140, 126);"><span>WhatsApp Chat</span><strong class="close">×</strong></div>
    <div class="floating-wpp-message">Hello, how can we help you?</div>
    <div class="floating-wpp-input-message">
      <textarea></textarea>
      <div class="floating-wpp-btn-send">
        <!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="isolation:isolate" viewBox="0 0 20 18" width="20" height="18">
          <defs>
            <clippath id="_clipPath_fgX00hLzP9PnAfCkGQoSPsYB7aEGkj1G">
              <rect width="20" height="18"></rect>
            </clippath>
          </defs>
          <g clip-path="url(#_clipPath_fgX00hLzP9PnAfCkGQoSPsYB7aEGkj1G)">
            <path d=" M 0 0 L 0 7.813 L 16 9 L 0 10.188 L 0 18 L 20 9 L 0 0 Z " fill="rgb(46,46,46)"></path>
          </g>
        </svg>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
function checkform() {
var uamount = document.getElementById('total_amount').value;
if(uamount<=499) {
alert("Minimum order amount above 500");
return false;
} 
}
</script>
<script src="plugins.js.download"></script>
<script src="functions.js.download"></script>
<script type="text/javascript" src="floating-wpp.min.js.download"></script>
<script type="text/javascript">
        $(function () {
            setTimeout(function(){    
                $('#whatsapp').floatingWhatsApp({
            phone: "917373045517",
            popupMessage: 'Hello, how can we help you?',
            showPopup: true,
            position: "right" ,
           // autoOpenTimeout:3000
          });
           }, 100);
        });
      </script>
<script src="sweetalert2.min.js.download" type="text/javascript"></script>
<script>
document.getElementById("total_amount").value=0;
$(function () {
$('.popup-link').magnificPopup({
  type: 'image'
  // other options
});   
$("#update_form").validate({
            ignore: [],
            invalidHandler: function(event, validator) {
                   // scrollTop();
                },
        });
    });
function change_qty(id)
{
    document.getElementById("total_"+ id).value=parseFloat(document.getElementById("qty_"+ id).value) * parseFloat(document.getElementById("price_"+ id).value);
    var input = document.getElementsByName('products[]'); 
  var total_amount=0;
  var no_of_items=0;
  for (var i = 0; i < input.length; i++) { 
      var a = input[i]; 
      if(document.getElementById("qty_"+ a.value).value!="")
      {
      total_amount = total_amount + parseFloat(document.getElementById("qty_"+ a.value).value) * parseFloat(document.getElementById("price_"+ a.value).value) ; 
      no_of_items = no_of_items + parseFloat(document.getElementById("qty_"+ a.value).value);
      }
  } 
  document.getElementById("total_amount").value=total_amount;
  document.getElementById("no_of_items").value=no_of_items;
  $("#total_amount_html").html('Rs.' + total_amount);
}
        $("#submit_enquiry").click(function (event) {});
</script>
</body>
</html>