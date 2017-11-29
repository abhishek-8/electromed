<?php
$x            = $_GET['id'];
$type         = $_GET['type'];
$link         = '';
$category     = '';
$title        = '';
$desc         = '';
$features     = '';
$sensing      = '';
$brochure     = '';
$specs        = '';
$applications = '';
$users        = '';
$display      = '';
$done         = 'false';
include('submit.php');

/* LED Wall */
if ($type == 1) {
    $category='LED Wall';
    $link = 'product_list.php?id=LED_Wall&num=3';
    if ($x == 'hd_led_wall') {
        $title = 'HD LED Wall';
        $desc  = 'HD LED wall “offers advanced resolution, brightness and clarity and shows colors in their most natural tones, as they were meant to be seen.” ';
    } else if ($x == 'tri_color_led_wall') {
        $title = 'Tri Color LED Wall';
        $desc  = 'TRI color LED wall is applauded for the features like compact design, low electricity consumption and user friendly functions.';
    } else {
        $title = 'Unicolor LED Wall';
        $desc  = 'Single color LED wall is one of the most presentable for pollution & Environment control parameters.';
    }
}

else if ($type == 2) {
    $category='';

    $link = 'product_list.php?id=Product_for_office&num=4';
    if ($x == 'token_display') {
        $title    = 'Digital Token';
        $desc     = 'Token display system provides easiest way to inform the customer or patient about his / her status while waiting.';
        $brochure = 'Token Display';
    } else if ($x == 'digital_clock') {
        $title    = 'Digital Clock';
        $desc     = 'LED Display Clocks are widely used in factories, offices, large public areas, shopping centers, warehouses and similar large areas';
        $brochure = 'digital clock';
    } else if ($x == 'interest_rate_display_board') {
        $title    = 'Digital Interest Rate Display Board';
        $desc     = 'Interest Rate Display Board is ideal for banks. Date, time, deposit period, interest rate is displayed on an attractive background.';
        $brochure = 'interest rate display board';
    } else {
        $title    = 'Digital Scrolling Display';
        $desc     = 'Scrolling Display is having high brightness. User can store and scroll a lot of messages. Ideal for hospitals, pathologies, banks, shops etc.';
        $brochure = 'Scrolling Display';
    }
}

else if ($type == 3) {
    $link = 'product_list.php?id=projects&num=3';
        $category='LED Wall';

}

