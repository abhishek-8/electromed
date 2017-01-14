function set1(x) {

if(x=='flow_monitor')
document.getElementById('head_name').innerHTML='Flow Monitor';
else if(x=='interest_rate_display_board')
document.getElementById('head_name').innerHTML='Interest Rate Display Board';
else if(x=='industrial_display')
document.getElementById('head_name').innerHTML='Industrial Display';
else if(x=='industrial_clock') {
document.getElementById('head_name').innerHTML='Industrial Clock';
document.getElementById('r1').innerHTML ='Micro-controller based design with or without GPS connectivity'+'\n'+'For GPS clock: Automatic time setting from GPS satellite.';
document.getElementById('r2').innerHTML ='Options: Double side clock or master/slave clock'+'\n'+'Clock format: 12 Hrs. or 24 Hrs. (HH:MM:SECS or HH:MM)';
document.getElementById('r3').innerHTML = 'Inbuilt battery backup';
}
else if(x=='lfm')
document.getElementById('head_name').innerHTML='Line Frequency Monitor';
else if(x=='megawatt_pannel')
document.getElementById('head_name').innerHTML='Megawatt Pannel';
else if(x=='process_n_indicator')
document.getElementById('head_name').innerHTML='Process and Indicator';

else if(x=='ph_meter') {
document.getElementById('head_name').innerHTML='Ph Meter';
document.getElementById('r1').innerHTML ='Range: for pH: 0-14pH '+'\n'+'for mV: (-1999) mV to (+1999) mV (optional)'+'\n'+'Temperature compensation: 0-100degC (manual)'+'\n'+'Accuracy: ±1 mV ±1count';
document.getElementById('r2').innerHTML ='Resolution: 0.01 pH;'+'\n' +' 1mV 3 ½ digit LED display';
document.getElementById('r3').innerHTML = 'Options: Analog recorder output facility'+'\n'+'Accessories: pH electrodes, buffer tablets';
}
else if(x=='scrolling_display')
document.getElementById('head_name').innerHTML='Scrolling Display';
else if(x=='tachometer')
document.getElementById('head_name').innerHTML='Tachometer';
else if(x=='temp_cont')
document.getElementById('head_name').innerHTML='Temperature Controller';
else if(x=='twilight_switches')
document.getElementById('head_name').innerHTML='Twilight Switches';
else if(x=='token') {
document.getElementById('head_name').innerHTML='Token Display';
document.getElementById('r1').innerHTML ='Token displays are extremely useful in bringing order in the waiting area.'+'\n'+'Bright and large displays are clearly visible from a good distance.';
document.getElementById('r2').innerHTML ='Options: With Dot LED or With integrated 7 segment display'+'\n'+'Numeric keypad unit with 05inch display';
document.getElementById('r3').innerHTML = 'No. of digit is 03 and color of display is Red';

}
else if(x=='wsm')
document.getElementById('head_name').innerHTML='Weighing Scale Monitor';

document.getElementById('product_image1').innerHTML='<img class="responsive-img" src='+x+'.jpg'+'>';
document.getElementById('product_image2').innerHTML='<img class="responsive-img" src='+x+'.jpg'+'>';
document.getElementById('product_image3').innerHTML='<img class="responsive-img" src='+x+'.jpg'+'>';
}