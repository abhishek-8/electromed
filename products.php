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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <!-- <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>  -->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!--Import jQuery before materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>‌
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
    <script src="action.js" type="text/javascript"></script>
    <script>
    
    $(document).ready(function(){
      $('.materialboxed').materialbox();
      set1('<?php echo $x ?>');
    $(".dropdown-button").dropdown({
    hover:true,
    constrain_width: true,
    gutter: 0,
    belowOrigin: true
    }
    );
    $('.slider').slider({full_width: true});
    });
    </script>
  </head>
  <body>
  <div class="dropdown-content" id="products">
        <ul>
          <li><a href="products.php?id=flow_monitor">FLOW MONITOR</a></li>
          <li><a href="products.php?id=interest_rate_display_board">INTEREST RATE DISPLAY BOARD</a></li>
          <li><a href="products.php?id=industrial_display">INDUSTRIAL DISPLAY</a></li>
          <li><a href="products.php?id=industrial_clock">INDUSTRIAL CLOCKS</a></li>
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
          <a id="logo-container" href="" class="brand-logo">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="home.html">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="" class="dropdown-button" data-activates="products">Products<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="">Link 3</a></li>
            <li><a href="">Link 4</a></li>
            <li><a href="contactForm.html">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="slider" style="z-index: -1;">
      <ul class="slides">
        <li>
          <img src="ckt.jpg"> <!-- random image -->
          <div class="caption left-align">
            <h3>Left Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="mother-board.jpeg"> <!-- random image -->
          <div class="caption right-align">
            <h3>Right Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        
        <li>
          <img src="img1.jpeg"> <!-- random image -->
          <div class="caption right-align" style="color:grey;">
            <h3>Right Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3" style="color:grey;">Here's our small slogan.</h5>
          </div>
        </li>
        
        <li>
          <img src="technology.jpg"> <!-- random image -->
          <div class="caption left-align">
            <h3>Left Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="work-harder.jpeg"> <!-- random image -->
          <div class="caption right-align">
            <h3>We believe in technology</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        
        <li>
          <img src="ckt.jpg"> <!-- random image -->
          <div class="caption right-align">
            <h3>Right Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="ckt.jpg"> <!-- random image -->
          <div class="caption center-align">
            <h3>This is our big Tagline!</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
      </ul>
    </div>
    
    <div class="row">
      <div class="col l8 s12 m12 card-panel">

      <div class="row">
      
      <div class="col s12 m5" id="details">
        
       </div> 
        <div class="right col s12 m7">
          <h2 class="header" id="head_name"></h2>
          <div class="card horizontal">
            <div class="card-image" id="product_image">
              
            </div>
            <div class="card-stacked">
              <div class="card-action">
                <a href="#">This is a link</a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="col l3 s12 m12 card-panel push-l1">
        <div class="row" style="background: cyan;">Request for quote</div>
        <form>
          <div class="input-field col s12">
          <i class="material-icons prefix">perm_identity</i>
            <input id="name" type="text" class="validate">
            <label for="name">Name</label>
          </div>
          <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12">
          <i class="material-icons prefix">work</i>
            <input id="company" type="text" class="validate">
            <label for="company">Company</label>
          </div>
          <div class="input-field col s12">
          <i class="material-icons prefix">phone</i>
            <input id="phone" type="text" class="validate">
            <label for="phone">Phone no.</label>
          </div>
          <div class="input-field col s12">
          <i class="material-icons prefix">message</i>
            <input id="msg" type="text" class="validate">
            <label for="msg">Message</label>
          </div>
          <input type="submit" class="btn">
        </form>
      </div>
    </div>
    
    <footer class="page-footer grey">
      <div class="container">
        <div class="row">
          <div class="col l3 s12">
            <h5 class="white-text">Our Address</h5>
            <hr>
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