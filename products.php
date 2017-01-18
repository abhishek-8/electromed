<?php
$x= $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Products</title>
    <!-- CSS  -->
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <!-- <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>  -->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!--Import jQuery before materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>‌
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script src="action.js" type="text/javascript"></script>
    <script>
    
    $(document).ready(function(){
    $('.materialboxed').materialbox();
    set1('<?php echo $x ?>');
    $(".btn1").click(function(){
    $("#product_image").fadeOut('fast', function() {
    set2('<?php echo $x ?>');
    $("#product_image").fadeIn("fast");
    });;
    });
    
    $(".btn2").click(function(){
    $("#product_image").fadeOut('fast', function() {
    set3('<?php echo $x ?>');
    $("#product_image").fadeIn("fast");
    });;
    });
    $(".btn3").click(function(){
    $("#product_image").fadeOut('fast', function() {
    set4('<?php echo $x ?>');
    $("#product_image").fadeIn("fast");
    });;
    });
    $(".dropdown-button").dropdown({
    hover:true,
    constrain_width: true,
    gutter: 0,
    belowOrigin: true
    }
    );
    //  $('.slider').slider({full_width: true});
    });
    </script>
  </head>
  <body>
    <div class="dropdown-content" id="products">
      <ul>
        <li><a href="products.php?id=flow_monitor">FLOW MONITOR</a></li>
        <li><a href="products.php?id=led_display">LED DISPLAY BOARD</a></li>
        <li><a href="products.php?id=industrial_display">INDUSTRIAL DISPLAY</a></li>
        <li><a href="products.php?id=digital_clock">DIGITAL CLOCKS</a></li>
        <li><a href="products.php?id=lfm">LINE FREQUENCY MONITOR</a></li>
        <li><a href="products.php?id=megawatt_pannel">MEGA WATT PANEL</a></li>
        <li><a href="products.php?id=process_n_indicator">PROCESS INDICATORS</a></li>
        <li><a href="products.php?id=ph_meter">PH METER</a></li>
        <li><a href="products.php?id=scrolling_display">SCROLLING DISPLAY</a></li>
        <li><a href="products.php?id=tachometer">TACHOMETER</a></li>
        <li><a href="products.php?id=temp_cont">TEMPERATURE CONTROLLER</a></li>
        <li><a href="products.php?id=twilight_switches">TWILIGHT SWITCHES</a></li>
        <li><a href="products.php?id=token">TOKEN DISPLAY</a></li>
        <li><a href="products.php?id=wsm">WEIGHING SCALE MONITOR</a></li>
      </ul>
    </div>
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper container">
          <a id="logo-container" href="" class="brand-logo">Electro-med</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="" class="dropdown-button" data-activates="products">Products<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="">Link 3</a></li>
            <li><a href="">Link 4</a></li>
            <li><a href="contactForm.html">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </div>
    
    <div class="row">
      <div class="col l9 s12 m12">
        <h2 class="headName" id="head_name" style="/*background:#f5f5f5; */background: linear-gradient(#eeeeee,white );" ></h2>
        <hr>
        
        <div class="col l5">
          <div class="row">
          <br><br><br>
            <div class="col l12 s12 materialboxed" id="product_image">
              
            </div>
          </div>
          <br><br>
          <div class="row">
            <div class="col l3 offset-l2 m3 offset-m2 s3 offset-s2 btn1" id="product_image1"></div>
            <div class="col l3 m3 s3 btn2" id="product_image2"></div>
            <div class="col l3 m3 s3 btn3" id="product_image3"></div>
          </div>
        </div>
        
        <div class="col l6 offset-l1 s11 m11">
          <table class="striped responsive-table" style="line-height: 160%;">
          <center><h3 class="headName">Specifications</h3></center>
            <tr id="r1">
              <td class="headNamev2" id="r1d1"></td>
              <td class="headNamev2" id="r1d2"></td>
            </tr>
            <tr>
              <td class="headNamev2" id="r2d1"></td>
              <td class="headNamev2" id="r2d2"></td>
            </tr>
            <tr>
              <td class="headNamev2" id="r3d1"></td>
              <td class="headNamev2" id="r3d2"></td>
            </tr>
            <tr>
              <td class="headNamev2" id="r4d1"></td>
              <td class="headNamev2" id="r4d2"></td>
            </tr>
            <tr>
              <td class="headNamev2" id="r5d1"></td>
              <td class="headNamev2" id="r5d2"></td>
            </tr>
            <tr>
              <td class="headNamev2" id="r6d1"></td>
              <td class="headNamev2" id="r6d2"></td>
            </tr>
            <tr>
              <td class="headNamev2" id="r7d1"></td>
              <td class="headNamev2" id="r7d2"></td>
            </tr>
          </table>
          
        </div>
      </div>
      <div class="col l2 offset-l1 m12 s12" id="request_for_quote">
      <legend class="white-text" style="position:relative; background: lightblue;height: 40px;width: 100%;"><br><center>Contact Us</center></legend>
          
      <img src="contact.jpg">
        <ul>
        <li>+91 9415085804</li>
        <li>+91-9415039393</li>
        <li>info@electromed.co.in</li>         
       </ul>
        <fieldset>
          <legend class="white-text" style="position:relative; background: lightblue;height: 40px;width: 100%;"><br><center>Request for quote</center></legend>
          <form>
           <input id="name" type="text" class="validate" placeholder="Name" style="font-size:15px;height:25px;">
            <input id="email" type="email" class="validate" placeholder="Email" style="font-size:15px;height:25px;">
            <input id="company" type="text" class="validate" placeholder="Company" style="font-size:15px;height:25px;">
            <input id="phone" type="text" class="validate" placeholder="Phone" style="font-size:15px;height:25px;">
            <textarea name="" placeholder="Message" style="font-size:15px;"></textarea>
            <input type="submit" class="btn blue lighten-2">
         </form>
        </fieldset>
      </div>
      
    </div>

    <div>
    <br><br>
      <h2 class="headName">Related Products</h2>
      <hr>
      <br>
      <div class="row" id="related_products">
        
        <div class="col l2 offset-l1"><img style="border-radius:10px;" src='temp_cont.jpg'+' alt="" class="responsive-img">
        <a>know more</a></div>
        <div class="col l2"><img style="border-radius:10px;" src='temp_cont.jpg'+' alt="" class="responsive-img">
        <a>know more</a></div>
        <div class="col l2"><img style="border-radius:10px;" src='temp_cont.jpg'+' alt="" class="responsive-img">
        <a>know more</a></div>
        <div class="col l2"><img style="border-radius:10px;" src='temp_cont.jpg'+' alt="" class="responsive-img">
        <a>know more</a></div>

      </div>
    </div>
    <br><br>
    <footer class="page-footer grey">
      <div class="container">
        <div class="row">
          <div class="col l3 s12">
            <h5 class="white-text">Our Address</h5>
            <hr>
            <p>D -17, Vivekanand Puri,
            Lucknow –226007 India</p>
            <p class="grey-text text-lighten-4"></p>
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Our Links</h5>
            <hr>
            <ul>
              <li><a href="#!">About Us</a></li>
              <li><a href="#!">Clients</a></li>
              <li><a href="#!">Coach Guidance System</a></li>
              <li><a href="#!">Contact Us</a></li>
              <li><a href="#!">Customers List</a></li>
              <li><a href="#!">Enquiry</a></li>
            </ul>
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Career</h5>
            <hr>
            <ul>
              <li><a class="white-text" href="#!">Job/Apprenticeship</a></li>
            </ul>
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Connect</h5>
            <hr>
            <ul>
              <li><i class="material-icons">phone</i><p style="display:inline;">phone number</p></li>
              <li><i class="material-icons">textsms</i><p style="display:inline;">Send SMS</p></li>
              <li><i class="material-icons">email</i><p style="display:inline;">Send Email</p></li>
              
            </ul>
          </div>
        </div>
        <div class="fixed-action-btn horizontal">
          <a class="btn-floating btn-large cyan">
            <i class="large material-icons">phone</i>
          </a>
          <ul>
            <li><a href="" target="_blank">
              <img title="LinkedIn" alt="LinkedIn" src="icons/linkedin.png" width="35" height="35" />
            </a></li>
            <li><a href="" target="_blank" target="_blank">
            <img title="Facebook" alt="Facebook" src="icons/facebook.png" width="35" height="35" /></li>
            <li><a href="" target="_blank">
              <img title="Google" alt="Google" src="icons/google.png" width="35" height="35" />
            </a></li>
            <li><a href="" target="_blank">
              <img title="Yahoo" alt="RSS" src="icons/yahoo.png" width="35" height="35" />
            </a></li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="footer-copyright">
        <div class="container">
          &copy Made by <a class="brown-text text-lighten-3" href="">Abhishek Tiwari</a>
        </div>
      </div>
    </footer>
    
  </body>
</html>