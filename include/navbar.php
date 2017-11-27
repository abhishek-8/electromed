<div class="top-navbar">
    <div class="dropdown-content" id="products">
        <div class="container">
            <div class="row">
                <div class="col l4">
                    <p class="dropdown_headName"><a href="product_list.php?id=LED_Wall&num=3">LED WALL</a>
                    </p>
                    <hr>
                </div>
                <div class="col l4">
                    <p class="dropdown_headName"><a href="product_list.php?id=Product_for_office&num=4">PRODUCTS FOR OFFICE</a>
                    </p>
                    <hr>
                </div>
                <div class="col l4">
                    <p class="dropdown_headName"><a href="product_list.php?id=Industrial_Instruments&num=10">INDUSTRIAL INSTRUMENTS</a>
                    </p>
                    <hr>
                </div>
            </div>
            <div class="row" style="margin-top:-50px;">
                <div class="col l4">
                    <p class="product_name"><a href="products.php?id=hd_led_wall&type=1">HD LED WALL</a>
                    </p>
                    <p class="product_name"><a href="products.php?id=tri_color_led_wall&type=1">TRI COLOR LED WALL</a>
                    </p>
                    <p class="product_name"><a href="products.php?id=unicolor_led_wall&type=1">UNICOLOR LED WALL</a>
                    </p>
                </div>
                <div class="col l4">
                    <p class="product_name"><a href="products.php?id=token_display&type=2">TOKEN DISPLAY</a>
                    </p>
                    <p class="product_name"><a href="products.php?id=digital_clock&type=2">DIGITAL CLOCKS</a>
                    </p>
                    <p class="product_name"><a href="products.php?id=interest_rate_display_board&type=2">INTEREST RATE DISPLAY BOARD</a>
                    </p>
                    <p class="product_name"><a href="products.php?id=scrolling_display&type=2">SCROLLING DISPLAY</a>
                    </p>
                </div>
                <div class="col l4">
                    <p class="product_name"><a href="products.php?id=flow_monitor&type=4">FLOW MONITOR</a>
                    </p>
                    <p class="product_name"><a href="products.php?id=line_frequency_monitor&type=4">LINE FREQUENCY MONITOR</a>
                    </p>
                    <p class="product_name"><a href="products.php?id=megawatt_panel&type=4">MEGA WATT PANEL</a>
                    </p>
                    <p class="product_name"><a href="products.php?id=process_indicator&type=4">PROCESS INDICATORS</a>
                    </p>
                    <p class="product_name"><a href="products.php?id=ph_meter&type=4">PH METER</a>
                    </p>
                    <p class="product_name"><a href="products.php?id=tachometer&type=4">TACHOMETER</a>
                    </p>
                    <p class="product_name"><a href="products.php?id=temperature_controller&type=4">TEMPERATURE CONTROLLER</a>
                    </p>
                    <p class="product_name"><a href="products.php?id=twilight_switches&type=4">TWILIGHT SWITCHES</a>
                    </p>
                    <p class="product_name"><a href="products.php?id=industrial_display&type=4">INDUSTRIAL DISPLAY</a>
                    </p>
                    <p class="product_name"><a href="products.php?id=weighing_scale_monitor&type=4">WEIGHING SCALE MONITOR</a>
                    </p>
                </div>
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