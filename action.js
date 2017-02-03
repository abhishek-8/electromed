var i=1,j=1,k=500;
function start() {

  	if(j>42)
  		j = 42;

  	if(k>1024) 
  		k = 1024;

  	if(i>5) 
  		i = 5;

setTimeout(function() {
  document.getElementById('field1').innerHTML=i;
  document.getElementById('field2').innerHTML=j;
  document.getElementById('field3').innerHTML=k;

  if(i<5)
  	i++;
  if(j<42)
  	j+=5;
  if(k<1024 )
  	k+=80;
  
if(  i!=5 || j!=42 || k!=1024 	)
	start();
}, 100);
}

function set1(x) {

if(x=='true_color_display') {
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='LED Display';
document.getElementById('curr').innerHTML='True Color HD Screen';

document.getElementById('desc').innerHTML='True color HD screen “offers advanced resolution, brightness and clarity and shows colors in their most natural tones, as they were meant to be seen.” ';


document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">USB interface</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">Text, graphics, logo display</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">High resolution of full color led display</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">Good picture uniformity</p>';
document.getElementById('r5d1').innerHTML ='Module size';
document.getElementById('r5d2').innerHTML ='256 mm x 128 mm';
document.getElementById('r6d1').innerHTML ='Module pixel';
document.getElementById('r6d2').innerHTML ='64 pixel x 32 pixel';
document.getElementById('r7d1').innerHTML ='Pixel Pitch ';
document.getElementById('r7d2').innerHTML ='4 mm';


	
		document.getElementById('ri1').innerHTML='<img src="photos/tri_color_display1.jpg" height="170" alt="tri color display">';
		document.getElementById('rd1').innerHTML='Compact design, low electricity consumption and user friendly functions.'+'<br><br>';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=tri_color_display&type=1">TRI COLOR DISPLAY BOARDS</a>';

		document.getElementById('ri2').innerHTML='<img src="photos/uni_color_display1.jpg" height="170" alt="uni color display">';
		document.getElementById('rd2').innerHTML='One of the most presentable for pollution & Environment control parameters.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=uni_color_display&type=1">UNI COLOR DISPLAY BOARDS</a>'		
		$('#rel3').hide();
		$('#rel4').hide();
}

else if(x=='tri_color_display') {
	document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='LED Display';
document.getElementById('curr').innerHTML='TRI Color Display';

document.getElementById('desc').innerHTML='TRI color display board is applauded for the features like compact design, low electricity consumption and user friendly functions.';

		
document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">LED Panel (Red, Green and Yellow)</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">P10 Tri colour waterproof modules</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">USB/ LAN interface</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">Text, graphics, logo display</p>';
document.getElementById('r5d1').innerHTML ='';
document.getElementById('r5d2').innerHTML ='<p class="bullets" style="display:inline;">RTC based clock</p>';
document.getElementById('r6d1').innerHTML ='';
document.getElementById('r6d2').innerHTML ='<p class="bullets" style="display:inline;">Sheet metal panel box</p>';
document.getElementById('r7d1').innerHTML ='Line spacing';
document.getElementById('r7d2').innerHTML ='10 mm';

		document.getElementById('ri1').innerHTML='<img src="photos/true_color_display1.jpg" height="170" alt="true color display">';
		document.getElementById('rd1').innerHTML='Advanced resolution, brightness and clarity and shows colors in their most natural tones.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=true_color_display&type=1">TRUE COLOR HD SCREEN</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/uni_color_display1.jpg" height="170" alt="uni color display">';
		document.getElementById('rd2').innerHTML='One of the most presentable for pollution & Environment control parameters.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=uni_color_display&type=1">UNI COLOR DISPLAY BOARDS</a>'
		$('#rel3').hide();
		$('#rel4').hide();	
}
else if(x=='uni_color_display') {
	document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='LED Display';
document.getElementById('curr').innerHTML='Uni Color Display';


document.getElementById('desc').innerHTML='UNI color display board is one of the most presentable for pollution & Environment control parameters.';


document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">LED Panel (Red )</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">P10 Red colour waterproof modules</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">USB/ LAN interface</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">Text, graphics, logo display</p>';
document.getElementById('r5d1').innerHTML ='';
document.getElementById('r5d2').innerHTML ='<p class="bullets" style="display:inline;">RTC based clock</p>';
document.getElementById('r6d1').innerHTML ='';
document.getElementById('r6d2').innerHTML ='<p class="bullets" style="display:inline;">Sheet metal panel box</p>';
document.getElementById('r7d1').innerHTML ='Line spacing';
document.getElementById('r7d2').innerHTML ='10 mm';


document.getElementById('ri1').innerHTML='<img src="photos/true_color_display1.jpg" height="170" alt="true color display">';
		document.getElementById('rd1').innerHTML='Advanced resolution, brightness and clarity and shows colors in their most natural tones.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=true_color_display&type=1">TRUE COLOR HD SCREEN</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/tri_color_display1.jpg" height="170" alt="tri color display">';
		document.getElementById('rd2').innerHTML='Compact design, low electricity consumption and user friendly functions.'+'<br><br>';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=tri_color_display&type=1">TRI COLOR DISPLAY BOARDS</a>';

		$('#rel3').hide();
		$('#rel4').hide();

}

else if(x=='token') {
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Products for Office';
document.getElementById('curr').innerHTML='Token Display';


document.getElementById('desc').innerHTML='Token display system provides easiest way to inform the customer or patient about his / her status while waiting.';


document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Token displays are extremely useful in bringing order in the waiting area.</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">Bright and large displays are clearly visible from a good distance.</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">Numeric keypad unit with 5 inch display</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">No. of digit is 3 and color of display is Red</p>';
document.getElementById('r5d1').innerHTML ='Options:';
document.getElementById('r5d2').innerHTML ='With Dot LED or With integrated 7 segment display';

		document.getElementById('ri1').innerHTML='<img src="photos/digital_clock1.jpg" height="170" alt="digital clock">';
		document.getElementById('rd1').innerHTML='Used in factories, offices, large public areas, shopping centers, warehouses and similar large areas.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=digital_clock&type=2">DIGITAL CLOCKS</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/interest_rate_display_board1.jpg" height="170" lat="interest rate display board">';
		document.getElementById('rd2').innerHTML='Date, time, deposit period, interest rate is displayed on an attractive background.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=interest_rate_display_board&type=2">INTEREST RATE DISPLAY BOARD</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/scrolling_display1.jpg" height="170" alt="scrolling display">';
		document.getElementById('rd3').innerHTML='High brightness. User can store and scroll a lot of messages';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=scrolling_display&type=2">SCROLLING DISPLAY</a>';
		$('#rel4').hide();
}

else if(x=='digital_clock') {
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Products for Office';
document.getElementById('curr').innerHTML='Digital Clock';


document.getElementById('desc').innerHTML='LED Display Clocks are widely used in factories, offices, large public areas, shopping centers, warehouses and similar large areas.';


document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Micro-controller based design with or without GPS connectivity</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">Inbuilt battery backup</p>';
document.getElementById('r3d1').innerHTML ='For GPS clock';
document.getElementById('r3d2').innerHTML ='Automatic time setting from GPS satellite.';
document.getElementById('r4d1').innerHTML ='Options';
document.getElementById('r4d2').innerHTML =' Double side clock or master/slave clock';
document.getElementById('r5d1').innerHTML ='Clock format';
document.getElementById('r5d2').innerHTML ='12 Hrs. or 24 Hrs. (HH:MM:SECS or HH:MM)';

document.getElementById('ri1').innerHTML='<img src="photos/token1.jpg" height="170" alt="token">';
		document.getElementById('rd1').innerHTML='Provides easiest way to inform the customer or patient about his / her status while waiting.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=token&type=2">TOKEN DISPLAY</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/interest_rate_display_board1.jpg" height="170" alt="interest rate display board">';
		document.getElementById('rd2').innerHTML='Date, time, deposit period, interest rate is displayed on an attractive background.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=interest_rate_display_board&type=2">INTEREST RATE DISPLAY BOARD</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/scrolling_display1.jpg" height="170" alt="scrolling display">';
		document.getElementById('rd3').innerHTML='High brightness. User can store and scroll a lot of messages';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=scrolling_display&type=2">SCROLLING DISPLAY</a>';

		$('#rel4').hide();
}



else if(x=='interest_rate_display_board'){
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Products for Office';
document.getElementById('curr').innerHTML='Industrial Rate Display Board';

document.getElementById('desc').innerHTML='Interest Rate Display Board is ideal for banks. Date, time, deposit period, interest rate is displayed on an attractive background. ';


document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Display of interest rate, time & date</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">Extremely useful for Banks</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">High resolution of full color led display</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">Data upload through IR Remote / PC</p>';
document.getElementById('r5d1').innerHTML ='No. of lines';
document.getElementById('r5d2').innerHTML ='12-16';

document.getElementById('ri1').innerHTML='<img src="photos/token1.jpg" height="170" alt="token">';
		document.getElementById('rd1').innerHTML='Provides easiest way to inform the customer or patient about his / her status while waiting.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=token&type=2">TOKEN DISPLAY</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/digital_clock1.jpg" height="170" alt="digital clock">';
		document.getElementById('rd2').innerHTML='Used in factories, offices, large public areas, shopping centers, warehouses and similar large areas.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=digital_clock&type=2">DIGITAL CLOCKS</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/scrolling_display1.jpg" height="170" alt="scrolling display">';
		document.getElementById('rd3').innerHTML='High brightness. User can store and scroll a lot of messages';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=scrolling_display&type=2">SCROLLING DISPLAY</a>';
		$('#rel4').hide();
}



else if(x=='scrolling_display'){
//document.getElementById('head_name').innerHTML='Scrolling Display';
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Products for Office';
document.getElementById('curr').innerHTML='Scrolling Display';


document.getElementById('desc').innerHTML='Scrolling Display is having high brightness. User can store and scroll a lot of messages. Ideal for hospitals, pathologies, banks, shops etc.';


document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Safety Slogans</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">Display of Date & Time</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">Important Announcements</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">Display of latest news headlines</p>';
document.getElementById('r5d1').innerHTML ='';
document.getElementById('r5d2').innerHTML ='<p class="bullets" style="display:inline;">Data entry from keyboard or PC</p>';
document.getElementById('r6d1').innerHTML ='';
document.getElementById('r6d2').innerHTML ='<p class="bullets" style="display:inline;">Day visible, wide viewing angle LED</p>';
document.getElementById('r7d1').innerHTML ='Language supported: ';
document.getElementById('r7d2').innerHTML ='English/Hindi';

document.getElementById('ri1').innerHTML='<img src="photos/token1.jpg" height="170" alt="token">';
		document.getElementById('rd1').innerHTML='Provides easiest way to inform the customer or patient about his / her status while waiting.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=token&type=2">TOKEN DISPLAY</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/digital_clock1.jpg" height="170" alt="digital clock">';
		document.getElementById('rd2').innerHTML='Used in factories, offices, large public areas, shopping centers, warehouses and similar large areas.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=digital_clock&type=2">DIGITAL CLOCKS</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/interest_rate_display_board1.jpg" height="170" alt="interest rate display board">';
		document.getElementById('rd3').innerHTML='Date, time, deposit period, interest rate is displayed on an attractive background.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=interest_rate_display_board&type=2">INTEREST RATE DISPLAY BOARD</a>'

		$('#rel4').hide();
}

if(x=='flow_monitor'){
//document.getElementById('head_name').innerHTML='Flow Monitor';
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Flow Monitor';

document.getElementById('desc').innerHTML='Flow monitor is an advanced display system to monitor juice and water flow parameters. It has a Totalizer which gives error free total fluid flow over the season. Transfer from current hour to previous hour occurs when hour of clock changes (synchronized with clock)';


document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='Input 4-20m from flow transducer';
document.getElementById('r2d1').innerHTML ='Flow rate';
document.getElementById('r2d2').innerHTML ='4 digits; 50mm high';
document.getElementById('r3d1').innerHTML ='Current hour';
document.getElementById('r3d2').innerHTML ='3 digits; 100mm high';
document.getElementById('r4d1').innerHTML ='Previous hour';
document.getElementById('r4d2').innerHTML ='3 digits; 100mm high';
document.getElementById('r5d1').innerHTML ='Totalizer';
document.getElementById('r5d2').innerHTML ='6 digits; 12.5mm high electronic counter';
document.getElementById('r6d1').innerHTML ='Real time clock';
document.getElementById('r6d2').innerHTML ='hrs. & mins. With inbuilt battery; 25mm high';


		document.getElementById('ri4').innerHTML='<img src="photos/lfm1.jpg" height="170" alt="line frequency monitor">';
		document.getElementById('rd4').innerHTML='Measures power line frequency, highly accurate reading and non blinking display. Microcontroller based design. ERTL tested.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=lfm&type=4" >Line Frequency Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170" alt="megawatt panel">';
		document.getElementById('rd2').innerHTML='Essential to power plants. Generation data can be displayed all over the plant.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/process_indicator1.jpg" height="170" alt="process indicator">';
		document.getElementById('rd3').innerHTML='Suitable for displaying process parameters like flow, temperature, level, speed, pH etc. Available in different digit heights.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=process_indicator&type=4">Process Indicator</a>'

		document.getElementById('ri1').innerHTML='<img src="photos/twilight_switches1.jpg" height="170" alt="twilight switches">';
		document.getElementById('rd1').innerHTML='Activates with respect to the ambient light,switches ON and OFF at dusk and dawn.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=twilight_switches&type=4">Twilight Switch</a>'
}

else if(x=='lfm'){
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Line Frequency Monitor';


document.getElementById('desc').innerHTML='Line Frequency Monitors is used to measures power line frequency, highly accurate reading and non blinking display. Microcontroller based design. ERTL tested.';


document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Measures line frequency accurately up to 2 decimal places</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">High and low frequency set points also available</p>';
document.getElementById('r3d1').innerHTML ='Display size';
document.getElementById('r3d2').innerHTML ='0.5 inch to 4 inches';


document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170" alt="flow_monitor">';
		document.getElementById('rd1').innerHTML='Advanced display system to monitor juice and water flow parameters.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170" alt="megawatt panel">';
		document.getElementById('rd2').innerHTML='Essential to power plants. Generation data can be displayed all over the plant.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/process_indicator1.jpg" height="170" alt="process indicator">';
		document.getElementById('rd3').innerHTML='Suitable for displaying process parameters like flow, temperature, level, speed, pH etc. Available in different digit heights.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=process_indicator&type=4">Process Indicator</a>'

document.getElementById('ri4').innerHTML='<img src="photos/twilight_switches1.jpg" height="170" alt="twilight switches">';
		document.getElementById('rd4').innerHTML='Activates with respect to the ambient light,switches ON and OFF at dusk and dawn.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=twilight_switches&type=4">Twilight Switch</a>'
}

else if(x=='megawatt_panel'){
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Megawatt Panel';

document.getElementById('desc').innerHTML='Megawatt Panels are essential to power plants. Generation data can be displayed all over the plant.';


document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Large displays visible from a long distance</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">4-20 m inputs derived from megawatt transducers</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">Input open indication</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">Total MW internally generated</p>';
document.getElementById('r5d1').innerHTML ='';
document.getElementById('r5d2').innerHTML ='<p class="bullets" style="display:inline;">Mains frequency display</p>';

document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170" alt="flow_monitor">';
		document.getElementById('rd1').innerHTML='Advanced display system to monitor juice and water flow parameters.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/lfm1.jpg" height="170" alt="line frequency monitor">';
		document.getElementById('rd2').innerHTML='Measures power line frequency, highly accurate reading and non blinking display. Microcontroller based design. ERTL tested.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/process_indicator1.jpg" height="170" alt="process indicator">';
		document.getElementById('rd3').innerHTML='Suitable for displaying process parameters like flow, temperature, level, speed, pH etc. Available in different digit heights.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=process_indicator&type=4">Process Indicator</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/twilight_switches1.jpg" height="170" alt="twilight switches">';
		document.getElementById('rd4').innerHTML='Activates with respect to the ambient light,switches ON and OFF at dusk and dawn.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=twilight_switches&type=4">Twilight Switch</a>'
}



else if(x=='process_indicator'){
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Process Indicator';

document.getElementById('desc').innerHTML='Process indicators are suitable for displaying process parameters like flow, temperature, level, speed, pH etc. Available in different digit heights.';


document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Used for the measurement of process parameters</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">Range can be set through push buttons from 0-9999 & zero setting is automatic</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">4 digit LED display</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">Decimal placement is settable</p>';
document.getElementById('r5d1').innerHTML ='Input';
document.getElementById('r5d2').innerHTML ='4 to 20 milli amp';
document.getElementById('r6d1').innerHTML ='Display digit';
document.getElementById('r6d2').innerHTML ='7 segment red LED display';
document.getElementById('r7d1').innerHTML ='Digit height';
document.getElementById('r7d2').innerHTML ='12.5mm, 25mm, 50mm, 100mm, 150mm, 200mm,  300mm';


document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170" alt="flow_monitor">';
		document.getElementById('rd1').innerHTML='Advanced display system to monitor juice and water flow parameters.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/lfm1.jpg" height="170" alt="line frequency monitor">';
		document.getElementById('rd2').innerHTML='Measures power line frequency, highly accurate reading and non blinking display. Microcontroller based design. ERTL tested.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170" alt="megawatt panel">';
		document.getElementById('rd3').innerHTML='Essential to power plants. Generation data can be displayed all over the plant.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/twilight_switches1.jpg" height="170" alt="twilight switches">';
		document.getElementById('rd4').innerHTML='Activates with respect to the ambient light,switches ON and OFF at dusk and dawn.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=twilight_switches&type=4">Twilight Switch</a>'	

}

else if(x=='ph_meter') {
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Ph Meter';

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


document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170" alt="flow_monitor">';
		document.getElementById('rd1').innerHTML='Advanced display system to monitor juice and water flow parameters.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/lfm1.jpg" height="170" alt="line frequency monitor">';
		document.getElementById('rd2').innerHTML='Measures power line frequency, highly accurate reading and non blinking display. Microcontroller based design. ERTL tested.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4" >Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170" alt="megawatt panel">';
		document.getElementById('rd3').innerHTML='Essential to power plants. Generation data can be displayed all over the plant.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/process_indicator1.jpg" height="170" alt="process indicator">';
		document.getElementById('rd4').innerHTML='Suitable for displaying process parameters like flow, temperature, level, speed, pH etc. Available in different digit heights.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=process_indicator&type=4">Process Indicator</a>'


}


else if(x=='tachometer') {
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Tachometer';

document.getElementById('desc').innerHTML='Tachometers are used for monitoring the rpm of machines. The sensor is contactless. Ideal for sugar mills, heavy industries etc.';


document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Non blinking display</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">4 digit LED display</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">Non-contact speed sensing</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">High accuracy ( better than 0.1% ± 1 r.p.m)</p>';
document.getElementById('r5d1').innerHTML ='Range';
document.getElementById('r5d2').innerHTML ='0-9999 rpm';
document.getElementById('r6d1').innerHTML ='Transducer';
document.getElementById('r6d2').innerHTML =' Magnetic pick-up with 5mtrs. Lead';
document.getElementById('r7d1').innerHTML ='Operating voltage';
document.getElementById('r7d2').innerHTML =' 230V ± 15%, 50Hz (standard)';


document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170">';
		document.getElementById('rd1').innerHTML='Advanced display system to monitor juice and water flow parameters.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/lfm1.jpg" height="170" alt="line frequency monitor">';
		document.getElementById('rd2').innerHTML='Measures power line frequency, highly accurate reading and non blinking display. Microcontroller based design. ERTL tested.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170" alt="megawatt panel">';
		document.getElementById('rd3').innerHTML='Essential to power plants. Generation data can be displayed all over the plant.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/process_indicator1.jpg" height="170" alt="process indicator">';
		document.getElementById('rd4').innerHTML='Suitable for displaying process parameters like flow, temperature, level, speed, pH etc. Available in different digit heights.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=process_indicator&type=4">Process Indicator</a>'

}

else if(x=='temp_cont') {
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Temperature Controller';

document.getElementById('desc').innerHTML='Temperature Controllers used in a variety of industrial applications like turbines, furnaces, blow moulding, etc. where the measurement/control of temperature is of vital importance.';


document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Potentiometer setting is available</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">ON/OFF control action at pre-set levels is provided by a set of change-over contacts</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">Available for single set point or dual set point</p>';


document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170" alt="flow_monitor">';
		document.getElementById('rd1').innerHTML='Advanced display system to monitor juice and water flow parameters.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/lfm1.jpg" height="170" alt="line frequency monitor">';
		document.getElementById('rd2').innerHTML='Measures power line frequency, highly accurate reading and non blinking display. Microcontroller based design. ERTL tested.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170" alt="megawatt panel">';
		document.getElementById('rd3').innerHTML='Essential to power plants. Generation data can be displayed all over the plant.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/process_indicator1.jpg" height="170" alt="process indicator">';
		document.getElementById('rd4').innerHTML='Suitable for displaying process parameters like flow, temperature, level, speed, pH etc. Available in different digit heights.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=process_indicator&type=4">Process Indicator</a>'

}

else if(x=='twilight_switches') {
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Twilight Switches ';

document.getElementById('desc').innerHTML='Twilight switch activates with respect to the ambient light. The device as its name suggests, switches ON and OFF at dusk and dawn.';


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


document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170" alt="flow_monitor">';
		document.getElementById('rd1').innerHTML='Advanced display system to monitor juice and water flow parameters.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/lfm1.jpg" height="170" alt="line frequency monitor">';
		document.getElementById('rd2').innerHTML='Measures power line frequency, highly accurate reading and non blinking display. Microcontroller based design. ERTL tested.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170" alt="megawatt panel">';
		document.getElementById('rd3').innerHTML='Essential to power plants. Generation data can be displayed all over the plant.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/process_indicator1.jpg" height="170" alt="process indicator">';
		document.getElementById('rd4').innerHTML='Suitable for displaying process parameters like flow, temperature, level, speed, pH etc. Available in different digit heights.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=process_indicator&type=4">Process Indicator</a>'

}

else if(x=='industrial_display'){
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Industrial Display';

document.getElementById('desc').innerHTML=': Industrial displays are made to customer specifications. All sorts of calculations can be done internally and displayed.';


document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">GPS Clock for Date & Time</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">Room Temp Measurement</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">Transducers for all signals</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">Internal Summation and Calculations</p>';
document.getElementById('r5d1').innerHTML ='';
document.getElementById('r5d2').innerHTML ='<p class="bullets" style="display:inline;">Remote Display through RS 485 communications</p>';


document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170" alt="flow_monitor">';
		document.getElementById('rd1').innerHTML='Advanced display system to monitor juice and water flow parameters.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/lfm1.jpg" height="170" alt="line frequency monitor">';
		document.getElementById('rd2').innerHTML='Measures power line frequency, highly accurate reading and non blinking display. Microcontroller based design. ERTL tested.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170" alt="megawatt panel">';
		document.getElementById('rd3').innerHTML='Essential to power plants. Generation data can be displayed all over the plant.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/process_indicator1.jpg" height="170" alt="process indicator">';
		document.getElementById('rd4').innerHTML='Suitable for displaying process parameters like flow, temperature, level, speed, pH etc. Available in different digit heights.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=process_indicator&type=4">Process Indicator</a>'

}


else if(x=='wsm'){
document.getElementById('pre1').innerHTML='Products';
document.getElementById('pre2').innerHTML='Industrial Instruments';
document.getElementById('curr').innerHTML='Weighing Scale Monitor';

document.getElementById('desc').innerHTML='WSM is used to monitoring the number of tippings of juice and water Fully automatic operation and convenience of remote display.';


document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Current hour, previous hour and real time clock</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">Monitoring of the number of tippings of juice and water</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">Fully automatic operation</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">Convenience of remote display</p>';
document.getElementById('r5d1').innerHTML ='Totalizer';
document.getElementById('r5d2').innerHTML ='6 digit electronic counter';


document.getElementById('ri1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170" alt="flow_monitor">';
		document.getElementById('rd1').innerHTML='Advanced display system to monitor juice and water flow parameters.';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/lfm1.jpg" height="170" alt="line frequency monitor">';
		document.getElementById('rd2').innerHTML='Measures power line frequency, highly accurate reading and non blinking display. Microcontroller based design. ERTL tested.';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170" alt="megawatt panel">';
		document.getElementById('rd3').innerHTML='Essential to power plants. Generation data can be displayed all over the plant.';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="photos/process_indicator1.jpg" height="170" alt="process indicator">';
		document.getElementById('rd4').innerHTML='Suitable for displaying process parameters like flow, temperature, level, speed, pH etc. Available in different digit heights.';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=process_indicator&type=4">Process Indicator</a>'

}

else if(x=='ntpc_rihand') {
	document.getElementById('curr').innerHTML='NTPC RIHAND';

document.getElementById('desc').innerHTML='';


document.getElementById('r1d1').innerHTML ='ON GATE';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Online Display Of Pollution Parameters</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">Multipage display</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">Rs485 communication</p>';
document.getElementById('r4d1').innerHTML ='AT ADMIN OFFICE & COLONY GATE';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">Countdown displays for project activities</p>';
document.getElementById('r5d1').innerHTML ='';
document.getElementById('r5d2').innerHTML ='<p class="bullets" style="display:inline;">Automatic updation of days and months</p>';
document.getElementById('r6d1').innerHTML ='';
document.getElementById('r6d2').innerHTML ='<p class="bullets" style="display:inline;">Entry through either RS 485 or inbuilt keyboard</p>';


document.getElementById('ri1').innerHTML='<img src="photos/patna_high_court1.jpg" height="170" alt="">';
		document.getElementById('rd1').innerHTML='';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/patna_railway_station1.jpg" height="170" alt="">';
		document.getElementById('rd2').innerHTML='';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/proj4.jpg" height="170" alt="">';
		document.getElementById('rd3').innerHTML='';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="Proj/proj5.jpg" height="170" alt="">';
		document.getElementById('rd4').innerHTML='';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=process_indicator&type=4">Process Indicator</a>'

}

else if(x=='patna_high_court') {

	document.getElementById('curr').innerHTML='Patna High Court';
	document.getElementById('desc').innerHTML='';


document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">Online Display Of court case numbers of 40 courts.</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">Display outside courtrooms and at 14 different locations</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">Rs485 communication</p>';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='<p class="bullets" style="display:inline;">Network length is 6 kms.</p>';



		document.getElementById('ri1').innerHTML='<img src="photos/ntpc_rihand1.jpg" height="170" alt="">';
		document.getElementById('rd1').innerHTML='';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/patna_railway_station1.jpg" height="170" alt="">';
		document.getElementById('rd2').innerHTML='';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/proj4.jpg" height="170" alt="">';
		document.getElementById('rd3').innerHTML='';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="Proj/proj5.jpg" height="170" alt="">';
		document.getElementById('rd4').innerHTML='';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=process_indicator&type=4">Process Indicator</a>'

}

else if(x=='patna_railway_station') {

	document.getElementById('curr').innerHTML='Railway Station Display at patna';
	document.getElementById('desc').innerHTML='';


document.getElementById('r1d1').innerHTML ='Features';
document.getElementById('r1d2').innerHTML ='<p class="bullets" style="display:inline;">RS485 communication</p>';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='<p class="bullets" style="display:inline;">Display of important govt. messages</p>';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='<p class="bullets" style="display:inline;">Installation in 2007</p>';



		document.getElementById('ri1').innerHTML='<img src="photos/ntpc_rihand1.jpg" height="170" alt="">';
		document.getElementById('rd1').innerHTML='';
		document.getElementById('rl1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('ri2').innerHTML='<img src="photos/patna_high_court1.jpg" height="170" alt="">';
		document.getElementById('rd2').innerHTML='';
		document.getElementById('rl2').innerHTML='<a href="products.php?id=lfm&type=4">Line Frequency Monitor</a>'

		document.getElementById('ri3').innerHTML='<img src="photos/proj4.jpg" height="170" alt="">';
		document.getElementById('rd3').innerHTML='';
		document.getElementById('rl3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('ri4').innerHTML='<img src="Proj/proj5.jpg" height="170" alt="">';
		document.getElementById('rd4').innerHTML='';
		document.getElementById('rl4').innerHTML='<a href="products.php?id=process_indicator&type=4">Process Indicator</a>'

}

document.getElementById('product_image').innerHTML='<img style="border-radius:10px;" width="100%" height="100%" src=photos/'+x+'1.jpg'+' alt="'+x+'">';
document.getElementById('product_image1').innerHTML='<img style="border-radius:10px;" width="100" height="80" src=photos/'+x+'1.jpg'+' alt="'+x+'">';
document.getElementById('product_image2').innerHTML='<img style="border-radius:10px;" width="100" height="80" src=photos/'+x+'2.jpg'+' alt="'+x+'" >';
document.getElementById('product_image3').innerHTML='<img style="border-radius:10px;" width="100" height="80" src=photos/'+x+'3.jpg'+' alt="'+x+'" >';

$("img").error(function(){
        $(this).hide();
});

var x,y;
for(x=1;x<=7;x++) {
if ($('#r'+x+'d2').is(':empty') ){
  $('#r'+x).hide();

}
}
}

function set2(x) {
	document.getElementById('product_image').innerHTML='<img style="border-radius:10px;" width="100%" height="100%" src=photos/'+x+'1.jpg'+' alt="'+x+'">';
}

function set3(x) {
	document.getElementById('product_image').innerHTML='<img style="border-radius:10px;" width="100%" height="100%" src=photos/'+x+'2.jpg'+' alt="'+x+'">';
}

function set4(x) {
	document.getElementById('product_image').innerHTML='<img style="border-radius:10px;" width="100%" height="100%" src=photos/'+x+'3.jpg'+' alt="'+x+'">';	
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
		
		document.getElementById('p1').innerHTML='<img src="photos/true_color_display1.jpg" height="170" alt="true color display">';
		document.getElementById('d1').innerHTML='Advanced resolution, brightness and clarity and shows colors in their most natural tones.';
		document.getElementById('l1').innerHTML='<a href="products.php?id=true_color_display&type=1">TRUE COLOR HD SCREEN</a>'

		document.getElementById('p2').innerHTML='<img src="photos/tri_color_display1.jpg" height="170" alt="tri color display">';
		document.getElementById('d2').innerHTML='Compact design, low electricity consumption and user friendly functions.'+'<br><br>';
		document.getElementById('l2').innerHTML='<a href="products.php?id=tri_color_display&type=1">TRI COLOR DISPLAY BOARDS</a>';

		document.getElementById('p3').innerHTML='<img src="photos/uni_color_display1.jpg" height="170" alt="uni color display">';
		document.getElementById('d3').innerHTML='One of the most presentable for pollution & Environment control parameters.';
		document.getElementById('l3').innerHTML='<a href="products.php?id=uni_color_display&type=1">UNI COLOR DISPLAY BOARDS</a>'	
	}

	else if(x=='Product_for_office') {
		y='Product for Office';
		
		document.getElementById('p1').innerHTML='<img src="photos/token1.jpg" height="170" alt="token">';
		document.getElementById('d1').innerHTML='Provides easiest way to inform the customer or patient about his/her status while waiting.';
		document.getElementById('l1').innerHTML='<a href="products.php?id=token&type=2">TOKEN DISPLAY</a>'

		document.getElementById('p2').innerHTML='<img src="photos/digital_clock1.jpg" height="170" alt="digital clock">';
		document.getElementById('d2').innerHTML='Used in factories, offices, large public areas, shopping centers, warehouses and similar large areas.';
		document.getElementById('l2').innerHTML='<a href="products.php?id=digital_clock&type=2">DIGITAL CLOCKS</a>'

		document.getElementById('p3').innerHTML='<img src="photos/interest_rate_display_board1.jpg" height="170" alt="interest rate display board">';
		document.getElementById('d3').innerHTML='Date, time, deposit period, interest rate is displayed on an attractive background.';
		document.getElementById('l3').innerHTML='<a href="products.php?id=interest_rate_display_board&type=2">INTEREST RATE DISPLAY BOARD</a>'

		document.getElementById('p4').innerHTML='<img src="photos/scrolling_display1.jpg" height="170" alt="scrolling display">';
		document.getElementById('d4').innerHTML='High brightness. User can store and scroll a lot of messages';
		document.getElementById('l4').innerHTML='<a href="products.php?id=scrolling_display&type=2">SCROLLING DISPLAY</a>';
	}

	else if(x=='projects') {

		y='Featured Projects';
		
		document.getElementById('p1').innerHTML='<img src="Proj/ntpc_rihand1.jpg" height="170">';
		document.getElementById('l1').innerHTML='<a href="project_page.php?id=ntpc_rihand">NTPC RIHAND</a>';

		document.getElementById('p2').innerHTML='<img src="Proj/patna_high_court1.jpg" height="170">';
		document.getElementById('d2').innerHTML='';
		document.getElementById('l2').innerHTML='<a href="project_page.php?id=patna_high_court">PATNA HIGH COURT</a>';

		document.getElementById('p3').innerHTML='<img src="Proj/patna_railway_station1.jpg" height="170">';
		document.getElementById('d3').innerHTML='';
		document.getElementById('l3').innerHTML='<a href="project_page.php?id=patna_railway_station">RAILWAY STATION DISPLAY AT PATNA</a>';

		document.getElementById('p4').innerHTML='<img src="Proj/proj4.jpg" height="170">';
		document.getElementById('d4').innerHTML='';
		document.getElementById('l4').innerHTML='<a href="#"></a>';

		document.getElementById('p5').innerHTML='<img src="Proj/proj5.jpg" height="170">';
		document.getElementById('d5').innerHTML='';
		document.getElementById('l5').innerHTML='<a href="#">PANKI</a>';

		document.getElementById('p6').innerHTML='<img src="Proj/proj6.jpg" height="170">';
		document.getElementById('d6').innerHTML='';
		document.getElementById('l6').innerHTML='<a href="#">COACH GUIDANCE SYSTEM</a>';

	}
	else if(x=='Industrial_Instruments') {
		y='Industrial Instruments';	
		
		document.getElementById('p1').innerHTML='<img src="photos/flow_monitor1.jpg" height="170" alt="flow monitor">';
		document.getElementById('d1').innerHTML='Advanced display system to monitor juice and water flow parameters.';
		document.getElementById('l1').innerHTML='<a href="products.php?id=flow_monitor&type=4">Flow Monitor</a>'

		document.getElementById('p2').innerHTML='<img src="photos/lfm1.jpg" height="170" alt="line frequency monitor">';
		document.getElementById('d2').innerHTML='Measures power line frequency, highly accurate reading and non blinking display. Microcontroller based design. ERTL tested.';
		document.getElementById('l2').innerHTML='<a href="products.php?id=lfm&type=4">Line Frequency Monitor</a>'

		document.getElementById('p3').innerHTML='<img src="photos/megawatt_panel1.jpg" height="170" alt="megawatt panel">';
		document.getElementById('d3').innerHTML='Essential to power plants. Generation data can be displayed all over the plant.';
		document.getElementById('l3').innerHTML='<a href="products.php?id=megawatt_panel&type=4">Megawatt Panel</a>'

		document.getElementById('p4').innerHTML='<img src="photos/process_indicator1.jpg" height="170" alt="process indicator">';
		document.getElementById('d4').innerHTML='Suitable for displaying process parameters like flow, temperature, level, speed, pH etc. Available in different digit heights.';
		document.getElementById('l4').innerHTML='<a href="products.php?id=process_indicator&type=4">Process Indicator</a>'

		document.getElementById('p5').innerHTML='<img src="photos/ph_meter1.jpg" height="170" alt="ph meter">';
		document.getElementById('d5').innerHTML='Measures pH of all types of liquids.'+'<br><br>';
		document.getElementById('l5').innerHTML='<a href="products.php?id=ph_meter&type=4">Ph meter</a>'

		document.getElementById('p6').innerHTML='<img src="photos/tachometer1.jpg" height="170" alt="tachometer">';
		document.getElementById('d6').innerHTML='Used for monitoring the rpm of machines. The sensor is contactless.';
		document.getElementById('l6').innerHTML='<a href="products.php?id=tachometer&type=4">Tachometer</a>'

		document.getElementById('p7').innerHTML='<img src="photos/temp_cont1.jpg" height="170" alt="temperature controller">';
		document.getElementById('d7').innerHTML='Used in a variety of industrial applications like turbines, furnaces, blow moulding, etc.';
		document.getElementById('l7').innerHTML='<a href="products.php?id=temp_cont&type=4">Temperature Controller</a>'

		document.getElementById('p8').innerHTML='<img src="photos/twilight_switches1.jpg" height="170" alt="twilight switches">';
		document.getElementById('d8').innerHTML='Activates with respect to the ambient light,switches ON and OFF at dusk and dawn.';
		document.getElementById('l8').innerHTML='<a href="products.php?id=twilight_switches&type=4">Twilight Switch</a>'

		document.getElementById('p9').innerHTML='<img src="photos/industrial_display1.jpg" height="170" alt="industrial display">';
		document.getElementById('d9').innerHTML='All sorts of calculations can be done internally and displayed.';
		document.getElementById('l9').innerHTML='<a href="products.php?id=industrial_display&type=4">Industrial Display Board</a>'

		document.getElementById('p10').innerHTML='<img src="photos/wsm1.jpg" height="170" alt="weight scale monitor">';
		document.getElementById('d10').innerHTML='Monitors the number of tippings of juice and water Fully automatic operation and convenience of remote display.';
		document.getElementById('l10').innerHTML='<a href="products.php?id=wsm&type=4" >Weight Scale Monitor</a>'
	}
	document.getElementById('category_name').innerHTML=y;	
}