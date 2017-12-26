<?php 

function getProductDesc( $type,$x ){
    $desc = ''; 
    list($link,$category,$title,$desc,$features,$structure,$sensing,$brochure,$specs,$applications,$users,$display,$extras) = getProductData( $type,$x );
    $desc = substr($desc,0,32);
    return $desc;
}

function getProductCategory( $type ){
    $desc = ''; 
    list($link,$category,$title,$desc,$features,$structure,$sensing,$brochure,$specs,$applications,$users,$display,$extras) = getProductData( $type,"" );
    return $category;
}

function getProductData( $type,$x ){

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

    /* LED Wall */
    if ($type == 1) {
        $category='LED Wall';
        $link = 'product_list.php?type=1';
        $features = array(
            "Indoor/ Outdoor (Daylight Visible)",
            "Single Sided/ Double Sided",
            "Numeric/ Alphanumeric",
            "Single Color/ Multi-color",
            "Animated Graphics",
            "Multiple Letter Style (fonts)",
            "In-built date & time clock",
            "Better visibility & contrast through Imported Acrylic / Polycarbonate sheet",
            "Computer Cut Vinyl Stickers",
            "Excellent Intensity & Brightness due to high quality LED",
            "LED Lifespan: 50,000Hrs",
            "Backlit/ Frontlit",
            "High visibility/ readability due to near letter quality (NLQ) feature");
        $structure = array(
            "Light Weight",
            "Rugged",
            "Weatherproof",
            "Aesthetic Look",
            "Mild-Steel Fabricated with Powder Coating",
            "Hanging/ Wall Mounting Arrangement");

        $applications = array(

        );

        $specs = array(

        );
        $display = array(
            "Led Module","<li>P10 <li>P8 <li>P6 <li>P4",
            "Ambient Light","Both indoor and outdoor");

        if ($x == 'fullcolor_led_wall') {
            $title = 'Full COLOR LED Wall';
            $desc  = 'Full color LED wall “offers advanced resolution, brightness and clarity and shows colors in their most natural tones, as they were meant to be seen.” ';
            array_push($display,"Color","Full Color");       

        } else if ($x == 'tricolor_led_wall') {
            $title = 'Tricolor LED Wall';
            $desc  = 'TRI color LED wall is applauded for the features like compact design, low electricity consumption and user friendly functions.';
            array_push($display,"Color options","<li>Red,Blue,Pink<li>Red,Green,Yellow");       
        } 
        else if( $x=='unicolor_led_wall' ){
            $title = 'Single Color LED Wall';
            $desc  = 'Single color LED wall is one of the most presentable for pollution & Environment control parameters.';
            array_push($display,"Color options","<li>Red<li>White<li>Green");
        }
        else if( $x=='pollution_led_wall' ){
            $title = 'Pollution Display Wall';
            $desc = 'Electromed offers Pollution monitoring display or AQI Display board. 
            <br><br>AQI is an index for reporting daily air quality. It tells you how clean or polluted your air is, and what associated health effects might be a concern for you. The AQI focuses on health effects you may experience within a few hours or days after breathing polluted air.';
            $extras = array("Sensing","Our displays come with built in state-of-the-art sensors for the various pollutants in the atmosphere. Our sensors work for the following pollutants.
                <table id=\"myTable\" class=\"\" style=\"line-height: 100%;\">
                <col width=\"5%\"><col width=\"47%\"><col width=\"47%\">
                <tr> <td></td> <td class=\"table_specs key\" style=\"vertical-align: top;\"><li>PM 10</td> <td class=\"table_specs key\" style=\"vertical-align: top;\"><li>PM 2.5</td> </tr>
                <tr> <td></td> <td class=\"table_specs key\" style=\"vertical-align: top;\"><li>SOx</td> <td class=\"table_specs key\" style=\"vertical-align: top;\"><li>NOx</td> </tr>
                <tr> <td></td> <td class=\"table_specs key\" style=\"vertical-align: top;\"><li>CO</td> <td class=\"table_specs key\" style=\"vertical-align: top;\"><li>O3</td> </tr>
                </table>");
            array_push($display,
                "Color", "<li>Full Color <li> Tricolor: Red, Blue, Pink <li>Red <li>Green <li>White");
        }
        else if( $x=='parameter_led_wall' ){
            $title = 'Parameter Display Wall';
            $desc = 'Electromed offers Parameter Display Wall to display your important parameters of production, environment, news etc. 
            <br><br>The software for picking up data from server/internet would be buit as per the user\'s requirement.';
            array_push($display,
                "Color", "<li>Full Color <li> Tricolor: Red, Blue, Pink <li>Red <li>Green <li>White");        
        }
    }

    /* Line Display */
    else if ($type == 2) {
        $category='LED Line Display';
        $link = 'product_list.php?type=2';
        if ($x == 'unicolor_scrolling_display') {
            $title    = 'Scrolling Message Display';
            $desc     = 'Scrolling Message Display. We offer you our standard size LED Scrolling display for indoor/outdoor use.';
            $features = array(
                "IP54 Compliant",
                "Fine finish",
                "Durable",
                "Alluring design",
                "Data Can be Displayed in static & scrolling both formats",
                "Multiple Language & Text" );
            $display = array(
                "Color","<li>Red<li>Green<li>White",
                "Led Module","<li>P10 <li>P8 <li>P6 <li>P4",
                "Ambient Light","Both indoor and outdoor");
            $specs    = array(
                "Input","<li>USB<li>LAN",
                "Power Supply","200 VAC, 50 Hz");
        }
        else if ($x == 'tricolor_scrolling_display') {
            $title    = 'Tri Color Scrolling Message Display';
            $desc     = 'Tri Color Scrolling Message Display. We offer you our standard size LED Scrolling display for indoor/outdoor use.';
            $features = array(
                "3 color modes",
                "IP54 Compliant",
                "Fine finish",
                "Durable",
                "Alluring design",
                "Data Can be Displayed in static & scrolling both formats",
                "Multiple Language & Text" );
            $display = array(
                "Color","<li>Red<li>Green<li>White",
                "Led Module","<li>P10 <li>P8 <li>P6 <li>P4",
                "Ambient Light","Both indoor and outdoor");
            $specs    = array(
                "Input","<li>USB<li>LAN",
                "Power Supply","200 VAC, 50 Hz");
        }
    }

    else if ($type == 3) {
        $link = 'product_list.php?type=3';
        $category='Embedded Systems';

    }

    /* Digital Instruments */
    else if ($type == 4) {
        $category='Digital Instruments';

        $link    = 'product_list.php?type=4';
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
            $desc     = 'Megawatt Panels are essential to power plants. Generation data can be displayed all over the plant.
                <br><br>They take input via a 4-20mA signal and display the corresponding value of power generated.';
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
            Electromed offers a high accuracy digital pH meter, the EPH-100 D, by with very high input impedance and minimal long term drift.".
            $brochure     = 'ph meter';
            $features     = array(
                "Very high input impedance",
                "Large display visible from distance",
                "Remote display available",
                "Signal retransmission available"
            );
            $extras      = array("Sensing","It measures the difference in electrical potentials between a pH electrode and reference electrode.");
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
        } else if ($x == 'temp_hum_indicator') {
            $title        = 'Temperature Humidity Indicator';
            $desc         = "Temperature Humidity indicator find wide usage in a variety of applications like labs, warehouses, instrument rooms etc.<br><br>
            Electromed offers low cost, high precision ambient temperature humidity indicators which work seamlessly without any human intervention. Our modules are pre-calibrated and are easy to use.";
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
            $extras      = array("Sensing","Our temperature humidity indicator comes with an inbuilt state-of-the-art sensor, and is ready to use. It does not require any calibration at user end.");
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
        } else if ($x == 'industrial_display') {
            $title = 'Digital Industrial Display';
            $desc  = 'Industrial displays are made to customer specifications. All sorts of calculations can be done internally and displayed.';
        } else if ($x == 'isolated_converter') {
          $display = array();
          $title = 'Isolted Converter';
          $desc = 'Isolated Converters provide insolation between signals and the control room equipments. This saves the control room instruments from damage due to accidental application of high voltage or induced voltages on the input signal.<br><br>
          Isolated converters are available with multiple outputs. They can also act as signal distributors when used with more number of outputs.<br><br>
          A typical application could be where the signal has to go for indication on local panel, field control room, main control room and DCS System.<br><br>
          For indication on different panels, the current/voltage output can be used with low cost panel meters.';
          $extras = array("Isolation", "1500V DC optical and galvanic isolation between input, power supply, and each of the outputs (AC power supply)");
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
        } else if( $x=='weighing_scale_monitor' ){
            $title    = 'Digital Weighing Scale Monitor';
            $desc     = 'Weighing Scale Monitor is used to monitoring the number of tippings of juice and water Fully automatic operation and convenience of remote display.';
            $brochure = 'weighing scale monitor';
            $features = array("Monitoring of the number of tippings of juice and water",
                "Fully automatic operation",
                "Convenience of remote display",
                "1 day battery backup");
            $extras = array("Totalizer","It has a 6 digit electro-magnetic counter. It provides the total tippings irrespective of time.");
            $users = array("Sugar Mills");
        }
        
    }

    /*Automatic Switches */
    else if($type == 5){
        $category='Automatic Switches';

        $link    = 'product_list.php?type=5';
        $related = array();
        if ($x == 'temperature_controller') {
            $title        = 'Digital Temperature Controller';
            $desc         = "Temperature controllers find wide usage in a variety of industrial applications like turbines, furnaces, blow molding, etc, where the measurement/control of temperature is of vital importance. Base on state-of-the-art technology, ELECTROMED offers its digital temperature controller.";

            $extras = array("Sensing",
                "<table class=\"responsive-table bordered centered\" style=\"line-height: 100%;\">
                 <col width=\"12%\"><col width=\"22%\"><col width=\"22%\"><col width=\"22%\"><col width=\"22%\">
                <tr><td><b>Type</b></td> <td><b>Sensor</b></td> <td><b>Practical (°C)</b></td> <td><b>Ideal Range (°C)</b></td> <td><b>Worst case accuracy (°C)</b></td></tr>
                <td>RTD</td> <td>Pt100</td> <td>-200 to 600</td> <td>-100 to 500</td> <td>+-1</td></tr>
                <td>K</td> <td>Chromel/Alumel</td> <td>-100 to 1373</td> <td>0 to 1200</td> <td>+-2</td></tr>
                <td>J</td> <td>Iron/Constantan</td> <td>-100 to 760</td> <td>0 to 500</td> <td>+-2</td></tr>
                <td>R</td> <td>Pt/Pt-12% Rh</td> <td>0 to 1767 600</td> <td>1600</td> <td>+-2</td></tr>
                <td>S</td> <td>Pt/Pt-10% Rh</td> <td>0 to 1767 600</td> <td>1600</td> <td>+- 2</td></tr>
                </table>");
           
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
        else if ($x == 'twilight_switches') {
            $title    = 'Digital Twilight Switches';
            $desc     = 'Twilight switch activates with respect to the ambient light. The device as its name suggests, switches ON and OFF at dusk and dawn.';
            $brochure = 'Twilight Switch';
        }
    }

    /* Rate Display Board*/
    else if ($type==6){
        $category='Rate Display Board';

        $link    = 'product_list.php?type=6';
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

    /* Digital Clocks */
    else if ($type==7 ){
      $category='Industrial Clocks';

      $link    = 'product_list.php?type=7';
      $related = array();
      if ( $x=='digital_clock'){
        $title= 'Digital Clock';
        $desc = 'Electromed offers customized digital clocks in a number of display types, including P10 LED type, seven segment display, LCD Display. The clocks can be in varying shapes, sizes and color as per the user’s requirement.';
        $features=array("Large display visible from distance",
          "Can be connected to slave clocks",
          "To In-Built Battery Backup",
          "Time Displays In 24 Hrs Format (Hh:Mm: Ss)","Easy time setting");
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
      else if( $x=='gps_clock' ){
        $title='GPS Clock';
        $desc = 'Electromed offers GPS digital clocks in a number of display types, including P10 LED type, seven segment display, LCD Display. The clocks can be in varying shapes, sizes and color as per the user’s requirement.<br><br>
        The clock synchronizes its time a GPS satellite, which eliminates the need for manual setting of the time. The GPS clock can be easily connected to a slave unit, which would ensure that the time displayed in all the clocks in your premises is accurate.';
        $features=array("Fully automatic operation",
          "GPS Master Synchronization With GPS Time.",
          "Large display visible from distance",
          "Can be connected to slave clocks",
          "Time Synchronizes With Slaves For Every Second.",
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
    else if ($type==8){
        $category='Token Management';

        $link    = 'product_list.php?type=8';
        $related = array('');
        $display = array();
        $applications = array();
            
        if ($x == 'token_display') {
            $title        = 'Token Display';
            $desc         = 'The token display system is a system which is used to announce and display the required token number. It is useful in areas where managing customer queues is of utmost importance. ';
            $brochure     = '';
        $features     = array(
          "Large display visible from 20ft",
          "Multilingual voice announcement",
          "Auto announcement available",
          "Wireless data transmission available");
        $specs        = array();

            $users        = array("Banks","Hospitals","Restaurants");
        $displayUnit=array(
            "Display Size", "4 inch",
            "No of digits",  "3",
            "Display type", "7 segment",
            "Enclosure", "Black powder coated ms sheet metal",
            "Inter connection cable", "9 pin D type connector with dust cover at both ends",
            "Standard length of cable", "5 meters",
            "Max possible length of cable", "15 meters",
            "Power", "230V AC 50 Hz, 5 watts max");
        $baseUnit = array(
            "Lighting Type", "7 segment LED",
            "Digit Size", "1 inch",
            "Display Color", "Red",
            "Display Function", "Numbers and texts",
            "Memory", "Yes, with internal battery backup",
            "Power Supply", "230V AC, 50 Hz");
        }
        else if ($x == 'token_dispenser') {
            $title        = 'Token Dispenser';
            $desc         = 'Token dispensers provide an efficient way to manage queues in a variety of places such as banks, hospitals, parking lots, restaurants etc.<br><br>
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

    return array($link,$category,$title,$desc,$features,$structure,$sensing,$brochure,$specs,$applications,$users,$display,$extras);
}

?>