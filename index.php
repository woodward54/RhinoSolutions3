<?php

if($_POST["submit"]) {
    $recipient="sales@rhinosolutions3.com";
    $subject="Customer From Submission - Home Page";
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
<title>RS3 | Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
      <li class="active"><a href="index.php">Home</a></li>
      <!--<li><a class="drop" href="#">Pages</a>
        <ul>
          <li><a href="pages/gallery.php">Gallery</a></li>
          <li><a href="pages/full-width.php">Full Width</a></li>
          <li><a href="pages/sidebar-left.php">Sidebar Left</a></li>
          <li><a href="pages/sidebar-right.php">Sidebar Right</a></li>
          <li><a href="pages/basic-grid.php">Basic Grid</a></li>
        </ul>
      </li>-->
      <li><a class="drop">Garage Floor Coatings</a>
            <ul>
              <li><a href="/pages/decorativechip.php">Decorative Chip</a></li>
              <li><a href="/pages/medici.php">Medici</a></li>
              <!--<li><a href="/pages/metallic.php">Metallic</a></li>-->
              <li><a href="/pages/garagemakeover.php">Storage Systems</a></li>
            </ul>
      </li>
      <li><a href="/pages/cleaning.php">Residential Construction</a></li>
      <li><a href="/pages/protection.php">Construction Protection</a></li>
      <!--<li><a href="/pages/other.php">Other</a></li>-->
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
<div class="wrapper bgded overlay" style="background-image:url('images/gFloors/coolfloor.jpg');">
  <div id="pageintro" class="hoc clear">
    <!-- ################################################################################################ -->
    <article class="introtxt">
      <h2 class="heading">Rhino<br>Solutions 3</h2>
      <p>It's a TUFF name because we're #1 in finding the right solution for the customer</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#getquote">Contact Us</a></li>
          <li><a class="btn inverse" href="#getquote">Get a Quote</a></li>
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <div class="hoc container clear">
    <!-- ################################################################################################ -->
    <ul class="nospace elements">
      <li class="one_half first">
        <article>
          <figure><img src="images/gFloors/FBC2.jpg" alt="">
            <figcaption><a href="pages/decorativechip.php">View Details &raquo;</a></figcaption>
          </figure>
          <div class="txtwrap">
            <h6 class="heading">Decorative Chip</h6>
            <p>The Decorative Chip System is our most popular floor coating system that can be installed with numourous differet Chip colors and sizes.</p>
          </div>
        </article>
      </li>
      <li class="one_half">
        <article>
          <figure><img src="images/gFloors/M5.jpg" alt="">
            <figcaption><a href="/pages/medici.php">View Details &raquo;</a></figcaption>
          </figure>
          <div class="txtwrap">
            <h6 class="heading">Medici</h6>
            <p>With 100% UV-Stability, the Medici System is perfect for any indoor or outdoor situation without any fading over time.</p>
          </div>
        </article>
      </li>
      <!--<li class="one_third">
        <article>
          <figure><img src="images/gFloors/PM4.jpg" alt="">
            <figcaption><a href="/pages/metallic.php">View Details &raquo;</a></figcaption>
          </figure>
          <div class="txtwrap">
            <h6 class="heading">Metallic</h6>
            <p>The Metallic System produces tinted marbleized floor coatings with iridescent accents and gleaming finishes.</p>
          </div>
        </article>
      </li>-->
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <p class="nospace"><a href="#">Rhino Solutions 3</a></p>
      <h2 class="heading font-x3">What We Do</h2>
    </div>
    <div class="group center">
      <article class="one_quarter first"><i class="icon fa fa-delicious"></i>
        <h4 class="font-x1 uppercase"><a href="pages/decorativechip.php">Garage Floor Coatings</a></h4>
        <p>Transform and protect your garage with our unique floor coatings</p>
      </article>
      <article class="one_quarter"><i class="icon fa fa-magic"></i>
        <h4 class="font-x1 uppercase"><a href="pages/garagemakeover.php">Storage Systems</a></h4>
        <p>Completely renovate your garage with our beautiful floor coatings, custom cabinets, and unique storage solutions</p>
      </article>
      <article class="one_quarter"><i class="icon fa fa-home"></i>
        <h4 class="font-x1 uppercase"><a href="/pages/cleaning.php">Residential Construction</a></h4>
        <p>House and construction cleaning services from carpet cleaning to power waching</p>
      </article>
      <article class="one_quarter"><i class="icon fa fa-wrench"></i>
        <h4 class="font-x1 uppercase"><a href="/pages/protection.php">Construction Protection</a></h4>
        <p>Attic decking/trim out, protective floor coverings, and more</p>
      </article>
      <!--<article class="one_quarter"><i class="icon fa fa-plus"></i>
        <h4 class="font-x1 uppercase"><a href="/pages/other.php">Other</a></h4>
        <p>See our many other services</p>
      </article>-->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!--<div class="wrapper row0">
  <div class="hoc container clear">
    <ul class="nospace elements">
      <li class="one_third first">
        <article class="center"><a href="#"><img src="images/demo/320x220.png" alt=""></a>
          <div class="txtwrap">
            <time class="font-xs block" datetime="2045-04-06">6<sup>th</sup> April 2045</time>
            <h6 class="heading">Lacus ornare eget</h6>
            <p>Non purus sodales aliquam lectus sagittis aliquet nisl consequat&hellip;</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="center"><a href="#"><img src="images/demo/320x220.png" alt=""></a>
          <div class="txtwrap">
            <time class="font-xs block" datetime="2045-04-05">5<sup>th</sup> April 2045</time>
            <h6 class="heading">Porta felis justo</h6>
            <p>Est sodales at cras accumsan justo aliquam imperdiet risus lacinia&hellip;</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="center"><a href="#"><img src="images/demo/320x220.png" alt=""></a>
          <div class="txtwrap">
            <time class="font-xs block" datetime="2045-04-04">4<sup>th</sup> April 2045</time>
            <h6 class="heading">Justo magna lacinia</h6>
            <p>Laoreet quam tortor rhoncus mi sed condimentum sit amet molestie&hellip;</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
        </article>
      </li>
    </ul>
    <div class="clear"></div>
  </div>
</div> -->
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
      <form method="post" action="index.php">
        <fieldset>

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
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->

</body>
</html>
