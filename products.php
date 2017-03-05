<?php
$x= $_GET['id'];
$type=$_GET['type'];
$link='';
$title='';
$desc='';
$res='';
$brochure='';
$done='false';
include('submit.php');
if($type==1){
$link='product_list.php?id=LED_display&num=3';
if($x=='true_color_display'){
  $title='True Color Display';
  $desc='True color HD screen “offers advanced resolution, brightness and clarity and shows colors in their most natural tones, as they were meant to be seen.” ';
}
else if($x=='tri_color_display'){
  $title='Tri Color Display';
  $desc='TRI color display board is applauded for the features like compact design, low electricity consumption and user friendly functions.';
}
else{
  $title='Single Color Display';
  $desc='Single color display board is one of the most presentable for pollution & Environment control parameters.';
}
}

else if($type==2){
$link='product_list.php?id=Product_for_office&num=4';
if($x=='token_display'){
  $title='Digital Token';
  $desc='Token display system provides easiest way to inform the customer or patient about his / her status while waiting.';
  $brochure='Token Display';
}
else if($x=='digital_clock'){
  $title='Digital Clock';
  $desc='LED Display Clocks are widely used in factories, offices, large public areas, shopping centers, warehouses and similar large areas';
  $brochure='digital clock';
}
else if($x=='interest_rate_display_board'){
  $title='Digital Interest Rate Display Board';
  $desc='Interest Rate Display Board is ideal for banks. Date, time, deposit period, interest rate is displayed on an attractive background.';
$brochure='interest rate display board';
}
else{
  $title='Digital Scrolling Display';
  $desc='Scrolling Display is having high brightness. User can store and scroll a lot of messages. Ideal for hospitals, pathologies, banks, shops etc.';
  $brochure='Scrolling Display';
}
}

