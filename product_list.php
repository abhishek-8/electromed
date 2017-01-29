<?php
$x= $_GET['id'];
$z=$_GET['num'];    
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Product Category</title>
        <!-- CSS  -->
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
        <!-- <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>  -->
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <!--Import jQuery before materialize.js-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>‌
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Coming+Soon|Pacifico|Shadows+Into+Light" rel="stylesheet">
         <script src="action.js" type="text/javascript"></script>
        <script>
        $(document).ready(function(){
            Materialize.showStaggeredList('#staggered-test');
            $('.parallax').parallax();
            $('.button-collapse').sideNav();
         filter('<?php echo $x; ?>',<?php echo $z; ?>);   
        $('.collapsible').collapsible();
        $(".dropdown-button").dropdown({
        hover:true,
        constrain_width: true,
        gutter: 0,
        belowOrigin: true
        });
        });
        
        </script>
    </head>
    <body id="category_page">
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
            <p class="product_name"><a href="products.php?id=uni_color_display&type=1">UNI COLOR DISPLAY BOARDS</a></p>
            
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
            <p class="product_name"><a href="#">COACH GUIDANCE SYSTEM</a></p>
            <p class="product_name"><a href="#">TRAIN INFORMATION BOARD</a></p>
            <p class="product_name"><a href="#">POWER GENERATION DISPLAY BOARD</a></p>
            
          </div>
       </div>
    </div>
    </div>

   <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper container">
          <a id="logo-container" href="" class="brand-logo">Electro-med</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="home.html" class="navLink">Home</a></li>
            <li><a href="about.html" class="navLink">About</a></li>
            <li><a href="product_list.php?id=projects&num=6" class="dropdown-button navLink" data-activates="projects">Projects<i class="material-icons right">arrow_drop_down</i></a></li>
            <li class="active"><a href="product_list.php?id=LED_display&num=3" class="dropdown-button navLink" data-activates="products">Products<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="contactForm.html" class="navLink">Contact</a></li>
          </ul>
          

          <ul id="nav-mobile" class="side-nav">
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="product_list.php?id=projects&num=6">Projects<i class="material-icons right">arrow_drop_down</i></a></li>
            <li class="active"><a href="product_list.php?id=LED_display&num=3">Products<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="contactForm.html">Contact Us</a></li> 
          </ul>

          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

        </div>
      </nav>
    </div>


     <div class="parallax-container Overview">
      <div class="parallax" ><img src="circuits.jpg" height="380"></div>
      <br>
      <h3 class="headNamev3 black-text" id="info">Overview</h3><br>
      <div class="container">
        
        <h4 style="font-family: 'Open Sans Condensed', sans-serif;" class="black-text"><center id="desc"></center></h4>
        
      </div>
    </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col l3"><br><br>
                    <a href="#!" class="btn red lighten-2" onclick="Materialize.showStaggeredList('#staggered-test')">Categories</a>
                    <ul id="staggered-test" class="collapsible" data-collapsible="accordion">
                        <li style="opacity: 0;">
                            <div class="collapsible-header <?php if($x=='LED_display') echo 'active'; ?>" onclick="filter('LED_display',3)">LED Display</div>
                            <div class="collapsible-body container"><br>
                                <a href="products.php?id=true_color_display&type=1">TRUE COLOR HD SCREEN</a><br>
                                <hr>
                                <a href="products.php?id=tri_color_display&type=1">TRI COLOR DISPLAY BOARDS</a><br>
                                <hr>
                                <a href="products.php?id=uni_color_display&type=1">UNI COLOR DISPLAY BOARDS</a><br>
                                
                            </div>
                        </li>
                        <li style="opacity: 0;">
                            <div class="collapsible-header <?php if($x=='Product_for_office') echo 'active';  ?>" onclick="filter('Product_for_office',4)">Product for Office</div>
                            <div class="collapsible-body container"><br>
                                
                                <a href="products.php?id=token&type=2">TOKEN DISPLAY</a><br>
                                <hr>
                                <a href="products.php?id=digital_clock&type=2">DIGITAL CLOCKS</a><br>
                                <hr>
                                <a href="products.php?id=interest_rate_display_board&type=2">INTEREST RATE DISPLAY BOARD</a><br>
                                <hr>
                                <a href="products.php?id=scrolling_display&type=2">SCROLLING DISPLAY</a><br>
                            </div>
                            
                        </li>
                        <li style="opacity: 0;">
                            <div class="collapsible-header <?php if($x=='Industrial_Instruments') echo 'active'; ?>" onclick="filter('Industrial_Instruments',10)">Industrial Instruments</div>
                            <div class="collapsible-body container"><br>
                                <a href="products.php?id=flow_monitor&type=4">FLOW MONITOR</a><br>
                                <hr>
                                <a href="products.php?id=lfm&type=4">LINE FREQUENCY MONITOR</a><br>
                                <hr>
                                <a href="products.php?id=megawatt_panel&type=4">MEGA WATT PANEL</a><br>
                                <hr>
                                <a href="products.php?id=process_indicator&type=4">PROCESS INDICATORS</a><br>
                                <hr>
                                <a href="products.php?id=ph_meter&type=4">PH METER</a><br>
                                <hr>
                                <a href="products.php?id=tachometer&type=4">TACHOMETER</a><br>
                                <hr>
                                <a href="products.php?id=temp_cont&type=4">TEMPERATURE CONTROLLER</a><br>
                                <hr>
                                <a href="products.php?id=twilight_switches&type=4">TWILIGHT SWITCHES</a><br>
                                <hr>
                                <a href="products.php?id=industrial_display&type=4">INDUSTRIAL DISPLAY</a><br>
                                <hr>
                                <a href="products.php?id=wsm&type=4">WEIGHING SCALE MONITOR</a><br>
                            </div>
                        </li>
                        <li style="opacity: 0;">
                            <div class="collapsible-header <?php if($x=='projects') echo 'active'; ?>" onclick="filter('projects',6)">Featured Projects</div>
                            <div class="collapsible-body container"><br>
                                <a href="products.php?id=">COACH GUIDANCE SYSTEM</a><br>
                                <hr>
                                <a href="products.php?id=">TRAIN INFORMATION BOARD</a><br>
                                <hr>
                                <a href="products.php?id=">POWER GENERATION DISPLAY BOARD</a><br>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col l9">
                    <h3 class="headName" id="category_name"></h3>
                    <div class="row">
                        <div class="col s12 m7 l3" id="c1">
                            <div class="card">
                                <div class="card-image" id="p1">
                                    
                                </div>
                                <div class="card-content">
                                    <p id="d1"></p>
                                </div>
                                <div class="card-action" id="l1">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c2">
                            <div class="card">
                                <div class="card-image" id="p2">
                                    
                                </div>
                                <div class="card-content">
                                    <p id="d2"></p>
                                </div>
                                <div class="card-action" id="l2">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c3">
                            <div class="card">
                                <div class="card-image" id="p3">
                                    
                                </div>
                                <div class="card-content">
                                    <p id="d3"></p>
                                </div>
                                <div class="card-action" id="l3">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c4">
                            <div class="card">
                                <div class="card-image" id="p4">
                                    
                                </div>
                                <div class="card-content">
                                    <p id="d4"></p>
                                </div>
                                <div class="card-action" id="l4">
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col s12 m7 l3" id="c5">
                            <div class="card">
                                <div class="card-image" id="p5">
                                   
                                </div>
                                <div class="card-content">
                                    <p id="d5"></p>
                                </div>
                                <div class="card-action" id="l5">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c6">
                            <div class="card">
                                <div class="card-image" id="p6">
                                    
                                </div>
                                <div class="card-content">
                                    <p id="d6"></p>
                                </div>
                                <div class="card-action" id="l6">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c7">
                            <div class="card">
                                <div class="card-image" id="p7">
                                    
                                </div>
                                <div class="card-content">
                                    <p id="d7"></p>
                                </div>
                                <div class="card-action" id="l7">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c8">
                            <div class="card">
                                <div class="card-image" id="p8">
                                    
                                </div>
                                <div class="card-content">
                                    <p id="d8"></p>
                                </div>
                                <div class="card-action" id="l8">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m7 l3" id="c9">
                            <div class="card">
                                <div class="card-image" id="p9">

                                </div>
                                <div class="card-content">
                                    <p id="d9"></p>
                                </div>
                                <div class="card-action" id="l9">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c10">
                            <div class="card">
                                <div class="card-image" id="p10">

                                </div>
                                <div class="card-content">
                                    <p id="d10"></p>
                                </div>
                                <div class="card-action" id="l10">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l3 s12">
            <div class="row">
              <h5 class="white-text"><strong>[ Electro-Med ]</strong></h5>
              <p class="white-text foot" >Welcome to the leading company delivering services that combine quality,reliability and compliance.</p>
            </div>
            <div class="row">
              <div class="col l5 s5 m5">
                <h6 class="white-text">Follow Us: </h6>
              </div>
              <div class="col l2 s2 m2"><a href="" target="_blank">
                <img title="LinkedIn" alt="LinkedIn" src="icons/linkedin.png" width="30" height="30" />
              </a></div>
              <div class="col l2 s2 m2">
                <a href="" target="_blank" target="_blank">
                <img title="Facebook" alt="Facebook" src="icons/facebook.png" width="30" height="30" /></a>
              </div>
              <div class="col l2 s2 m2"><a href="" target="_blank">
                <img title="Google" alt="Google" src="icons/google.png" width="30" height="30" />
              </a></div>
            </div>
          </div>
          <div class="col l3 s12 m3">
            <h6 class="white-text"><strong>Our Links</strong></h6>
            
            <ul>
              <li class="flink"><a class="white-text foot" href="about.html">About Us</a></li>
              <li class="flink"><a class="white-text foot" href="contactForm.html">Contact Us</a></li>
              <li class="flink"><a class="white-text foot" href="product_list.php?id=LED_display&num=3">Products</a></li>
            </ul>
          </div>
          <div class="col l3 s12 m3">
            <h6 class="white-text"><strong>Projects</strong></h6>
            <ul>
              <li class="flink"><a class="white-text foot" href="#!">Project 1</a></li>
              <li class="flink"><a class="white-text foot" href="#!">Project 2</a></li>
              <li class="flink"><a class="white-text foot" href="#!">Project 3</a></li>
              <li class="flink"><a class="white-text foot" href="#!">Project 4</a></li>
            </ul>
          </div>
          <div class="col l3 s12 m3">
            <h6 class="white-text"><strong>Contact Info</strong></h6>
            <div class="row">
              <div class="col l1 s1 m1"><i class="material-icons prefix blue-text">phone</i></div>
              <div class="col l8 offset-l1 s11 m8 offset-m1"><p class="white-text foot" style="display:inline;">9415039393</p></div>
            </div>
            
            <div class="row">
              <div class="col l1 s1 m1"><i class="material-icons prefix blue-text">email</i></div>
              <div class="col l8 offset-l1 s11 m8 offset-m1"><p class="white-text foot" style="display:inline;">electro.med25@gmail.com</p></div>
            </div>
            <div class="row">
              <div class="col l1 s1 m1"><i class="material-icons prefix blue-text">room</i></div>
              <div class="col l8 offset-l1 s11 m8 offset-m1"><p class="white-text foot" style="display:inline;">D -17, Vivekanand Puri,
              <br/>Lucknow –226007 India</p></div>
            </div>
          
          </div>
        </div>
      </div>
      <div class="fixed-action-btn horizontal">
        <a class="btn-floating btn-large red lighten-1">
          <i class="large material-icons">phone</i>
        </a>
        <ul>
          <li><a href="" target="_blank">
            <img title="LinkedIn" alt="LinkedIn" src="icons/linkedin.png" width="35" height="35" />
          </a></li>
          <li><a href="" target="_blank" target="_blank">
          <img title="Facebook" alt="Facebook" src="icons/facebook.png" width="35" height="35" /></a></li>
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
      <div class="container foot">
        © 2017 Copyright Electromed. All rights reserved.
      </div>
    </div>
  </footer>
</body>
</html>