function set1(x) {

if(x=='true_color_display') {
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='LED Display';
document.getElementById('curr').innerHTML='True Color HD Screen';


		document.getElementById('ri1').innerHTML='<img src="photos/tri_color_display1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=tri_color_display&type=1">TRI COLOR DISPLAY BOARDS</a>';

		document.getElementById('ri2').innerHTML='<img src="photos/uni_color_display1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=uni_color_display&type=1">UNI COLOR DISPLAY BOARDS</a>'	
		$('#rel3').hide();
		$('#rel4').hide();
}
else if(x=='tri_color_display') {
	document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='LED Display';
document.getElementById('curr').innerHTML='TRI Color Display';


		document.getElementById('ri1').innerHTML='<img src="photos/true_color_display1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=true_color_display&type=1">TRUE COLOR HD SCREEN</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/uni_color_display1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=uni_color_display&type=1">UNI COLOR DISPLAY BOARDS</a>'
		$('#rel3').hide();
		$('#rel4').hide();	
}
else if(x=='uni_color_display') {
	document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='LED Display';
document.getElementById('curr').innerHTML='Uni Color Display';

document.getElementById('ri1').innerHTML='<img src="photos/true_color_display1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=true_color_display&type=1">TRUE COLOR HD SCREEN</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/tri_color_display1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=tri_color_display&type=1">TRI COLOR DISPLAY BOARDS</a>';

		$('#rel3').hide();
		$('#rel4').hide();

}

else if(x=='token') {
//document.getElementById('head_name').innerHTML='Token Display';
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Products for Office';
document.getElementById('curr').innerHTML='Token Display';

document.getElementById('r1d1').innerHTML ='<span>Features:</span>';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Token displays are extremely useful in bringing order in the waiting area.</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">Bright and large displays are clearly visible from a good distance.</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">Numeric keypad unit with 05inch display</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">No. of digit is 03 and color of display is Red</p>';
document.getElementById('r5d1').innerHTML ='<span>Options:</span>';
document.getElementById('r5d2').innerHTML ='With Dot LED or With integrated 7 segment display';
document.getElementById('r6d1').innerHTML ='';
document.getElementById('r6d2').innerHTML ='';
document.getElementById('r7d1').innerHTML ='';
document.getElementById('r7d2').innerHTML ='';


		document.getElementById('ri1').innerHTML='<img src="photos/digital_clock1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=digital_clock&type=2">DIGITAL CLOCKS</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/interest_rate_display_board1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=interest_rate_display_board&type=2" style="font-size:11px;">INTEREST RATE DISPLAY BOARD</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/scrolling_display1.jpg" height="170">';
		document.getElementById('rd3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=scrolling_display&type=2">SCROLLING DISPLAY</a>';
		$('#rel4').hide();
}

else if(x=='digital_clock') {
//document.getElementById('head_name').innerHTML='Digital Clock';
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Products for Office';
document.getElementById('curr').innerHTML='Digital Clock';

document.getElementById('r1d1').innerHTML ='<span>Features:</span>';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Micro-controller based design with or without GPS connectivity</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">Inbuilt battery backup</p>';
document.getElementById('r3d1').innerHTML ='<span>For GPS clock:</span>';
document.getElementById('r3d2').innerHTML ='Automatic time setting from GPS satellite.';
document.getElementById('r4d1').innerHTML ='<span>Options:</span>';
document.getElementById('r4d2').innerHTML =' Double side clock or master/slave clock';
document.getElementById('r5d1').innerHTML ='<span>Clock format:</span>';
document.getElementById('r5d2').innerHTML ='12 Hrs. or 24 Hrs. (HH:MM:SECS or HH:MM)';
document.getElementById('r6d1').innerHTML ='';
document.getElementById('r6d2').innerHTML ='';
document.getElementById('r7d1').innerHTML ='';
document.getElementById('r7d2').innerHTML ='';

document.getElementById('ri1').innerHTML='<img src="photos/token1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=token&type=2">TOKEN DISPLAY</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/interest_rate_display_board1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=interest_rate_display_board&type=2" style="font-size:11px;">INTEREST RATE DISPLAY BOARD</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/scrolling_display1.jpg" height="170">';
		document.getElementById('rd3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=scrolling_display&type=2">SCROLLING DISPLAY</a>';

		$('#rel4').hide();
}



else if(x=='interest_rate_display_board'){
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Products for Office';
document.getElementById('curr').innerHTML='Industrial Rate Display Board';

document.getElementById('ri1').innerHTML='<img src="photos/token1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=token&type=2">TOKEN DISPLAY</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/digital_clock1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=digital_clock&type=2">DIGITAL CLOCKS</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/scrolling_display1.jpg" height="170">';
		document.getElementById('rd3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=scrolling_display&type=2">SCROLLING DISPLAY</a>';
		$('#rel4').hide();
}



else if(x=='scrolling_display'){
//document.getElementById('head_name').innerHTML='Scrolling Display';
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Products for Office';
document.getElementById('curr').innerHTML='Scrolling Display';

document.getElementById('ri1').innerHTML='<img src="photos/token1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=token&type=2">TOKEN DISPLAY</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/digital_clock1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=digital_clock&type=2">DIGITAL CLOCKS</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/interest_rate_display_board1.jpg" height="170">';
		document.getElementById('rd3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=interest_rate_display_board&type=2" style="font-size:11px;">INTEREST RATE DISPLAY BOARD</a>'

		$('#rel4').hide();
}

if(x=='flow_monitor'){
//document.getElementById('head_name').innerHTML='Flow Monitor';
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Flow Monitor';


		document.getElementById('ri1').innerHTML='<img src="photos/lfm1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=lfm&type=4" style="font-size:13px;">Line Frequency Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/process_indicator1.jpg" height="170">';
		document.getElementById('rd3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=process_indicator&type=4" style="font-size:13px;">Process Indicator</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/twilight_switches1.jpg" height="170">';
		document.getElementById('rd4').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=twilight_switches&type=4">Twilight Switch</a>'
}

else if(x=='lfm'){
//document.getElementById('head_name').innerHTML='Line Frequency Monitor';
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Line Frequency Monitor';

document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/process_indicator1.jpg" height="170">';
		document.getElementById('rd3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=process_indicator&type=4" style="font-size:13px;">Process Indicator</a>'

document.getElementById('ri4').innerHTML='<img src="photos/twilight_switches1.jpg" height="170">';
		document.getElementById('rd4').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=twilight_switches&type=4">Twilight Switch</a>'
}

else if(x=='megawatt_panel'){
//document.getElementById('head_name').innerHTML='Megawatt Pannel';
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Megawatt Panel';

document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/lfm1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4" style="font-size:13px;">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/process_indicator1.jpg" height="170">';
		document.getElementById('rd3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=process_indicator&type=4" style="font-size:13px;">Process Indicator</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/twilight_switches1.jpg" height="170">';
		document.getElementById('rd4').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=twilight_switches&type=4">Twilight Switch</a>'
}



else if(x=='process_indicator'){
//document.getElementById('head_name').innerHTML='Process and Indicator';
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Process Indicator';

document.getElementById('r1d1').innerHTML ='<span>Features:</span>';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Used for the measurement of process parameters</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">Range can be set through push buttons from 0-9999 & zero setting is automatic</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">4 digit LED display</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">Decimal placement is settable</p>';
document.getElementById('r5d1').innerHTML ='<span>Input:</span>';
document.getElementById('r5d2').innerHTML ='4 to 20 milli amp';
document.getElementById('r6d1').innerHTML ='<span>Display digit:</span>';
document.getElementById('r6d2').innerHTML ='7 segment red LED display';
document.getElementById('r7d1').innerHTML ='<span>Digit height:</span>';
document.getElementById('r7d2').innerHTML ='12.5mm, 25mm, 50mm, 100mm, 150mm, 200mm,  300mm';


document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/lfm1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4" style="font-size:13px;">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170">';
		document.getElementById('rd3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/twilight_switches1.jpg" height="170">';
		document.getElementById('rd4').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=twilight_switches&type=4">Twilight Switch</a>'	

}

else if(x=='ph_meter') {
//document.getElementById('head_name').innerHTML='Ph Meter';
//document.getElementById('head_name1').innerHTML='Ph Meter';
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Ph Meter';
//document.getElementById('currLogo').innerHTML='Ph Meter';
document.getElementById('desc').innerHTML='These are used to measure pH of all types of liquids. We supply the pH meters with combination electrode, electrode stand with clamp and temperature compensation.';
document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='3 ½ digit LED display';
document.getElementById('r2d1').innerHTML ='Range';
document.getElementById('r2d2').innerHTML ='for pH: 0-14pH for mV: (-1999) mV to (+1999) mV (optional)';
document.getElementById('r3d1').innerHTML ='Temperature compensation';
document.getElementById('r3d2').innerHTML ='0-100degC (manual)';
document.getElementById('r4d1').innerHTML ='Accuracy';
document.getElementById('r4d2').innerHTML ='±1 mV ±1count';
document.getElementById('r5d1').innerHTML ='Resolution';
document.getElementById('r5d2').innerHTML ='0.01 pH; 1mV';
document.getElementById('r6d1').innerHTML ='Options';
document.getElementById('r6d2').innerHTML ='Analog recorder output facility';
document.getElementById('r7d1').innerHTML ='Accessories';
document.getElementById('r7d2').innerHTML ='pH electrodes, buffer tablets';


document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/lfm1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4" style="font-size:13px;">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170">';
		document.getElementById('rd3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/process_indicator1.jpg" height="170">';
		document.getElementById('rd4').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=process_indicator&type=4" style="font-size:13px;">Process Indicator</a>'


}


else if(x=='tachometer') {
//document.getElementById('head_name').innerHTML='Tachometer';
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Tachometer';

document.getElementById('r1d1').innerHTML ='<span>Features:</span>';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Non blinking display</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">4 digit LED display</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">Non-contact speed sensing</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">High accuracy ( better than 0.1% ± 1 r.p.m)</p>';
document.getElementById('r5d1').innerHTML ='<span>Range:</span>';
document.getElementById('r5d2').innerHTML ='0-9999 rpm';
document.getElementById('r6d1').innerHTML ='<span>Transducer:</span>';
document.getElementById('r6d2').innerHTML =' Magnetic pick-up with 5mtrs. Lead';
document.getElementById('r7d1').innerHTML ='<span>Operating voltage:</span>';
document.getElementById('r7d2').innerHTML =' 230V ± 15%, 50Hz (standard)';


document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/lfm1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4" style="font-size:13px;">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170">';
		document.getElementById('rd3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/process_indicator1.jpg" height="170">';
		document.getElementById('rd4').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=process_indicator&type=4" style="font-size:13px;">Process Indicator</a>'

}

else if(x=='temp_cont') {
//document.getElementById('head_name').innerHTML='Temperature Controller';
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Temperature Controller';

document.getElementById('r1d1').innerHTML ='<span>Features:</span>';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Potentiometer setting is available</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">ON/OFF control action at pre-set levels is provided by a set of change-over contacts</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">Available for single set point or dual set point</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='';
document.getElementById('r5d1').innerHTML ='';
document.getElementById('r5d2').innerHTML ='';
document.getElementById('r6d1').innerHTML ='';
document.getElementById('r6d2').innerHTML ='';
document.getElementById('r7d1').innerHTML ='';
document.getElementById('r7d2').innerHTML ='';


document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/lfm1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4" style="font-size:13px;">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170">';
		document.getElementById('rd3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/process_indicator1.jpg" height="170">';
		document.getElementById('rd4').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=process_indicator&type=4" style="font-size:13px;">Process Indicator</a>'

}

else if(x=='twilight_switches') {
//document.getElementById('head_name').innerHTML='Twilight Switches';
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Twilight Switches ';

document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Switches ON and OFF at dusk and dawn.</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">Electromagnetic relay / contractor is provided as a switching element</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">Miniature circuit breaker and HRC fuse used for over load protection</p>';
document.getElementById('r4d1').innerHTML ='Contact rating';
document.getElementById('r4d2').innerHTML ='(5, 10, 16, 25, 32, 63, 100) Amps.';
document.getElementById('r5d1').innerHTML ='No. of poles';
document.getElementById('r5d2').innerHTML ='<p class="bullets" style="display:inline;">For (5, 10, 25) amps. : 02</p>';
document.getElementById('r6d1').innerHTML ='';
document.getElementById('r6d2').innerHTML ='<p class="bullets" style="display:inline;">For (10, 16, 32, 63 and 100) amps. : 03</p>';
document.getElementById('r7d1').innerHTML ='';
document.getElementById('r7d2').innerHTML ='';

document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/lfm1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4" style="font-size:13px;">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170">';
		document.getElementById('rd3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/process_indicator1.jpg" height="170">';
		document.getElementById('rd4').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=process_indicator&type=4" style="font-size:13px;">Process Indicator</a>'

}

else if(x=='industrial_display'){
//document.getElementById('head_name').innerHTML='Industrial Display';
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Industrial Display';

document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/lfm1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4" style="font-size:13px;">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170">';
		document.getElementById('rd3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/process_indicator1.jpg" height="170">';
		document.getElementById('rd4').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=process_indicator&type=4" style="font-size:13px;">Process Indicator</a>'

}


else if(x=='wsm'){
//document.getElementById('head_name').innerHTML='Weighing Scale Monitor';
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Weighing Scale Monitor';

document.getElementById('r1d1').innerHTML ='<span>Features:</span>';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Current hour, previous hour and real time clock</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">Monitoring of the number of tippings of juice and water</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">Fully automatic operation</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">Convenience of remote display</p>';
document.getElementById('r5d1').innerHTML ='<span>Totalizer:</span>';
document.getElementById('r5d2').innerHTML ='6 digit electronic counter';
document.getElementById('r6d1').innerHTML ='';
document.getElementById('r6d2').innerHTML ='';
document.getElementById('r7d1').innerHTML ='';
document.getElementById('r7d2').innerHTML ='';

document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/lfm1.jpg" height="170">';
		document.getElementById('rd2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4" style="font-size:13px;">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170">';
		document.getElementById('rd3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/process_indicator1.jpg" height="170">';
		document.getElementById('rd4').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=process_indicator&type=4" style="font-size:13px;">Process Indicator</a>'

}
/*
else if(x=='led_display'){
//document.getElementById('head_name').innerHTML='LED Display Board';
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='LED Display';

document.getElementById('r1d1').innerHTML ='<span>Features:</span>';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Scrolling message displays are useful in describing the facilities available at your end</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">They are also useful for guiding patients and attendants in maintaining hospital discipline and hygiene</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">They are also useful for showing pollution control and generation parameters</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">Available in RED color, TRI color and FULL color</p>';
document.getElementById('r5d1').innerHTML ='';
document.getElementById('r5d2').innerHTML ='<p class="bullets" style="display:inline;">USB interface, LAN and wireless communication</p>';
document.getElementById('r6d1').innerHTML ='';
document.getElementById('r6d2').innerHTML ='';
document.getElementById('r7d1').innerHTML ='';
document.getElementById('r7d2').innerHTML ='';
}
*/

document.getElementById('product_image').innerHTML='<img style="border-radius:10px;" width="340" height="220" src=photos/'+x+'1.jpg'+' alt="">';
document.getElementById('product_image1').innerHTML='<img style="border-radius:10px;" src=photos/'+x+'1.jpg'+' alt="" class="responsive-img">';
document.getElementById('product_image2').innerHTML='<img style="border-radius:10px;" src=photos/'+x+'2.jpg'+' alt="" class="responsive-img">';
document.getElementById('product_image3').innerHTML='<img style="border-radius:10px;" src=photos/'+x+'3.jpg'+' alt="" class="responsive-img">';

var x,y;
for(x=1;x<=7;x++) {
if ($('#r'+x+'d2').is(':empty') ){
  $('#r'+x+'d1').hide();
  $('#r'+x+'d2').hide();
  $('#c'+x).hide();
}
}
}

function set2(x) {
	document.getElementById('product_image').innerHTML='<img style="border-radius:10px;" width="340" height="220" src=photos/'+x+'1.jpg'+' alt="">';
}

function set3(x) {
	document.getElementById('product_image').innerHTML='<img style="border-radius:10px;" width="340" height="220" src=photos/'+x+'2.jpg'+' alt="">';
}

function set4(x) {
	document.getElementById('product_image').innerHTML='<img style="border-radius:10px;" width="340" height="220" src=photos/'+x+'3.jpg'+' alt="">';	
}

var i=1,j=1,k=500;
function start() {
start1();
start2();
setTimeout(function() {
  document.getElementById('field1').innerHTML=i;
  i++;
  if(i<=5)
  	start();
}, 120);
}

function start1(){
setTimeout(function() {
  document.getElementById('field2').innerHTML=j;
  j++;
  if(j<42)
  	start1();
}, 25);
} 

function start2(){
setTimeout(function() {

  if(k<=1024 )
  document.getElementById('field3').innerHTML=k;
  k+=4;
  if(k<1024 )
  	start2();
}, 20);
}



function filter(x,z){
	var y,k;

	for(k=1;k<=10;k++) {
		if(k<=z)
			$('#c'+k).show();
		else
			$('#c'+k).hide();
	}

	if(x=='LED_display') {
		y='LED Display';
		
		document.getElementById('p1').innerHTML='<img src="photos/true_color_display1.jpg" height="170">';
		document.getElementById('d1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l1').innerHTML='<a href="products.php?id=true_color_display&type=1">TRUE COLOR HD SCREEN</a>'

		document.getElementById('p2').innerHTML='<img src="photos/tri_color_display1.jpg" height="170">';
		document.getElementById('d2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l2').innerHTML='<a href="products.php?id=tri_color_display&type=1">TRI COLOR DISPLAY BOARDS</a>';

		document.getElementById('p3').innerHTML='<img src="photos/uni_color_display1.jpg" height="170">';
		document.getElementById('d3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l3').innerHTML='<a href="products.php?id=uni_color_display&type=1">UNI COLOR DISPLAY BOARDS</a>'	
	}

	else if(x=='Product_for_office') {
		y='Product for Office';
		
		document.getElementById('p1').innerHTML='<img src="photos/token1.jpg" height="170">';
		document.getElementById('d1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l1').innerHTML='<a href="products.php?id=token&type=2">TOKEN DISPLAY</a>'

		document.getElementById('p2').innerHTML='<img src="photos/digital_clock1.jpg" height="170">';
		document.getElementById('d2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l2').innerHTML='<a href="products.php?id=digital_clock&type=2">DIGITAL CLOCKS</a>'

		document.getElementById('p3').innerHTML='<img src="photos/interest_rate_display_board1.jpg" height="170">';
		document.getElementById('d3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l3').innerHTML='<a href="products.php?id=interest_rate_display_board&type=2" style="font-size:11px;">INTEREST RATE DISPLAY BOARD</a>'

		document.getElementById('p4').innerHTML='<img src="photos/scrolling_display1.jpg" height="170">';
		document.getElementById('d4').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l4').innerHTML='<a href="products.php?id=scrolling_display&type=2">SCROLLING DISPLAY</a>';
	}

	else if(x=='projects') {
		y='Featured Projects';
		
		document.getElementById('p1').innerHTML='<img src="Proj/proj1.jpg" height="170">';
		document.getElementById('d1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l1').innerHTML='<a href="#">Project 1</a>';

		document.getElementById('p2').innerHTML='<img src="Proj/proj2.jpg" height="170">';
		document.getElementById('d2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l2').innerHTML='<a href="#">Project 2</a>';

		document.getElementById('p3').innerHTML='<img src="Proj/proj3.jpg" height="170">';
		document.getElementById('d3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l3').innerHTML='<a href="#">Project 3</a>';

		document.getElementById('p4').innerHTML='<img src="Proj/proj4.jpg" height="170">';
		document.getElementById('d4').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l4').innerHTML='<a href="#">Project 4</a>';

		document.getElementById('p5').innerHTML='<img src="Proj/proj5.jpg" height="170">';
		document.getElementById('d5').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l5').innerHTML='<a href="#">Project 5</a>';

		document.getElementById('p6').innerHTML='<img src="Proj/proj6.jpg" height="170">';
		document.getElementById('d6').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l6').innerHTML='<a href="#">Project 6</a>';

	}
	else if(x=='Industrial_Instruments') {
		y='Industrial Instruments';	
		
		document.getElementById('p1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170">';
		document.getElementById('d1').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('p2').innerHTML='<img src="photos/lfm1.jpg" height="170">';
		document.getElementById('d2').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l2').innerHTML='<a href="products.php?id=lfm&type=4" style="font-size:13px;">Line Frequency Monitor</a>'

		document.getElementById('p3').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170">';
		document.getElementById('d3').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('p4').innerHTML='<img src="photos/process_indicator1.jpg" height="170">';
		document.getElementById('d4').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l4').innerHTML='<a href="products.php?id=process_indicator&type=4" style="font-size:13px;">Process Indicator</a>'

		document.getElementById('p5').innerHTML='<img src="photos/ph_meter1.jpg" height="170">';
		document.getElementById('d5').innerHTML='Measures pH of all types of liquids.'+'<br><br>';
		document.getElementById('l5').innerHTML='<a href="products.php?id=ph_meter&type=4">Ph meter</a>'

		document.getElementById('p6').innerHTML='<img src="photos/tachometer1.jpg" height="170">';
		document.getElementById('d6').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l6').innerHTML='<a href="products.php?id=tachometer&type=4">Tachometer</a>'

		document.getElementById('p7').innerHTML='<img src="photos/temp_cont1.jpg" height="170">';
		document.getElementById('d7').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l7').innerHTML='<a href="products.php?id=temp_cont&type=4" style="font-size:12px;">Temperature Controller</a>'

		document.getElementById('p8').innerHTML='<img src="photos/twilight_switches1.jpg" height="170">';
		document.getElementById('d8').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l8').innerHTML='<a href="products.php?id=twilight_switches&type=4">Twilight Switch</a>'

		document.getElementById('p9').innerHTML='<img src="photos/industrial_display1.jpg" height="170">';
		document.getElementById('d9').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l9').innerHTML='<a href="products.php?id=industrial_display&type=4">Industrial Display Board</a>'

		document.getElementById('p10').innerHTML='<img src="photos/wsm1.jpg" height="170">';
		document.getElementById('d10').innerHTML='I am a very simple card. I am good at containing small bits of information.';
		document.getElementById('l10').innerHTML='<a href="products.php?id=wsm&type=4" >Weight Scale Monitor</a>'
	}
	document.getElementById('category_name').innerHTML=y;	
}