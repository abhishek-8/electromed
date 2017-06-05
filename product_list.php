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
         <link rel="import" href="includes.html">

    </head>
    <body id="category_page">
    <?php include_once("analyticstracking.php") ?>
    

    <!-- ====================================================== -->
    <!-- Top NavBar -->
    <script>
        var link = document.querySelector('link[rel="import"]');
        var content = link.import;

        // Grab DOM from warning.html's document.
        var el = content.querySelector('.top-navbar');

        document.body.appendChild(el.cloneNode(true));
    </script>

    <!-- ====================================================== -->

 


    <div class="container-fluid">
        <div class="row">
            <div class="col l3 m3 s12" id="product-list-sidebar-div">
 
                <!-- ====================================================== -->
                <!-- Product List Sidebar -->
                <!--script>
                   
                   (function() {
                    var link = document.querySelector('link[rel="import"]');
                    var content = link.import;

                    // Grab DOM from warning.html's document.
                    var el = content.querySelector('.product-list-sidebar');

                    document.getElementById("product-list-sidebar-div").appendChild(el.cloneNode(true));
                })();
                </script>

               <!-- ====================================================== -->

                   <a href="#!" class="btn blue darken-2 category-btn" onclick="Materialize.showStaggeredList('#staggered-test')" style="width:100%;">Categories</a>
                    <ul id="staggered-test" class="collapsible" data-collapsible="accordion">
                        <li style="opacity: 0;">
                            <div class="collapsible-header <?php if($x=='LED_display') echo 'active'; ?>" onclick="filter('LED_Wall',3)" >LED WALL</div>
                            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>
                                <a href="products.php?id=hd_led_wall&type=1" style="font-size:14px;padding-left:10%">HD LED WALL</a><br>
                                <hr>
                                <a href="products.php?id=tri_color_led_wall&type=1" style="font-size:14px;padding-left:10%">TRI COLOR LED WALL</a><br>
                                <hr>
                                <a href="products.php?id=unicolor_led_wall&type=1" style="font-size:14px;padding-left:10%">UNICOLOR LED WALL</a><br><br>
                                
                            </div>
                        </li>
                        <li style="opacity: 0;">
                            <div class="collapsible-header <?php if($x=='Product_for_office') echo 'active';  ?>" onclick="filter('Product_for_office',4)" >PRODUCTS FOR OFFICE</div>
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
                            <div class="collapsible-header <?php if($x=='Industrial_Instruments') echo 'active'; ?>" onclick="filter('Industrial_Instruments',10)" >INDUSTRIAL INSTRUMENTS</div>
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
                    
                    <?php 
                        for ($i = 1; $i <= 10; $i++) {
                            echo "<div class=\"col s12 m7 l3\" id=\"c$i\">
                                    <div class=\"card\">
                                        <div class=\"card-image\" id=\"p$i\"></div>
                                        <div class=\"card-action custom-text\" id=\"l$i\"></div>
                                        <div class=\"card-content\" id=\"d$i\"></div>
                                    </div>
                                </div>";
                        } 
                    ?>

                </div>
            </div>
        </div>


    <!-- ====================================================== -->
    <!-- Footer -->
    <script>
        var link = document.querySelector('link[rel="import"]');
        var content = link.import;

        // Grab DOM from warning.html's document.
        var el = content.querySelector('.page-footer');

        document.body.appendChild(el.cloneNode(true));
    </script>

    <!-- ====================================================== -->


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