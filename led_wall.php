<?php
$_x            = $_GET['id'];
$_type         = $_GET['type'];
$link         = '';
$category     = '';
$title        = '';
$desc         = '';
$features     = array();
$sensing      = '';
$brochure     = '';
$specs        = array();
$applications = array();
$users        = array();
$display      = array(); 
$done         = 'false';
$type         = $_type;
include('submit.php');
include('include/productData.php');


function loadFile($file){
    $myfile = fopen("include/$file", "r") or die("Unable to open file!");
    echo fread($myfile, filesize("include/$file"));
    fclose($myfile);
}

function printBullets($arr){
    $len = count($arr);
    echo "<table id=\"myTable\" class=\"\" style=\"line-height: 100%;\">";
    if ($len > 4) {
        echo "<col width=\"5%\"><col width=\"47%\"><col width=\"47%\">";
        for ($i = 0; $i < $len / 2; $i++) {
            echo "<tr><td></td>";
            for ($j = 0; $j < 2; $j++) {
                $a = $i * 2 + $j;
                if ($a == $len) {
                    break;
                }
                echo "<td class=\"table_specs key\" style=\"vertical-align: top;\"><li>$arr[$a]</td>";
            }
            echo "</tr>";
        }
    } else {
        echo "<col width=\"5%\"><col width=\"95%\">";
        for ($i = 0; $i < $len; $i++) {
            echo "<tr><td></td><td class=\"table_specs key\" style=\"vertical-align: top;\"><li>$arr[$i]</td></tr>";
        }
    }
    echo "</table>";
}

function printTable($arr){
    echo "<table id=\"myTable\" class=\"striped bordered\" style=\"line-height: 100%;\">
        <col width=\"5%\"><col width=\"30%\"><col width=\"10%\"><col width=\"55%\">";
    $len = count($arr);
    for ($i = 0; $i < $len; $i++) {
        echo "<tr><td></td>";
        echo "<td class=\"table_specs key\" style=\"vertical-align: top;\">$arr[$i]</td>";
        echo "<td class=\"table_specs key\" style=\"vertical-align: top;\"><b>:</b></td>";
        $i++;
        echo "<td class=\"table_specs key\" style=\"vertical-align: top;\">$arr[$i]</td>";
        echo "</tr>";
    }
    echo "</table>";
}

function printHeading($a){
  echo "<blockquote class=\"headName1\" style=\"font-size:20px;background-color: #eeeeee;height: 30px;\"><u>$a</u></blockquote>";
}

