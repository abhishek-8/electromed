<?php 
   function isMobile() {
       return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
   }
   
   function createNavbarItems($arr,$type){
       $len = count($arr);
       for( $i=0;$i<$len;$i+=2 ){
           $a=$i+1;
           echo "<p class=\"product_name black-text\" style=\"padding-left:15px;\"><a class=\"black-text\" href=\"products.php?id=$arr[$a]&type=$type\"><x>$arr[$i]</x></a></p>";
       }
   }
   
   function createNavbarTitle($x,$n){
       echo "<p class=\"dropdown_headName\"><a class=\"black-text\" href=\"product_list.php?type=$n\" style=\"padding-top:15px;font-size:18px;\"><b><u>$x</u></b></a></p>";
   }

   function createIndustryItems($name,$link){
       echo "<p class=\"product_name black-text\" style=\"padding-left:15px;font-size:18px;\"><a class=\"black-text\" href=\"industries.php?id=$link\"><x>$name</x></a></p>";
//       echo "<a id=\"thumbnail\" href=\"industries.php?id=$link\"><p class=\"product_name black-text\" style=\"padding-left:15px;font-size:18px;\"><x><b>$name</b></x></p></a>";
//       echo "<div id=\"title\"><img src=\"http://dummyimage.com/150x150/0066ff/fff\"></div>";

   }   

   function createSidebarItems($x,$n){
      echo "<li><a class=\"waves-effect waves-blue\" href=\"product_list.php?type=$n\">$x</a></li>";
      echo "<li><div class=\"divider\"></div></li>";
   }
   ?>




<div class="dropdown-content" id="products" >
   <div class="container" >
      <div class="row" >
         <?php
            echo "<div class=\"col l4\">";
            
                    
            $cat1="VIDEO WALL";
            $arr1=array(
                "FULL COLOR VIDEO WALL","fullcolor_led_wall",
                "TRI COLOR VIDEO WALL","tricolor_led_wall",
                "SINGLE COLOR VIDEO WALL","unicolor_led_wall",
                "POLLUTION VIDEO WALL","pollution_led_wall",
                "PARAMETER VIDEO WALL","parameter_led_wall");
            $type1=1;
            createNavbarTitle($cat1,$type1);
            createNavbarItems($arr1,$type1);
            
            $cat2="LED LINE DISPLAY";
            createNavbarTitle($cat2,"2");
            $arr2=array(
                "SINGLE COLOR SCROLLING DISPLAY","unicolor_scrolling_display",
                "TRI  COLOR SCROLLING DISPLAY","tricolor_scrolling_display");
            $type2=2;
            createNavbarItems($arr2,$type2);
            
            echo "</div><div class=\"col l4\">";
            
            $cat6="RATE DISPLAY BOARD";
            createNavbarTitle($cat6,"6");
            $arr6=array(
                "INTEREST RATE DISPLAY","interest_rate_display_board",
                "GOLD RATE DISPLAY","gold_rate_display",
                "STOCK INVENTORY DISPLAY","stock_display",
                "PETROL PUMP DISPLAY","petrol_pump_display");
            $type6=6;
            createNavbarItems($arr6,$type6);
            
            $cat5="AUTOMATIC SWITCHES";
            createNavbarTitle($cat5,"5");
            $arr5=array(
                "TWILIGHT SWITCHES","twilight_switches",
        //        "PUMP CONTROLLER","pump_controller",
                "TEMPERATURE CONTROLLER","temperature_controller");
            $type5=5;
            createNavbarItems($arr5,$type5);
            
            $cat7="INDUSTRIAL CLOCKS";
            createNavbarTitle($cat7,"7");
            $arr7=array(
                "DIGITAL CLOCKS","digital_clock",
                "GPS CLOCKS","gps_clock");
            $type7=7;
            createNavbarItems($arr7,$type7);
            
            
            echo "</div><div class=\"col l4\">";
            
            $cat4="DIGITAL INSTRUMENTS";
            createNavbarTitle($cat4,"4");
            $arr4=array(
                "FLOW MONITOR","flow_monitor",
                "LINE FREQUENCY MONITOR","line_frequency_monitor",
                "MEGA WATT PANEL","megawatt_panel",
                "PROCESS INDICATORS","process_indicator",
                "PH METER","ph_meter",
                "TEMPERATURE HUMIDITY INDICATOR", "temp_hum_indicator",
                "TACHOMETER","tachometer",
                "INDUSTRIAL DISPLAY","industrial_display",
                "ISOLATED CONVERTER","isolated_converter",
                "WEIGHING SCALE MONITOR","weighing_scale_monitor");
            $type4=4;
            createNavbarItems($arr4,$type4);
            
            $cat8="TOKEN MANAGEMENT";
            createNavbarTitle($cat8,"8");
            $arr8=array(
                "TOKEN DISPENSER","token_dispenser",
                "TOKEN DISPLAY","token_display");
            $type8=8;
            createNavbarItems($arr8,$type8);
            
            echo "</div>";
            ?>       
      </div>
   </div>