/* Digital Instruments */
else if ($type == 4) {
    $category='Digital Instruments';

    $link    = 'product_list.php?id=Industrial_Instruments&num=10';
    $related = array(
        ''
    );
    $display = array(
        "7 segment",
        "1”, 2”, 4”, 8”, 12”, 24”",
        "LCD Display",
        "<li>16x2 Matrix 
            <li>32x4 Matrix",
        "Led Matrix",
        "<li>P10, P8, P6, P4 displays
            <li>Red, Green, Blue, Pink, Yellow",
        "Remote Display",
        "Connected via RS485, LAN."
    );
    
    if ($x == 'flow_monitor') {
        $title        = 'Digital Flow Monitor';
        $desc         = 'Flow monitors are used for the display and monitoring of flow of liquids.<br><br>
          Flow monitors are connected to the flow transducers with 4-20 mA output. It has a totalizer which gives error free total fluid flow over the season, day or hour, as required. <br><br>
          The unit is synchronized with an internal Real Time Clock, which is used to transition from one cycle to the next.';
        $brochure     = 'flow monitor';
        $features     = array(
            "Fully automatic operation",
            "Foolproof counting",
            "Large display visible from distance",
            "Remote display available",
            "Large switching range",
            "Low switching hysteresis",
            "High switching accuracy",
            "Continuous switching point set by operator",
            "4-20mA retransmission"
        );
        $specs        = array(
            "Input",
            "4-20 mA",
            "Type",
            "Jumbo Display",
            "Power Supply",
            "230V AC, 50 Hz",
            "Range",
            "<li>0-9999 (4 ½ digits)<br><li>0-99999 (5 ½ digits)",
            "Totalizer (Optional)",
            "<li>Hourly<li>Daily<li>Seasonal",
            "Memory",
            "Current and Previous cycle",
            "Standard Display",
            "Clock: 25 mm,<br>Flow rate: 50 mm<br>Current hour: 100 mm<br>Previous hour: 100 mm"
        );
        $applications = array(
            "Continuous flow indication",
            "Cooling systems"
        );
        $users        = array(
            "Sugar mills",
            "Chemical industry",
            "Pharmaceutical industry",
            "Research and Development"
        );
    } else if ($x == 'line_frequency_monitor') {
        $title        = 'Digital Line Frequency Monitor';
        $desc         = 'Line Frequency Monitor is a device used to measure the power line frequency accurately.<br><br>
      The unit is microcontroller based and gives an accuracy of more than 0.02%. It is used in power generation and load dispatching centers, process industries etc, where the monitoring of line frequency is utmost important.';
        $brochure     = 'line frequency monitor';
        $features     = array(
            "Large display visible from distance",
            "Remote display available",
            "Real Time Clock and printer facility available"
        );
        $specs        = array(
            "Measurement Range",
            "40-60 Hz",
            "Operating Voltage",
            "230 V AC",
            "Number of digits",
            "4",
            "Resolution",
            "0.01 Hz",
            "Accuracy",
            "0.02%",
            "Display Period",
            "1 Sec",
            "Operating Temperature",
            "50° C max",
            "Casing",
            "Metallic enclosures duly powder coated",
            "Memory",
            "Max value, Min value"
        );
        $applications = array(
            "Check output of frequency-regulated and unregulated DC to AC converters",
            "Verify accuracy and stability of synchronous motors and clocks",
            "Monitor frequency of mobile and portable generation under load",
            "Continuously monitor frequency in engineering and laboratories when delicate experiments are performed or calibration is taking place"
        );
        $users        = array(
            "Power Plants",
            "Sugar mills",
            "Load dispatching"
        );
    } else if ($x == 'megawatt_panel') {
        $title    = 'Digital Mega Watt Panel';
        $desc     = 'Megawatt Panels are essential to power plants. Generation data can be displayed all over the plant.';
        $brochure = 'mega watt panels';
    } else if ($x == 'process_indicator') {
        $title        = 'Digital Process Indicator';
        $desc         = 'Process indicators are typically display units for a 4-20mA signal input. They are suitable for displaying process parameters like flow rate, temperature, level speed, pH, etc at remote locations.<br><br> 
        It senses signal from any closed loop current source and displays the corresponding value of data.<br><br>
        Our range of process indicators are available in a variety of display types and sizes, ranging from simple seven segment displays to high density video walls.';
        $brochure     = 'process indicator';
        $features     = array(
            "Range (Span) can be set from 0 to 9999",
            "Microcontroller based meters with low VA burden",
            "Programming of parameter values",
            "Four switches for on-site programming",
            "Touch proof voltage and current terminals",
            "Senses value from any closed loop sensor",
            "Fully automatic operation",
            "Large display visible from distance",
            "Remote display available",
            "Signal retransmission available"
        );
        $specs        = array(
            "Input",
            "4-20 mA",
            "Type",
            "Jumbo Display",
            "Power Supply",
            "230V AC, 50 Hz",
            "Range",
            "<li>0-9999 (4 digits)<br><li>0-99999 (5 digits)",
            "Limit settings",
            "Separate relays for high and low limit setting",
            "Optional Features",
            "<li>4-20mA retransmission available
          <li>RS485 modbus protocol communicable
          <li>Wireless transmission to slave unit"
        );
        $applications = array(
            "Process value measurement and control",
            "Large displays in plant area"
        );
        $users        = array(
            "Power Plants",
            "Sugar Mills"
        );
    } else if ($x == 'ph_meter') {
        $title        = 'Digital Ph Meter';
        $desc         = "A pH meter is a scientific instrument that measures the hydrogen-ion activity in water-based solutions, indicating its acidity or alkalinity expressed as pH.<br><br>
        Electromed offers a high accuracy digital pH meter, the EPH-100 D, by with very high input impedance and minimal long term drift.
        <blockquote class=\"headName1\" style=\"font-size:20px;background-color: #eeeeee;height: 30px;\"><u>Sensing</u></blockquote>
        It measures the difference in electrical potentials between a pH electrode and reference electrode.";
        $brochure     = 'ph meter';
        $features     = array(
            "Very high input impedance",
            "Large display visible from distance",
            "Remote display available",
            "Signal retransmission available"
        );
        $specs        = array(
            "Range",
            "pH:0-14",
            "Type",
            "LED Display",
            "Power Supply",
            "230V AC, 50 Hz",
            "Readout",
            "3 ½ digits",
            "Accuracy",
            "+- 0.1pH",
            "Temperature Compensation",
            "0-100° C Manual",
            "Input Impedance",
            "10 MΩ",
            "Resolution",
            "0.01pH; 1mV",
            "Operating Temperature",
            "0-50° C",
            "Optional Features",
            "4-20mA retransmission available"
        );
        $applications = array();
        $users        = array(
            "Chemical Industry",
            "Pharmaceutical Industry",
            "Water purifier plants",
            "Effluent treatment plants",
            "Sugar mills"
        );
    } else if ($x == 'tachometer') {
        $title        = 'Digital Tachometer';
        $desc         = "A tachometer is an instrument which measures the working speed of an engine, or any rotating object, typically in revolutions per minute.<br><br>
        The digital tachomter model ETM 400 D is a versatile device to monitor the r.p.m. of any rotating object without any physical contact. It can adapted for event counting apart from r.p.m measurements.<br><br>
        Accurate monitoring of r.p.m. has made ETM 400D tachometer a popular choice in sugar, paper, and textile industries.";
        $sensing      = "For non contact speed sensing, tachometer ETM 400D is offered alongwith a magnetic pickup. This pickup is mounted against a gear wheel which is fixed on the rotating shaft. The gear wheel has 60 evenly spaced slots/teeth on it. The air gap between the pickup and the gear teeth is adjusted at 3mm for proper pulse generation.";
        $brochure     = 'tachometer';
        $features     = array(
            "Microcontroller based meters with low VA burden",
            "Contactless speed sensing",
            "Digital readout on non blinking display",
            "Rapid sampling rate",
            "Large display visible from distance",
            "Remote display available"
        );
        $specs        = array(
            "Range",
            "0-999 r.p.m.",
            "Type",
            "Jumbo Display",
            "Power Supply",
            "230V AC, 50 Hz",
            "Accuracy",
            "Greater than 0.01% or +- 1 r.p.m",
            "Display Period",
            "1 second",
            "Operating Temperature",
            "0-50° C",
            "Optional Features",
            "4-20mA retransmission available"
        );
        $applications = array();
        $users        = array(
            "Sugar Industry",
            "Paper Industry",
            "Textile",
            "Machine Tools",
            "Cable and wire drawing",
            "Food processing",
            "Automobile",
            "Plastics"
        );
    } else if ($x == 'temperature_controller') {
        $title        = 'Digital Temperature Controller';
        $desc         = "Temperature controllers find wide usage in a variety of industrial applications like turbines, furnaces, blow molding, etc, where the measurement/control of temperature is of vital importance. Base on state-of-the-art technology, ELECTROMED offers its digital temperature controller.";
        $sensing      = array(
            "<b>Type</b>",
            "<b>Sensor</b>",
            "<b>Practical (°C)</b>",
            "<b>Ideal Range (°C)</b>",
            "<b>Worst case accuracy (°C)</b>",
            "RTD",
            "Pt100",
            "-200 to 600",
            "-100 to 500",
            "+-1",
            "K",
            "Chromel/Alumel",
            "-100 to 1373",
            "0 to 1200",
            "+-2",
            "J",
            "Iron/Constantan",
            "-100 to 760",
            "0 to 500",
            "+-2",
            "R",
            "Pt/Pt-12% Rh",
            "0 to 1767 600",
            "1600",
            "+-2",
            "S",
            "Pt/Pt-10% Rh",
            "0 to 1767 600",
            "1600",
            "+- 2"
        );
        $brochure     = 'Temperature Controller';
        $features     = array(
            "Microcontroller based meters",
            "Digital readout on non blinking display",
            "Rapid sampling rate",
            "Fully automatic operation",
            "Large display visible from distance",
            "Remote display available",
            "Signal retransmission available"
        );
        $specs        = array(
            "Cold junction compensation",
            "Automatic (for Thermocouple)",
            "Type",
            "Jumbo Display",
            "Power Supply",
            "230V AC, 50 Hz",
            "Sampling Period",
            "1 second",
            "Display Period",
            "2 seconds",
            "Operating Temperature",
            "0-50° C",
            "Optional Features",
            "<li>4-20mA retransmission available
          <li>Wireless transmission to slave unit"
        );
        $applications = array(
            "Clean room monitoring",
            "Environment chambers",
            "Conditioned cold storage"
        );
        $users        = array(
            "Furnaces",
            "
        Blow molding",
            "Turbines"
        );
    } else if ($x == 'temp_hum_indicator') {
        $title        = 'Temperature Humidity Indicator';
        $desc         = "Temperature Humidity indicator find wide usage in a variety of applications like labs, warehouses, instrument rooms etc.<br><br>
        Electromed offers low cost, high precision ambient temperature humidity indicators which work seamlessly without any human intervention. Our modules are pre-calibrated and are easy to use.
        <blockquote class=\"headName1\" style=\"font-size:21px;\"><u>Sensing</u></blockquote>
        Our temperature humidity indicator comes with an inbuilt state-of-the-art sensor, and is ready to use. It does not require any calibration at user end. ";
        $brochure     = 'Temperature Controller';
        $features     = array(
            "Dual 4-20mA retransmission output for data acquisition",
            "Microcontroller based meters",
            "Integrated RH and Temperature sensor",
            "Digital readout on non blinking display",
            "Rapid sampling rate",
            "Large display visible from distance",
            "Remote display available"
        );
        $specs        = array(
            "Temperature Range",
            "-15°to 65° C",
            "Humidity Range",
            "5.0 to 99.9% RH",
            "Type",
            "Jumbo Display",
            "Power Supply",
            "230V AC, 50 Hz",
            "Display Period",
            "1 seconds",
            "Operating Temperature",
            "0-50° C",
            "Optional Features",
            "<li>4-20mA retransmission available
          <li>RS485 modbus protocol communicable
          <li>Wireless transmission to slave unit"
        );
        $applications = array(
            "Clean room monitoring",
            "Environment chambers",
            "Conditioned cold storage"
        );
        $users        = array();
    } else if ($x == 'twilight_switches') {
        $title    = 'Digital Twilight Switches';
        $desc     = 'Twilight switch activates with respect to the ambient light. The device as its name suggests, switches ON and OFF at dusk and dawn.';
        $brochure = 'Twilight Switch';
    } else if ($x == 'industrial_display') {
        $title = 'Digital Industrial Display';
        $desc  = 'Industrial displays are made to customer specifications. All sorts of calculations can be done internally and displayed.';
    } else {
        $title    = 'Digital Weighing Scale Monitor';
        $desc     = 'Weighing Scale Monitor is used to monitoring the number of tippings of juice and water Fully automatic operation and convenience of remote display.';
        $brochure = 'weighing scale monitor';
    }
}

