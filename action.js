function set1(x) {
document.getElementById('product_image').innerHTML='<img src='+x+'.jpg'+' height:100 ">';
if(x=='flow_monitor')
document.getElementById('head_name').innerHTML='Flow Monitor';
else if(x=='interest_rate_display_board')
document.getElementById('head_name').innerHTML='Interest Rate Display Board';
else if(x=='industrial_display')
document.getElementById('head_name').innerHTML='Industrial Display';
else if(x=='industrial_clock')
document.getElementById('head_name').innerHTML='Industrial Clock';
else if(x=='lfm')
document.getElementById('head_name').innerHTML='Line Frequency Monitor';
else if(x=='megawatt_pannel')
document.getElementById('head_name').innerHTML='Megawatt Pannel';
else if(x=='process_n_indicator')
document.getElementById('head_name').innerHTML='Process and Indicator';
else if(x=='ph_meter')
document.getElementById('head_name').innerHTML='Ph Meter';
else if(x=='scrolling_display')
document.getElementById('head_name').innerHTML='Scrolling Display';
//document.getElementById('details').innerHTML=x;//'<ol><li>aa</li><li>ba</li><li>a</li><li>a</li></ol>';
}