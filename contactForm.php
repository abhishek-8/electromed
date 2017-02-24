<?php
$res='';
$done='false';
include('submit.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Contact - Manufacturer and supplier of LED display and Digital Instruments - Electromed</title>
        <!-- CSS  -->
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style2.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <!--Import jQuery before materialize.js-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>‌
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    </head>
    <body id="contactPage">
        <div class="dropdown-content" id="products">
            <div class="container">
                <div class="row">
                    <div class="col l4"><p class="dropdown_headName"><a href="product_list.php?id=LED_display&num=3">LED Display</a></p><hr></div>
                    <div class="col l4"><p class="dropdown_headName"><a href="product_list.php?id=Product_for_office&num=4">Products for Office</a></p><hr></div>
                    <div class="col l4"><p class="dropdown_headName"><a href="product_list.php?id=Industrial_Instruments&num=10">Industrial Instruments</a></p><hr></div>
                </div>
                <div class="row" style="margin-top:-50px;">
                    <div class="col l4">
                        <p class="product_name"><a href="products.php?id=true_color_display&type=1">TRUE COLOR HD SCREEN</a></p>
                        <p class="product_name"><a href="products.php?id=tri_color_display&type=1">TRI COLOR DISPLAY BOARDS</a></p>
                        <p class="product_name"><a href="products.php?id=uni_color_display&type=1">SINGLE COLOR DISPLAY BOARDS</a></p>
                        
                    </div>
                    <div class="col l4">
                        <p class="product_name"><a href="products.php?id=token&type=2">TOKEN DISPLAY</a></p>
                        <p class="product_name"><a href="products.php?id=digital_clock&type=2">DIGITAL CLOCKS</a></p>
                        <p class="product_name"><a href="products.php?id=interest_rate_display_board&type=2">INTEREST RATE DISPLAY BOARD</a></p>
                        <p class="product_name"><a href="products.php?id=scrolling_display&type=2">SCROLLING DISPLAY</a></p>
                    </div>
                    
                    <div class="col l4">
                        <p class="product_name"><a href="products.php?id=flow_monitor&type=4">FLOW MONITOR</a></p>
                        <p class="product_name"><a href="products.php?id=lfm&type=4">LINE FREQUENCY MONITOR</a></p>
                        <p class="product_name"><a href="products.php?id=megawatt_panel&type=4">MEGA WATT PANEL</a></p>
                        <p class="product_name"><a href="products.php?id=process_indicator&type=4">PROCESS INDICATORS</a></p>
                        <p class="product_name"><a href="products.php?id=ph_meter&type=4">PH METER</a></p>
                        <p class="product_name"><a href="products.php?id=tachometer&type=4">TACHOMETER</a></p>
                        <p class="product_name"><a href="products.php?id=temp_cont&type=4">TEMPERATURE CONTROLLER</a></p>
                        <p class="product_name"><a href="products.php?id=twilight_switches&type=4">TWILIGHT SWITCHES</a></p>
                        <p class="product_name"><a href="products.php?id=industrial_display&type=4">INDUSTRIAL DISPLAY</a></p>
                        <p class="product_name"><a href="products.php?id=wsm&type=4">WEIGHING SCALE MONITOR</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown-content" id="projects">
            <div class="container">
                <div class="row">
                    <div class="col l12">
                        <p class="product_name"><a href="project_page.php?id=ntpc_rihand"">NTPC RIHAND</a></p>
                        <p class="product_name"><a href="project_page.php?id=patna_high_court">PATNA HIGH COURT</a></p>
                        <p class="product_name"><a href="project_page.php?id=patna_railway_station">RAILWAY STATION DISPLAY</a></p>
                        <p class="product_name"><a href="project_page.php?id=shakti_bhawan"">SHAKTI BHAWAN</a></p>
                        <p class="product_name"><a href="project_page.php?id=panki">PANKI</a></p>
                        <p class="product_name"><a href="project_page.php?id=coach_guidance_system">COACH GUIDANCE SYSTEM</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper container">
                    <a id="logo-container" href="index.html" class="brand-logo custom-text">Electro-med</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="index.html" class="navLink">Home</a></li>
                        <li><a href="product_list.php?id=LED_display&num=3" class="dropdown-button navLink" data-activates="products">Products<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a href="projects.html" class="dropdown-button navLink" data-activates="projects">Projects<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a href="clients.html" class="navLink">Clients</a></li>
                        <li><a href="about.html" class="navLink">About</a></li>
                        <li class="active"><a href="contactForm.php" class="navLink">Contact</a></li>
                    </ul>
                    
                    <ul id="nav-mobile" class="side-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="product_list.php?id=LED_display&num=3">Products<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a href="projects.html">Projects<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a href="clients.html">Clients</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li class="active"><a href="contactForm.php">Contact Us</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>
        <div class="z-depth-5 card-panel hoverable" id="popup">
      <p class="custom-text" style="color:#263238;text-align:center;font-size:17px;"><?php echo $res; ?><br><a href=""><u>Go Back</u></a></p>
    </div>
        <div class="parallax-container" id="contact_us">
            <div class="parallax"><img src="contact.jpg"></div>
            <div class="container"><br>
                <p class="white-text custom-text" style="font-size:30px;text-align:center;">Have Questions About Our Products or Services?
                Use the Contact Catalog Below So That We Can Better Assist You.</p>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row" >
                <div class="col l6 m7 s12" id="contactform">
                <p class="custom-text" style="color:#263238;font-size:26px;">We'd love to help you </p>    
                    <hr class="style11"><br>
                    <form name="query_form" action="" method="post" id="qform">
                        <div class="row">
    
                            <div class="col l6 m6 s12">

                                <div class="col l12 m12 s12">
                                <div class="input-field">
                                    <i class="material-icons prefix">perm_identity</i>
                                    <input id="name" name="name" type="text" class="validate" required>
                                    <label for="name">Name</label>
                                </div>
                                </div><br><br><br>

                                <div class="col l12 m12 s12">
                                <div class="input-field">
                                    <i class="material-icons prefix">email</i>
                                    <input id="email" name="email" type="email" class="validate" required>
                                    <label for="email">Email</label>
                                </div>
                                </div><br><br><br>

                                <div class="col l12 m12 s12">
                                <div class="input-field">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="phone" name="phone" type="tel" class="validate" required>
                                    <label for="phone">Phone</label>
                                </div>
                                </div><br><br><br>

                                <div class="col l12 m12 s12 contact-page-form">
                                <div class="input-field">
                                
                <img class="prefix" alt="factory" src="jdev/icons/factory.svg" width="20" height="28" style="padding-right: 12px" />
                                    <select required name="industry">
                                        <option value="">Industry</option>
                                        <option value="Power">Power</option>
                                        <option value="Sugar">Sugar</option>
                                        <option value="Railway">Railway</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div><br><br><br>

                            </div>

                            <div class="col l6 m6 s12">
                                <div class="col l12 m12 s12" >
                                <div class="input-field" >
                                <i class="material-icons prefix">shopping_cart</i>
                                    <input id="poi" name="poi" type="text" class="validate" required>
                                    <label for="poi">Products of Interest</label>
                                </div>
                                </div><br><br><br>

                                <div class="col l12 m12 s12">
                                <div class="input-field">
                                    <i class="material-icons prefix">message</i>
                                    <textarea id="qry" name="query" class="materialize-textarea" required style="min-height:128px;"></textarea>
                                    <label for="qry">Write your query...</label>
                                </div><br>
                                
                                </div>
                            </div>

                            <center><input type="submit" name="submit" class="blue darken-5 btn" style="width:40%;border-radius:5px;"></center>
                            </div>
                    </form>
                    <hr class="style11">
                    <br>
                </div>
                <div class="col l3 m3 s11 offset-s1" id="contactinfo">
                <p class="custom-text" style="color:#263238;font-size:22px;line-height:90%">Address</p>
                    <p class="headName1" style="font-size:18px;line-height:90%">D-17, Vivekanand Puri,
                    <br/>Lucknow –226007 India</p>
                    <p class="headName1">Monday-Saturday : <span style="font-size:18px;line-height:10%">9:00 to 5:30 PM (IST)</span></p>
                    <p class="custom-text" style="color:#263238;font-size:22px;line-height:90%">Phone</p>
                    <p class="headName1" style="font-size:18px;line-height:90%">+91 941 508 5804<br>+91 941 503 9393</p>
                    <p class="custom-text" style="color:#263238;font-size:22px;line-height:90%">Email</p>
                    <p class="headName1" style="font-size:18px;line-height:90%">electro.med25@gmail.com<br>electromed3@rediffmail.com<br>info@electromed.co.in</p> 
                    
                </div>
            </div>
        </div>

        <center><h2 class="custom-text" style="color:#263238;"><b>FIND US</b></h2></center>
        
        
        <div class="overlay" onClick="style.pointerEvents='none'"></div>
        <div id="map" class="center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14234.872605313356!2d80.93281223137183!3d26.880694430260508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf8e238a7eafccff!2sELECTRO-MED!5e0!3m2!1sen!2sin!4v1484311290986" width="100%" height="370" frameborder="0" style="border:none" allowfullscreen></iframe>
        </div>
    </div>
    
   <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l3 m3 s12">
            <div class="row">
              <h5 class="white-text"><strong>Electro-Med</strong></h5>
              <p class="white-text foot" >We manufacture and assemble a comprehensive range of electronic displays and instruments for industrial application.</p>
            </div>
          </div>
          <div class="col l2 offset-l1 s12 m2 offset-m1">
            <h6 class="white-text"><strong>Our Links</strong></h6>
            
            <ul>
              <li class="flink"><a class="white-text foot" href="about.html">About Us</a></li>
              <li class="flink"><a class="white-text foot" href="contactForm.php">Contact Us</a></li>
              <li class="flink"><a class="white-text foot" href="product_list.php?id=LED_display&num=3">Products</a></li>
              <li class="flink"><a class="white-text foot" href="projects.html">Projects</a></li>
            </ul>
          </div>
          <div class="col l3 s12 m3">
            <h6 class="white-text"><strong>Products</strong></h6>
            <ul>
              <li class="flink"><a class="white-text foot" href="products.php?id=true_color_display&type=1">TRUE COLOR HD SCREEN</a></li>
              <li class="flink"><a class="white-text foot" href="products.php?id=flow_monitor&type=4">FLOW MONITOR</a></li>
              <li class="flink"><a class="white-text foot" href="products.php?id=process_indicator&type=4">PROCESS INDICATORS</a></li>
              <li class="flink"><a class="white-text foot" href="products.php?id=tachometer&type=4">TACHOMETER</a></li>
              <li class="flink"><a class="white-text foot" href="products.php?id=twilight_switches&type=4">TWILIGHT SWITCHES</a></li>
              <li class="flink"><a class="white-text foot" href="products.php?id=industrial_display&type=4">INDUSTRIAL DISPLAY</a></li>
            </ul>
          </div>
          <div class="col l3 s12 m3">
            <h6 class="white-text"><strong>Contact Info</strong></h6><br>
            <div class="row">
              <div class="col l1 s1 m1"><i class="material-icons prefix blue-text text-darken-2">phone</i></div>
              <div class="col l8 offset-l1 s11 m8 offset-m1"><p class="white-text foot" style="display:inline;">9415039393</p></div>
            </div>
            
            <div class="row">
              <div class="col l1 s1 m1"><i class="material-icons prefix blue-text text-darken-2">email</i></div>
              <div class="col l8 offset-l1 s11 m8 offset-m1"><p class="white-text foot" style="display:inline;">electro.med25@gmail.com</p></div>
            </div>
            <div class="row">
              <div class="col l1 s1 m1"><i class="material-icons prefix blue-text text-darken-2">room</i></div>
              <div class="col l8 offset-l1 s11 m8 offset-m1"><p class="white-text foot" style="display:inline;">D -17, Vivekanand Puri,
              <br/>Lucknow –226007 India</p></div>
            </div>
            
          </div>
        </div>
      </div>
    
    <hr>
    <div class="footer-copyright">
      <div class="container foot row">
      <div class="col l4 m4 s12">© 2017 Copyright Electromed. All rights reserved.</div>
      </div>
    </div>
  </footer>
<script>
$(document).ready(function(){
    if(<?php echo $done; ?>==true)
      $('#popup').show();
$('.button-collapse').sideNav();
$(".dropdown-button").dropdown({
hover:true,
constrain_width: true,
gutter: 0,
belowOrigin: true
});
$('select').material_select();
$('.parallax').parallax();
});

</script>
</body>
</html>