/* Rate Display Board*/
else if ($type==6){
    $category='Rate Display Board';

    $link    = 'product_list.php?id=rate_display_board&num=4';
    $related = array('');
    $display = array();
    $features     = array(
              "High bright 7 segment LED Displays",
              "Non fading cast grade acrylic front panels",
              "Front panels designed as per user",
              "Date and time display with battery backup",
              "Data entry through keyboard/PC/TV Remote");
    $specs        = array(
              "Lighting Type", "7 segment LED",
              "Digit Size", "1 inch",
              "Display Color", "Red",
              "Display Function", "Numbers and texts",
              "Memory", "Yes, with internal battery backup",
              "Power Supply", "230V AC, 50 Hz");
    $applications = array();
        
    if ($x == 'interest_rate_display_board') {
        $title        = 'Interest Rate Display';
        $desc         = 'Interest rate displays are commonly used in banks. We can customize the display as per your requirement.';
        $brochure     = '';
        $users        = array("Banks");
    }
    else if ($x == 'gold_rate_display') {
        $title        = 'Gold Rate Display';
        $desc         = 'Jewellery rate displays are commonly used in jewellery shops. We can customize the display as per your requirement.';
        $brochure     = '';
        $users        = array("Jewellery Shop");
    }
    else if ($x == 'stock_display') {
        $title        = 'Stock Inventory Display';
        $desc         = 'Stock Inventory displays are used to display the quantity of various items in the stock. We can customize the display as per your requirement.';
        $brochure     = '';
        $users        = array();
    }
    else if ($x == 'petrol_pump_display') {
        $title        = 'Petrol Pump Display';
        $desc         = 'Petrol pump display is used to display the price of petrol/diesel at petrol pumps. The rate can be automatically updated via SMS or LAN network connection. We can customize the display as per your requirement.';
        $brochure     = '';
        $users        = array();
    }
}

