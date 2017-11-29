<?php

$link         = '';
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
if ($type == 1) {
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
    
} else if ($type == 4) {
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

?>