</div>

<div class="dropdown-content" id="industries" >
   <div class="container" >
      <div class="row" >
         <?php
            echo "<div class=\"col l4\" >";
            $name = "Sugar";
            
            createIndustryItems("SUGAR","sugar");
            createIndustryItems("ENERGY","energy");
            createIndustryItems("HOSPITALS AND CLINICS","hospitals");
            createIndustryItems("OFFICES","offices");
            createIndustryItems("CHEMICAL","chemical");
                      
            echo "</div>";
            ?>       
            <!--a id="thumbnail" href="#"><img src="http://dummyimage.com/150x150/0066ff/fff"></a-->
            <div class="col l8" id="title">
              <div ><img src="http://dummyimage.com/150x150/0066ff/fff"></div>
            </div>
      </div>
   </div>
</div>
<div class="navbar-upper" style="height: 100px;background-color: #ffffff;">
   <nav class="z-depth-0">
      <div class="nav-wrapper"  style="background-color: #ffffff;padding-top: 12px;">
         <div class="row">
            <div class="col s12">
               <a href="/" class="brand-logo" style="display:block;float:left;"><img src="LOGO.jpg" 
                      <?php 
                        if (isMobile()){
                          echo "style=\"height:70px;\">";
                        }
                        else{
                          echo "style=\"height:80px; max-width: 100%;padding-left: 50px;\">";
                        }
                      ?>
                </a>
               <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <!--li>
                     <form style="height:64px;">
                        <div class="input-field ">
                           <!--input id="search" type="search" required placeholder="Search">
                           <label class="label-icon" for="search"><i class="this material-icons">search</i></label>
                           <                   <i class="material-icons" style="">close</i> >
                        </div>
                     </form>
                  </li-->
                  <!-- <li><a href="#modal1"><i class="material-icons">search</i></a></li> -->
                  <!-- <li><a href="#modal1"><i class="material-icons">view_module</i></a></li> -->
                  <!-- <li><a href="#modal1"><i class="material-icons">refresh</i></a></li> -->
                  <li><a class="waves-effect waves-light btn btn-large animated tada red accent-4" href="#modal1" style="font-size: 25px;"><i class="material-icons left">phone</i>+91&nbsp;94150&nbsp;85804</a></li>
                  <li><a href="#sheet1"><i class="material-icons">more_vert</i></a></li>
               </ul>
            </div>
         </div>
      </div>
   </nav>
</div>
<div class="navbar-lower">
   <nav class="z-depth-0 nav-extended">
      <div class="nav-wrapper"  style="background-color: #dddddd;">
         <div class="row">
            <div class="col s12">
               <?php if(isMobile()){ echo "<a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse show-on-large\"><i class=\"material-icons\">menu</i></a>";}?>
               <ul id="nav-mobile" class="left hide-on-med-and-down">

               <li><a class="fadeInLogo brand-logo animated slideInUp" href="/">
                  <!-- M -->
                  <!-- <img src="https://materializecss.com/res/materialize.svg" alt="" style="margin-top:12px;" height="40px"/> -->
             <img src="images/logoIconNavbar.gif">    </a></li>
                  <li><a style="color:#dddddd;" >EM</a>
               
               
                  <li><a href="product_list.php?type=1" class="dropdown-button black-text navLink" style="right: 0; font-size: 18px;" data-activates="products"><b>PRODUCTS</b><i class="material-icons right">arrow_drop_down</i></a>
                  <!--li><a href="industries.php?id=sugar" class="dropdown-button black-text navLink" style="right: 0; font-size: 18px;" data-activates="industries"><b>INDUSTRIES</b><i class="material-icons right">arrow_drop_down</i></a-->
                  <li><a href="industry_list.php" class="dropdown-button black-text navLink" style="right: 0; font-size: 18px;" data-activates="industries"><b>INDUSTRIES</b><i class="material-icons right">arrow_drop_down</i></a>
                  <li><a href="embedded_solutions.php" style="font-size:18px;color:#000;"><b>SOLUTIONS</b></a></li>
               </ul>
               <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a href="careers.php" style="font-size:18px;color:#000;"><b>CAREERS</b></a></li>
                  <li><a href="about.php" style="font-size:18px;color:#000;"><b>ABOUT</b></a></li>
                  <li><a href="contact.php" style="font-size:18px;color:#000;"><b>CONTACT</b></a></li>
               </ul>
            </div>
      </div>
     