else if($type==3){
$link='product_list.php?id=projects&num=3';

}
else if($type==4){
$link='product_list.php?id=Industrial_Instruments&num=10';
if($x=='flow_monitor'){
  $title='Digital Flow Monitor';
  $desc='Flow monitor is an advanced display system to monitor juice and water flow parameters. It has a Totalizer which gives error free total fluid flow over the season. Transfer from current hour to previous hour occurs when hour of clock changes (synchronized with clock)';
$brochure='flow monitor';
}
else if($x=='line_frequency_monitor'){
  $title='Digital Line Frequency Monitor';
  $desc='Line Frequency Monitors is used to measures power line frequency, highly accurate reading and non blinking display. Microcontroller based design. ERTL tested.';
  $brochure='line frequency monitor';
}
else if($x=='megawatt_panel'){
  $title='Digital Mega Watt Panel';
  $desc='Megawatt Panels are essential to power plants. Generation data can be displayed all over the plant.';
  $brochure='mega watt panels';
}
else if($x=='process_indicator'){
  $title='Digital Process Indicator';
  $desc='Process indicators are suitable for displaying process parameters like flow, temperature, level, speed, pH etc. Available in different digit heights.';
  $brochure='process indicator';
}
else if($x=='ph_meter'){
  $title='Digital Ph Meter';
  $desc='Ph meters are used to measure pH of all types of liquids. We supply the pH meters with combination electrode, electrode stand with clamp and temperature compensation.';
  $brochure='ph meter';
}
else if($x=='tachometer'){
  $title='Digital Tachometer';
  $desc='Tachometers are used for monitoring the rpm of machines. The sensor is contactless. Ideal for sugar mills, heavy industries etc';
$brochure='tachometer';
}
else if($x=='temperature_controller'){
  $title='Digital Temperature Controller';
  $desc='Temperature Controllers are used in a variety of industrial applications like turbines, furnaces, blow moulding, etc. where the measurement/control of temperature is of vital importance.';
  $brochure='Temperature Controller';
}
else if($x=='twilight_switches'){
  $title='Digital Twilight Switches';
  $desc='Twilight switch activates with respect to the ambient light. The device as its name suggests, switches ON and OFF at dusk and dawn.';
$brochure='Twilight Switch';
}
else if($x=='industrial_display'){
  $title='Digital Industrial Display';
  $desc='Industrial displays are made to customer specifications. All sorts of calculations can be done internally and displayed.';
}
else{ 
  $title='Digital Weighing Scale Monitor';
  $desc='Weighing Scale Monitor is used to monitoring the number of tippings of juice and water Fully automatic operation and convenience of remote display.';
  $brochure='weighing scale monitor';
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="<?php echo $desc; ?>" />
    <title><?php echo $title; ?> - Manufacturer and supplier - Electromed, Lucknow</title>

    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!--Import jQuery before materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>‌
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script src="action.js" type="text/javascript"></script>
   <script>
    $(document).ready(function(){
     if($(window).width()<=500)
     window.scroll(0,270); 
    Materialize.showStaggeredList('#staggered-test');
    $('.button-collapse').sideNav();
    $('.materialboxed').materialbox();
    });
 </script>
  </head>
  <body id="product_page">
    <div class="dropdown-content" id="products" style="position:fixed;z-index:10">
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
    <div class="z-depth-5 card-panel hoverable" id="request_for_quote">
      <fieldset id="rqst_form">
        <legend class="white-text blue darken-2" style="position:relative;height: 40px;width: 100%;border-radius:3px"><center class="headNamev2" style="padding-top:3px">Request for quote</center></legend>
        <form action="" method="post">
          <input id="name" type="text" name="name" class="validate" placeholder="Name" required style="font-size:15px;">
          <input id="email" type="email" name="email" class="validate" placeholder="Email" required style="font-size:15px;">
          <input id="poi" type="text" name="poi" value='<?php echo $title; ?>'>
          <input id="company" type="text" name="industry" class="validate" placeholder="Company" style="font-size:15px;">
          <input id="phone" type="text" class="validate" name="phone" placeholder="Phone" required style="font-size:15px;">
          <textarea name="query" placeholder="Message" style="font-size:15px;"></textarea>
          <div class="row">
            <div class="col l4">
              <button class="btn blue darken-2" type="submit" name="submit" id="submit">Submit
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
    <div class="z-depth-5 card-panel hoverable" id="popup">
      <p class="custom-text" style="color:#263238;text-align:center;font-size:17px;"><?php echo $res; ?><br><br><a href=""><u>Close</u></a></p>
    </div>
 <br>
    <div class="row">
      <div class="col l2 m2 s12">
        
        <a a href="product_list.php?id=LED_display&num=3" class="btn blue darken-2 category-btn" style="width:100%" onclick="Materialize.showStaggeredList('#staggered-test')">Products</a>
        <ul id="staggered-test" class="collapsible" data-collapsible="accordion">
          <li style="opacity: 0;">
            <div class="collapsible-header <?php if($type==1) echo 'active'; ?>">LED Display</div>
            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>
              <a href="products.php?id=true_color_display&type=1" style="font-size:14px;padding-left:10%;<?php if($x=='true_color_display') echo 'color:red'; ?>">TRUE COLOR HD SCREEN</a><br>
              <hr>
              <a href="products.php?id=tri_color_display&type=1" style="font-size:14px;padding-left:10%;<?php if($x=='tri_color_display') echo 'color:red'; ?>">TRI COLOR DISPLAY BOARDS</a><br>
              <hr>
              <a href="products.php?id=uni_color_display&type=1" style="font-size:14px;padding-left:10%;<?php if($x=='uni_color_display') echo 'color:red'; ?>">SINGLE COLOR DISPLAY BOARDS</a><br><br>
              
            </div>
          </li>
          <li style="opacity: 0;">
            <div class="collapsible-header <?php if($type==2) echo 'active'; ?>">Product for Office</div>
            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>
              
              <a href="products.php?id=token_display&type=2" style="font-size:14px;padding-left:10%;<?php if($x=='token_display') echo 'color:red'; ?>">TOKEN DISPLAY</a><br>
              <hr>
              <a href="products.php?id=digital_clock&type=2" style="font-size:14px;padding-left:10%;<?php if($x=='digital_clock') echo 'color:red'; ?>">DIGITAL CLOCKS</a><br>
              <hr>
              <a href="products.php?id=interest_rate_display_board&type=2" style="font-size:14px;padding-left:10%;<?php if($x=='interest_rate_display_board') echo 'color:red'; ?>">INTEREST RATE DISPLAY BOARD</a><br>
              <hr>
              <a href="products.php?id=scrolling_display&type=2" style="font-size:14px;padding-left:10%;<?php if($x=='scrolling_display') echo 'color:red'; ?>">SCROLLING DISPLAY</a><br><br>
            </div>
            
          </li>
          <li style="opacity: 0;">
            <div class="collapsible-header <?php if($type==4) echo 'active'; ?>">Industrial Instruments</div>
            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>
              <a href="products.php?id=flow_monitor&type=4" style="font-size:14px;padding-left:10%;<?php if($x=='flow_monitor') echo 'color:red'; ?>">FLOW MONITOR</a><br>
              <hr>
              <a href="products.php?id=line_frequency_monitor&type=4" style="font-size:14px;padding-left:10%;<?php if($x=='line_frequency_monitor') echo 'color:red'; ?>">LINE FREQUENCY MONITOR</a><br>
              <hr>
              <a href="products.php?id=megawatt_panel&type=4" style="font-size:14px;padding-left:10%;<?php if($x=='megawatt_panel') echo 'color:red'; ?>">MEGA WATT PANEL</a><br>
              <hr>
              <a href="products.php?id=process_indicator&type=4" style="font-size:14px;padding-left:10%;<?php if($x=='process_indicator') echo 'color:red'; ?>">PROCESS INDICATORS</a><br>
              <hr>
              <a href="products.php?id=ph_meter&type=4" style="font-size:14px;padding-left:10%;<?php if($x=='ph_meter') echo 'color:red'; ?>">PH METER</a><br>
              <hr>
              <a href="products.php?id=tachometer&type=4" style="font-size:14px;padding-left:10%;<?php if($x=='tachometer') echo 'color:red'; ?>">TACHOMETER</a><br>
              <hr>
              <a href="products.php?id=temperature_controller&type=4" style="font-size:14px;padding-left:10%;<?php if($x=='temperature_controller') echo 'color:red'; ?>">TEMPERATURE CONTROLLER</a><br>
              <hr>
              <a href="products.php?id=twilight_switches&type=4" style="font-size:14px;padding-left:10%;<?php if($x=='twilight_switches') echo 'color:red'; ?>">TWILIGHT SWITCHES</a><br>
              <hr>
              <a href="products.php?id=industrial_display&type=4" style="font-size:14px;padding-left:10%;<?php if($x=='industrial_display') echo 'color:red'; ?>">INDUSTRIAL DISPLAY</a><br>
              <hr>
              <a href="products.php?id=weighing_scale_monitor&type=4" style="font-size:14px;padding-left:10%;<?php if($x=='weighing_scale_monitor') echo 'color:red'; ?>">WEIGHING SCALE MONITOR</a><br><br>
            </div>
          </li>
        </ul>
      </div>
      
      <div class="col l10 m10 s12">
      <div class="nav-wrapper container" style="float:left">
            <a href="product_list.php?id=LED_display&num=3" class="breadcrumb black-text">Products</a>
            <a href="<?php echo $link; ?>" class="breadcrumb black-text" id="pre2"></a>
            <a href="" class="breadcrumb black-text" id="curr"><?php echo $title; ?></a>
        </div>
        <div class="row product-images">
          <div class="col l5 s12 m5" id="product">
            <div class="row">
              <br>
              <div class="col l12 s12 m11 materialboxed" id="product_image">
                
              </div>
            </div>
            <br><br>
            <div class="row">
              <div class="col l3 m3 s3 btn1" id="product_image1"></div>
              <div class="col l3 m3 s3 btn2" id="product_image2"></div>
              <div class="col l3 m3 s3 btn3" id="product_image3"></div>
            </div>
          </div>
          <div class="col l6 s12 m6" id="specs">
              <br>
            <blockquote class="headName1" style="font-size:21px;"><u id="info">Overview</u></blockquote>
            <p class="overview-text"><?php echo $desc; ?></p>
            <br>

        <table id="myTable" class="striped" style="line-height: 100%;">
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
          </table><br>
          
        
      </div>
    </div>
  </div>
</div>
<div class="row">
  <a href="Brochures/<?php echo $brochure; ?>.pdf" class="btn blue darken-2 col l2 s5" id="dwnld-btn" download><i class="material-icons left">library_books</i>Brochure</a>
  <button class="btn rqst blue darken-2 l2 col s6" id="rqst-btn" >Request for quote</button>
</div>
<br><br>
<div>
  
  <p class="custom-text blue darken-4 white-text" style="text-align:center;font-size:22px;padding-top:2px;line-height: 60px">YOU MAY ALSO BE INTERESTED IN...</p>
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
              <div class="col l8 offset-l1 s11 m8 offset-m1"><p class="white-text foot" style="display:inline;">+91 941 503 9393</p></div>
            </div>
            
            <div class="row">
              <div class="col l1 s1 m1"><i class="material-icons prefix blue-text text-darken-2">email</i></div>
              <div class="col l8 offset-l1 s11 m8 offset-m1"><p class="white-text foot" style="display:inline;">info@electromed.co.in</p></div>
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
        $('.rqst').click(function(){
    $('#request_for_quote').show();
    });
    $('.close').click(function(){
    $('#request_for_quote').hide();
    });
    $(".top").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "fast");
    return false;
    });
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
    });
    });
 </script>
</body>
</html>