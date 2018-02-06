<?php 
    function createFooterLink($name,$type,$arr){
        echo "<div class=\"col l2\">";
        echo "<div class=\"black-text\"><strong><b>$name</b></strong></div>
            <ul>";
        $len = count($arr)/2;
        for( $i=0;$i<$len;$i++ ){
            $p=$i*2;

            $q=$p+1;
            echo "<li class=\"flink\"><a class=\"black-text foot\" href=\"products.php?id=$arr[$q]&type=$type\" style=\"font-size:11px;\">$arr[$p]</a></li>";
        }
        echo "</ul>";
        echo "</div>";
    }
?>

<footer class="page-footer">


    <div class="container">
        <div class="row"  style="padding-left: 20px;padding-right: 5px;">
            <div class="col l7 m3 s12">
                <div class="row">
                    <p class="" style="color: #ea0000;font-size: 18px;"><strong><b>ABOUT ELECTROMED</b></strong></p>
                    <p class="black-text" >ELECTRO-MED is an established and leading manufacturer of electronic products in India. We manufacture and assemble a comprehensive range of moving as well as static electronic LED displays besides a wide range of electronic instruments for industrial application.</p>
                </div>
                            
                <div class="row">
                                    <p class="" style="color: #ea0000;font-size: 18px;"><strong><b>ASK AN EXPERT</b></strong></p>
                    <div class="col l1 s1 m1"><i class="material-icons prefix black-text text-darken-2" >phone</i></div>
                    <div class="col l5 s11 m8 offset-m1">
                        <p class="black-text foot" style="display:inline; font-size:15px;padding-left: 10px;">+91 94150 39393</p>
                    </div>
                <!--/div>
                <div class="row"-->
                    <div class="col l1 s1 m1"><i class="material-icons prefix black-text text-darken-2"">email</i></div>
                    <div class="col l5 s11 m8 offset-m1">
                        <p class="black-text foot" style="display:inline; font-size:15px;padding-left: 10px;">info@electromed.co.in</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col l1 s1 m1"><i class="material-icons prefix black-text text-darken-2"">room</i></div>
                    <div class="col l10 s11 m8 offset-m1">
                        <p class="black-text foot" style="display:inline; font-size:15px;padding-left: 10px;">D -17, Vivekanand Puri,
                            Lucknow –226007 India
                        </p>
                    </div>
                </div>

            </div>

                

            <div class="col l4 offset-l1 s12 m3">



<!--Zoho Campaigns Web-Optin Form's Header Code Starts Here-->

<meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<link href="https://zcs1.maillist-manage.com/css/ui.theme.css" rel="stylesheet" type="text/css" />
<link href="https://zcs1.maillist-manage.com/css/ui.datepicker.css" rel="stylesheet" type="text/css" />
<link href="https://zcs1.maillist-manage.com/css/ui.core.css" rel="stylesheet" type="text/css" />


<!--script type="text/javascript" src="https://zcs1.maillist-manage.com/js/jquery-1.11.0.min.js"></script>
<script type='text/javascript' src='https://zcs1.maillist-manage.com/js/jquery-ui-1.10.4.custom.min.js'></script-->
<script type='text/javascript' src='https://zcs1.maillist-manage.com/js/jquery-migrate-1.2.1.min.js'></script>
<script type="text/javascript" src='https://zcs1.maillist-manage.com/js/ui.datepicker.js'  charset="utf-8"></script>
<script type="text/javascript" src="https://zcs1.maillist-manage.com/js/jquery.form.js"></script>
<script type="text/javascript" src="https://zcs1.maillist-manage.com/js/optin_min.js"></script>


<script type="text/javascript">
//var $ZC = jQuery.noConflict();
var trackingText='ZCFORMVIEW';
var new_optin_response_in=0;
var duplicate_optin_response_in=0;
$ZC(document).ready( function($) {
    $ZC("#zc_trackCode").val(trackingText);
    $ZC("#fieldBorder").val($ZC("[changeItem='SIGNUP_FORM_FIELD']").css("border-color"));
    _setOptin(false,function(th){
       /*Before submit, if you want to trigger your event, "include your code here"*/
    });

/*Load Captcha For this*/ 
 

 /*Tracking Enabled*/ 
 trackSignupEvent(trackingText);
 });
</script>

