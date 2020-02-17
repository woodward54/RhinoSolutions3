<?php

if($_POST["submit"]) {
    $recipient="sales@rhinosolutions3.com";
    $subject="Customer From Submission - Decorative Chip Page";
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
<title>RS3 | Decorative Chip</title>
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
              <li><a href="#">Decorative Chip</a></li>
              <li><a href="/pages/medici.php">Medici</a></li>
              <!--<li><a href="/pages/metallic.php">Metallic</a></li>-->
              <li><a href="/pages/garagemakeover.php">Storage Systems</a></li>
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
      <li><a href="#">Decorative Chip</a></li>
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
          <li><a href="#">Decorative Chip</a>
          <li><a href="/pages/medici.php">Medici</a></li>
          <!--<li><a href="/pages/metallic.php">Metallic</a></li>-->
          <!-- <li><a href="http://www.torginol.com/pdf/cf_brochure.pdf" target="_blank">Additional Colors Catalog</a></li> -->
          <li><a href="/pages/garagemakeover.php">Storage Systems</a></li>
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
      <h1>Decorative Chip</h1>
      <!--<img class="imgr borderedbox inspace-5" src="../images/demo/imgr.gif" alt="">-->
        <div class="w3-content w3-display-container w3-center" style="width:90%">
          <img class="mySlides" src="../images/gFloors/FBC3.jpg" style="width:100%">
          <img class="mySlides" src="../images/gFloors/DC.jpg" style="width:100%">
          <img class="mySlides" src="../images/gFloors/chip1.jpg" style="width:100%">
          <!--<img class="mySlides" src="../images/gFloors/FBC.jpg" style="width:100%">-->
          <img class="mySlides" src="../images/gFloors/domino2.jpeg" style="width:100%">
          <img class="mySlides" src="../images/gFloors/school2.JPG" style="width:100%">
          <img class="mySlides" src="../images/gFloors/FBC2.jpg" style="width:100%">
          <img class="mySlides" src="../images/gFloors/school1.JPG" style="width:100%">
          <img class="mySlides" src="../images/gFloors/chip2.JPG" style="width:100%">
          <!--<img class="mySlides" src="../images/gFloors/FBC5.jpg" style="width:100%">-->
          <img class="mySlides" src="../images/gFloors/DC2.jpg" style="width:100%">
          <!--<img class="mySlides" src="../images/gFloors/PBC2.jpg" style="width:100%">-->
          <img class="mySlides" src="../images/gFloors/school3.JPG" style="width:100%">
          <img class="mySlides" src="../images/gFloors/DC3.jpg" style="width:100%">
          <img class="mySlides dw-center" src="../images/gFloors/chip3.jpg" style="width:56%">

          <!--<img class="mySlides" src="../images/gFloors/5_29_2018_4.jpg" style="width:100%">
              <img class="mySlides" src="../images/gFloors/5_29_2018_3.JPG" style="width:100%">
              <img class="mySlides" src="../images/gFloors/5_29_2018_6.jpg" style="width:100%">
              <img class="mySlides" src="../images/gFloors/5_29_2018_2.JPG" style="width:100%">
              <img class="mySlides" src="../images/gFloors/5_29_2018_5.jpg" style="width:100%">

          -->
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
            <span class="w3-badge demo buttonc" onclick="currentDiv(10)"></span>
            <span class="w3-badge demo buttonc" onclick="currentDiv(11)"></span>
            <span class="w3-badge demo buttonc" onclick="currentDiv(12)"></span>
          </div>
        </div>

        <p>Our chip systems provide decorative yet highly durable surfaces with the appearance of granite, marble or terrazzo. Our 2 layer chip system is our most popular seller and are great for any garage.
          We are able to customize your floor with many different color patterns and chip sizes. See the images below for sample color options.</p>
        <p><br> Rhino Solutions 3 exclusively uses and distributes decorative chips manufactured by Torginol, Inc. These chips are made of a vinyl composite and have been developed to soak in and absorb resinous coatings such as epoxies, urethanes, and our specialty products – Polyureas and Polyaspartic Polyureas. Our materials have been used on tens of thousands of square feet of floor coatings in conjunction with these vinyl chips. While there are other manufacturers of decorative chips out there, we have tested and used all of them only to find that the physical properties of these chips are counterproductive to our systems. Here is the reason why:
        Other acrylic and urethane chips have a non-flexible nature which results in more topcoat being required. This can raise the cost of a floor by 15-20%. These non-flexible rigid chips also cannot be smoothened which means the floor can become too rough. With our vinyl chips, floors are even and smooth.
        The way that some of the other companies handle the use of the Acrylic and Urethane chips is to do what is considered an 80-90% broadcast, leaving a large amount of basecoat showing through and creating patches or uneven areas of coverage. This is what allows them to reach their coverage rates with their topcoats.</p>

        <img src="../images/gFloors/FBC6 2.png" alt="display this" style="height:300px;">
        <h2>Colors and Sizes</h2>
        <p>Below you can see the many colors and chip sizes we offer.</p>
        <br>
      <div>
        <img src="../images/gFloors/saddletan.JPG" alt="Saddle Tan Color" style="float: left; width: 48%; height: auto; margin-right: 1%; margin-bottom: 10px;">
        <img src="../images/gFloors/domino.JPG" alt="Domino Color" style="float: left; width: 48%; height: auto; margin-bottom: 10px;">
        <p style="float: left; font-size: 12pt; text-align: center; width: 48%; margin-top: -.7em; margin-right: 1%; margin-bottom: 0.7em;">1/4" Saddle Tan</p>
        <p style="float: left; font-size: 12pt; text-align: center; width: 48%; margin-top: -.7em; margin-bottom: 0.7em;">1/4" Domino</p>

        <img src="../images/gFloors/gravel.JPG" alt="Gravel Color" style="float: left; width: 48%; height: auto; margin-right: 1%; margin-bottom: 10px;">
        <img src="../images/gFloors/denim.JPG" alt="Denim Color" style="float: left; width: 48%; height: auto; margin-bottom: 10px;">
        <p style="float: left; font-size: 12pt; text-align: center; width: 48%; margin-top: -.7em; margin-right: 1%; margin-bottom: 0.7em;">1/4" Gravel</p>
        <p style="float: left; font-size: 12pt; text-align: center; width: 48%; margin-top: -.7em; margin-bottom: 0.7em;">1/4" Denim</p>

        <img src="../images/gFloors/autumn.JPG" alt="Autumn Color" style="float: left; width: 48%; height: auto; margin-right: 1%; margin-bottom: 10px;">
        <img src="../images/gFloors/gunflinttrail.JPG" alt="Gunflint Trail Color" style="float: left; width: 48%; height: auto; margin-bottom: 10px;">
        <p style="float: left; font-size: 12pt; text-align: center; width: 48%; margin-top: -.7em; margin-right: 1%; margin-bottom: 0.7em;">1/4" Autumn</p>
        <p style="float: left; font-size: 12pt; text-align: center; width: 48%; margin-top: -.7em; margin-bottom: 0.7em;">1/4" Gunflint Trail</p>
      </div>
        <!--<img src="../images/gFloors/FBC7.png" alt="Broadcast Chip Colors and Sizes" style="height:600px;">
        <img src="../images/gFloors/FBC8.png" alt="Broadcast Chip Colors and Sizes" style="height:600px;">-->

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
        <li><a href="#">Decorative Chip</a></li>
        <li><a href="/pages/medici.php">Medici</a></li>
        <!--<li><a href="/pages/metallic.php">Metallic</a></li>-->
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Get A Quote</h6>
      <p class="btmspace-30">Fill out the following form and we will get back with you shortly.</p>
      <form method="post" action="/pages/decorativechip.php">
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
