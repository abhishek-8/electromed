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
   ?>


<div class="dropdown-content" id="products" >
   <div class="container" >
      <div class="row" >
         <?php
            echo "<div class=\"col l4\">";
            
            
            $cat3=array("EMBEDDED SOLUTIONS","3");
            createNavbarTitle($cat3[0],$cat3[1]);
            $arr3=array();
            $type3=3;
            
            $cat1=array("LED WALL","1");
            $arr1=array(
                "FULL COLOR LED WALL","fullcolor_led_wall",
                "TRI COLOR LED WALL","tricolor_led_wall",
                "SINGLE COLOR LED WALL","unicolor_led_wall",
                "POLLUTION LED WALL","pollution_led_wall",
                "PARAMETER WALL","parameter_led_wall");
            $type1=1;
            $cat=array($cat1,$arr1);
            createNavbarTitle($cat[0][0],$cat[0][1]);
            createNavbarItems($arr1,$type1);
            
            
            createNavbarTitle("LED LINE DISPLAY","2");
            $arr2=array(
                "SINGLE COLOR SCROLLING DISPLAY","unicolor_scrolling_display",
                "TRI  COLOR SCROLLING DISPLAY","tricolor_scrolling_display");
            $type2=2;
            createNavbarItems($arr2,$type2);
            
            echo "</div><div class=\"col l4\">";
            
            
            createNavbarTitle("RATE DISPLAY BOARD","6");
            $arr6=array(
                "INTEREST RATE DISPLAY","interest_rate_display_board",
                "GOLD RATE DISPLAY","gold_rate_display",
                "STOCK INVENTORY DISPLAY","stock_display",
                "PETROL PUMP DISPLAY","petrol_pump_display");
            $type6=6;
            createNavbarItems($arr6,$type6);
            
            
            createNavbarTitle("AUTOMATIC SWITCHES","5");
            $arr5=array(
                "TWILIGHT SWITCHES","twilight_switches",
                "PUMP CONTROLLER","pump_controller",
                "TEMPERATURE CONTROLLER","temperature_controller",
                "TIMER SWITCHES","timer_swiches");
            $type5=5;
            createNavbarItems($arr5,$type5);
            
            
            createNavbarTitle("INDUSTRIAL CLOCKS","7");
            $arr7=array(
                "DIGITAL CLOCKS","digital_clock",
                "GPS CLOCKS","gps_clock");
            $type7=7;
            createNavbarItems($arr7,$type7);
            
            
            echo "</div><div class=\"col l4\">";
            
            
            createNavbarTitle("DIGITAL INSTRUMENTS","4");
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
            
            
            createNavbarTitle("TOKEN MANAGEMENT","8");
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
<div class="navbar-upper" style="height: 100px;background-color: #ffffff;">
   <nav class="z-depth-0">
      <div class="nav-wrapper"  style="background-color: #ffffff;padding-top: 12px;">
         <div class="row">
            <div class="col s12">
               <a href="/" class="brand-logo" style="display:block;float:left;"><img src="LOGO.jpg" style="height: 80px;max-width: 100%;padding-left: 50px;"></a>
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
                  <li><a style="color:#dddddd;" >A</a>
               
               
                  <li><a href="product_list.php?id=LED_Wall&num=3" class="dropdown-button black-text navLink" style="right: 0;" data-activates="products"><b>PRODUCTS</b><i class="material-icons right">arrow_drop_down</i></a>
               </ul>
               <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a href="about.php" style="font-size:18px;color:#000;"><b>ABOUT</b></a></li>
                  <li><a href="contact.php" style="font-size:18px;color:#000;"><b>CONTACT</b></a></li>
               </ul>
            </div>


            <!--div class="nav-content ">
            <div class="col s12 nav-content red lighten-3">
               <ul class="tabs tabs-transparent ">
                  <li class="tab"><a href="#tab1" class="active">Navbar tab</a></li>
                  <li><a href="#!" class="tab dropdown-button" data-activates="products">Contact<i class="material-icons right">arrow_drop_down</i></a></li>
                  <li class="tab"><a href="#tab2">Another</a></li>
                  <li class="tab"><a href="#tab3">Third one</a></li>
                  <li class="tab"><a href="#tab4">Fourth tab</a></li>
               </ul>
               <ul class="side-nav grey darken-2" id="mobile-demo">
                  <li class="sidenav-header red lighten-2">
                     <div class="row">
                        <div class="col s4">
                           <img src="https://gravatar.com/avatar/961997eb7fd5c22b3e12fb3c8ca14e11?s=80&d=https://codepen.io/assets/avatars/user-avatar-80x80-bdcd44a3bfb9a5fd01eb8b86f9e033fa1a9897c3a15b33adfc2649a002dab1b6.png" width="48px" height="48px" alt="" class="circle responsive-img valign profile-image">
                        </div>
                        <div class="col s8">
                           <a class="btn-flat dropdown-button waves-effect waves-light white-text" href="#" data-activates="profile-dropdown">Jay<i class="mdi-navigation-arrow-drop-down right"></i></a>
                           <ul id="profile-dropdown" class="dropdown-content">
                              <li><a href="#"><i class="material-icons">person</i>Profile</a></li>
                              <li><a href="#"><i class="material-icons">settings</i>Setting</a></li>
                              <li><a href="#"><i class="material-icons">help</i>Help</a></li>
                              <li class="divider"></li>
                              <li><a href="#"><i class="material-icons">lock</i>Lock</a></li>
                              <li><a href="#"><i class="material-icons">exit_to_app</i>Logout</a></li>
                           </ul>
                        </div>
                     </div>
                  </li>
                  <li class="red lighten-2">
                     <ul class="collapsible collapsible-accordion">
                        <li>
                           <a class="collapsible-header white-text waves-effect waves-blue "><i class="material-icons white-text ">language</i>Language <i class="material-icons right white-text" style="margin-right:0;">arrow_drop_down</i></a>
                           <div class="collapsible-body z-depth-3">
                              <ul>
                                 <li><a class="waves-effect waves-blue" href="#">English</a></li>
                                 <li><a class="waves-effect waves-blue" href="#">العربية</a></li>
                                 <li><a class="waves-effect waves-blue" href="#">中文</a></li>
                                 <li><a class="waves-effect waves-blue" href="#">Čeština</a></li>
                                 <li><a class="waves-effect waves-blue" href="#">Nederlands</a></li>
                                 <li><a class="waves-effect waves-blue" href="#">Français</a></li>
                                 <li><a class="waves-effect waves-blue" href="#">Deutsch</a></li>
                                 <li><a class="waves-effect waves-blue" href="#">한국어</a></li>
                                 <li><a class="waves-effect waves-blue" href="#">Português</a></li>
                                 <li><a class="waves-effect waves-blue" href="#">Русский</a></li>
                                 <li><a class="waves-effect waves-blue" href="#">Español</a></li>
                                 <li><a class="waves-effect waves-blue" href="#">Svenska</a></li>
                                 <li><a class="waves-effect waves-blue" href="#">ภาษาไทย</a></li>
                                 <li><a class="waves-effect waves-blue" href="#">Türkçe</a></li>
                                 <li>
                                    <div class="divider"></div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                     </ul>
                  </li>
                  <li class="white">
                     <ul class="collapsible collapsible-accordion">
                        <li>
                           <a class="collapsible-header waves-effect waves-blue"><i class="material-icons">folder_special</i>Layouts <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                           <div class="collapsible-body">
                              <ul>
                                 <li><a class="waves-effect waves-blue" href="#"><i class="material-icons">fullscreen</i>Full Screen<span class="new badge right yellow grey lighten-1" data-badge-caption="updated"></span></a></li>
                                 <li><a class="waves-effect waves-blue" href="#"><i class="material-icons">swap_horiz</i>Horizontal Menu<span class="new badge right yellow darken-3"></span></a></li>
                                 <li>
                                    <div class="divider"></div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                     </ul>
                  </li>
                  <li class="white">
                     <ul class="collapsible collapsible-accordion">
                        <li>
                           <a class="collapsible-header waves-effect waves-blue"><i class="material-icons">folder_open</i>A submenu <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
                           <div class="collapsible-body">
                              <ul>
                                 <li><a class="waves-effect waves-blue" href="#"><i class="material-icons">fullscreen</i>Full Screen</a></li>
                                 <li><a class="waves-effect waves-blue" href="#"><i class="material-icons">swap_horiz</i>Horizontal Menu</a></li>
                                 <li>
                                    <div class="divider"></div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                     </ul>
                  </li>
                  <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">mail</i>Menu item</a></li>
                  <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">call</i> Menu item</a></li>
                  <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">android</i> Menu item</a></li>
                  <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">dialpad</i> Menu item</a></li>
                  <li class="white">
                     <div class="divider"></div>
                  </li>
                  <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">language</i> Menu item<span class="new badge right yellow darken-3"></span></a></li>
                  <li class="sidenav-footer grey darken-2">
                     <div class="row">
                        <div class="social-icons">
                           <div class="col s2">
                              <a href="#"><i class="fa fa-lg fa-linkedin-square"></a></i>
                           </div>
                           <div class="col s2">
                              <a href="#"><i class="fa fa-lg fa-facebook-official"></a></i>
                           </div>
                           <div class="col s2">
                              <a href="#"><i class="fa fa-lg fa-twitter"></a></i>
                           </div>
                           <div class="col s2">
                              <a href="#"><i class="fa fa-lg fa-google-plus"></a></i>
                           </div>
                           <div class="col s2">
                              <a href="#"><i class="fa fa-lg fa-pinterest"></a></i>
                           </div>
                           <div class="col s2">
                              <a href="#"><i class="fa fa-lg fa-youtube"></a></i>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div-->
      </div>
     
</div>
</nav>
</div>
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