<style>
#customForm *{
-webkit-box-sizing: border-box !important;
-moz-box-sizing: border-box !important;
box-sizing: border-box !important;
word-break:break-word;
overflow-wrap: break-word;
}
/*** RESPONSIVE START */
@media only screen and (max-width: 200px){
[name='SIGNUP_BODY']{
width:100% !important;
min-width:100% !important;
margin: 0px auto !important;
padding:0px !important  
}
}
/*Major Mobiles*/
@media screen and (min-width: 320px) and (max-width: 580px) and (orientation : portrait){
[name='SIGNUP_BODY']{
max-width:300px !important;
margin: 0px auto !important;
padding:0px !important;
}
}
/* iPads*/
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px){
[name='SIGNUP_BODY']{
max-width:500px !important;
margin: 0px auto !important;
}
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape){
[name='SIGNUP_BODY']{
max-width:700px !important;
margin: 0px auto !important;
}
}
@media screen and (min-width: 475px) and (max-width: 980px) and (orientation : landscape){
[name='SIGNUP_BODY']{
max-width:400px !important;
margin: 0px auto !important;
padding:0px !important;
}
}
/*** RESPONSIVE END */
.quick_form_14_css form{padding-top :30px;padding-bottom :30px}
</style>

<!--Zoho Campaigns Web-Optin Form's Header Code Ends Here--><!--Zoho Campaigns Web-Optin Form Starts Here-->

<div id="customForm">
    <input id="signupFormType" value="QuickForm_Vertical" type="hidden">
    <div>
        <table class="quick_form_14_css" name="SIGNUP_BODY" id="SIGNUP_BODY" style="background-color: rgb(234, 234, 234); color: rgb(255, 255, 255); border: 1px solid rgb(235, 235, 235); margin: 0px auto; font-family: Arial; bottom: 2px; width: 100%; font-size: 11px; background-size: 105% auto; padding: 0px; text-align: center;" cellspacing="0" cellpadding="0" border="0" align="center">
            <tbody>
                <tr>
                    <td style="" valign="top" align="center">
                        <div style="background-color: rgb(221, 45, 47); color: rgb(255, 255, 255); font-family: Arial; font-size: 18px; border-left-style: none; font-weight: 100; padding: 10px; text-align: center;" id="SIGNUP_HEADING" name="SIGNUP_HEADING" changeid="SIGNUP_MSG" changetype="SIGNUP_HEADER">Join Our Newsletter</div>
                        <div>
                            <div style="position:relative;top: 30px;">
                                <div id="Zc_SignupSuccess" style="display:none;position:absolute;margin-left:4%;width:90%;background-color: white; padding: 3px; border: 3px solid rgb(194, 225, 154);  margin-top: 10px;margin-bottom:10px;word-break:break-all">
                                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td width="10%">
                                                    <img class="successicon" src="https://zcs1.maillist-manage.com/images/challangeiconenable.jpg" align="absmiddle">
                                                </td>
                                                <td>
                                                    <span id="signupSuccessMsg" style="color: rgb(73, 140, 132); font-family: sans-serif; font-size: 14px;word-break:break-word">&nbsp;&nbsp;Thank you for Signing Up</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <form method="POST" id="zcampaignOptinForm" style="margin:0px;" action="https://zcs1.maillist-manage.com/campaigns/weboptin.zc" target="_zcSignup">
                                <div style="display:none;background-color:#FFEBE8;padding:2px 2px; color:#d20000; font-size:11px; margin:10px;border:solid 1px #ffd9d3; margin-top:2px;" id="errorMsgDiv">&nbsp;&nbsp;Please correct the marked field(s) below.</div><!-- check to mark emailid field as type email, and other mandatory fields as type required -->
                                <div style="padding-left:15px; padding-right:15px;padding-bottom:2px; padding-top:2px;">
                                    <input name="CONTACT_EMAIL" changetype="CONTACT_EMAIL" changeitem="SIGNUP_FORM_FIELD" required="true" id="CONTACT_EMAIL" style="width: 100%; color: rgb(113, 106, 106); background-color: rgb(255, 255, 255); border: 2px solid rgb(214, 205, 205); text-align: left; box-sizing: border-box; text-indent: 14px; outline: 0px none currentcolor; font-family: Arial; border-radius: 5px; font-size: 17px; height: 43px; padding: 4px;" placeholder="Email" type="email">
                                    <span style="display:none" id="dt_CONTACT_EMAIL">1,true,6,Subscriber Email,2</span>
                                </div><!-- check to mark emailid field as type email, and other mandatory fields as type required --><!-- check to mark emailid field as type email, and other mandatory fields as type required -->
                                <div style="padding-left:15px; padding-right:15px;padding-bottom:2px; padding-top:2px;">
                                    <input name="LASTNAME" changetype="LASTNAME" changeitem="SIGNUP_FORM_FIELD" id="LASTNAME" style="width: 100%; color: rgb(113, 106, 106); background-color: rgb(255, 255, 255); border: 2px solid rgb(214, 205, 205); text-align: left; box-sizing: border-box; text-indent: 14px; outline: 0px none currentcolor; font-family: Arial; border-radius: 5px; font-size: 17px; height: 43px; padding: 4px;" placeholder="Name" type="text">
                                    <span style="display:none" id="dt_LASTNAME">1,false,1,Last Name,2</span>
                                </div>
                                <div style="padding-left:15px; padding-right:15px;padding-bottom:2px;padding-top:2px;"><!--  different elements for view and edit causing errors<input name="SIGNUP_SUBMIT_BUTTON" id="zcWebOptin" type="button" style="text-align:center;-webkit-appearance:none;background-color:#a7a7a7; color:#fff; border:solid 1px #999; font-size:12px; padding:6px 10px; width:50%; cursor:pointer;font-family:Arial;" value="Join Now">-->
                                    <button name="SIGNUP_SUBMIT_BUTTON" id="zcWebOptin" style="background-color: rgb(221, 45, 47); color: rgb(255, 255, 255); cursor: pointer; border: medium none; padding: 6px 10px; outline: 0px none currentcolor; font-family: Arial; border-radius: 5px; width: 100%; font-size: 17px; height: 43px; text-align: center;">Join Now</button>
                                </div><!-- Do not edit the below Zoho Campaigns hidden tags -->
                                <input id="fieldBorder" value="" type="hidden">
                                <input id="submitType" name="submitType" value="optinCustomView" type="hidden">
                                <input id="lD" name="lD" value="151d6446db117535" type="hidden">
                                <input name="emailReportId" id="emailReportId" value="" type="hidden">
                                <input id="formType" name="formType" value="QuickForm" type="hidden">
                                <input name="zx" id="cmpZuid" value="127571d0f" type="hidden">
                                <input name="zcvers" value="2.0" type="hidden">
                                <input name="oldListIds" id="allCheckedListIds" value="" type="hidden">
                                <input id="mode" name="mode" value="OptinCreateView" type="hidden">
                                <input id="zcld" name="zcld" value="151d6446db117535" type="hidden">
                                <input id="document_domain" value="zoho.com" type="hidden">
                                <input id="zc_Url" value="zcs1.maillist-manage.com" type="hidden">
                                <input id="new_optin_response_in" value="0" type="hidden">
                                <input id="duplicate_optin_response_in" value="0" type="hidden">
                                <input name="zc_trackCode" id="zc_trackCode" value="" onload="" type="hidden">
                                <input id="zc_formIx" name="zc_formIx" value="83a63d93c9519a49657425d0ecf61185f3898872493ca85e" type="hidden"><!-- End of the campaigns hidden tags --></form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <img src="https://zcs1.maillist-manage.com/images/spacer.gif" id="refImage" onload="referenceSetter(this)" style="display:none;">
