<?php
   $_x = $_GET['id'];
   
   include('include/productData.php');
   include ('include/functions.php');
   include('include/industryData.php');
   $title        = '';
   $breadcrumb   = '';
   $link         = '';
   $intro 		  = '';
   $products     = array();
   $clients      = '';
   $count        = '';
   
   include('submit.php');
   function printHeading($a){
     echo "<blockquote class=\"headName1\" style=\"font-size:30px;background-color: #eeeeee;height: 50px;\"><u>$a</u></blockquote>";
   }

   list($title,$breadcrumb,$link,$intro,$products,$clients,$count) = getIndustryData($_x);
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
      <meta name="description" content="<?php echo $desc; ?>" />
      <title><?php echo $breadcrumb; ?> - Electromed, Lucknow</title>
      <link rel="icon" href="images/logoIcon.ico">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css'>
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
      <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/styleNavbar.css">
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
      <script src="action.js" type="text/javascript"></script>
   </head>
   <body id="category_page">
      <!--?php include_once("analyticstracking.php") ?-->
      <!-- ====================================================== -->
      <!-- Top NavBar -->
      <!--?php loadFile('include/navbar.php') ?-->
      <?php include('include/navbarNew.php'); ?>
      <!-- ====================================================== -->
      <!-- ====================================================== -->
      <!-- ====================================================== -->
      <?php  ?>
<blockquote class="trello-card"><a href="https://trello.com/c/ihCSqZcv/4-product">Product</a></blockquote><script src="https://p.trellocdn.com/embed.min.js"></script>
      <div class="row">
         <div class="col l10 m10 s12 offset-l1">
            <h3 class="custom-text ctgry-name" style="text-align:left;color:#263238;padding-bottom: 5px;"><b><?php echo "$title"; ?></b></h3>
            <!-- BreadCrumbs -->
            <div class="nav-wrapper container" style="float:left">
               <a href="industries_list.php" class="breadcrumb black-text" style="font-size: 13px;">Industry</a>
               <a href="industries.php?id=<?php echo "$link"; ?>" class="breadcrumb black-text" style="font-size: 15px;"><?php echo "$breadcrumb"; ?></a>
            </div>
            <?php 

               echo "<div class=\"col l12 s12 m6\">";
               ?>    
            <h3 class="custom-text client-heading client-heading1 custom-text ctgry-name" style="font-size:30px;text-align:left;line-height: 30px"><b><u>OVERVIEW</u></b></h4>
         <p align="justify" style="font-size: 17px;"><?php echo "$intro"; ?></p>
            <div class="row">
               <div class="col l4 m4 s4">
                    <p class="custom-text" id="cntdwn1" style="color:#263238;text-align:center;line-height:10%;font-size: 40px;"></p>
                    <p class="custom-text" id="field1text">YEARS ASSOCIATED</p>
                </div>
                <div class="col l4 m4 s4">
                    <p class="custom-text" id="cntdwn2" style="color:#263238;text-align:center;line-height:10%;font-size: 40px;"></p>
                    <p class="custom-text" id="field2text">PROJECTS COMPLETED</p>
                </div>
                <div class="col l4 m4 s4">
                    <p class="custom-text" id="cntdwn3" style="color:#263238;text-align:center;line-height:10%;font-size: 40px;"></p>
                    <p class="custom-text" id="field3text">HAPPY CLIENTS</p>
                </div>
             </div>
       
            <!-- ====================================================== -->

                  <div class="container-fluid" >
      <h3 class="custom-text client-heading client-heading1 custom-text ctgry-name" style="font-size:30px;text-align:left;padding-top:8px;padding-bottom:6px;line-height: 50px"><b><u>PRODUCTS</u></b></h4>
         <div class="row">
                  <div class="col l12 m9 s12" id="category_products">
                     <?php 
                        for($i=0;$i<count($products);$i++){
                                createCard($products[$i],$products[$i+1],$products[$i+2],"l3");
                                $i=$i+2;
                            }
                           ?>
            </div>
         </div>
      </div>
                     <div class="row">
      <h3 class="custom-text client-heading client-heading1 custom-text ctgry-name" style="font-size:30px;text-align:left;padding-top:8px;padding-bottom:6px;line-height: 50px"><b><u>OUR CLIENTS</u></b></h4>
            We love our clients. Our clients come first at fifteen, and we are proud to work with some of the world's best known brands.
            <div class="col l12">
                  <br>
                  <?php 
                     function img($ind,$clients){
                        echo "<div class=\"row\">";
                        for($i=0;$i<$clients/4;$i++){
                           for($j=0;$j<4;$j++){
                              $x=1+$j+$i*4;
                              echo "<div class=\"col l3 s2\" style=\"padding-top:40px;\"><img class=\"client\" src=\"client_logos/$ind$x.gif\" height=\"100px\"></div>";
                           }
                        }
                        echo "</div>";
                     }
                     img($_x,$clients);
                  ?>
               </div>
            </div>


         </div>
      </div>
      </div>
      </div>
            <!-- ====================================================== -->
         
      </div>
      <br>
      <!-- ====================================================== -->
      <br>
      <!-- ====================================================== -->
      <!-- Footer -->

      <?php
         include('include/footer.php');
         ?> 
      <!-- ====================================================== -->
   </body>
<script>
       var once=0;
//    $(window).scroll(function() {
//      countdown(0,0,0,37,306,11);
      countdown(<?php echo $count; ?>);
//    });
</script>
</html>