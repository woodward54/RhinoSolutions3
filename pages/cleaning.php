<?php

if($_POST["submit"]) {
    $recipient="sales@rhinosolutions3.com";
    $subject="Customer From Submission - Cleaning Page";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $senderPhone=$_POST["senderPhone"];
    $senderAddress=$_POST["senderAddress"];

    $mailBody="Subject: $subject\nName: $sender\nEmail: $senderEmail\nPhone: $senderPhone\nAddress: $senderAddress";

    mail($recipient, $subject, $mailBody, "From: RS3 Website <admin@rhinosolutions3.com>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}



?><!DOCTYPE HTML>
<!--
Template Name: Pedggie
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>RS3 | Cleaning</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="../layout/styles/w3.css">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
.rotate {transform: rotate(90deg);}
</style>
</head>
<body id="top">
  <?php include_once("analyticstracking.php") ?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> (214) 316 1954  </li>
        <li><i class="fa fa-envelope-o"></i> sales@rhinosolutions3.com</li>
        <li><?=$thankYou ?></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <!--<li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>-->
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <!-- ################################################################################################ -->
    <img src="/images/logo1.png" class="woodward_logo" alt="Rhino Solutions 3 Logo">
    <div id="logo" class="fl_left">
      <h1><a href="index.php">Rhino<br>Solutions 3</a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <!--<li><strong>Faucibus:</strong><br>
          +00 (123) 456 7890</li>
        <li><strong>Vehicula:</strong><br>
          +00 (123) 456 7890</li>-->
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear">
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li><a href="/index.php">Home</a></li>
      <!--<li><a class="drop" href="#">Pages</a>
        <ul>
          <li><a href="pages/gallery.php">Gallery</a></li>
          <li><a href="pages/full-width.php">Full Width</a></li>
          <li><a href="pages/sidebar-left.php">Sidebar Left</a></li>
          <li><a href="pages/sidebar-right.php">Sidebar Right</a></li>
          <li><a href="pages/basic-grid.php">Basic Grid</a></li>
        </ul>
      </li>-->
      <li><a class="active drop">Garage Floor Coatings</a>
            <ul>
              <li><a href="/pages/decorativechip.php">Decorative Chip</a></li>
              <li><a href="/pages/medici.php">Medici</a></li>
              <!--<li><a href="/pages/metallic.php">Metallic</a></li>-->
              <li><a href="/pages/garagemakeover.php">Garage Makeover</a></li>
            </ul>
      </li>
      <li><a href="#">Residential Construction</a></li>
      <li><a href="/pages/protection.php">Construction Protection</a></li>
      <!--<li><a href="http://www.torginol.com/pdf/cf_brochure.pdf" target="_blank">Additional Colors</a></li>-->
      <!--<li><a href="#">Link Text</a></li>
      <li><a href="#">Long Link Text</a></li>-->
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div id="breadcrumb" class="hoc clear">
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="/index.php">Home</a></li>
      <li><a href="#">Residential Construction</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content">

      <h2>All Cleaning Services</h2>

      <ul>
        <li> House Cleaning</li>
        <li> Final House Move-In Clean</li>
        <li> House Full Re-Clean</li>
        <li> House Sweep Out</li>
        <li> Power Wash</li>
        <li> Professional Carpet Cleanings - Steam</li>
        <li> Flood Service Call</li>
        <li> Dehumidifier Rental</li>
        <li> Call for Additional Services</li>
      </ul>
      <!-- ################################################################################################ -->
    <div class="w3-content w3-display-container w3-center" style="width:45%">
      <img class="mySlides" src="../images/cleaning/clean1.JPG" style="width:100%">
      <img class="mySlides" src="../images/cleaning/clean2.JPG" style="width:100%">
      <img class="mySlides" src="../images/cleaning/clean3.JPG" style="width:100%">
      <img class="mySlides" src="../images/cleaning/clean4.JPG" style="width:100%">
      <img class="mySlides" src="../images/cleaning/clean5.JPG" style="width:100%">
      <img class="mySlides" src="../images/cleaning/clean6.JPG" style="width:100%">


        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <!--<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>-->
        <button class="w3-button special w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button special w3-display-right" onclick="plusDivs(1)">&#10095;</button>
          <span class="w3-badge demo buttonc" onclick="currentDiv(1)"></span>
          <span class="w3-badge demo buttonc" onclick="currentDiv(2)"></span>
          <span class="w3-badge demo buttonc" onclick="currentDiv(3)"></span>
          <span class="w3-badge demo buttonc" onclick="currentDiv(4)"></span>
          <span class="w3-badge demo buttonc" onclick="currentDiv(5)"></span>
          <span class="w3-badge demo buttonc" onclick="currentDiv(6)"></span>
        </div>
      </div>
      <br>


      <p style="float: left; font-size: 12pt; text-align: center; width: 48%; margin-right: 1%; margin-bottom: 0.7em;">Before</p>
      <p style="float: left; font-size: 12pt; text-align: center; width: 48%; margin-bottom: 0.7em;">After</p>
      <p style="clear: both;">

      <img src="../images/cleaning/IMG_4093.jpg" style="float: left; width: 48%; margin-right: 1%; margin-bottom: 10px;">
      <img src="../images/cleaning/IMG_4102.jpg" style="float: left; width: 48%; margin-bottom: 10px;">

      <img src="../images/cleaning/IMG_4095.jpg" style="float: left; width: 48%; margin-right: 1%; margin-bottom: 10px;">
      <img src="../images/cleaning/IMG_4098.jpg" style="float: left; width: 48%; margin-bottom: 10px;">

      <img src="../images/cleaning/IMG_5336.jpg" style="float: left; width: 48%; height: 700px; margin-right: 1%; margin-bottom: 10px;">
      <img src="../images/cleaning/IMG_5338.jpg" style="float: left; width: 48%; height: 700px; margin-bottom: 10px;">

      <img src="../images/cleaning/IMG_4681.JPG" style="float: left; width: 48%; margin-right: 1%; margin-bottom: 10px;">
      <img src="../images/cleaning/IMG_4683.JPG" style="float: left; width: 48%; margin-bottom: 10px;">

      <!--<p style="float: left; font-size: 12pt; text-align: center; width: 48%; margin-right: 1%; margin-bottom: 0.7em;"><img src="../images/protection/IMG_4020.JPG" style="width: 100%">Before</p>
      <p style="float: left; font-size: 12pt; text-align: center; width: 48%; margin-bottom: 0.7em;"><img src="../images/protection/IMG_4019.JPG" style="width: 100%">After</p>-->



    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="title" id="getquote">Contact us</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> (214) 316 1954</li>
        <!--<li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>-->
        <li><i class="fa fa-envelope-o"></i> sales@rhinosolutions3.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Garage Floor Systems</h6>
      <ul class="nospace linklist">
        <li><a href="/pages/decorativechip.php">Decorative Chip</a></li>
        <li><a href="/pages/medici.php">Medici</a></li>
        <!--<li><a href="/pages/metallic.php">Metallic</a></li>-->
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Get A Quote</h6>
      <p class="btmspace-30">Fill out the following form and we will get back with you shortly.</p>
      <form method="post" action="/pages/cleaning.php">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" name="sender" value="" placeholder="Name" required="">
          <input class="btmspace-15" type="email" name="senderEmail" value="" placeholder="Email" required="">
          <input class="btmspace-15" type="text" name="senderPhone" value="" placeholder="Phone" required="">
          <input class="btmspace-15" type="text" name="senderAddress" value="" placeholder="Address" required="">
          <button type="submit" name="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Rhino Solutions 3, LLC</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="../layout/scripts/jquery.placeholder.min.js"></script>
<script src="../layout/scripts/slideshow.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
