<?php
    $_type= $_GET['type'];

function createCards($type,$arr){
    for( $i=0;$i<count($arr)/2;$i++ ){
        $p=$i*2; $q=$p+1;
        echo "<div class=\"col s12 m7 l3\" id=\"c$i\">
              <div class=\"card\">
                    <div class=\"zoom-effect-container\">
                    <div class=\"card-image\"><a href=\"products.php?id=$arr[$q]&type=$type\"><img src=\"photos/$arr[$q]"; echo "1.jpg\" height=\"170\" alt=\"\"></a></div>
                    <div class=\"card-action custom-text\"><br><a style=\"color:#d50000;\"href=\"products.php?id=$arr[$q]&type=$type\">$arr[$p]<br><br></a></div>
                    <div class=\"card-content\">"; 
                    echo getProductDesc($type,$arr[$q]); 
                    echo "</div>
                                        </div>

                </div>
            </div>";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Products - Manufacturer and supplier of LED display and Digital Instruments - Electromed, Lucknow</title>
    <link rel="icon" href="images/logoIcon.ico">

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
    <body id="category_page">
        <?php include_once("analyticstracking.php") ?>
        <!-- ====================================================== -->
        <!-- Top NavBar -->
        <?php include('include/navbarNew.php'); ?> 

        <!-- ====================================================== -->

        <?php include('include/productData.php'); ?> 

        <div class="container-fluid">
            <div class="row">
                <div class="col l3 m3 s12" id="product-list-sidebar-div">
                    <!-- ====================================================== -->
                    <!-- Product List Sidebar -->
                    <?php include('include/product-list-sidebar.php'); ?> 

                    <!--?php
                        $myfile = fopen("include/product-list-sidebar.php", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("include/product-list-sidebar.php"));
                        fclose($myfile);
                        ?--> 
                    <!-- ====================================================== -->
                </div>
                <div class="col l9 m9 s12" id="category_products">
                    <center>
                        <h3 class="custom-text ctgry-name" style="text-align:center;color:#263238"><b><?php echo getProductCategory($_type) ?></b></h3>
                    </center>
                    <br><br>
                    <?php 

                        if( $_type==1 ){
                            createCards($_type,$arr1);
                        }
                        else if( $_type==2 ){
                            createCards($_type,$arr2);
                        }
                        else if( $_type==3 ){
                            createCards($_type,$arr3);
                        }
                        else if( $_type==4 ){
                            createCards($_type,$arr4);
                        }
                        else if( $_type==5 ){
                            createCards($_type,$arr5);
                        }
                        else if( $_type==6 ){
                            createCards($_type,$arr6);
                        }
                        else if( $_type==7 ){
                            createCards($_type,$arr7);
                        }
                        else if( $_type==8 ){
                            createCards($_type,$arr8);
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
               
            $('.collapsible').collapsible();
            });
            
        </script>
    </body>
</html>