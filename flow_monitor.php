<?php
    $x= $_GET['id'];
    $type=$_GET['type'];
    $link='';
    $features='';
    $title='';
    $desc='';
    $brochure='';
    $done='false';
    include('submit.php');
    if($type==1){
    $link='product_list.php?id=LED_Wall&num=3';
    if($x=='hd_led_wall'){
      $title='HD LED Wall';
      $desc='HD LED wall “offers advanced resolution, brightness and clarity and shows colors in their most natural tones, as they were meant to be seen.” ';
    }
    else if($x=='tri_color_led_wall'){
      $title='Tri Color LED Wall';
      $desc='TRI color LED wall is applauded for the features like compact design, low electricity consumption and user friendly functions.';
    }
    else{
      $title='Unicolor LED Wall';
      $desc='Single color LED wall is one of the most presentable for pollution & Environment control parameters.';
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
    $related = array('');
    if($x=='flow_monitor'){
      $title='Digital Flow Monitor';
      $desc='Flow monitors are used for the display and monitoring of flow of liquids.
      <br><br>Flow monitors are connected to the flow transducers with 4-20 mA output. It has a totalizer which gives error free total fluid flow over the season, day or hour, as required. <br><br>The unit is synchronized with an internal Real Time Clock, which is used to transition from one cycle to the next.';
      $brochure='flow monitor';
      $features = array("Fully automatic operation","Foolproof counting","Large display visible from distance","Remote display available","Large switching range","Low switching hysteresis","High switching accuracy","Continuous switching point set by operator","4-20mA retransmission");   
      $specs = array("Input","4-20 mA","Type","Jumbo Display","Power Supply","230V AC, 50 Hz","Range","<li>0-9999 (4 ½ digits)<br><li>0-99999 (5 ½ digits)","Totalizer (Optional)","<li>Hourly<li>Daily<li>Seasonal","Memory","Current and Previous cycle","Standard Display","Clock: 25 mm,<br>Flow rate: 50 mm<br>Current hour: 100 mm<br>Previous hour: 100 mm");
      $applications = array("Continuous flow indication","Cooling systems");      
      $users = array("Sugar mills","Chemical industry","Pharmaceutical industry","Research and Development");
    }
    else if($x=='line_frequency_monitor'){
      $title='Digital Line Frequency Monitor';
      $desc='Line Frequency Monitor is a device used to measure the power line frequency accurately.<br><br>
      The unit is microcontroller based and gives an accuracy of more than 0.02%. It is used in power generation and load dispatching centers, process industries etc, where the monitoring of line frequency is utmost important.';
      $brochure='line frequency monitor';
      $features = array("•  Large display visible from distance","• Remote display available","•  Real Time Clock and printer facility available");   
      $specs = array("Measurement Range  40-60 Hz","Operating Voltage","230 V AC","Number of digits","4","Resolution","0.01 Hz","Accuracy","0.02%","Display Period","1 Sec","Operating Temperature","50° C max","Casing","Metallic enclosures duly powder coated","Memory", "Max value, Min value");
      $applications = array("Check output of frequency-regulated and unregulated DC to AC converters","Verify accuracy and stability of synchronous motors and clocks","Monitor frequency of mobile and portable generation under load","Continuously monitor frequency in engineering and laboratories when delicate experiments are performed or calibration is taking place");      
      $users = array("Power Plants","Sugar mills","Load dispatching");      
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
        <link rel="import" href="includes.html">
    </head>
    <body id="product_page">
        <?php include_once("analyticstracking.php") ?>
        <!-- ====================================================== -->
        <!-- Top NavBar -->
        <?php
            $myfile = fopen("include/navbar.php", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("include/navbar.php"));
            fclose($myfile);
            ?> 
        <!-- ====================================================== -->
        <!-- Request for quote popup -->
        <div class="z-depth-5 card-panel hoverable" id="request_for_quote">
            <fieldset id="rqst_form">
                <legend class="white-text red accent-4" style="position:relative;height: 40px;width: 100%;border-radius:3px">
                    <center class="headNamev2" style="padding-top:3px">Request for quote</center>
                </legend>
                <form action="" method="post">
                    <input id="name" type="text" name="name" class="validate" placeholder="Name" required style="font-size:15px; color: #000000;">
                    <input id="email" type="email" name="email" class="validate" placeholder="Email" required style="font-size:15px;">
                    <input id="poi" type="text" name="poi" value='<?php echo $title; ?>'>
                    <input id="company" type="text" name="industry" class="validate" placeholder="Company" style="font-size:15px;">
                    <input id="phone" type="text" class="validate" name="phone" placeholder="Phone" required style="font-size:15px;">
                    <textarea name="query" placeholder="Message" style="font-size:15px;"></textarea>
                    <div class="row">
                        <div class="col l4">
                            <button class="btn red accent-4" type="submit" name="submit" id="submit">Submit
                            <i class="material-icons right">send</i>
                            </button>
                        </div>
                        <div class="col l4 offset-l4">
                            <a class="btn red accent-4 close" style="float:right">Close</a>
                        </div>
                    </div>
                </form>
            </fieldset>
        </div>
        <!-- ====================================================== -->
        <!-- Enlarged Image Popup -->
        <div class="z-depth-5 card-panel hoverable" id="popup">
            <p class="custom-text" style="color:#263238;text-align:center;font-size:17px;"><br><br><a href=""><u>Close</u></a></p>
        </div>
        <br>
        <!-- ====================================================== -->
        <!-- ====================================================== -->
        <div class="row">
            <!-- Product List Sidebar -->
            <div class="col l2 m2 s12">
                <!-- ====================================================== -->
                <!-- Product List Sidebar File Import -->
                <?php
                    $myfile = fopen("include/product-list-sidebar.php", "r") or die("Unable to open file!");
                    echo fread($myfile,filesize("include/product-list-sidebar.php"));
                    fclose($myfile);
                    ?> 
                <!-- ====================================================== -->
            </div>
            <div class="col l10 m10 s12">
                <!-- BreadCrumbs -->
                <div class="nav-wrapper container" style="float:left">
                    <a href="product_list.php?id=LED_display&num=3" class="breadcrumb black-text">Products</a>
                    <a href="<?php echo $link; ?>" class="breadcrumb black-text" id="pre2"></a>
                    <a href="" class="breadcrumb black-text" id="curr"><?php echo $title; ?></a>
                </div>
                <!-- Product Images -->
                <div class="row product-images">
                    <!-- 3 Product images -->    
                    <div class="col l3 s12 m5" id="product">
                        <div class="row">
                            <br>
                            <div class="col l12 s12 m11 materialboxed" id="product_image"></div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col l3 m3 s3 btn1" id="product_image1"></div>
                            <div class="col l3 m3 s3 btn2" id="product_image2"></div>
                            <div class="col l3 m3 s3 btn3" id="product_image3"></div>
                        </div>
                    </div>
                    <!-- ============================================= -->    
                    <div class="col l9 s12 m6">
                        <blockquote class="headName1" style="font-size:21px;"><u id="info">Overview</u></blockquote>
                        <p class="overview-text"><?php echo $desc; ?></p>
                        <!-- ====================================================== -->
                        <!-- FEATURES -->
                        <blockquote class="headName1" style="font-size:21px;"><u>Features</u></blockquote>
                        <?php
                          echo "<table id=\"myTable\" class=\"striped\" style=\"line-height: 100%;\">
                            <col width=\"5%\"><col width=\"47%\"><col width=\"47%\">";
                            $len = count($features);
                            for( $i=0;$i<$len/2;$i++ ){ 
                              echo "<tr><td></td>";
                              for( $j=0;$j<2;$j++){ 
                                $a=$i*2+$j;
                                if($a==$len){break;}
                                echo "<td class=\"table_specs key\" style=\"vertical-align: top;\"><li>$features[$a]</td>";
                             }
                              echo "</tr>";
                            }                       
                          echo "</table>"; 
                        ?>

                        <!-- ====================================================== -->
                        <!-- TECHNICAL SPECIFICATIONS -->
                        <blockquote class="headName1" style="font-size:21px;"><u>Technical Specifications</u></blockquote>
                        <p><b> Can be made to order as per user’s requirement.</b></p>
                        <?php
                          echo "<table id=\"myTable\" class=\"striped\" style=\"line-height: 100%;\">
                            <col width=\"5%\"><col width=\"30%\"><col width=\"10%\"><col width=\"55%\">";
                            $len = count($specs);
                            for( $i=0;$i<$len;$i++ ){ 
                              echo "<tr><td></td>";
                              echo "<td class=\"table_specs key\" style=\"vertical-align: top;\">$specs[$i]</td>";
                              echo "<td class=\"table_specs key\" style=\"vertical-align: top;\">:</td>";
                              $i++;
                              echo "<td class=\"table_specs key\" style=\"vertical-align: top;\">$specs[$i]</td>";
                              echo "</tr>";
                            }                       
                          echo "</table>"; 
                        ?>
                        
                        <!-- ====================================================== -->
                        <!-- APPLICATIONS -->
                        <?php
                          $len = count($applications);
                          if ($len!=0){
                          echo "<table id=\"myTable\" class=\"striped\" style=\"line-height: 100%;\">
                            <col width=\"5%\"><col width=\"47%\"><col width=\"47%\">";
                            echo "<blockquote class=\"headName1\" style=\"font-size:21px;\"><u>Applications</u></blockquote>";
                            for( $i=0;$i<$len/2;$i++ ){ 
                              echo "<tr><td></td>";
                              for( $j=0;$j<2;$j++){ 
                                $a=$i*2+$j;
                                if($a==$len){break;}
                                echo "<td class=\"table_specs key\" style=\"vertical-align: top;\"><li>$applications[$a]</td>";
                             }
                              echo "</tr>";
                            }                       
                            echo "</table>"; 
                          }
                        ?>
                        <!-- ====================================================== -->
                        <!-- USERS -->
                        <?php
                          $len = count($users);
                          if ($len!=0){
                          echo "<table id=\"myTable\" class=\"striped\" style=\"line-height: 100%;\">
                            <col width=\"5%\"><col width=\"47%\"><col width=\"47%\">";
                            echo "<blockquote class=\"headName1\" style=\"font-size:21px;\"><u>Typical Users</u></blockquote>";
                            for( $i=0;$i<$len/2;$i++ ){ 
                              echo "<tr><td></td>";
                              for( $j=0;$j<2;$j++){ 
                                $a=$i*2+$j;
                                if($a==$len){break;}
                                echo "<td class=\"table_specs key\" style=\"vertical-align: top;\"><li>$users[$a]</td>";
                             }
                              echo "</tr>";
                            }                       
                            echo "</table>"; 
                          }
                        ?>
                        


                        <br> 
                        <!-- ====================================================== -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <a href="Brochures/<?php echo $brochure; ?>.pdf" class="btn red accent-4 col l2 s5" id="dwnld-btn" download><i class="material-icons left">library_books</i>Brochure</a>
            <button class="btn rqst red accent-4 l2 col s6" id="rqst-btn" >Request for quote</button>
        </div>
        <br><br>
        <!-- ====================================================== -->
        <!-- You may be interested in -->
        <div>
            <p class="custom-text red accent-4 white-text" style="text-align:center;font-size:22px;padding-top:2px;line-height: 60px">YOU MAY ALSO BE INTERESTED IN...</p>
            <br>
            <div class="row" id="related_products">
                <?php
                    echo "<div class=\"col s12 m12 l12\">" ;        
                      for ($i = 1; $i <= 4; $i++) {
                        echo "<div class=\"col s6 m7 l3\" id=\"rel$i\">
                                <div class=\"card\">
                                  <div class=\"card-image\" id=\"ri$i\"></div>
                                  <div class=\"card-action\" id=\"rl$i\"></div>
                                  <div class=\"card-content\" id=\"rd$i\"></div>
                                </div>
                              </div>";
                      };
                      echo "</div>";
                    ?>
            </div>
        </div>
        <!-- ====================================================== -->
        <br><br>
        <!-- ====================================================== -->
        <!-- Footer -->
        <?php
            $myfile = fopen("include/footer.php", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("include/footer.php"));
            fclose($myfile);
            ?> 
        <!-- ====================================================== -->
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