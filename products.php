<?php
$x= $_GET['id'];
$type=$_GET['type'];
$link='';
if($type==1){
$link='product_list.php?id=LED_display&num=3';
}
else if($type==2){
$link='product_list.php?id=Product_for_office&num=4';
}
else if($type==3){
$link='product_list.php?id=projects&num=3';
}
else if($type==4){
$link='product_list.php?id=Industrial_Instruments&num=10';
}
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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
    <!--Import jQuery before materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>‌
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script src="action.js" type="text/javascript"></script>
    <script>
    $(document).ready(function(){
      $(".top").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "fast");
  return false;
});
    $('#request_for_quote').hide();
    $('.parallax').parallax();
    $('.button-collapse').sideNav();
    $('.materialboxed').materialbox();
    set1('<?php echo $x ?>');
    $(".btn1").click(function(){
    $("#product_image").fadeOut('fast', function() {
    set2('<?php echo $x ?>');
    $("#product_image").fadeIn("fast");
    });;
    });
    $('.rqst').click(function(){
    $('#request_for_quote').show();
    });
    $('.close').click(function(){
    $('#request_for_quote').hide();
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
    });
    });
    </script>
  </head>
  <body id="product_page">
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
          <a id="logo-container" href="" class="brand-logo custom-text">Electro-med</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="home.html" class="navLink">Home</a></li>
            <li><a href="about.html" class="navLink">About</a></li>
            <li><a href="projects.html" class="dropdown-button navLink" data-activates="projects">Projects<i class="material-icons right">arrow_drop_down</i></a></li>
            <li class="active"><a href="product_list.php?id=LED_display&num=3" class="dropdown-button navLink" data-activates="products">Products<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="contactForm.html" class="navLink">Contact</a></li>
          </ul>
          
          <ul id="nav-mobile" class="side-nav">
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="projects.html">Projects<i class="material-icons right">arrow_drop_down</i></a></li>
            <li class="active"><a href="product_list.php?id=LED_display&num=3">Products<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="contactForm.html">Contact Us</a></li> 
          </ul>

          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

        </div>
      </nav>
    </div>
    
    <nav class="white branches" >
      <div class="nav-wrapper container">
        <div class="col s12">
          <a href="product_list.php?id=LED_display&num=3" class="breadcrumb black-text" id="pre1"></a>
          <a href="<?php echo $link; ?>" class="breadcrumb black-text" id="pre2"></a>
          <a href="" class="breadcrumb black-text" id="curr"></a>
        </div>
      </div>
    </nav>

    <div class="z-depth-5 card-panel hoverable" id="request_for_quote">  
      <fieldset id="rqst_form">
        <legend class="white-text blue darken-2" style="position:relative;height: 40px;width: 100%;"><center>Request for quote</center></legend>
        <form action="home.html">
          <input id="name" type="text" class="validate" placeholder="Name" style="font-size:15px;">
          <input id="email" type="email" class="validate" placeholder="Email" style="font-size:15px;">
          <input id="company" type="text" class="validate" placeholder="Company" style="font-size:15px;">
          <input id="phone" type="text" class="validate" placeholder="Phone" style="font-size:15px;">
          <textarea name="" placeholder="Message" style="font-size:15px;"></textarea>
          <div class="row">
            <div class="col l4">
              <button class="btn blue darken-2" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
              </button>
            </div>
            <div class="col l4 offset-l4">
              <a class="btn blue darken-2 close" style="float:right">Close</a>
            </div>
          </div>
        </form>
      </fieldset>
    </div>
    
    <div class="parallax-container Overview">
      <div class="parallax" ><img src="circuits.jpg" height="100%"></div>
      <br>
      <center><h5 class="custom-text" style="color:#263238;" id="info">OVERVIEW</h5></center>
      <div class="container">
        
        <center><p class="black-text overview-text" id="desc"></p></center>
        
      </div>
    </div>

    <div class="row product-images" style="z-index:-1;margin-top:-50px;">
      <div class="col l12 s12 m12">
        <br>
        <div class="col l5 s12 m5" id="product">
          <div class="row">
            <br><br><br><br>
            <div class="col l11 offset-l1 s11 m11 materialboxed" id="product_image">
              
            </div>
          </div>
          <br><br>
          <div class="row">
            <div class="col l3 offset-l1 m3 offset-m1 s3 btn1" id="product_image1"></div>
            <div class="col l3 m3 s3 btn2" id="product_image2"></div>
            <div class="col l3 m3 s3 btn3" id="product_image3"></div>
          </div>
        </div>
        
        <div class="col l6 s12 m6" id="specs">
        <br><br><br>
        <table class="striped" style="line-height: 100%;">
        <blockquote style="font-family: 'Open Sans Condensed', sans-serif;font-size:21px;"><b><u>Technical Specifications</u></b></blockquote>
        <col width="30%">
        <col width="0.5%">
        <col width="69.5%">
        <tr id="r1">
          <td class="table_specs key" style="vertical-align: top;"><b id="r1d1"></b></td>
          <td style="text-align:center" id="c1">:</td>
          <td class="table_specs value" style="vertical-align: top;"><b id="r1d2"></b></td>
        </tr>
        <tr id="r2">
          <td class="table_specs" style="vertical-align: top;"><b id="r2d1"></b></td>
          <td style="text-align:center" id="c2">:</td>
          <td class="table_specs" style="vertical-align: top;"><b id="r2d2"></b></td>
        </tr>
        <tr id="r3">
          <td class="table_specs" style="vertical-align: top;"><b id="r3d1"></b></td>
          <td style="text-align:center" id="c3">:</td>
          <td class="table_specs" style="vertical-align: top;"><b id="r3d2"></b></td>
        </tr>
        <tr id="r4">
          <td class="table_specs" style="vertical-align: top;"><b id="r4d1"></b></td>
          <td style="text-align:center" id="c4">:</td>
          <td class="table_specs" style="vertical-align: top;"><b id="r4d2"></b></td>
        </tr>
        <tr id="r5">
          <td class="table_specs" style="vertical-align: top;"><b id="r5d1"></b></td>
          <td style="text-align:center" id="c5">:</td>
          <td class="table_specs" style="vertical-align: top;"><b id="r5d2"></b></td>
        </tr>
        <tr id="r6">
          <td class="table_specs" style="vertical-align: top;"><b id="r6d1"></b></td>
          <td style="text-align:center" id="c6">:</td>
          <td class="table_specs" style="vertical-align: top;"><b id="r6d2"></b></td>
        </tr>
        <tr id="r7">
          <td class="table_specs" style="vertical-align: top;"><b id="r7d1"></b></td>
          <td style="text-align:center" id="c7">:</td>
          <td class="table_specs" style="vertical-align: top;"><b id="r7d2"></b></td>
        </tr>
      </table><br>
      <div class="row">
        <button class="btn blue darken-2 col l4 s5" style="font-size:13px;float:left;"><i class="material-icons left">library_books</i>Brochure</button>
        <button class="btn rqst blue darken-2 l4 col s6" style="font-size:13px;float:right;">Request for quote</button>
      </div>
    </div>
    
  </div>
