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

/* LED Wall */
if ($_type == 1) {
    $category='LED Wall';
    $link = 'product_list.php?id=LED_Wall&num=3';
    if ($_x == 'hd_led_wall') {
        $title = 'HD LED Wall';
        $desc  = 'HD LED wall “offers advanced resolution, brightness and clarity and shows colors in their most natural tones, as they were meant to be seen.” ';
    } else if ($_x == 'tri_color_led_wall') {
        $title = 'Tri Color LED Wall';
        $desc  = 'TRI color LED wall is applauded for the features like compact design, low electricity consumption and user friendly functions.';
    } else {
        $title = 'Unicolor LED Wall';
        $desc  = 'Single color LED wall is one of the most presentable for pollution & Environment control parameters.';
    }
}

else if ($_type == 2) {
    $category='';

    $link = 'product_list.php?id=Product_for_office&num=4';
    if ($_x == 'token_display') {
        $title    = 'Digital Token';
        $desc     = 'Token display system provides easiest way to inform the customer or patient about his / her status while waiting.';
        $brochure = 'Token Display';
    } else if ($_x == 'digital_clock') {
        $title    = 'Digital Clock';
        $desc     = 'LED Display Clocks are widely used in factories, offices, large public areas, shopping centers, warehouses and similar large areas';
        $brochure = 'digital clock';
    } else if ($_x == 'interest_rate_display_board') {
        $title    = 'Digital Interest Rate Display Board';
        $desc     = 'Interest Rate Display Board is ideal for banks. Date, time, deposit period, interest rate is displayed on an attractive background.';
        $brochure = 'interest rate display board';
    } else {
        $title    = 'Digital Scrolling Display';
        $desc     = 'Scrolling Display is having high brightness. User can store and scroll a lot of messages. Ideal for hospitals, pathologies, banks, shops etc.';
        $brochure = 'Scrolling Display';
    }
}

else if ($_type == 3) {
    $link = 'product_list.php?id=projects&num=3';
        $category='LED Wall';

}

