<?php

function createSidebarItem($arr,$type){
  $len = count($arr);
  $x = $GLOBALS['_x'];
  for ($i=0;$i<$len/2;$i++){
    $a=$i*2;
    $b=$a+1;
    echo "<a href=\"products.php?id=$arr[$b]&type=$type\" style=\"font-size:14px;padding-left:10%; "; if($x==$arr[$b]){ echo ' color:red; ';} echo "\" >$arr[$a] </a><br>";
    if( $i!=($len/2)-1 ){echo "<hr>";}
  }
  echo "<br>";
}

function createSidebarTitle($name,$type){

          $_type = $GLOBALS['_type'];
          echo "<li style=\"opacity: 0;\">
            <div class=\"collapsible-header ";
             if($type==$_type){ echo 'active';} 

             echo ">$name</div>

            <div class=\"collapsible-body container-fluid\" style=\"line-height:72%;\"><br>";

                createSidebarItem($GLOBALS['arr4'],$GLOBALS['type4']);

echo "
                     </div>
          </li>
";

}
?>



        <a a href="product_list.php?id=LED_display&num=3" class="btn red accent-4 category-btn" style="width:100%" onclick="Materialize.showStaggeredList('#staggered-test')">Products</a>
        <ul id="staggered-test" class="collapsible" data-collapsible="accordion">
          <li style="opacity: 0;">
            <div class="collapsible-header <?php if($_type==1) echo 'active'; ?>">LED Display</div>
            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>
              <?php if($_type==1) echo 'active'; ?>
              <?php 
                createSidebarItem($arr1,$type1);
              ?>
              
            </div>
          </li>
          <li style="opacity: 0;">
            <div class="collapsible-header <?php if($_type==2) echo 'active'; ?>">Single Line Display</div>
            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>
              
            <?php 
                createSidebarItem($arr2,$type2);

                
            ?>

            </div>
            
          <li style="opacity: 0;">
            <div class="collapsible-header <?php if($_type==2) echo 'active'; ?>">Embedded Solutions</div>
            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>
              
            </div>



          </li>
          <li style="opacity: 0;">
            <div class="collapsible-header <?php if($_type==4){ echo 'active';} ?>">Digital Instruments</div>
            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>

            <?php 
                createSidebarItem($arr4,$type4);
            ?>
            </div>
          </li>

                    <li style="opacity: 0;">
            <div class="collapsible-header <?php if($_type==5) echo 'active'; ?>">Automatic Switches</div>
            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>
              
            <?php 
                createSidebarItem($arr5,$type5);
            ?>

            </div>
          <li style="opacity: 0;">
            <div class="collapsible-header <?php if($_type==6) echo 'active'; ?>">Rate Display Board</div>
            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>
              
            <?php 
                createSidebarItem($arr6,$type6);
            ?>

            </div>
          <li style="opacity: 0;">
            <div class="collapsible-header <?php if($_type==7) echo 'active'; ?>">Industrial Clocks</div>
            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>
              
            <?php 
                createSidebarItem($arr7,$type7);
            ?>

            </div>
          <li style="opacity: 0;">
            <div class="collapsible-header <?php if($_type==8) echo 'active'; ?>">Token Management</div>
            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>
              
            <?php 
                createSidebarItem($arr8,$type8);
            ?>

            </div>

        </ul>
