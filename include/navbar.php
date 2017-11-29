<?php 

    function createListItems($arr,$type){
        $len = count($arr);
        for( $i=0;$i<$len;$i+=2 ){
            $a=$i+1;
            echo "<p class=\"product_name\"><a href=\"products.php?id=$arr[$a]&type=$type\">&ensp;&ensp;$arr[$i]</a></p>";
        }
    }

    function createListTitle($x,$y,$n){
        echo "<p class=\"dropdown_headName\"><a href=\"product_list.php?id=$y&num=$n\" style=\"padding-top:15px;font-size:18px;\"><b><u>$x</u></b></a></p>";
    }
?>


<div class="top-navbar">
    <div class="dropdown-content" id="products">
        <div class="container">

            <div class="row">
                <?php
                    echo "<div class=\"col l4\">";
                    

                    createListTitle("LED WALL","LED_Wall","3");
                    $arr=array(
                        "DIGITAL SIGNAGE","",
                        "FULL COLOR LED WALL","hd_led_wall",
                        "TRI COLOR LED WALL","tri_color_led_wall",
                        "SINGLE COLOR LED WALL","unicolor_led_wall",
                        "PARAMETER WALL","");
                    $type=1;
                    createListItems($arr,$type);


                    createListTitle("SINGLE LINE DISPLAY","","4");
                    $arr=array(
                        "SCROLLING DISPLAY","scolling_display",
                        "ONLINE DISPLAY","",
                        "PARAMETER DISPLAY","",
                        "SMS DISPLAY","");
                    $type=2;
                    createListItems($arr,$type);
                    
                    echo "</div><div class=\"col l4\">";


                    createListTitle("RATE DISPLAY BOARD","rate_display_board","4");
                    $arr=array(
                        "INTEREST RATE DISPLAY","interest_rate_display_board",
                        "GOLD RATE DISPLAY","gold_rate_display",
                        "STOCK INVENTORY DISPLAY","stock_display",
                        "PETROL PUMP DISPLAY","petrol_pump_display");
                    $type=6;
                    createListItems($arr,$type);


                    createListTitle("AUTOMATIC SWITCHES","","4");
                    $arr=array(
                        "TWILIGHT SWITCH","",
                        "PUMP CONTROLLER","",
                        "TEMPERATURE CONTROLLER","temperature_controller",
                        "TIMER SWITCHES","");
                    $type=4;
                    createListItems($arr,$type);


                    createListTitle("INDUSTRIAL CLOCKS","","2");
                    $arr=array(
                        "DIGITAL CLOCKS","digital_clocks",
                        "GPS CLOCKS","");
                    $type=2;
                    createListItems($arr,$type);


                    echo "</div><div class=\"col l4\">";

 
                    createListTitle("EMBEDDED SOLUTIONS","","0");

 
                    createListTitle("DIGITAL INSTRUMENTS","Industrial_instruments","9");
                    $arr=array(
                        "FLOW MONITOR","flow_monitor",
                        "LINE FREQUENCY MONITOR","line_frequency_monitor",
                        "MEGA WATT PANEL","megawatt_panel",
                        "PROCESS INDICATORS","process_indicator",
                        "PH METER","ph_meter",
                        "TACHOMETER","tachometer",
                        "TWILIGHT SWITCHES","twilight_switches",
                        "INDUSTRIAL DISPLAY","industrial_display",
                        "WEIGHING SCALE MONITOR","weighing_scale_monitor");
                    $type=4;
                    createListItems($arr,$type);
 

                    createListTitle("TOKEN MANAGEMENT","","2");
                    $arr=array(
                        "TOKEN DISPENSER","",
                        "TOKEN DISPLAY","");
                    $type=4;
                    createListItems($arr,$type);

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