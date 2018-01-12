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
                            
                

                <div class="thumbnail center well well-sm text-center">
                    <h2>Newsletter</h2>
                
                    <p>Subscribe to our weekly Newsletter and stay tuned.</p>
                    
                    <form action="" method="post" role="form">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                          </span>
                          <input class="form-control" type="text" id="" name="" placeholder="your@email.com">
                        </div>
                        <input type="submit" value="Subscribe" class="btn btn-large btn-primary" />
                  </form>
                </div>






            </div>
            <div class="col l4 offset-l1 s12 m3">
                <p class="" style="color: #ea0000;font-size: 18px;"><strong><b>ASK AN EXPERT</b></strong></p>
                <div class="row">
                    <div class="col l1 s1 m1"><i class="material-icons prefix black-text text-darken-2" >phone</i></div>
                    <div class="col l10 s11 m8 offset-m1">
                        <p class="black-text foot" style="display:inline; font-size:15px;padding-left: 10px;">+91 94150 39393</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col l1 s1 m1"><i class="material-icons prefix black-text text-darken-2"">email</i></div>
                    <div class="col l10 s11 m8 offset-m1">
                        <p class="black-text foot" style="display:inline; font-size:15px;padding-left: 10px;">info@electromed.co.in</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col l1 s1 m1"><i class="material-icons prefix black-text text-darken-2"">room</i></div>
                    <div class="col l10 s11 m8 offset-m1">
                        <p class="black-text foot" style="display:inline; font-size:15px;padding-left: 10px;">D -17, Vivekanand Puri,
                            <br>Lucknow –226007 India
                        </p>
                    </div>
                </div>
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