</div>
<div>
  <br><br>
  <div class="parallax-container related">
      <div class="parallax" ><img src="circuits2.jpg" height="260"></div>
      
      <h3 class="related_text black-text center">YOU MAY ALSO BE INTERESTED IN...</h3>
        
    </div>
  <br>
  <div class="row" id="related_products">
    
    <div class="col s6 m7 l3" id="rel1">
      <div class="card">
        <div class="card-image" id="ri1">
          
        </div>
        <div class="card-action" id="rl1">
        </div>
        <div class="card-content" id="rd1">
        </div>
        
      </div>
    </div>

    <div class="col s6 m7 l3" id="rel2">
      <div class="card">
        <div class="card-image" id="ri2">
          
        </div>
        <div class="card-action" id="rl2">
        </div>
        <div class="card-content" id="rd2">
        </div>
      </div>
    </div>

    <div class="col s6 m7 l3" id="rel3">
      <div class="card">
        <div class="card-image" id="ri3">
          
        </div>
        <div class="card-action" id="rl3">
        </div>
        <div class="card-content" id="rd3">
        </div>
      </div>
    </div>

    <div class="col s6 m7 l3" id="rel4">
      <div class="card">
        <div class="card-image" id="ri4">
          
        </div>
        <div class="card-action" id="rl4">
        </div>
        <div class="card-content" id="rd4">
        </div>
      </div>
    </div>
    
  </div>
</div>
<br><br>
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
              <li class="flink"><a class="white-text foot" href="project_page.php?id=ntpc_rihand">NTPC Rihand</a></li>
              <li class="flink"><a class="white-text foot" href="project_page.php?id=patna_high_court">Patna High Court</a></li>
              <li class="flink"><a class="white-text foot" href="project_page.php?id=patna_railway_station">RAILWAY Station Display</a></li>
              <li class="flink"><a class="white-text foot" href="project_page.php?id=shakti_bhawan"">SHAKTI BHAWAN</a></li>
              <li class="flink"><a class="white-text foot" href="project_page.php?id=panki">PANKI</a></li>
              <li class="flink"><a class="white-text foot" href="project_page.php?id=coach_guidance_system">COACH GUIDANCE SYSTEM</a></li>
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
        <a class="btn-floating btn-large blue darken-2 top">
          <i class="large material-icons">navigation</i>
        </a>
      
      </div>
    </div>
    <hr>
    <div class="footer-copyright">
      <div class="container foot">
        © 2017 Copyright Electromed. All rights reserved.
        <span style="float:right;color:#f5f5f5;font-size:12px;">Designed by Abhishek Tiwari</span>
      </div>
    </div>
  </footer>
</body>
</html>