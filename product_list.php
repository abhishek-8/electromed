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
        <?php
            $myfile = fopen("include/navbar.php", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("include/navbar.php"));
            fclose($myfile);
            ?> 
        <!-- ====================================================== -->
        <div class="container-fluid">
            <div class="row">
                <div class="col l3 m3 s12" id="product-list-sidebar-div">
                    <!-- ====================================================== -->
                    <!-- Product List Sidebar -->
                    <?php
                        $myfile = fopen("include/product-list-sidebar.php", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("include/product-list-sidebar.php"));
                        fclose($myfile);
                        ?> 
                    <!-- ====================================================== -->
                </div>
                <div class="col l9 m9 s12" id="category_products">
                    <center>
                        <h3 class="custom-text ctgry-name" style="text-align:center;color:#263238"><b id="category_name"></b></h3>
                    </center>
                    <br><br>
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
        <?php
            $myfile = fopen("include/footer.php", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("include/footer.php"));
            fclose($myfile);
            ?> 
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