?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <meta name="description" content="<?php echo $desc; ?>" />
        <title><?php echo $title; ?> - Manufacturer and supplier - Electromed, Lucknow</title>
        <link rel="stylesheet" href="css/materialize.css">
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
    <body d="product_page">
        <?php include_once("analyticstracking.php") ?>
        <!-- ====================================================== -->
        <!-- Top NavBar -->
        <!--?php loadFile('include/navbar.php') ?-->
         <?php include('include/navbar.php'); ?>
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
                <?php include('include/product-list-sidebar.php'); ?> 
                <!-- ====================================================== -->
            

        <!-- You may be interested in -->
        <!--div>
            <p class="custom-text red accent-4 white-text" style="text-align:center;font-size:22px;padding-top:2px;line-height: 60px">YOU MAY ALSO BE INTERESTED IN...</p>
            <br>
            <div class="row" id="related_products">
                <!?php
                      for ($i = 1; $i <= 2; $i++) {
                        echo "<div class=\"col s6 m7 l12\" id=\"rel$i\">
                                <div class=\"card\">
                                  <div class=\"card-image\" id=\"ri$i\"></div>
                                  <div class=\"card-action\" id=\"rl$i\"></div>
                                  <div class=\"card-content\" id=\"rd$i\"></div>
                                </div>
                              </div>";
                      };
                    ?>
            </div>
        </div-->

            </div>
            <div class="col l10 m10 s12">
                <!-- BreadCrumbs -->
                <div class="nav-wrapper container" style="float:left">
                    <a href="product_list.php?id=LED_display&num=3" class="breadcrumb black-text">Products</a>
                    <a href="<?php echo $link; ?>" class="breadcrumb black-text"><?php echo $category ?></a>
                    <a href="" class="breadcrumb black-text" id="curr"><?php echo $title; ?></a>
                </div>
                <!-- Product Images -->
                
                    <!-- 3 Product images -->    
                    <?php 
                    if ($_type!=1){
                      echo "<div class=\"row product-images\">";
                      echo "<div class=\"col l3 s12 m5\" id=\"product\">";
                    }
                    else{
                      echo "<div class=\"row -images\">";
                      echo "<div class=\"col l12 s12 m5\" id=\"product\">";
                    }
                    ?>    <div class="row">
                            <br>
                            <div class="col l12 s12 m11 materialboxed" id="product_image"></div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col l3 m3 s3 btn1" id="product_image1"></div>
                            <div class="col l3 m3 s3 btn2" id="product_image2"></div>
                            <div class="col l3 m3 s3 btn3" id="product_image3"></div>

                        <!--?php


                        echo "<div class=\"col l3 m3 s3 btn1\"><img style=\"border-radius:10px;\" width=\"100%\" height=\"100%\" src=photos/$_x1.jpg alt=$_x \"></div>";
                                                    <div class="col l3 m3 s3 btn2" id="product_image2"></div>
                                                    <div class="col l3 m3 s3 btn3" id="product_image3"></div>
                        ?-->


                        </div>
                    </div>
                    <!-- ============================================= -->    
                    <div class="col l9 s12 m6">
                        <blockquote class="headName1" style="font-size:20px;background-color: #eeeeee;height: 30px;"><u id="info">Overview</u></blockquote>
                        <p class="overview-text">
                        <?php echo "$desc"; ?>
                        </p>

                        <!-- ====================================================== -->
                        <!-- SENSING -->
                        <?php
                          if ($_x=='ph_meter'){
                            printHeading("Sensing");
                            echo "It measures the difference in electrical potentials between a pH electrode and reference electrode.";
                          } 
                          if ($_x=='isolated_converter'){
                            printHeading("Isolation");
                            echo "1500V DC optical and galvanic isolation between input, power supply, and each of the outputs (AC power supply)";
                            $display = array();
                          } 
                          else if ($_x=='temperature_controller'){
                            $len = count($sensing);
                            echo "<blockquote class=\"headName1\" style=\"font-size:20px;background-color: #eeeeee;height: 30px;\"><u>Sensing</u></blockquote>
                              <table class=\"responsive-table bordered centered\" style=\"line-height: 100%;\">
                              <col width=\"12%\"><col width=\"22%\"><col width=\"22%\"><col width=\"22%\"><col width=\"22%\">";
                            for( $i=0;$i<$len;$i+=5){
                              echo "<tr>";
                              for($j=0;$j<5;$j++){
                                $a = $i + $j ;
                                echo "<td>$sensing[$a]</td>";
                              }
                              echo "</tr>";
                            }
                            echo "</table>";
                          }
                        ?>

                        <!-- ====================================================== -->
                        <!-- FEATURES -->
                        
                        <?php
                          $len = count($features); 
                          if($len!=0){
                          printHeading("Features");
                          printBullets($features); 
                        }
                        ?>

                        <!-- ====================================================== -->
                        <!-- APPLICATIONS -->
                        <?php  
                          $len = count($applications);
                          if ($len!=0){
                            printHeading("Applications");
                            printBullets($applications);
                            }
                          ?>
                        <!-- ====================================================== -->

                        <!-- USERS -->
                        <?php
                          $len = count($users);
                          if ($len!=0){
                            printHeading("Typical Users");
                            printBullets($users);
                            }
                          ?>

                        <!-- ====================================================== -->
                        <!-- TECHNICAL SPECIFICATIONS -->
                        <?php
                          if(count($specs)!=0){ 
                            printHeading("Technical specifications");
                            echo "<p><b>&ensp;&ensp;&ensp;&ensp; *Can be made to order as per user’s requirement.</b></p>";
                            printTable($specs); 
                          }
                        ?>

                          <!-- For Token Display Specs-->
                          <?php if( $_x=='token_display' ){
                              echo "<p style = \"font-size:19px;\"><b><u>Display Unit</u></b><p>";
                              printTable(array("Display Size", "4 inch",
                                "No of digits",  "3",
                                "Display type", "7 segment",
                                "Enclosure", "Black powder coated ms sheet metal",
                                "Inter connection cable", "9 pin D type connector with dust cover at both ends",
                                "Standard length of cable", "5 meters",
                                "Max possible length of cable", "15 meters",
                                "Power", "230V AC 50 Hz, 5 watts max"
                                ));
                              echo "<p style = \"font-size:19px;\"><b><u>Base Unit</u></b><p>";
                              printTable(array("Lighting Type", "7 segment LED",
                                "Digit Size", "1 inch",
                                "Display Color", "Red",
                                "Display Function", "Numbers and texts",
                                "Memory", "Yes, with internal battery backup",
                                "Power Supply", "230V AC, 50 Hz"));
                          }?>
                        <br>
                        
                        <!-- ====================================================== -->
                        <!-- DISPLAY OPTIONS -->
                        <?php
                          $len = count($display);
                          if ($len!=0){
                            printHeading("Display Options Available");
                            echo "<p><b>&ensp;&ensp;&ensp;&ensp; *Can be made to order as per user’s requirement.</b></p>";
                            printTable($display);
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
        <br>

        <!-- ====================================================== -->
        <br>
        <!-- ====================================================== -->
        <!-- Footer -->
        <?php loadFile('footer.php'); ?> 
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
            set1('<?php echo $_x ?>');
            $(".btn1").click(function(){
              $("#product_image").fadeOut('fast', function() {
                set2('<?php echo $_x ?>');
                $("#product_image").fadeIn("fast");
              });;
            });
            
            $(".btn2").click(function(){
              $("#product_image").fadeOut('fast', function() {
                set3('<?php echo $_x ?>');
                $("#product_image").fadeIn("fast");
              });;
            });
            $(".btn3").click(function(){
              $("#product_image").fadeOut('fast', function() {
                set4('<?php echo $_x ?>');
                $("#product_image").fadeIn("fast");
              });;
            });
            
            });


        </script>
    </body>
</html>