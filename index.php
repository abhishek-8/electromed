<?php 
 // Product Category Cards 
function createCard($type,$arr,$n){
    $i=$n*2;
    $p=$i*2; $q=$p+1;
    echo "<div class=\"col s12 m7 l3\">
      <div class=\"card\">";
            echo "<div class=\"zoom-effect-container\">";
                echo"<div class=\"card-action custom-text center\" style=\"line-height:100%; padding-left:0px;\"><br><a style=\"color:#ff0000;font-size:20px;\"href=\"product_list.php?type=$type\">"; echo getProductCategory($type); echo "<br><br></a><hr></div>"; 
                echo "<div class=\"card-image\"><a href=\"product_list.php?&type=$type\"><img src=\"photos/$arr[$q]"; echo "1.jpg\" height=\"250\" width=\"auto\" alt=\"\"></a></div>";
            echo "</div>";
        echo "</div>
    </div>";
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <meta name="description" content="ELECTROMED is an established and leading manufacturer of electronic products in India.We manufacture and assemble a comprehensive range of moving as well as static electronic LED displays besides a wide range of electronic instruments for industrial application." />
        <meta name="google-site-verification" content="I-dIR4FcafME1fPc2VjxbNRLmGbunBC4e7Ei2Lmo3Go" />
        <meta name="Keywords" content="LED Display, LED Display Board, Line Frequency Monitors, Digital Flow Monitors, Electronic pH Meters, Digital Tachometers, Temperature 
            Controllers, Electro-med, Lucknow" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <title>Electro-med, Lucknow - Manufacturer and Supplier of LED Display and Digital Instruments</title>
        <link rel="icon" href="images/logoIcon.ico">
        <!-- CSS  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css'>
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/styleNavbar.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <!--script async src="action.js" type="text/javascript"></script-->
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            
            ga('create', 'UA-96632794-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body id="home_page">
        <!-- ====================================================== -->
        <!-- Top NavBar -->
        <?php include('include/navbarNew.php'); ?> 
        <?php include('include/productData.php'); ?> 
      <!-- ====================================================== -->
<?php 
if( isMobile()==false ){
    echo "<div class=\"slider\" >
            <ul class=\"slides\">
                <li>
                    <img class=\"cover-pic\" src=\"cover/cover1.jpg\">
                </li>
                <li>
                    <img class=\"cover-pic\" src=\"cover/cover2.jpg\">
                </li>
                <li>
                    <img class=\"cover-pic\" src=\"cover/cover3.jpg\">
                </li>
            </ul>
        </div>";
    }
    ?>

        <!--div class="row">
            <div class="col l10 offset-l1">
                <?php
                    createCard($type1,$arr1,0);
                    createCard($type2,$arr2,0);
                //    createCard($type3,$arr3,0);
                    createCard($type4,$arr4,0);
                    createCard($type5,$arr5,0);
                    createCard($type6,$arr6,0);
                    createCard($type7,$arr7,0);
                    createCard($type8,$arr8,0);
                ?>
            </div>
        </div-->
        <div class="container-fluid" id="home_content">
            <div class="container-fluid">
                <br>
                <br>
                <h4 class="center headName1" style="font-size:28px;color:#263238">ELECTROMED&ensp;DESIGNS,&ensp;MANUFACTURES&ensp;AND&ensp;SUPPLIES&ensp;LED&ensp;SCREENS&ensp;AND&ensp;DIGITAL&ensp;INSTRUMENTS&ensp;</h4>
                <br>
                <br>

                        <div class="row">
                            <div class="col l10 offset-l1">
                                <?php
                                    if( isMobile()==false ){ echo "<div class=\"row hideme\">"; }
                                    createCard($type1,$arr1,0);
                                    createCard($type2,$arr2,0);
                                //    createCard($type3,$arr3,0);
                                    createCard($type4,$arr4,0);
                                    createCard($type5,$arr5,0);
                                    if( isMobile()==false ){ 
                                        echo "</div>";
                                        echo "<div class=\"row hideme\">";
                                    }
                                    createCard($type6,$arr6,0);
                                    createCard($type7,$arr7,0);
                                    createCard($type8,$arr8,0);
                                    if( isMobile()==false ){ echo "</div>"; }
                                ?>

                            <br><br>
                            


                            <!--h3 class="custom-text ctgry-name" style="text-align:left;color:#d50000"><b>OUR CLIENTS</b></h3>
                            <div class="row">
                                <div class="col l2">
                                    <h5 class="custom-text ctgry-name" style="text-align:left;"><b>Sugar</b></h5>
                                    <img class="responsive-img" src="client_logos/SUGAR/sugar1.jpg">
                                    <img class="responsive-img" src="client_logos/SUGAR/sugar5.jpg">
                                    <img class="responsive-img" src="client_logos/SUGAR/sugar3.jpg">
                                </div>
                                <div class="col l2 offset-l1">
                                    Sugar
                                    <img class="responsive-img" src="client_logos/POWER/power1.jpg">
                                    <img class="responsive-img" src="client_logos/POWER/power2.jpg">
                                    <img class="responsive-img" src="client_logos/POWER/power3.jpg">
                                </div>
                                <div class="col l2 offset-l1">
                                    Sugar
                                    <img class="responsive-img" src="client_logos/INDUSTRY/industry1.jpg">
                                    <img class="responsive-img" src="client_logos/INDUSTRY/industry2.jpg">
                                    <img class="responsive-img" src="client_logos/INDUSTRY/industry3.jpg">
                                </div>                                
                                <div class="col l2 offset-l1">
                                    Sugar
                                    <img class="responsive-img" src="client_logos/SUGAR/sugar1.jpg">
                                    <img class="responsive-img" src="client_logos/SUGAR/sugar2.jpg">
                                    <img class="responsive-img" src="client_logos/SUGAR/sugar3.jpg">
                                </div>

                            </div-->

                            </div>
                        </div>


            </div>
        </div>
        <br>



        <!-- ====================================================== -->


        <!-- ====================================================== -->
        <!-- Footer -->
        <?php  include('include/footer.php')  ?> 
        <!-- ====================================================== -->
        <script>
            $(document).ready(function() {
                if ($(window).width() > 760) {
            
                    $.fn.followTo = function(pos, pos1, n) {
                        var $this = this,
                            $mt = "131px",
                            x = '';
                        $window = $(window);
                        var t = 24;
                        if (n == 3) {
                            t = 28;
                            $mt = "110px";
                        }
            
                        $window.scroll(function(e) {
                            if ($window.scrollTop() > pos && $window.scrollTop() < pos1) {
            
                                $this.css({
                                    position: 'fixed',
                                    width: '100%',
                                    top: t
            
                                });
                                $(x).css({
                                    "margin-top": $mt
                                });
                            } else {
                                $this.css({
                                    position: 'relative',
                                    top: 0
                                });
                                $(x).css({
                                    "margin-top": "0px"
                                });
                            }
                        });
                    };
                }
                var once = 0;
                $(".dropdown-button").dropdown({
                    hover: true,
                    constrain_width: true,
                    gutter: 0,
                    belowOrigin: true
                });
                $('.slider').slider({
                    full_width: true
                });
                $('.button-collapse').sideNav();
            });
        </script>

        <script type="text/javascript">
            function downloadJSAtOnload() {
                var element = document.createElement("script");
                element.src = "action.js";
                document.body.appendChild(element);
            }
            if (window.addEventListener)
                window.addEventListener("load", downloadJSAtOnload, false);
            else if (window.attachEvent)
                window.attachEvent("onload", downloadJSAtOnload);
            else window.onload = downloadJSAtOnload;
        </script>
        <script type="text/javascript" src="js/fadeIn.js"></script>
        
    </body>
</html>