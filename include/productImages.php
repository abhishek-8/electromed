                   <!-- 3 Product images -->    
                <div class="row product-images">
                    <?php 
                    if ($_type==1){
                      echo "<div class=\"col l12 s12 m5\" id=\"product\">";
                    }
                    else{
                      echo "<div class=\"col l3 s12 m5\" id=\"product\">";
                    }
                    ?>    

                    <div class="row">
                        <br>
                        <div class="col l12 materialboxed" id="product_image" <?php if( $_type==1 && isMobile()==FALSE ){ echo "style=\"height:485px;width:100%;\""; } ?> ></div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <?php 
                            $L="l4";
                            if( $_type==1 ){  $L="l2";  }
                            for( $i=1;$i<7;$i++ ){
                                echo "<div class=\"col $L m3 s3 btn$i\" style=\"padding-bottom:10px;\" id=\"product_image$i\"></div>";
                            }
                        ?>
                    </div>

                        <?php 
                        if( count($brochure)==1 ){ 
                            echo "<div class=\"row\"><a href=\"Brochures/<?php echo $brochure; ?>.pdf\" class=\"btn red accent-4 id=\"dwnld-btn\" style=\"width: 100%;\" download><i class=\"material-icons left\">library_books</i>Brochure</a></div>";
                        }
                        
                        ?>
                        
                        <div>
                          <button class="btn rqst red accent-4" id="rqst-btn" >Ask Price</button>
                        </div>
                        <br>

                </div>
                <!-- ============================================= -->    
