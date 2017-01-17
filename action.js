function set1(x) {

if(x=='flow_monitor')
document.getElementById('head_name').innerHTML='Flow Monitor';

else if(x=='interest_rate_display_board')
document.getElementById('head_name').innerHTML='Interest Rate Display Board';

else if(x=='industrial_display')
document.getElementById('head_name').innerHTML='Industrial Display';

else if(x=='industrial_clock') {
document.getElementById('head_name').innerHTML='Industrial Clock';
document.getElementById('r1').innerHTML='Micro-controller based design with or without GPS connectivity.'+'<br>'+'<br><span>For GPS clock</span>: Automatic time setting from GPS satellite.'+'<br>'+'<br><span>Options</span>: Double side clock or master/slave clock'+'<br>'+'<br><span>Clock format</span>: 12 Hrs. or 24 Hrs. (HH:MM:SECS or HH:MM)'+'<br>'+'Inbuilt battery backup';
}

else if(x=='lfm')
document.getElementById('head_name').innerHTML='Line Frequency Monitor';

else if(x=='megawatt_pannel')
document.getElementById('head_name').innerHTML='Megawatt Pannel';

else if(x=='process_n_indicator'){
document.getElementById('head_name').innerHTML='Process and Indicator';
document.getElementById('r1').innerHTML ='Used for the measurement of process parameters'+'<br>'+'Input: 4 to 20 milli amp.'+'<br>'+'Range can be set through push buttons from 0-9999 & zero setting is automatic.'+'<br>'+'4 digit LED display'+'<br>' +'<br><span>Display digit</span>: 7 segment red LED display'+'<br>'+'<br><span>Digit height</span>: 12.5mm, 25mm, 50mm, 100mm, 150mm, 200mm,  300mm'+'<br>'+'Decimal placement is settable';
}

else if(x=='ph_meter') {
document.getElementById('head_name').innerHTML='Ph Meter';
document.getElementById('r1').innerHTML ='<span>Range</span>: for pH: 0-14pH '+'<br>'+'for mV: (-1999) mV to (+1999) mV (optional)'+'<br>'+'<br><span>Temperature compensation</span>: 0-100degC (manual)'+'<br>'+'<br><span>Accuracy</span>: ±1 mV ±1count'+'<br>'+'<br><span>Resolution</span>: 0.01 pH;'+'<br>' +' 1mV 3 ½ digit LED display'+'<br>'+'<br><span>Options</span>: Analog recorder output facility'+'<br>'+'<br><span>Accessories</span>: pH electrodes, buffer tablets';
}

else if(x=='scrolling_display')
document.getElementById('head_name').innerHTML='Scrolling Display';

else if(x=='tachometer') {
document.getElementById('head_name').innerHTML='Tachometer';
document.getElementById('r1').innerHTML='Non-contact speed sensing.'+'<br>'+'High accuracy ( better than 0.1% ± 1 r.p.m).'+'<br>'+'4 digit LED display.'+'<br>'+'<br><span>Range</span>: 0-9999 rpm'+'<br>'+'Non blinking display'+'<br>' +'<br><span>Transducer</span>: Magnetic pick-up with 5mtrs. Lead'+'<br>'+'<br><span>Operating voltage</span>: 230V ± 15%, 50Hz (standard)';

}

else if(x=='temp_cont') {
document.getElementById('head_name').innerHTML='Temperature Controller';
document.getElementById('r1').innerHTML='<span>a.</span>Potentiometer setting is available.'+'<br>'+'<br><span>b.</span>ON/OFF control action at pre-set levels is provided by a set of change-over contacts'+'<br>'+'<br><span>c.</span>Available for single set point or dual set point.';
}

else if(x=='twilight_switches') {
document.getElementById('head_name').innerHTML='Twilight Switches';
document.getElementById('r1').innerHTML='Switches ON and OFF at dusk and dawn.'+'<br>'+'<br><span>Contact rating:</span> (5, 10, 16, 25, 32, 63, 100) Amps.'+'<br>'
+'<br><span>No. of poles</span>:'+'<br>'+'a.	For (5, 10, 25) amps. : 02'+'<br>'+'b. For (10, 16, 32, 63 and 100) amps. : 03'+'<br>'+'Electromagnetic relay / contractor is provided as a switching element'
+'<br>'+'Miniature circuit breaker and HRC fuse used for over load protection';
}
else if(x=='token') {
document.getElementById('head_name').innerHTML='Token Display';
document.getElementById('r1').innerHTML='Token displays are extremely useful in bringing order in the waiting area.'+'<br>'+'Bright and large displays are clearly visible from a good distance.'+'<br>'+'<br><span>Options</span>: With Dot LED or With integrated 7 segment display'+'<br>'+'Numeric keypad unit with 05inch display'+'<br>'+'No. of digit is 03 and color of display is Red';

}

else if(x=='wsm')
document.getElementById('head_name').innerHTML='Weighing Scale Monitor';



document.getElementById('product_image').innerHTML='<img style="border-radius:10px;" width="480" height="350" src='+x+'.jpg'+' alt="">';
document.getElementById('product_image1').innerHTML='<img style="border-radius:10px;border:2px dashed orange;" src=temp_cont.jpg'+' alt="" class="responsive-img">';
document.getElementById('product_image2').innerHTML='<img style="border-radius:10px;border:2px dashed orange;" src=lfm.jpg'+' alt="" class="responsive-img">';
document.getElementById('product_image3').innerHTML='<img style="border-radius:10px;border:2px dashed orange;" src='+x+'.jpg'+' alt="" class="responsive-img">';
}

function set2(x){
document.getElementById('product_image').innerHTML='<img style="border-radius:10px;" width="480" height="350" src=temp_cont.jpg'+' alt="">';

}
function set3(x){
document.getElementById('product_image').innerHTML='<img style="border-radius:10px;" width="480" height="350" src=lfm.jpg'+' alt="">';
}

function set4(x){
document.getElementById('product_image').innerHTML='<img style="border-radius:10px;" width="480" height="350" src='+x+'.jpg'+' alt="">';	
}