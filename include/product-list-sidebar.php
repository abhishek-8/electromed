<?php

function createSidebarItem($arr,$type){
  $len = count($arr);
  
  $x='';
  if( array_key_exists('_x', $GLOBALS) ){
    $x = $GLOBALS['_x'];
  }
  for ($i=0;$i<$len/2;$i++){
    $a=$i*2;
    $b=$a+1;
    echo "<a href=\"products.php?id=$arr[$b]&type=$type\" style=\"font-size:14px;padding-left:10%; "; if($x==$arr[$b]){ echo ' color:red; ';} echo "\" >$arr[$a] </a><br>";
    if( $i!=($len/2)-1 ){echo "<hr>";}
  }
  echo "<br>";
}

function createSidebarTitle($arr,$type){

        $_type = $GLOBALS['_type'] ;

        echo "<li style=\"opacity: 0;\">
                <div class=\"collapsible-header"; 
                  if($_type==$type){ echo ' active'; } echo "\">";
            echo getProductCategory($type); 
            echo "</div>
              <div class=\"collapsible-body container-fluid\" style=\"line-height:72%;\"><br>";
               
              createSidebarItem($arr,$type);
              
              echo "</div>
                </li>";

}
?>
        <a a href="product_list.php?type=1" class="btn red accent-4 category-btn" style="width:100%" onclick="Materialize.showStaggeredList('#staggered-test')">Products</a>
        <ul id="staggered-test" class="collapsible" data-collapsible="accordion">
          <?php createSidebarTitle($arr1,$type1); ?>
          <?php createSidebarTitle($arr2,$type2); ?>
          <?php createSidebarTitle($arr4,$type4); ?>
          <?php createSidebarTitle($arr5,$type5); ?>
          <?php createSidebarTitle($arr6,$type6); ?>
          <?php createSidebarTitle($arr7,$type7); ?>
          <?php createSidebarTitle($arr8,$type8); ?>

        </ul>
        <script>
            $(document).ready(function(){
                Materialize.showStaggeredList('#staggered-test');
                $('.parallax').parallax();
                $('.button-collapse').sideNav();
               
            $('.collapsible').collapsible();
            });
            
        </script>