else if ($type==6){
    $category='Rate Display Board';

    $link    = 'product_list.php?id=rate_display_board&num=4';
    $related = array('');
    $display = array();
    $applications = array();
        
    if ($x == 'interest_rate_display_board') {
        $title        = 'Interest Rate Display';
        $desc         = 'Interest rate displays are commonly used in banks. We can customize the display as per your requirement.';
        $brochure     = '';
    $features     = array(
              "High bright 7 segment LED Displays",
              "Non fading cast grade acrylic front panels",
              "Front panels designed as per user",
              "Date and time display with battery backup",
              "Data entry through keyboard/PC/TV Remote");
    $specs        = array(
              "Lighting Type", "7 segment LED",
              "Digit Size", "1 inch",
              "Display Color", "Red",
              "Display Function", "Numbers and texts",
              "Memory", "Yes, with internal battery backup",
              "Power Supply", "230V AC, 50 Hz");

        $users        = array("Banks");
    }
    else if ($x == 'gold_rate_display') {
        $title        = 'Gold Rate Display';
        $desc         = 'Jewellery rate displays are commonly used in jewellery shops. We can customize the display as per your requirement.';
        $brochure     = '';
    $features     = array(
              "High bright 7 segment LED Displays",
              "Non fading cast grade acrylic front panels",
              "Front panels designed as per user",
              "Date and time display with battery backup",
              "Data entry through keyboard/PC/TV Remote");
    $specs        = array(
              "Lighting Type", "7 segment LED",
              "Digit Size", "1 inch",
              "Display Color", "Red",
              "Display Function", "Numbers and texts",
              "Memory", "Yes, with internal battery backup",
              "Power Supply", "230V AC, 50 Hz");

        $users        = array("Jewellery Shop");
    }
}

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
                <?php loadFile('product-list-sidebar.php'); ?> 
                <!-- ====================================================== -->
            </div>
            <div class="col l10 m10 s12">
                <!-- BreadCrumbs -->
                <div class="nav-wrapper container" style="float:left">
                    <a href="product_list.php?id=LED_display&num=3" class="breadcrumb black-text">Products</a>
                    <a href="<?php echo $link; ?>" class="breadcrumb black-text"><?php echo $category ?></a>
                    <a href="" class="breadcrumb black-text" id="curr"><?php echo $title; ?></a>
                </div>
                <!-- Product Images -->
                <div class="row product-images">
                    <!-- 3 Product images -->    
                    <div class="col l3 s12 m5" id="product">
                        <div class="row">
                            <br>
                            <div class="col l12 s12 m11 materialboxed" id="product_image"></div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col l3 m3 s3 btn1" id="product_image1"></div>
                            <div class="col l3 m3 s3 btn2" id="product_image2"></div>
                            <div class="col l3 m3 s3 btn3" id="product_image3"></div>
                        </div>
                    </div>
                    <!-- ============================================= -->    
                    <div class="col l9 s12 m6">
                        <blockquote class="headName1" style="font-size:20px;background-color: #eeeeee;height: 30px;"><u id="info">Overview</u></blockquote>
                        <p class="overview-text">
                        <?php 
                          echo $desc; 
                        ?>
                        </p>

                        <!-- ====================================================== -->
                        <!-- SENSING TABLE-->
                        <?php
                          if ($x=='temperature_controller'){
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
                          echo "<blockquote class=\"headName1\" style=\"font-size:20px;background-color: #eeeeee;height: 30px;\"><u>Features</u></blockquote>";
                          printBullets($features); 
                        ?>

                        <!-- ====================================================== -->
                        <!-- APPLICATIONS -->
                        <?php  
                          $len = count($applications);
                          if ($len!=0){
                            echo "<blockquote class=\"headName1\" style=\"font-size:20px;background-color: #eeeeee;height: 30px;\"><u>Applications</u></blockquote>";
                            printBullets($applications);
                            }
                          ?>
                        <!-- ====================================================== -->

                        <!-- USERS -->
                        <?php
                          $len = count($users);
                          if ($len!=0){
                            echo "<blockquote class=\"headName1\" style=\"font-size:20px;background-color: #eeeeee;height: 30px;\"><u>Typical Users</u></blockquote>";
                            printBullets($users);
                            }
                          ?>                      

                        <!-- ====================================================== -->
                        <!-- TECHNICAL SPECIFICATIONS -->
                        <blockquote class="headName1" style="font-size:20px;background-color: #eeeeee;height: 30px;"><u>Technical Specifications</u></blockquote>
                        <p><b>&ensp;&ensp;&ensp;&ensp; *Can be made to order as per user’s requirement.</b></p>
                        <?php printTable($specs); ?>
                        <br>
                        
                        <!-- ====================================================== -->
                        <!-- DISPLAY OPTIONS -->
                        <?php
                          $len = count($display);
                          if ($len!=0){
                            echo "<blockquote class=\"headName1\" style=\"font-size:20px;background-color: #eeeeee;height: 30px;\"><u>Display Option Available</u></blockquote>
                              <p><b>&ensp;&ensp;&ensp;&ensp; *Can be made to order as per user’s requirement.</b></p>";
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
        <br><br>
        <!-- ====================================================== -->
        <!-- You may be interested in -->
        <!--div>
            <p class="custom-text red accent-4 white-text" style="text-align:center;font-size:22px;padding-top:2px;line-height: 60px">YOU MAY ALSO BE INTERESTED IN...</p>
            <br>
            <div class="row" id="related_products">
                <!?php
                    echo "<div class=\"col s12 m12 l12\">" ;        
                      for ($i = 1; $i <= 4; $i++) {
                        echo "<div class=\"col s6 m7 l3\" id=\"rel$i\">
                                <div class=\"card\">
                                  <div class=\"card-image\" id=\"ri$i\"></div>
                                  <div class=\"card-action\" id=\"rl$i\"></div>
                                  <div class=\"card-content\" id=\"rd$i\"></div>
                                </div>
                              </div>";
                      };
                      echo "</div>";
                    ?>
            </div>
        </div-->
        <!-- ====================================================== -->
        <br><br>
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
            set1('<?php echo $x ?>');
            $(".btn1").click(function(){
              $("#product_image").fadeOut('fast', function() {
                set2('<?php echo $x ?>');
                $("#product_image").fadeIn("fast");
              });;
            });
            
            $(".btn2").click(function(){
              $("#product_image").fadeOut('fast', function() {
                set3('<?php echo $x ?>');
                $("#product_image").fadeIn("fast");
              });;
            });
            $(".btn3").click(function(){
              $("#product_image").fadeOut('fast', function() {
                set4('<?php echo $x ?>');
                $("#product_image").fadeIn("fast");
              });;
            });
            
            });
        </script>
    </body>
</html>