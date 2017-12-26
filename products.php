<?php

$_x            = $_GET['id'];
$_type         = $_GET['type'];
$link         = '';
$category     = '';
$title        = '';
$desc         = '';
$features     = array();
$structure    = array();
$sensing      = '';
$brochure     = array();
$specs        = array();
$applications = array();
$users        = array();
$display      = array(); 
$extras       = array();
$done         = 'false';
$type         = $_type;
include('submit.php');
include('include/productData.php');

list($link,$category,$title,$desc,$features,$structure,$sensing,$brochure,$specs,$applications,$users,$display,$extras) = getProductData( $_type,$_x );

function printBullets($arr){
    $len = count($arr);
    echo "<table id=\"myTable\" class=\"\" style=\"line-height: 100%;\">";
    if ($len > 4 && isMobile()==FALSE ) {
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
    } 
    else {
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

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <meta name="description" content="<?php echo $desc; ?>" />
        <title><?php echo $title; ?> - Manufacturer and supplier - Electromed, Lucknow</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleNavbar.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

        <script src="action.js" type="text/javascript"></script>
    </head>
    <body d="product_page">
        <!--?php include_once("analyticstracking.php") ?-->
        <!-- ====================================================== -->
        <!-- Top NavBar -->
        <!--?php loadFile('include/navbar.php') ?-->
         <?php include('include/navbarNew.php'); ?>
        <!-- ====================================================== -->
        <!-- Request for quote popup -->
        <div class="z-depth-5 card-panel hoverable" id="request_for_quote">
            <fieldset id="rqst_form">
                <legend class="white-text red accent-4" style="position:relative;height: 40px;width: 100%;border-radius:3px">
                    <center class="headNamev2" style="padding-top:3px">Ask Price</center>
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
                <div class="row product-images">
                    <?php 
                    if ($_type==1){
                      echo "<div class=\"col l12 s12 m5\" id=\"product\">";
                    }
                    else{
                      echo "<div class=\"col l3 s12 m5\" id=\"product\">";
                    }
                    ?>    

                    <div class="row">
                        <br>
                        <div class="col l12 materialboxed" id="product_image" <?php if( $_type==1 && isMobile()==FALSE ){ echo "style=\"height:485px;width:100%;\""; } ?> ></div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <?php 
                            $L="l4";
                            if( $_type==1 ){  $L="l2";  }
                            for( $i=1;$i<7;$i++ ){
                                echo "<div class=\"col $L m3 s3 btn$i\" style=\"padding-bottom:10px;\" id=\"product_image$i\"></div>";
                            }
                        ?>
                    </div>

                        <?php 
                        if( count($brochure)==1 ){ 
                            echo "<div class=\"row\"><a href=\"Brochures/<?php echo $brochure; ?>.pdf\" class=\"btn red accent-4 id=\"dwnld-btn\" style=\"width: 100%;\" download><i class=\"material-icons left\">library_books</i>Brochure</a></div>";
                        }
                        
                        ?>
                        
                        <div>
                          <button class="btn rqst red accent-4" id="rqst-btn" >Ask Price</button>
                        </div>
                        <br>

                </div>
                <!-- ============================================= -->    

                    <?php 
                        if ($_type==1){
                          echo "<div class=\"col l12 s12 m6\">";
                        }
                        else{
                          echo "<div class=\"col l9 s12 m6\">";
                        }
                    ?>    
                    <?php 
                        printHeading("Description");
                        echo "<p1>$desc</p1>"; 
                    ?>
                    </p>

                    <!-- ====================================================== -->
                    <!-- SENSING -->
                    <?php
                        if(count($extras)!=0){
                            for( $i=0;$i<count($extras);$i++ ){
                                printHeading($extras[$i]);
                                $i++;
                                echo "<p1>$extras[$i]</p1>" ;
                            }
                        }
                    ?>

                    <!-- ====================================================== -->
                    <!-- FEATURES -->
                    
                    <?php
                        $len = count($features); 
                        if($len!=0){
                            printHeading("General Features");
                            printBullets($features); 
                        }


                        $len = count($structure); 
                        if($len!=0){
                            printHeading("Structural Features");
                            printBullets($structure); 
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
                        echo "<p1><b>*Can be made to order as per user’s requirement.</b></p1>";
                        printTable($specs); 
                      }
                    ?>

                      <!-- For Token Display Specs-->
                      <?php if( $_x=='token_display' ){
                          printHeading("Technical specifications");
                          echo "<p style = \"font-size:19px;\"><b><u>Display Unit</u></b><p>";
                          printTable($displayUnit);
                          echo "<p style = \"font-size:19px;\"><b><u>Base Unit</u></b><p>";
                          printTable($baseUnit);
                      }?>
                    <br>
                    
                    <!-- ====================================================== -->
                    <!-- DISPLAY OPTIONS -->
                    <?php
                      $len = count($display);
                      if ($len!=0){
                        printHeading("Display Specifications");
                        echo "<p1><b>*Can be made to order as per user’s requirement.</b></p1>";
                        echo "<p1>You may choose your display type from the following options.</p1>";
                        printTable($display);
                        }
                      ?>                      
                    <br> 
                    <!-- ====================================================== -->
                </div>
       
       </div>
    </div>
       </div>

        <br>

        <!-- ====================================================== -->
        <br>
        <!-- ====================================================== -->
        <!-- Footer -->
        <?php
            include('include/footer.php');
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

                set1('<?php echo $_x ?>');

                $(".btn"+1).click(function(){
                    $("#product_image").fadeOut('fast', function() {
                        set2('<?php echo $_x ?>',1);
                        $("#product_image").fadeIn("fast");
                    });;
                });
                $(".btn"+2).click(function(){
                    $("#product_image").fadeOut('fast', function() {
                        set2('<?php echo $_x ?>',2);
                        $("#product_image").fadeIn("fast");
                    });;
                });
                $(".btn"+3).click(function(){
                    $("#product_image").fadeOut('fast', function() {
                        set2('<?php echo $_x ?>',3);
                        $("#product_image").fadeIn("fast");
                    });;
                });
                $(".btn"+4).click(function(){
                    $("#product_image").fadeOut('fast', function() {
                        set2('<?php echo $_x ?>',4);
                        $("#product_image").fadeIn("fast");
                    });;
                });
                $(".btn"+5).click(function(){
                    $("#product_image").fadeOut('fast', function() {
                        set2('<?php echo $_x ?>',5);
                        $("#product_image").fadeIn("fast");
                    });;
                });
                $(".btn"+6).click(function(){
                    $("#product_image").fadeOut('fast', function() {
                        set2('<?php echo $_x ?>',6);
                        $("#product_image").fadeIn("fast");
                    });;
                });
            
            });


        </script>
            <!--script>
                $(document).ready(function(){
                if($(window).width()<=500)
                    window.scroll(0,270); 
                Materialize.showStaggeredList('#staggered-test');
                $('.button-collapse').sideNav();
                $('.materialboxed').materialbox();
                });
        </script-->
</body>

</html>