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
    <title><?php echo $title; ?> - Manufacturer and supplier - Electromed, Lucknow</title>
    <!-- CSS  -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!--Import jQuery before materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>‌
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script src="action.js" type="text/javascript"></script>
    <link rel="import" href="includes.html">

  </head>

  <body id="product_page">
  <?php include_once("analyticstracking.php") ?>
   
    <!-- ====================================================== -->
    <!-- Top NavBar -->

            <?php include('include/navbar.php'); ?> 

    <!-- ====================================================== -->


<div class="row">
        <div class="col l2 m2 s12">
                    <a href="project_list.html" class="btn blue darken-2 category-btn" onclick="Materialize.showStaggeredList('#staggered-test')" style="width:100%;">Projects</a>
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
          <a href="project_list.html" class="breadcrumb black-text" id="pre2">Projects</a>
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


<!-- ====================================================== -->
<!-- FEATURES -->

<div class="row">
  <div class="col l6 offset-l3 s12 m6 offset-m3">
        <table class="striped" style="line-height: 110%;">
        <blockquote class="headName1" style="font-size:21px;"><u>Features</u></blockquote>
        <col width="30%">
        <col width="0.5%">
        <col width="69.5%">
        <?php 
          $d1="d1";
          $d2="d2";
          for ($i = 1; $i <= 7; $i++) {
            echo "<tr id=\"r$i\">
                    <td class=\"table_specs key\" style=\"vertical-align: top;\"><b id=\"r$i$d1\"></b></td>
                    <td style=\"text-align:center\" id=\"c$i\">:</td>
                    <td class=\"table_specs value\" style=\"vertical-align: top;\" id=\"r$i$d2\"></td>
                  </tr>";
          };
        ?>


      </table>
    </div>
</div>

<!-- ====================================================== -->


<!-- ====================================================== -->
<!-- Other projects -->    

<div class="overlay" onClick="style.pointerEvents='none'"></div>
        <div id="map" class="center"><?php echo $map; ?>
        </div>
<br><br>
<div>
  <p class="custom-text blue darken-3 white-text" style="text-align:center;font-size:22px;padding-top:2px;line-height: 60px;">OTHER PROJECTS</p> 
   <div class="row" id="related_products">
    
    <?php 
      for ($i = 1; $i <= 4; $i++) {
        echo "<div class=\"col s6 m7 l3\" id=\"rel$i\">
                <div class=\"card\">
                  <div class=\"card-image\" id=\"ri$i\"></div>
                  <div class=\"card-action\" id=\"rl$i\"></div>
                  <div class=\"card-content\" id=\"rd$i\"></div>
                </div>
              </div>";
      };
    ?>

    
  </div>
</div>

<!-- ====================================================== -->
<!-- Footer -->    


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
          <li class="flink"><a class="white-text foot" href="products.php?id=hd_video_wall&type=1">HD LED WALL</a></li>
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
          <div class="col l1 s1 m1"><i class="material-icons prefix white-text text-darken-2" >phone</i></div>
          <div class="col l8 offset-l1 s11 m8 offset-m1"><p class="white-text foot" style="display:inline;">+91 941 503 9393</p></div>
        </div>
        
        <div class="row">
          <div class="col l1 s1 m1"><i class="material-icons prefix white-text text-darken-2"">email</i></div>
          <div class="col l8 offset-l1 s11 m8 offset-m1"><p class="white-text foot" style="display:inline;">info@electromed.co.in</p></div>
        </div>
        <div class="row">
          <div class="col l1 s1 m1"><i class="material-icons prefix white-text text-darken-2"">room</i></div>
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

<!-- ====================================================== -->

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