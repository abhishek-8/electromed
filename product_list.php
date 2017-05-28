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

        <link rel="import" href="include/includes.html"

        
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
                <!--div class="col l3 m3 s12">
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
                </div-->


                <div class="col l9 m9 s12" id="category_products">
                    <!--center><h3 class="custom-text ctgry-name" style="text-align:center;color:#263238"><b id="category_name"></b></h3></center><br><br-->
                    <h2 class="custom-text" style="text-align:center;padding-top:3px;padding-bottom:3px;line-height: 60px"><b>LED&ensp;Screens</b></h2>
                    <p class="custom-text" style="color:#263238;text-align:center;font-size:17px;">High resolution LED screens capable of playing videos and displaying technical data both indoors/outdoors.</p>
    
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
                    </div>
                    <h2 class="custom-text" style="text-align:center;padding-top:3px;padding-bottom:3px;line-height: 60px"><b>Products&ensp;for&ensp;Office</b></h2>
                     <div class="row">

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
                    </div>
                    <h2 class="custom-text" style="text-align:center;padding-top:3px;padding-bottom:3px;line-height: 60px"><b>Industrial&ensp;Instruments</b></h2>
                    <div class="row">
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
                        <div class="col s12 m7 l3" id="c9">
                            <div class="card">
                                <div class="card-image" id="p9">
                                   
                                </div>
                                <div class="card-action custom-text" id="l9">
                                </div>
                                <div class="card-content" id="d9" >
                                    
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
                        <div class="col s12 m7 l3" id="c11">
                            <div class="card">
                                <div class="card-image" id="p11">
                                    
                                </div>
                                <div class="card-action custom-text" id="l11">
                                </div>
                                <div class="card-content" id="d11" >
                                
                                </div>
                                
                            </div>
                        </div>
                    </div>        
                    <div class="row">
                        <div class="col s12 m7 l3" id="c12">
                            <div class="card">
                                <div class="card-image" id="p12">
                                    
                                </div>
                                <div class="card-action custom-text" id="l12">
                                </div>
                                <div class="card-content" id="d12" >
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c13">
                            <div class="card">
                                <div class="card-image" id="p13">
                                   
                                </div>
                                <div class="card-action custom-text" id="l13">
                                </div>
                                <div class="card-content" id="d13" >
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c14">
                            <div class="card">
                                <div class="card-image" id="p14">
                                    
                                </div>
                                <div class="card-action custom-text" id="l14">
                                </div>
                                <div class="card-content" id="d14">
                                
                                </div>
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c15">
                            <div class="card">
                                <div class="card-image" id="p15">
                                    
                                </div>
                                <div class="card-action custom-text" id="l15">
                                </div>
                                <div class="card-content" id="d15" >
                                
                                </div>
                                
                            </div>
                        </div>
                    </div>        
                    <div class="row">
                        <div class="col s12 m7 l3" id="c16">
                            <div class="card">
                                <div class="card-image" id="p16">
                                    
                                </div>
                                <div class="card-action custom-text" id="l16">
                                </div>
                                <div class="card-content" id="d16" >
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c17">
                            <div class="card">
                                <div class="card-image" id="p17">
                                    
                                </div>
                                <div class="card-action custom-text" id="l17">
                                </div>
                                <div class="card-content" id="d17" >
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
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
