<?php
function getIndustryData($name){
	global $arr4;
	$title        = '';
	$breadcrumb	  = '';
	$link         = '';
	$intro 		  = '';
	$products     = array();
	$clients      = '';
	$count    = '';
	if($name=='sugar'){
		$title="SUGAR&ensp;&ensp;INDUSTRY";
		$breadcrumb='Sugar Industry';
		$link="sugar";
		$intro="
		India is the largest producer of sugar in the world, with 26 million tonnes of raw value of cane sugar sweeteners, khandsari, and gur. India has ranked No. 1 in 7 out of last 10 years.
		<br><br>
		Electromed entered into business with the Sugar Industry in October 1980, with the installation of Digital Tachometer in Bajaj Hindustan Sugar Ltd, Gola, Lakhimpur. Since then, it has come a long way catering more than 200 sugar mills, in the South Asian sugar producing belt.
		<br><br>
		Constant innovation, coupled with our commitment to quality has helped us create long lasting relationships with many of the leading sugar companies. More than anything, we look to our customers for inspiration, and try to serve them to the best of our abilities.";
		$products=array(
			"FLOW MONITOR","flow_monitor",4,
			"PROCESS INDICATOR","process_indicator",4,
			"pH METER","ph_meter",4,
            "TEMPERATURE HUMIDITY INDICATOR", "temp_hum_indicator",4,
            "TACHOMETER","tachometer",4,
            "WEIGHING SCALE MONITOR","weighing_scale_monitor",4,
            "GPS CLOCKS","gps_clock",7,
            "TWILIGHT SWITCHES","twilight_switches",5
		);
		$clients=12;
		$count='0,0,0,37,306,93';
	}
	else if($name=='energy'){
		$title="ENERGY&ensp;&ensp;INDUSTRY";
		$breadcrumb='Energy Industry';
		$link="energy";
		$intro="
		Electromed entered into business with the Energy Industry in .... , with the installation of .... . Since then, it has come a long way catering both conventional and non conventional power plants all over the country.
		<br><br>
		Constant innovation, coupled with our commitment to quality has helped us create long lasting relationships with many of the leading power plants in both government and private sector. More than anything, we look to our customers for inspiration, and try to serve them to the best of our abilities.";
		$products=array(
			"LINE FREQUENCY MONITOR","line_frequency_monitor",4,
			"PROCESS INDICATOR","process_indicator",4,
			"MEGAWATT PANEL","megawatt_panel",4,
            "TACHOMETER","tachometer",4,
			"PARAMETER VIDEO WALL","parameter_led_wall",1,
			"POLLUTION PARAMETER WALL","pollution_led_wall",1,
            "TEMPERATURE HUMIDITY INDICATOR", "temp_hum_indicator",4,
            "ISOLATED CONVERTERS","isolated_converter",4,
            "GPS CLOCKS","gps_clock",7,
            "TWILIGHT SWITCHES","twilight_switches",5
		);
		$clients=12;
		$count='0,0,0,35,112,13';
	}
    else if($name=='hospitals'){
		$title="HOSPITALS AND CLINICS";
		$breadcrumb='Hospitals and Clinics';
		$link="energy";
		$intro="
		Electromed entered into business with the Energy Industry in .... , with the installation of .... . Since then, it has come a long way catering both conventional and non conventional power plants all over the country.
		<br><br>
		Constant innovation, coupled with our commitment to quality has helped us create long lasting relationships with many of the leading power plants in both government and private sector. More than anything, we look to our customers for inspiration, and try to serve them to the best of our abilities.";
		$products=array(
			"LINE FREQUENCY MONITOR","line_frequency_monitor",4,
			"PROCESS INDICATOR","process_indicator",4,
			"MEGAWATT PANEL","megawatt_panel",4,
            "TACHOMETER","tachometer",4,
			"PARAMETER VIDEO WALL","parameter_led_wall",1,
			"POLLUTION PARAMETER WALL","pollution_led_wall",1,
            "TEMPERATURE HUMIDITY INDICATOR", "temp_hum_indicator",4,
            "ISOLATED CONVERTERS","isolated_converter",4,
            "GPS CLOCKS","gps_clock",7,
            "TWILIGHT SWITCHES","twilight_switches",5
		);
		$clients=12;
		$count='0,0,0,35,112,13';
	}
    return array($title,$breadcrumb,$link,$intro,$products,$clients,$count);
}
?>