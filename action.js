function set1(x) {

if(x=='flow_monitor')
document.getElementById('head_name').innerHTML='Flow Monitor';

else if(x=='interest_rate_display_board')
document.getElementById('head_name').innerHTML='Interest Rate Display Board';

else if(x=='industrial_display')
document.getElementById('head_name').innerHTML='Industrial Display';

else if(x=='industrial_clock') {
document.getElementById('head_name').innerHTML='Industrial Clock';
document.getElementById('r3d1').innerHTML ='<span>For GPS clock:</span>';
document.getElementById('r3d2').innerHTML ='Automatic time setting from GPS satellite.';
document.getElementById('r4d1').innerHTML ='<span>Options:</span>';
document.getElementById('r4d2').innerHTML =' Double side clock or master/slave clock';
document.getElementById('r5d1').innerHTML ='<span>Clock format:</span>';
document.getElementById('r5d2').innerHTML ='12 Hrs. or 24 Hrs. (HH:MM:SECS or HH:MM)';
document.getElementById('r1d1').innerHTML ='';
document.getElementById('r1d2').innerHTML ='Micro-controller based design with or without GPS connectivity';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='Inbuilt battery backup';
document.getElementById('r6d1').innerHTML ='';
document.getElementById('r6d2').innerHTML ='';
document.getElementById('r7d1').innerHTML ='';
document.getElementById('r7d2').innerHTML ='';
}

else if(x=='lfm')
document.getElementById('head_name').innerHTML='Line Frequency Monitor';

else if(x=='megawatt_pannel')
document.getElementById('head_name').innerHTML='Megawatt Pannel';

else if(x=='process_n_indicator'){
document.getElementById('head_name').innerHTML='Process and Indicator';
document.getElementById('r5d1').innerHTML ='<span>Input:</span>';
document.getElementById('r5d2').innerHTML ='4 to 20 milli amp';
document.getElementById('r6d1').innerHTML ='<span>Display digit:</span>';
document.getElementById('r6d2').innerHTML ='7 segment red LED display';
document.getElementById('r7d1').innerHTML ='<span>Digit height:</span>';
document.getElementById('r7d2').innerHTML ='12.5mm, 25mm, 50mm, 100mm, 150mm, 200mm,  300mm';
document.getElementById('r1d1').innerHTML ='';
document.getElementById('r1d2').innerHTML ='Used for the measurement of process parameters';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='Range can be set through push buttons from 0-9999 & zero setting is automatic';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='4 digit LED display';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='Decimal placement is settable';
}

else if(x=='ph_meter') {
document.getElementById('head_name').innerHTML='Ph Meter';
document.getElementById('r2d1').innerHTML ='<span>Range:</span>';
document.getElementById('r2d2').innerHTML ='for pH: 0-14pH for mV: (-1999) mV to (+1999) mV (optional)';
document.getElementById('r3d1').innerHTML ='<span>Temperature compensation:</span>';
document.getElementById('r3d2').innerHTML =' 0-100degC (manual)';
document.getElementById('r4d1').innerHTML ='<span>Accuracy:</span>';
document.getElementById('r4d2').innerHTML ='±1 mV ±1count';
document.getElementById('r5d1').innerHTML ='<span>Resolution:</span>';
document.getElementById('r5d2').innerHTML ='0.01 pH; 1mV';
document.getElementById('r1d1').innerHTML ='';
document.getElementById('r1d2').innerHTML ='3 ½ digit LED display';
document.getElementById('r6d1').innerHTML ='<span>Options: </span>';
document.getElementById('r6d2').innerHTML =' Analog recorder output facility';
document.getElementById('r7d1').innerHTML ='<span>Accessories:</span>';
document.getElementById('r7d2').innerHTML ='pH electrodes, buffer tablets';
}

else if(x=='scrolling_display')
document.getElementById('head_name').innerHTML='Scrolling Display';

else if(x=='tachometer') {
document.getElementById('head_name').innerHTML='Tachometer';
document.getElementById('r5d1').innerHTML ='<span>Range:</span>';
document.getElementById('r5d2').innerHTML ='0-9999 rpm';
document.getElementById('r6d1').innerHTML ='<span>Transducer:</span>';
document.getElementById('r6d2').innerHTML =' Magnetic pick-up with 5mtrs. Lead';
document.getElementById('r7d1').innerHTML ='<span>Operating voltage:</span>';
document.getElementById('r7d2').innerHTML =' 230V ± 15%, 50Hz (standard)';
document.getElementById('r1d1').innerHTML ='';
document.getElementById('r1d2').innerHTML ='Non blinking display';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='4 digit LED display';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='Non-contact speed sensing';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='High accuracy ( better than 0.1% ± 1 r.p.m)';
}

else if(x=='temp_cont') {
document.getElementById('head_name').innerHTML='Temperature Controller';
document.getElementById('r1d1').innerHTML ='';
document.getElementById('r1d2').innerHTML ='Potentiometer setting is available';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='ON/OFF control action at pre-set levels is provided by a set of change-over contacts';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='Available for single set point or dual set point';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='';
document.getElementById('r5d1').innerHTML ='';
document.getElementById('r5d2').innerHTML ='';
document.getElementById('r6d1').innerHTML ='';
document.getElementById('r6d2').innerHTML ='';
document.getElementById('r7d1').innerHTML ='';
document.getElementById('r7d2').innerHTML ='';

}

else if(x=='twilight_switches') {
document.getElementById('head_name').innerHTML='Twilight Switches';
document.getElementById('r4d1').innerHTML ='<span>Contact rating:</span>';
document.getElementById('r4d2').innerHTML ='(5, 10, 16, 25, 32, 63, 100) Amps.';
document.getElementById('r5d1').innerHTML ='<span>No. of poles:</span>';
document.getElementById('r5d2').innerHTML ='<ul><li>For (5, 10, 25) amps. : 02</li><li>For (10, 16, 32, 63 and 100) amps. : 03</li></ul>';
document.getElementById('r1d1').innerHTML ='';
document.getElementById('r1d2').innerHTML ='Switches ON and OFF at dusk and dawn.';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='Electromagnetic relay / contractor is provided as a switching element';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='Miniature circuit breaker and HRC fuse used for over load protection';
document.getElementById('r6d1').innerHTML ='';
document.getElementById('r6d2').innerHTML ='';
document.getElementById('r7d1').innerHTML ='';
document.getElementById('r7d2').innerHTML ='';
}
else if(x=='token') {
document.getElementById('head_name').innerHTML='Token Display';
document.getElementById('r5d1').innerHTML ='<span>Options:</span>';
document.getElementById('r5d2').innerHTML ='With Dot LED or With integrated 7 segment display';
document.getElementById('r1d1').innerHTML ='';
document.getElementById('r1d2').innerHTML ='Token displays are extremely useful in bringing order in the waiting area.';
document.getElementById('r2d1').innerHTML ='';
document.getElementById('r2d2').innerHTML ='Bright and large displays are clearly visible from a good distance.';
document.getElementById('r3d1').innerHTML ='';
document.getElementById('r3d2').innerHTML ='Numeric keypad unit with 05inch display';
document.getElementById('r4d1').innerHTML ='';
document.getElementById('r4d2').innerHTML ='No. of digit is 03 and color of display is Red';
document.getElementById('r6d1').innerHTML ='';
document.getElementById('r6d2').innerHTML ='';
document.getElementById('r7d1').innerHTML ='';
document.getElementById('r7d2').innerHTML ='';
}

else if(x=='wsm')
document.getElementById('head_name').innerHTML='Weighing Scale Monitor';



document.getElementById('product_image').innerHTML='<img style="border-radius:10px;" width="450" height="335" src='+x+'.jpg'+' alt="">';
document.getElementById('product_image1').innerHTML='<img style="border-radius:10px;border:2px dashed orange;" src=temp_cont.jpg'+' alt="" class="responsive-img">';
document.getElementById('product_image2').innerHTML='<img style="border-radius:10px;border:2px dashed orange;" src=lfm.jpg'+' alt="" class="responsive-img">';
document.getElementById('product_image3').innerHTML='<img style="border-radius:10px;border:2px dashed orange;" src='+x+'.jpg'+' alt="" class="responsive-img">';
}

function set2(x){
document.getElementById('product_image').innerHTML='<img style="border-radius:10px;" width="450" height="335" src=temp_cont.jpg'+' alt="">';

}
function set3(x){
document.getElementById('product_image').innerHTML='<img style="border-radius:10px;" width="450" height="335" src=lfm.jpg'+' alt="">';
}

function set4(x){
document.getElementById('product_image').innerHTML='<img style="border-radius:10px;" width="450" height="335" src='+x+'.jpg'+' alt="">';	
}