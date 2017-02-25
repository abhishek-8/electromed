<?php
$x= $_GET['id'];
$title='';
$location='';
$map='';
$yoc='2016';
if($x=='ntpc_rihand'){
$title='Digital Display board';
$location='NTPC Rihand';
$map='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14576.191755048914!2d82.7905225946748!3d24.029374604958385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398f2c59eb5f2831%3A0x8b1e37bb4691047f!2sRihand+Power+Station!5e0!3m2!1sen!2sin!4v1487947886125" width="100%" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>';
}
else if($x=='patna_high_court'){
$title='Patna High Court';
$location='Patna High Court';
$map='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7217.581307511619!2d85.121066579728!3d25.608762195407312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed583f19555555%3A0x6d4c4f90b4050300!2sPatna+High+Court!5e0!3m2!1sen!2sin!4v1487948411002" width="100%" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>';
}
else if($x=='patna_railway_station'){
$title='Railway Station Display';
$location='Patna';
$map='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.048553971305!2d85.13494831466679!3d25.60330278370897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed58688297a6f3%3A0x7b2558c82fd5ff4b!2sPatna+Junction!5e0!3m2!1sen!2sin!4v1487948676815" width="100%" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>';
}
else if($x=='shakti_bhawan'){
$title='Shakti Bhawan';
$location='Lucknow';
$map='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.664026429286!2d80.94674901469645!3d26.85063638315426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd0f27dee041%3A0x942567ca68f40ddb!2sShakti+Bhawan!5e0!3m2!1sen!2sin!4v1487948795701" width="100%" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>';
}
else if($x=='panki'){
$title='Panki';
$location='Kanpur';
$map='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28571.43760828574!2d80.22869768609372!3d26.474106102563944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c37c8be4e98d9%3A0xc11b3cde1dcabdea!2sPanki%2C+Kanpur%2C+Uttar+Pradesh!5e0!3m2!1sen!2sin!4v1487948921911" width="100%" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>';
}
else{
$title='Coach Guidance System';
$location='Lucknow';
$map='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.2779857773626!2d80.92220891469601!3d26.831109283162796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfc4b9651ff11%3A0xb37481d152899549!2sLucknow+Charbagh+railway+station!5e0!3m2!1sen!2sin!4v1487949020259" width="100%" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title><?php echo $title; ?> - Manufacturer and supplier - Electromed,Lucknow</title>
    <!-- CSS  -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!--Import jQuery before materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>‌
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script src="action.js" type="text/javascript"></script>
  
  </head>

  <body id="product_page">
    <div class="dropdown-content" id="products" style="z-index: 10;">
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
    
    <div class="dropdown-content" id="projects" style="z-index: 10;">
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
            <li class="active"><a href="projects.html" class="dropdown-button navLink" data-activates="projects">Projects<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="clients.html" class="navLink">Clients</a></li>
            <li><a href="about.html" class="navLink">About</a></li>
            <li><a href="contactForm.php" class="navLink">Contact</a></li>
          </ul>
          
          <ul id="nav-mobile" class="side-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="product_list.php?id=LED_display&num=3">Products<i class="material-icons right">arrow_drop_down</i></a></li>
            <li class="active"><a href="projects.html">Projects<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="clients.html">Clients</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contactForm.php">Contact Us</a></li> 
          </ul>

          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

        </div>
      </nav>
    </div>
   

<div class="row">
        <div class="col l2 m2 s12">
                    <a href="projects.html" class="btn blue darken-2 category-btn" onclick="Materialize.showStaggeredList('#staggered-test')" style="width:100%;">Projects</a>
                    <ul id="staggered-test" class="collapsible" data-collapsible="accordion">
                         <li style="opacity: 0;">
                            <div class="collapsible-header active">Featured Projects</div>
                            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>
                                <a href="project_page.php?id=ntpc_rihand" style="font-size:14px;padding-left:10%;<?php if($x=='ntpc_rihand') echo 'color:red'; ?>">NTPC RIHAND</a><br>
                                <hr>
                                <a href="project_page.php?id=patna_high_court" style="font-size:14px;padding-left:10%;<?php if($x=='patna_high_court') echo 'color:red'; ?>">PATNA HIGH COURT</a><br>
                                <hr>
                                <a href="project_page.php?id=patna_railway_station" style="font-size:14px;padding-left:10%;<?php if($x=='patna_railway_station') echo 'color:red'; ?>">RAILWAY STATION DISPLAY</a><br>
                                <hr>
                                <a href="project_page.php?id=shakti_bhawan" style="font-size:14px;padding-left:10%;<?php if($x=='shakti_bhawan') echo 'color:red'; ?>">SHAKTI BHAWAN</a><br>
                                <hr>
                                <a href="project_page.php?id=panki" style="font-size:14px;padding-left:10%;<?php if($x=='panki') echo 'color:red'; ?>">PANKI</a><br>
                                <hr>
                                <a href="project_page.php?id=coach_guidance_system" style="font-size:14px;padding-left:10%;<?php if($x=='coach_guidance_system') echo 'color:red'; ?>">COACH GUIDANCE SYSTEM</a><br><br>
                            </div>
                        </li>
                    </ul>
                </div>

<div class="col l10 m10 s12"> 
<div class="nav-wrapper container">
          <a href="projects.html" class="breadcrumb black-text" id="pre2">Projects</a>
          <a href="#" class="breadcrumb black-text" id="curr"><?php echo $title; ?></a>
      </div> 
<div class="row">  
        <div class="col l10 s12 m10" id="product">
        <div class="slider">
       
            <ul class="slides">
              <li class="project_image" id="project_image1">
                
              </li>
              <li class="project_image" id="project_image2">
                
              </li>
              <li class="project_image" id="project_image3">
                
              </li>
            </ul>
          </div>
        </div>
      
        <div class="col l2 m2 s12">
          
         <table class="striped" style="line-height:2%">
          <tr>
            <td style="padding:4px"><p class="custom-text" style="color:#263238;font-size:15px;">Location</p> 
            </td>
          </tr>
          <tr>
            <td style="padding:4px"><p class="custom-text" style="color:#263238;font-size:17px;"><?php echo $location; ?></p></td>
          </tr>
          <tr>
            <td style="padding:4px"><p class="custom-text " style="color:#263238;font-size:15px;">Year of Completion</p></td>
          </tr>
          <tr>
            <td style="padding:4px"><p class="custom-text" style="color:#263238;font-size:17px;"><?php echo $yoc; ?></p></td>
          </tr>
          </table>
          </div>
          </div>
        
        

</div>
</div>

<div class="row">
  <div class="col l6 offset-l3 s12 m6 offset-m3">
        <table class="striped" style="line-height: 110%;">
        <blockquote class="headName1" style="font-size:21px;"><u>Features</u></blockquote>
        <col width="30%">
        <col width="0.5%">
        <col width="69.5%">
        <tr id="r1">
          <td class="table_specs key" style="vertical-align: top;"><b id="r1d1"></b></td>
          <td style="text-align:center" id="c1">:</td>
          <td class="table_specs value" style="vertical-align: top;" id="r1d2"></td>
        </tr>
        <tr id="r2">
          <td class="table_specs" style="vertical-align: top;"><b id="r2d1"></b></td>
          <td style="text-align:center" id="c2">:</td>
          <td class="table_specs" style="vertical-align: top;" id="r2d2"></td>
        </tr>
        <tr id="r3">
          <td class="table_specs" style="vertical-align: top;"><b id="r3d1"></b></td>
          <td style="text-align:center" id="c3">:</td>
          <td class="table_specs" style="vertical-align: top;" id="r3d2"></td>
        </tr>
        <tr id="r4">
          <td class="table_specs" style="vertical-align: top;"><b id="r4d1"></b></td>
          <td style="text-align:center" id="c4">:</td>
          <td class="table_specs" style="vertical-align: top;" id="r4d2"></td>
        </tr>
        <tr id="r5">
          <td class="table_specs" style="vertical-align: top;"><b id="r5d1"></b></td>
          <td style="text-align:center" id="c5">:</td>
          <td class="table_specs" style="vertical-align: top;" id="r5d2"></td>
        </tr>
        <tr id="r6">
          <td class="table_specs" style="vertical-align: top;"><b id="r6d1"></b></td>
          <td style="text-align:center" id="c6">:</td>
          <td class="table_specs" style="vertical-align: top;" id="r6d2"></td>
        </tr>
        <tr id="r7">
          <td class="table_specs" style="vertical-align: top;"><b id="r7d1"></b></td>
          <td style="text-align:center" id="c7">:</td>
          <td class="table_specs" style="vertical-align: top;" id="r7d2"></td>
        </tr>
      </table>
    </div>
</div>
<div class="overlay" onClick="style.pointerEvents='none'"></div>
        <div id="map" class="center"><?php echo $map; ?>
        </div>
<br><br>
<div>
  <p class="custom-text blue white-text" style="text-align:center;font-size:22px;padding-top:2px;line-height: 60px;">OTHER PROJECTS</p> 
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
      $(".top").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "fast");
  return false;
});
$('.slider').slider({full_width: true});
    Materialize.showStaggeredList('#staggered-test');
    $('.parallax').parallax();
    $('.button-collapse').sideNav();
    $('.materialboxed').materialbox();
    set5('<?php echo $x ?>');
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
    });
    });
    </script>
</body>
</html>