</div>
</nav>
</div>

<ul class="side-nav grey darken-2" id="mobile-demo">
                  <li class="sidenav-header white">
                     <div class="row">
                        <div class="col s10">
                          <a href="/"><img src="LOGO.jpg" height="40px" alt="" class="responsive-img valign profile-image"></a>
                        </div>
                     </div>
                  </li>

                  <li class="white"><a href="about.php" class="waves-effect waves-blue"></i>ABOUT</a></li>
                  <li class="white">
                     <ul class="collapsible collapsible-accordion">
                        <li>
                           <a class="collapsible-header waves-effect waves-blue"><b>PRODUCTS</b><i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                           <div class="collapsible-body">
                              <ul>
                                 <?php createSidebarItems($cat1,1); ?>
                                 <?php createSidebarItems($cat2,2); ?>
                                 <?php createSidebarItems($cat4,4); ?>
                                 <?php createSidebarItems($cat5,5); ?>
                                 <?php createSidebarItems($cat6,6); ?>
                                 <?php createSidebarItems($cat7,7); ?>
                                 <?php createSidebarItems($cat8,8); ?>
                              </ul>
                           </div>
                        </li>
                     </ul>
                  </li>
                  <li class="white"><a href="embedded_solutions.php" class="waves-effect waves-blue"></i>SOLUTIONS</a></li>     
                  <li class="white"><a href="careers.php" class="waves-effect waves-blue"></i>CAREERS</a></li>     
                  <li class="white"><a href="contact.php" class="waves-effect waves-blue">CONTACT US</a></li>
               </ul>

<!--script type="text/javascript" src="https://zcs1.maillist-manage.com/js/jquery-1.11.0.min.js"></script>
<script type='text/javascript' src='https://zcs1.maillist-manage.com/js/jquery-ui-1.10.4.custom.min.js'></script>
<script type='text/javascript' src='https://zcs1.maillist-manage.com/js/jquery-migrate-1.2.1.min.js'></script>
<script type="text/javascript" src='https://zcs1.maillist-manage.com/js/ui.datepicker.js'  charset="utf-8"></script>
<script type="text/javascript" src="https://zcs1.maillist-manage.com/js/jquery.form.js"></script>
<script type="text/javascript" src="https://zcs1.maillist-manage.com/js/optin_min.js"></script-->


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js'></script>
  

<script>
   $(document).ready(function(){
       $(".dropdown-button").dropdown({
           hover:true,
           constrain_width: true,
           gutter: 0,
           belowOrigin: true
       });
       $('.button-collapse').sideNav();
   });
</script>

<script>
// AFFIX LOWER NAVBAR ON SCROLL
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
        $(".navbar-lower").addClass("navbar-fixed");
    }
    else {
        $(".navbar-lower").removeClass("navbar-fixed");     
    }
});


// FADE IN SMALL LOGO AND FAB ON SCROLL
$(window).scroll(function() {
  var scrollPosition = $(this).scrollTop();
  var $fadeInLogo = $('.fadeInLogo');
  var $growInFab = $('.halfway-fab');
  if (scrollPosition > 128) {
    // Fade in logo & bring in FAB
    $fadeInLogo.fadeIn(200);
    $growInFab.removeClass("scale-out");
  } else {
    // Fade out logo & remove FAB
    $fadeInLogo.fadeOut(200);
    $growInFab.addClass("scale-out");
  }
});


// MODAL
$(document).ready(function(){
  $('.modal').modal();
});

// DROPDOWNS
$(document).ready(function(){
  $(".dropdown-button").dropdown(
    {
      belowOrigin: true
    }
  );
});

//TABS
$(document).ready(function(){
  $('ul.tabs').tabs();
});

//SCROLLSPY
$(document).ready(function(){
    $('.scrollspy').scrollSpy();
});

// SIDEBAR
$(document).ready(function(){
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
});
</script>