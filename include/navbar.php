<?php 

    function createNavbarItems($arr,$type){
        $len = count($arr);
        for( $i=0;$i<$len;$i+=2 ){
            $a=$i+1;
            echo "<p class=\"product_name\" style=\"padding-left:15px;\"><a href=\"products.php?id=$arr[$a]&type=$type\">$arr[$i]</a></p>";
        }
    }

    function createNavbarTitle($x,$y,$n){
        echo "<p class=\"dropdown_headName\"><a href=\"product_list.php?id=$y&num=$n\" style=\"padding-top:15px;font-size:18px;\"><b><u>$x</u></b></a></p>";
    }
?>


<div class="top-navbar">
    <div class="dropdown-content" id="products">
        <div class="container">

            <div class="row">
                <?php

                    echo "<div class=\"col l4\">";
                    

                    $cat3=array("EMBEDDED SOLUTIONS","","3");
                    createNavbarTitle($cat3[0],$cat3[1],$cat3[2]);

                    $cat1=array("LED WALL","LED_Wall","1");
                    $arr1=array(
                        "DIGITAL SIGNAGE","",
                        "FULL COLOR LED WALL","hd_led_wall",
                        "TRI COLOR LED WALL","tri_color_led_wall",
                        "SINGLE COLOR LED WALL","unicolor_led_wall",
                        "PARAMETER WALL","");
                    $type1=1;
                    $cat=array($cat1,$arr1);
                    createNavbarTitle($cat[0][0],$cat[0][1],$cat[0][2]);
                    createNavbarItems($arr1,$type1);


                    createNavbarTitle("SINGLE LINE DISPLAY","","4");
                    $arr2=array(
                        "SCROLLING DISPLAY","scolling_display",
                        "ONLINE DISPLAY","",
                        "PARAMETER DISPLAY","",
                        "SMS DISPLAY","");
                    $type2=2;
                    createNavbarItems($arr2,$type2);
                    
                    echo "</div><div class=\"col l4\">";


                    createNavbarTitle("RATE DISPLAY BOARD","rate_display_board","4");
                    $arr6=array(
                        "INTEREST RATE DISPLAY","interest_rate_display_board",
                        "GOLD RATE DISPLAY","gold_rate_display",
                        "STOCK INVENTORY DISPLAY","stock_display",
                        "PETROL PUMP DISPLAY","petrol_pump_display");
                    $type6=6;
                    createNavbarItems($arr6,$type6);


                    createNavbarTitle("AUTOMATIC SWITCHES","","4");
                    $arr5=array(
                        "TWILIGHT SWITCHES","twilight_switches",
                        "PUMP CONTROLLER","",
                        "TEMPERATURE CONTROLLER","temperature_controller",
                        "TIMER SWITCHES","");
                    $type5=5;
                    createNavbarItems($arr5,$type5);


                    createNavbarTitle("INDUSTRIAL CLOCKS","","2");
                    $arr7=array(
                        "DIGITAL CLOCKS","digital_clock",
                        "GPS CLOCKS","gps_clock");
                    $type7=7;
                    createNavbarItems($arr7,$type7);


                    echo "</div><div class=\"col l4\">";

 
                    createNavbarTitle("DIGITAL INSTRUMENTS","Industrial_instruments","10");
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
 

                    createNavbarTitle("TOKEN MANAGEMENT","","2");
                    $arr8=array(
                        "TOKEN PRINTER","token_printer",
                        "TOKEN DISPLAY","token_display");
                    $type8=8;
                    createNavbarItems($arr8,$type8);

                    echo "</div>";
                ?>       
            </div>
        </div>
    </div>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper container">
                <a id="logo-container" href="index.php" class="brand-logo"><img src="LOGO.jpg" style="max-height: 56px;max-width: 150%;"></a>
                <ul class="right hide-on-med-and-down">
                    <!--li><a href="index.php" class="navLink">HOME</a></li-->
                    <li><a href="product_list.php?id=LED_Wall&num=3" class="dropdown-button black-text navLink" data-activates="products"><b>PRODUCTS</b><i class="material-icons right">arrow_drop_down</i></a>
                    </li>
                    <li><a href="project_list.php" class="dropdown-button black-text navLink" data-activates="projects"><b>PROJECTS</b></a>
                    </li>
                    <li><a href="about.php" class="navLink black-text"><b>ABOUT</b></a>
                    </li>
                    <li><a href="contact.php" class="navLink black-text"><b>CONTACT</b></a>
                    </li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li><a href="product_list.php?id=LED_Wall&num=3">Products<i class="material-icons right">arrow_drop_down</i></a>
                    </li>
                    <li><a href="project_list.php">Projects</a>
                    </li>
                    <li><a href="about.php">About Us</a>
                    </li>
                    <li><a href="contact.php">Contact Us</a>
                    </li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons" style="padding-left: 0px;">menu</i></a>
            </div>
        </nav>
    </div>
</div>
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