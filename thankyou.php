<?php 
include("asradmin/include/db_connect.php");

$Oid=$_REQUEST['id'];

$objResult    = mysqli_query($mysqli,"SELECT * from tbl_orders WHERE  `Oid` = '$Oid'") or die ("Error:".mysqli_error());
$Fetch        = mysqli_fetch_array($objResult);

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Document Meta
    ============================================= -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="qV5axHxZVJAWZhtIMPjcoFI5YWTTrjS26aaPkuwQ">
<meta name="theme-color" content="#7a0a15">
<link rel="shortcut icon" type="image/x-icon" href="asradmin/assets/images/headerlogo.jpg">
<!--IE Compatibility Meta-->
<meta name="author" content="SERV BUDDY">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Thanks for your order - ASR AGENICES</title>
<title>ASR AGENICES ONLINE SIVAKASI | 80% OFFER</title>
<meta name="description" content="ASR AGENICES online sivakasi is the best place to Buy Crackers Online Shopping at Sivakasi factory price in India. We offer wide range of Sparklers, Garlands, Fancy Fireworks and more.">
<meta name="keywords" content="Crackers Online, Buy Crackers Online, Buy Crackers Online Shopping, Sivakasi Crackers Online, Crackers Gift Box Online Shopping, Crackers Gift Box Online Shopping in sivakasi">
<meta property="og:url" content="">
<meta property="og:type" content="Ecommerce">
<meta property="og:title" content="Thanks for your order - ASR AGENICES">
<meta property="og:description" content="ASR AGENICES online sivakasi is the best place to Buy Crackers Online Shopping at Sivakasi factory price in India. We offer wide range of Sparklers, Garlands, Fancy Fireworks and more.">
<meta property="og:image" content="https://trnditweb.s3.ap-south-1.amazonaws.com/settings/Xd6XEAo3xYlw2szeoMHbeoOUvdpBxuu3S9jI98a2.png">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.jpg">
<link href="css2" rel="stylesheet" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
<noscript>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,600;1,500&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"
    type="text/css"
    >
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
</head><body class="" style="overflow: auto;">
<div id="page" class="page clearfix">
  <div class="topheader ">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <marquee class="marquee">
          Premium Quality Crackers | Economically suitable for all | Directly from Manufacturers | Factory Price | Assured Quality | We do not sell crackers for banned cities
          </marquee>
        </div>
      </div>
    </div>
  </div>
  <header class="header">
    <div class="main">
      <div class="container ">
        <div class="row">
          <div class="col-12 col-sm-6 text-center text-sm-left"> <a href="index.php" class="logo"> <img alt="Logo" src="headerlogo.jpg"> </a> </div>
               <div class="col-12 col-sm-6 d-flex align-items-center justify-content-center justify-content-sm-end"> <a href="https://web.whatsapp.com/send?phone=917373045517&text=" target="_blank"> <img alt="header right" class="header_img_right" src="images/headcontact.png" style="width: 350px; height:127px;"> </a> </div> 
        </div>
      </div>
    </div>
  </header>
  <div class="container ">
    <div class="row bg-red text-white ml-0 mr-0">
      <div class="col-12 pt-2 pb-2 d-flex align-items-center justify-content-center"> Use always Genuine Fireworks and Crackers </div>
    </div>
    <div class="text-center mt-5 mb-5" style="font-size:16px;">
      <blockquote>Your order <span style="font-size:30px;"><b><?php echo $Fetch['Order_id']; ?></b></span> amount of <span style="font-size:30px;">Rs.<?php echo $Fetch['total_amount']; ?></span> was successfully received.<br>
        We will contact you in 2 hours to update the status of the order.</blockquote>
      For further details please call: +91 7373045517 <br><br>
      
      <img src="images/qrcode.jpeg" height="500px;" >
      </div>
  </div>
  <!--<footer class="main-footer footer-style-two text-center">
    <div class="footer-bottom  text-left">
      <div class="container  pt-5 pb-5">
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
      </div>
      <!-- end outer row -->
    </div>
  </footer>-->
  <ul class="d-flex flex-column flex-sm-row align-items-center justify-content-center pt-3 pb-3 mb-0 " style="background:#f4f4f4;">
    <li class=""><a href="https://web.whatsapp.com/send?phone=917373045517&text=" target="_blank">
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
      <span> +91 7373045517 </span></a></li>    
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
      <span> support@asragencies.com </span></a></li>
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
</body>
</html>