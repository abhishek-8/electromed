<?php
$x= $_GET['id'];
$z=$_GET['num'];    
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Products - Manufacturer and supplier of LED display and Digital Instruments - Electromed, Lucknow</title>

        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <!--Import jQuery before materialize.js-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>‌

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
         <script src="action.js" type="text/javascript"></script>
        
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
            <p class="product_name"><a href="products.php?id=uni_color_display&type=1">SINGLE COLOR DISPLAY BOARDS</a></p>
            
          </div>
          <div class="col l4">
            <p class="product_name"><a href="products.php?id=token_display&type=2">TOKEN DISPLAY</a></p>
            <p class="product_name"><a href="products.php?id=digital_clock&type=2">DIGITAL CLOCKS</a></p>
            <p class="product_name"><a href="products.php?id=interest_rate_display_board&type=2">INTEREST RATE DISPLAY BOARD</a></p>
            <p class="product_name"><a href="products.php?id=scrolling_display&type=2">SCROLLING DISPLAY</a></p>
          </div>
          
          <div class="col l4">
            <p class="product_name"><a href="products.php?id=flow_monitor&type=4">FLOW MONITOR</a></p>
            <p class="product_name"><a href="products.php?id=line_frequency_monitor&type=4">LINE FREQUENCY MONITOR</a></p>
            <p class="product_name"><a href="products.php?id=megawatt_panel&type=4">MEGA WATT PANEL</a></p>
            <p class="product_name"><a href="products.php?id=process_indicator&type=4">PROCESS INDICATORS</a></p>
            <p class="product_name"><a href="products.php?id=ph_meter&type=4">PH METER</a></p>
            <p class="product_name"><a href="products.php?id=tachometer&type=4">TACHOMETER</a></p>
            <p class="product_name"><a href="products.php?id=temperature_controller&type=4">TEMPERATURE CONTROLLER</a></p>
            <p class="product_name"><a href="products.php?id=twilight_switches&type=4">TWILIGHT SWITCHES</a></p>
            <p class="product_name"><a href="products.php?id=industrial_display&type=4">INDUSTRIAL DISPLAY</a></p>
            <p class="product_name"><a href="products.php?id=weighing_scale_monitor&type=4">WEIGHING SCALE MONITOR</a></p>
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
             <li class="active"><a href="product_list.php?id=LED_display&num=3" class="dropdown-button navLink" data-activates="products">Products<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="project_list.html" class="dropdown-button navLink" data-activates="projects">Projects<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="clients.html" class="navLink">Clients</a></li>
            <li><a href="about.html" class="navLink">About</a></li>
            <li><a href="contact.php" class="navLink">Contact</a></li>
          </ul>
          

          <ul id="nav-mobile" class="side-nav">
            <li><a href="index.html">Home</a></li>
            <li class="active"><a href="product_list.php?id=LED_display&num=3">Products<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="project_list.html">Projects<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="clients.html">Clients</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li> 
          </ul>

          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

        </div>
      </nav>
    </div>

        <div class="container-fluid">
       
            <div class="row">
                <div class="col l3 m3 s12">
                    <a href="#!" class="btn blue darken-2 category-btn" onclick="Materialize.showStaggeredList('#staggered-test')" style="width:100%;">Categories</a>
                    <ul id="staggered-test" class="collapsible" data-collapsible="accordion">
                        <li style="opacity: 0;">
                            <div class="collapsible-header <?php if($x=='LED_display') echo 'active'; ?>" onclick="filter('LED_display',3)" >LED Display</div>
                            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>
                                <a href="products.php?id=true_color_display&type=1" style="font-size:14px;padding-left:10%">TRUE COLOR HD SCREEN</a><br>
                                <hr>
                                <a href="products.php?id=tri_color_display&type=1" style="font-size:14px;padding-left:10%">TRI COLOR DISPLAY BOARDS</a><br>
                                <hr>
                                <a href="products.php?id=uni_color_display&type=1" style="font-size:14px;padding-left:10%">SINGLE COLOR DISPLAY BOARDS</a><br><br>
                                
                            </div>
                        </li>
                        <li style="opacity: 0;">
                            <div class="collapsible-header <?php if($x=='Product_for_office') echo 'active';  ?>" onclick="filter('Product_for_office',4)" >Product for Office</div>
                            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>
                                
                                <a href="products.php?id=token_display&type=2" style="font-size:14px;padding-left:10%">TOKEN DISPLAY</a><br>
                                <hr>
                                <a href="products.php?id=digital_clock&type=2" style="font-size:14px;padding-left:10%">DIGITAL CLOCKS</a><br>
                                <hr>
                                <a href="products.php?id=interest_rate_display_board&type=2" style="font-size:14px;padding-left:10%">INTEREST RATE DISPLAY BOARD</a><br>
                                <hr>
                                <a href="products.php?id=scrolling_display&type=2" style="font-size:14px;padding-left:10%">SCROLLING DISPLAY</a><br><br>
                            </div>
                            
                        </li>
                        <li style="opacity: 0;">
                            <div class="collapsible-header <?php if($x=='Industrial_Instruments') echo 'active'; ?>" onclick="filter('Industrial_Instruments',10)" >Industrial Instruments</div>
                            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>
                                <a href="products.php?id=flow_monitor&type=4" style="font-size:14px;padding-left:10%">FLOW MONITOR</a><br>
                                <hr>
                                <a href="products.php?id=line_frequency_monitor&type=4" style="font-size:14px;padding-left:10%">LINE FREQUENCY MONITOR</a><br>
                                <hr>
                                <a href="products.php?id=megawatt_panel&type=4" style="font-size:14px;padding-left:10%">MEGA WATT PANEL</a><br>
                                <hr>
                                <a href="products.php?id=process_indicator&type=4" style="font-size:14px;padding-left:10%">PROCESS INDICATORS</a><br>
                                <hr>
                                <a href="products.php?id=ph_meter&type=4" style="font-size:14px;padding-left:10%">PH METER</a><br>
                                <hr>
                                <a href="products.php?id=tachometer&type=4" style="font-size:14px;padding-left:10%">TACHOMETER</a><br>
                                <hr>
                                <a href="products.php?id=temperature_controller&type=4" style="font-size:14px;padding-left:10%">TEMPERATURE CONTROLLER</a><br>
                                <hr>
                                <a href="products.php?id=twilight_switches&type=4" style="font-size:14px;padding-left:10%">TWILIGHT SWITCHES</a><br>
                                <hr>
                                <a href="products.php?id=industrial_display&type=4" style="font-size:14px;padding-left:10%">INDUSTRIAL DISPLAY</a><br>
                                <hr>
                                <a href="products.php?id=weighing_scale_monitor&type=4" style="font-size:14px;padding-left:10%">WEIGHING SCALE MONITOR</a><br><br>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="col l9 m9 s12" id="category_products">
                    <center><h3 class="custom-text ctgry-name" style="text-align:center;color:#263238"><b id="category_name"></b></h3></center><br><br>
                    <div class="row">
                        <div class="col s12 m7 l3" id="c1">
                            <div class="card">
                                <div class="card-image" id="p1">
                                    
                                </div>
                                <div class="card-action custom-text" id="l1">
                             
                                </div>
                                <div class="card-content" id="d1" >
                                 
                                </div>
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c2">
                            <div class="card">
                                <div class="card-image" id="p2">
                                    
                                </div>
                                <div class="card-action custom-text" id="l2">
                                </div>
                                <div class="card-content" id="d2">
                                 
                                </div>
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c3">
                            <div class="card">
                                <div class="card-image" id="p3">
                                    
                                </div>
                                <div class="card-action custom-text" id="l3">
                                </div>
                                <div class="card-content" id="d3">
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c4">
                            <div class="card">
                                <div class="card-image " id="p4">
                                    
                                </div>
                                <div class="card-action custom-text" id="l4">
                                </div>
                                <div class="card-content" id="d4">
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col s12 m7 l3" id="c5">
                            <div class="card">
                                <div class="card-image" id="p5">
                                   
                                </div>
                                <div class="card-action custom-text" id="l5">
                                </div>
                                <div class="card-content" id="d5" >
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c6">
                            <div class="card">
                                <div class="card-image" id="p6">
                                    
                                </div>
                                <div class="card-action custom-text" id="l6">
                                </div>
                                <div class="card-content" id="d6">
                                
                                </div>
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c7">
                            <div class="card">
                                <div class="card-image" id="p7">
                                    
                                </div>
                                <div class="card-action custom-text" id="l7">
                                </div>
                                <div class="card-content" id="d7" >
                                
                                </div>
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c8">
                            <div class="card">
                                <div class="card-image" id="p8">
                                    
                                </div>
                                <div class="card-action custom-text" id="l8">
                                </div>
                                <div class="card-content" id="d8" >
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m7 l3" id="c9">
                            <div class="card">
                                <div class="card-image" id="p9">

                                </div>
                                <div class="card-action custom-text" id="l9">
                                </div>
                                <div class="card-content" id="d9">
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c10">
                            <div class="card">
                                <div class="card-image" id="p10">

                                </div>
                                <div class="card-action custom-text" id="l10">
                                    
                                </div>
                                <div class="card-content" id="d10">
                                    
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
              <li class="flink"><a class="white-text foot" href="contact.php">Contact Us</a></li>
              <li class="flink"><a class="white-text foot" href="product_list.php?id=LED_display&num=3">Products</a></li>
              <li class="flink"><a class="white-text foot" href="project_list.html">Projects</a></li>
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
</body>
</html>