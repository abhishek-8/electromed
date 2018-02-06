<?php
    function createCards($type,$arr){
        for( $i=0;$i<count($arr)/2;$i++ ){
            $p=$i*2; $q=$p+1;
            createCard($arr[$p],$arr[$q],$type,"l3");
        }
    }
    function createCard($name,$link,$type,$size){
        echo "<div class=\"col s12 m7 $size\">
          <div class=\"card\">
                <div class=\"zoom-effect-container\">
                <div class=\"card-image\"><a href=\"products.php?id=$link&type=$type\"><img src=\"photos/$link"; echo "1.jpg\" height=\"170\" alt=\"\"></a></div>
                <div class=\"card-action custom-text\"><br><a style=\"color:#d50000;\"href=\"products.php?id=link&type=$type\">$name<br><br></a></div>
                <div class=\"card-content\">"; 
                echo getProductDesc($type,$link);
                echo "</div>
                  </div>
            </div>
        </div>";
    }
?>