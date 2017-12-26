<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <meta name="description" content="ELECTROMED is an established and leading manufacturer of electronic products in India.We manufacture and assemble a comprehensive range of moving as well as static electronic LED displays besides a wide range of electronic instruments for industrial application." />
        <meta name="Keywords" content="LED Display, LED Display Board, Line Frequency Monitors, Digital Flow Monitors, Electronic pH Meters, Digital Tachometers, Temperature Controllers, Electro-med, Lucknow"/>
        <title>Page not found</title>
        <link rel="icon" href="images/logoIcon.ico">
        <!-- CSS  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css'>
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/styleNew.css">
        <!--Import jQuery before materialize.js-->
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <script async src="/action.js" type="text/javascript"></script>
        <link rel="import" href="includes.html">
    </head>
    <body>
        <!-- ====================================================== -->
        <!-- Top NavBar -->


        <?php include('include/navbarNew.php'); ?> 

        <!-- ====================================================== -->
        <br><br>
        <div class="row">
            <div class="col l1 offset-l4 m1 offset-m3 s3">
                <center><i class="material-icons medium" style="padding-top:25px">error_outline</i></center>
            </div>
            <div class="col l7 m7 s9">
                <h2 class="custom-text">404 ERROR</h2>
            </div>
        </div>
        <p class="custom-text" style="color:#263238;text-align:center;font-size:21px;">The page you requested was not found.</p>
        <br><br><br>
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
            $(".dropdown-button").dropdown({
            hover:true,
            constrain_width: true,
            gutter: 0,
            belowOrigin: true
            });
            $('.button-collapse').sideNav();
            });
        </script>             
    </body>
</html>