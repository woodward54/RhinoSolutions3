<?php

if($_POST["submit"]) {
    $recipient="sales@rhinosolutions3.com";
    $subject="Customer From Submission - Storage Systems Page";
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
<title>RS3 | Storage Systems</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="../layout/styles/w3.css">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
.dw-center {display:block;margin-left: auto;margin-right: auto;}
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
              <li><a href="#">Storage Systems</a></li>
            </ul>
      </li>
      <li><a href="/pages/cleaning.php">Residential Construction</a></li>
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
      <li><a href="#">Storage Systems</a></li>
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
    <div class="sidebar one_third first">
      <!-- ################################################################################################ -->
      <h6>Floor Systems</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="/pages/decorativechip.php">Decorative Chip</a>
          <li><a href="/pages/medici.php">Medici</a></li>
          <!--<li><a href="/pages/metallic.php">Metallic</a></li>-->
          <!-- <li><a href="http://www.torginol.com/pdf/cf_brochure.pdf" target="_blank">Additional Colors Catalog</a></li> -->
          <li><a href="#">Storage Systems</a></li>
        </ul>
      </nav>
      <!--<div class="sdb_holder">
        <h6>Lorem ipsum dolor</h6>
        <address>
        Full Name<br>
        Address Line 1<br>
        Address Line 2<br>
        Town/City<br>
        Postcode/Zip<br>
        <br>
        Tel: xxxx xxxx xxxxxx<br>
        Email: <a href="#">contact@domain.com</a>
        </address>
      </div>-->
      <div class="sdb_holder">
        <article>
          <h6>The Rhino Solutions 3 Difference</h6>
          <p></p>
          <ul>
            <li>Customer Service</li>
            <li>Excellence</li>
            <li>Quality Materials</li>
          </ul>
          <!--<p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
          <p class="more"><a href="#">Continue Reading &raquo;</a></p>-->
        </article>
      </div>

      <div class="sdb_holder">
        <article>
          <h6>Prep Cleaning</h6>
          <p>We do a light surface grinding to open up the concrete floor so it can best absorb our chemicals and floor coatings.</p>
          <p>Before</p>
          <img src="../images/gFloors/BEFORE.JPG">
          <p>After</p>
          <img src="../images/gFloors/AFTER.JPG">
          <!--<p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
          <p class="more"><a href="#">Continue Reading &raquo;</a></p>-->
        </article>
      </div>

      <div class="sdb_holder">
        <article>
          <h6>Concrete Repair</h6>
          <img src="../images/gFloors/concrete.jpg">
          <!--<p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
          <p class="more"><a href="#">Continue Reading &raquo;</a></p>-->
        </article>
      </div>

      <h6>Polyurea Facts</h6>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th></th>
              <th>Polyurea</th>
              <th>Expoxy</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Durability</td>
              <td>20x Stronger</td>
              <td>0</td>
            </tr>
            <tr>
              <td>Flexibility</td>
              <td>98%</td>
              <td>2%</td>
            </tr>
            <tr>
              <td>Vehicle Traffic</td>
              <td>24 Hours</td>
              <td>7 Days</td>
            </tr>
            <tr>
              <td>Installation</td>
              <td>One Day</td>
              <td>2-3 Days</td>
            </tr>
            <tr>
              <td>Warranty</td>
              <td>Limited Lifetime</td>
              <td>none</td>
            </tr>
            <tr>
              <td>% of Solids</td>
              <td>96%</td>
              <td>33%</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!--<h6>Polyurea Facts</h6>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th></th>
              <th>Polyurea</th>
              <th>Expoxy</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Durability</td>
              <td>20x Stronger</td>
              <td>0</td>
            </tr>
            <tr>
              <td>Flexibility</td>
              <td>98%</td>
              <td>2%</td>
            </tr>
            <tr>
              <td>Vehicle Traffic</td>
              <td>24 Hours</td>
              <td>7 Days</td>
            </tr>
            <tr>
              <td>Installation</td>
              <td>One Day</td>
              <td>2-3 Days</td>
            </tr>
            <tr>
              <td>Warranty</td>
              <td>Limited Lifetime</td>
              <td>none</td>
            </tr>
            <tr>
              <td>% of Solids</td>
              <td>96%</td>
              <td>33%</td>
            </tr>
          </tbody>
        </table>
      </div>-->
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content two_third linkcolor">
    <style>
      .linkcolor a{
        color:#82B440;
      }
    </style>
      <!-- ################################################################################################ -->
      <h1>Storage Systems</h1>
      <!--<img class="imgr borderedbox inspace-5" src="../images/demo/imgr.gif" alt="">-->
      <div class="w3-content w3-display-container w3-center" style="width:95%">
        <img class="mySlides dw-center" src="../images/gMakeover/A.jpeg" style="width:70%">
        <img class="mySlides dw-center" src="../images/gMakeover/B.jpeg" style="width:70%">
        <img class="mySlides dw-center" src="../images/gMakeover/C.jpeg" style="width:70%">
        <img class="mySlides dw-center" src="../images/gMakeover/D.jpeg" style="width:70%">
        <img class="mySlides dw-center" src="../images/gMakeover/workbench2.jpg" style="width:94.5%">
        <img class="mySlides dw-center" src="../images/gMakeover/E.jpeg" style="width:70%">
        <img class="mySlides dw-center" src="../images/gMakeover/F.jpeg" style="width:90%">
        <img class="mySlides dw-center" src="../images/gMakeover/IMG-0777.jpg" style="width:70%">
        <img class="mySlides dw-center" src="../images/gMakeover/IMG-0778.jpg" style="width:70%">


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
            <span class="w3-badge demo buttonc" onclick="currentDiv(7)"></span>
            <span class="w3-badge demo buttonc" onclick="currentDiv(8)"></span>
            <span class="w3-badge demo buttonc" onclick="currentDiv(9)"></span>
          </div>
        </div>

        <p>Rhino Solutions 3 is proud to offer full garage makeover service. After we are done, you will have a completely customized garage that stands out. The makeover includes installation of our custom garage floor coating system, custom cabinets, workbenches, and overhead storage racks to meet every storage need. Every garage is different, so we will make sure to find the best solution to meet your needs.</p>

        <!--<p>Our cabinets, workbenches, and overhead storage racks come exclusively from <a href="http://newageproducts.com/" target="_blank">New Age Products</a>. See their website for more information and customizability options.-->

        <br>
        <h1>Cabinets</h1>
        <img src="../images/gFloors/coolfloor.jpg" alt="display this" style="height:300px;">
        <img src="../images/gMakeover/cabinets1.jpg" alt="display this" style="height:300px;">
        <img src="../images/gMakeover/cabs1.jpg" alt="display this" style="height:400px;">
        <img src="../images/gMakeover/cabs2.jpg" alt="display this" style="height:400px;">
        <img src="../images/gMakeover/cabs3.jpg" alt="display this" style="height:400px;">
        <br>
        <br>
        <h1>Workbench</h1>
        <img src="../images/gMakeover/workbench1.jpg" alt="display this" style="height:300px;">
        <br>
        <br>
        <h1>Overhead Rack</h1>
        <img src="../images/gMakeover/IMG-0344.jpg" alt="display this" style="height:300px;">
        <img src="../images/gMakeover/IMG-0775.jpg" alt="display this" style="height:300px;">

    </div>

      <!--<img class="imgl borderedbox inspace-5" src="../images/demo/imgl.gif" alt="">
      <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. For full terms of use of this template please read our <a href="http://www.os-templates.com/template-terms">website template licence</a>.</p>
      <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more website templates visit our <a href="http://www.os-templates.com/">free website templates</a> section.</p>
      <p>Portortornec condimenterdum eget consectetuer condis consequam pretium pellus sed mauris enim. Puruselit mauris nulla hendimentesque elit semper nam a sapien urna sempus.</p>-->
      <!--<div id="comments">
        <h2>Comments</h2>
        <ul>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">A Name</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
              </header>
              <div class="comcont">
                <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">A Name</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
              </header>
              <div class="comcont">
                <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">A Name</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
              </header>
              <div class="comcont">
                <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
              </div>
            </article>
          </li>
        </ul>
        <h2>Write A Comment</h2>
        <form action="#" method="post">
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="url">Website</label>
            <input type="url" name="url" id="url" value="" size="22">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Form">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
      </div>-->
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
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
      <form method="post" action="/pages/garagemakeover.php">
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