</div>
<div id="zcOptinOverLay" oncontextmenu="return false" style="display:none;text-align: center; background-color: rgb(0, 0, 0); opacity: 0.5; z-index: 100; position: fixed; width: 100%; top: 0px; left: 0px; height: 988px;"></div>
<div id="zcOptinSuccessPopup" style="display:none;z-index: 9999;width: 800px; height: 40%;top: 84px;position: fixed; left: 26%;background-color: #FFFFFF;border-color: #E6E6E6; border-style: solid; border-width: 1px;  box-shadow: 0 1px 10px #424242;padding: 35px;">
    <span style="position: absolute;top: -16px;right:-14px;z-index:99999;cursor: pointer;" id="closeSuccess">
        <img src="https://zcs1.maillist-manage.com/images/videoclose.png">
    </span>
    <div id="zcOptinSuccessPanel"></div>
</div>

<!--Zoho Campaigns Web-Optin Form Ends Here-->



                            </div>
        </div>


    </div>
<div class="row" style="background-color: #fafafa">
    <br>
    <div class="col l10 offset-l1">
        <div class="row">
                <?php createFooterLink($cat4,$type4,$arr4); ?>
                <?php createFooterLink($cat1,$type1,$arr1); ?>
                <?php createFooterLink($cat2,$type2,$arr2); ?>
                <?php createFooterLink($cat5,$type5,$arr5); ?>
                <?php createFooterLink($cat6,$type6,$arr6); ?>
                <?php createFooterLink($cat7,$type7,$arr7); ?>
                <?php createFooterLink($cat8,$type8,$arr8); ?>
            
        </div>
    </div>
</div>
   <hr >













</footer>
    <div class="footer-copyright">
        <div class="container foot row">
            <div class="col l4 m4 s12 black-text">© 2017 Copyright Electromed. All rights reserved.</div>
        </div>
    </div>
<script type="text/javascript">
var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || 
{widgetcode:"316463d9cf0f0fb75489b994c0ad9c0adb71a167c6dd8437b8b3217f56fb13c4", values:{},ready:function(){}};
var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script>