/* Digital Instruments */
else if ($_type == 4) {
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
    
    if ($_x == 'flow_monitor') {
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
    } else if ($_x == 'line_frequency_monitor') {
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
    } else if ($_x == 'megawatt_panel') {
        $title    = 'Digital Mega Watt Panel';
        $desc     = 'Megawatt Panels are essential to power plants. Generation data can be displayed all over the plant.';
        $brochure = 'mega watt panels';
        $features = array(
          "Fully automatic operation",
          "Programming of parameter values",
          "Four switches for on-site programming",
          "Large display visible from distance",
          "Remote display available",
          "Signal retransmission available");
        $specs = array(
          "Input", "4-20 mA",
          "Type", "Jumbo Display",
          "Power Supply", "230V AC, 50 Hz",
          "Limit settings", "Separate relays for high and low limit setting",
          "Optional Features",
            "<li>4-20mA retransmission available
            <li>Wireless transmission to slave unit");
        $applications = array(
          "Power Generation Display",
          "Line Frequency Display");
        $users=array("Power Plants");
    } else if ($_x == 'process_indicator') {
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
    } else if ($_x == 'ph_meter') {
        $title        = 'Digital Ph Meter';
        $desc         = "A pH meter is a scientific instrument that measures the hydrogen-ion activity in water-based solutions, indicating its acidity or alkalinity expressed as pH.<br><br>
        Electromed offers a high accuracy digital pH meter, the EPH-100 D, by with very high input impedance and minimal long term drift.".
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
    } else if ($_x == 'tachometer') {
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
    } else if ($_x == 'temp_hum_indicator') {
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
    } else if ($_x == 'industrial_display') {
        $title = 'Digital Industrial Display';
        $desc  = 'Industrial displays are made to customer specifications. All sorts of calculations can be done internally and displayed.';
    } else if ($_x == 'isolated_converter') {
      $title = 'Isolted Converter';
      $desc = 'Isolated Converters provide insolation between signals and the control room equipments. This saves the control room instruments from damage due to accidental application of high voltage or induced voltages on the input signal.<br><br>
      Isolated converters are available with multiple outputs. They can also act as signal distributors when used with more number of outputs.<br><br>
      A typical application could be where the signal has to go for indication on local panel, field control room, main control room and DCS System.<br><br>
      For indication on different panels, the current/voltage output can be used with low cost panel meters.';
      $brochure = '';
      $specs = array(
        "Input", "4-20 mA or 1-5V DC linear inputs",
        "Loading",
          "<li>5mA max for voltage output
          <li>200 ohms max for current output",
        "Calibration","By indivisual zero & zero & span pots for each output",
        "CMRR", "Better than 150dB",
        "Power Supply", "230 VAC, 50%",
        "Ambient Temperature", "0-50 °C");
      $applications = array(
        "Isolate input signal from equipments",
        "Signal Distribution");
    } else if( $_x=='weighing_scale_monitor' ){
        $title    = 'Digital Weighing Scale Monitor';
        $desc     = 'Weighing Scale Monitor is used to monitoring the number of tippings of juice and water Fully automatic operation and convenience of remote display.';
        $brochure = 'weighing scale monitor';
    }
    
}

/*Automatic Switches */
else if($_type == 5){
    $category='Digital Instruments';

    $link    = 'product_list.php?id=Industrial_Instruments&num=10';
    $related = array();
    if ($_x == 'temperature_controller') {
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
    }
    else if ($_x == 'twilight_switches') {
        $title    = 'Digital Twilight Switches';
        $desc     = 'Twilight switch activates with respect to the ambient light. The device as its name suggests, switches ON and OFF at dusk and dawn.';
        $brochure = 'Twilight Switch';
    }
}

/* Rate Display Board*/
else if ($_type==6){
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
        
    if ($_x == 'interest_rate_display_board') {
        $title        = 'Interest Rate Display';
        $desc         = 'Interest rate displays are commonly used in banks. We can customize the display as per your requirement.';
        $brochure     = '';
        $users        = array("Banks");
    }
    else if ($_x == 'gold_rate_display') {
        $title        = 'Gold Rate Display';
        $desc         = 'Jewellery rate displays are commonly used in jewellery shops. We can customize the display as per your requirement.';
        $brochure     = '';
        $users        = array("Jewellery Shop");
    }
    else if ($_x == 'stock_display') {
        $title        = 'Stock Inventory Display';
        $desc         = 'Stock Inventory displays are used to display the quantity of various items in the stock. We can customize the display as per your requirement.';
        $brochure     = '';
        $users        = array();
    }
    else if ($_x == 'petrol_pump_display') {
        $title        = 'Petrol Pump Display';
        $desc         = 'Petrol pump display is used to display the price of petrol/diesel at petrol pumps. The rate can be automatically updated via SMS or LAN network connection. We can customize the display as per your requirement.';
        $brochure     = '';
        $users        = array();
    }
}

/* Digital Clocks */
else if ($_type==7 ){
  $category='Industrial Clocks';

  $link    = 'product_list.php?id=Industrial_Clock&num=2';
  $related = array();
  if ( $_x=='digital_clock'){
    $title= 'Digital Clock';
    $desc = 'Electromed offers customized digital clocks in a number of display types, including P10 LED type, seven segment display, LCD Display. The clocks can be in varying shapes, sizes and color as per the user’s requirement.';
    $features=array("Fully automatic operation",
      "Large display visible from distance",
      "Can be connected to slave clocks",
      "To In-Built Battery Backup",
      "Time Displays In 24 Hrs Format (Hh:Mm: Ss)");
    $specs=array("Type", "Red Colored LED with high brightness and long visibility",
      "MCD range", "Minimum 1000, viewing angle 110 degree One lakh operating hours",
      "Digit size","8 inches x 4.5 inches",
      "Display","Hours, Minutes Seconds (HH:MM:SS) (6 digits)",
      "Hours", "12/24 hours with blinking colon",
      "Housing", "Mild sheet steel fabricated, powder coated, full elegant acrylic cover",
      "Accuracy", "Highly accurate RTC / GPS optional",
      "Clock setting", "Push to ON switches at one side of the clock to Increase Hours Minutes by 1 count",
      "GPS Receiver",  "Optional GPS clock",
      "Power supply", "190-240 V AC",
      "Dimension(Cabinet)", "31 inchesx 10 inches x 3.5 inches (L x H x W)",
      "PCB type", "Glass Epoxy",
      "Controller type", "Microcontroller based",
      "Power Supply", "230V AC, 50 Hz");
  }
  else if( $_x=='gps_clock' ){
    $title='GPS Clock';
    $desc = 'Electromed offers GPS digital clocks in a number of display types, including P10 LED type, seven segment display, LCD Display. The clocks can be in varying shapes, sizes and color as per the user’s requirement.<br><br>
    The clock synchronizes its time a GPS satellite, which eliminates the need for manual setting of the time. The GPS clock can be easily connected to a slave unit, which would ensure that the time displayed in all the clocks in your premises is accurate.';
    $features=array("Fully automatic operation",
      "Large display visible from distance",
      "Can be connected to slave clocks",
      "Time Synchronizes With Slaves For Every Second.",
      "Gps Master Synchronization With Gps Time.",
      "To In-Built Battery Backup",
      "Time Displays In 24 Hrs Format (Hh:Mm: Ss)",
      "Auto Change Over To Internal Rtc Clock Working In Case Of Gps Failure With Led Indication On Front Side.");
    $specs=array("Type", "Red Colored LED with high brightness and long visibility",
      "MCD range", "Minimum 1000, viewing angle 110 degree One lakh operating hours",
      "Digit size","8 inches x 4.5 inches",
      "Display","Hours, Minutes Seconds (HH:MM:SS) (6 digits)",
      "Hours", "12/24 hours with blinking colon",
      "Housing", "Mild sheet steel fabricated, powder coated, full elegant acrylic cover",
      "Accuracy", "Highly accurate RTC / GPS optional",
      "Clock setting", "Push to ON switches at one side of the clock to Increase Hours Minutes by 1 count",
      "Power supply", "190-240 V AC",
      "Dimension(Cabinet)", "31 inchesx 10 inches x 3.5 inches (L x H x W)",
      "PCB type", "Glass Epoxy",
      "Controller type", "Microcontroller based",
      "Power Supply", "230V AC, 50 Hz");
  }
}

/* Token Display */
else if ($_type==8){
    $category='Token Management';

    $link    = 'product_list.php?id=&num=4';
    $related = array('');
    $display = array();
    $applications = array();
        
    if ($_x == 'token_display') {
        $title        = 'Token Display';
        $desc         = 'The token display system is a system which is used to announce and display the required token number. It is useful in areas where managing customer queues is of utmost importance. ';
        $brochure     = '';
    $features     = array(
      "Large display visible from 20ft",
      "Multilingual voice announcement",
      "Auto announcement available",
      "Wireless data transmission available");
    $specs        = array();

        $users        = array("Banks");
    }
    else if ($_x == 'token_printer') {
        $title        = 'Token Printer';
        $desc         = 'Token printers provide an efficient way to manage queues in a variety of places such as banks, hospitals, parking lots, restaurants etc.<br><br>
          When a customer wants to enter a queue, he/she presses the button, and a token is automatically dispensed from ther machine. The token has a serial number, date, time, etc on printed on it. The customer retains the token till the time his token number is announced.<br><br>
            This system eliminates long standing queues in offices, thus spacing both space and energy.';
        $brochure     = '';
       $features     = array(
              "16x2 console display",
              "Manual reset program",
              "Auto/ Manual token serial number reset",
              "300 tokens per 20 meter paper roll",
              "Lightweight and user-friendly");
       $specs        = array(
              "Display", "16x2 LCD display",
                "Resolution", "203 Dpi, 8 dots/mm",
        "Paper Width",  "57 mm, 84 dots",
              "Printing Speed", "25 mm/sec",
        "Power",  "230V AC 50 Hz, 5 watts max");
        $users        = array(
          "Banks",
          "Hospitals",
          "Restaurants",
          "Service centers",
          "Parking lots");
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