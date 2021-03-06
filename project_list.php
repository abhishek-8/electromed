<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Projects - Manufacturer and supplier of LED display and Digital Instruments - Electromed, Lucknow</title>
         <link rel="stylesheet" href="css/materialize.min.css">   
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <!--Import jQuery before materialize.js-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>‌
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        
         <script src="action.js" type="text/javascript"></script>

    <link rel="import" href="includes.html">
       
    </head>
    <body id="category_page">

    <!-- ====================================================== -->
    <!-- Top NavBar -->
    <?php include('include/navbar.php'); ?> 

    <!-- ====================================================== -->

        <div class="container-fluid">
        
            <div class="row">
                <div class="col l3 m3 s12">
                    <a href="#!" class="btn red accent-4 category-btn" onclick="Materialize.showStaggeredList('#staggered-test')" style="width:100%;">Projects</a>
                    <ul id="staggered-test" class="collapsible" data-collapsible="accordion">
                         <li style="opacity: 0;">
                            <div class="collapsible-header active" style="font-size:16px">Featured Projects</div>
                            <div class="collapsible-body container-fluid" style="line-height:72%;"><br>
                                <a href="project_page.php?id=ntpc_rihand" class="headName1" style="font-size:14px;padding-left:10%">NTPC RIHAND</a><br>
                                <hr>
                                <a href="project_page.php?id=patna_high_court" style="font-size:14px;padding-left:10%">PATNA HIGH COURT</a><br>
                                <hr>
                                <a href="project_page.php?id=patna_railway_station" style="font-size:14px;padding-left:10%">RAILWAY STATION DISPLAY AT PATNA</a><br>
                                <hr>
                                <a href="project_page.php?id=shakti_bhawan" style="font-size:14px;padding-left:10%">SHAKTI BHAWAN</a><br>
                                <hr>
                                <a href="project_page.php?id=panki" style="font-size:14px;padding-left:10%">PANKI</a><br>
                                <hr>
                                <a href="project_page.php?id=coach_guidance_system" style="font-size:14px;padding-left:10%">COACH GUIDANCE SYSTEM</a><br><br>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col l9 m9 s12">
                <center><h3 class="custom-text ctgry-name" style="text-align:center;padding:0px;color:#263238"><b id="category_name"></b></h3></center><br><br>
                    


                    <div class="row">
                        <div class="col s12 m7 l3" id="c1">
                            <div class="card">
                                <div class="card-image" id="p1"></div>
                                <div class="card-action" id="l1"></div>
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c2">
                            <div class="card">
                                <div class="card-image" id="p2">
                                    
                                </div>
                                <div class="card-action" id="l2">
                                </div>
                               
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c3">
                            <div class="card">
                                <div class="card-image" id="p3">
                                    
                                </div>
                                <div class="card-action" id="l3">
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c4">
                            <div class="card">
                                <div class="card-image" id="p4">
                                    
                                </div>
                                <div class="card-action" id="l4">
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col s12 m7 l3" id="c5">
                            <div class="card">
                                <div class="card-image" id="p5">
                                   
                                </div>
                                <div class="card-action" id="l5">
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c6">
                            <div class="card">
                                <div class="card-image" id="p6">
                                    
                                </div>
                                <div class="card-action" id="l6">
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c7">
                            <div class="card">
                                <div class="card-image" id="p7">
                                    
                                </div>
                                <div class="card-action" id="l7">
                                </div>
                              
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c8">
                            <div class="card">
                                <div class="card-image" id="p8">
                                    
                                </div>
                                <div class="card-action" id="l8">
                                </div>
                              
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m7 l3" id="c9">
                            <div class="card">
                                <div class="card-image" id="p9">

                                </div>
                                <div class="card-action" id="l9">
                                </div>
                               
                                
                            </div>
                        </div>
                        <div class="col s12 m7 l3" id="c10">
                            <div class="card">
                                <div class="card-image" id="p10">

                                </div>
                                <div class="card-action" id="l10">
                                    
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- ====================================================== -->
    <!-- Footer -->
        <?php
            $myfile = fopen("include/footer.php", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("include/footer.php"));
            fclose($myfile);
            ?> 

    <!-- ====================================================== -->

   <script>
        $(document).ready(function(){
            filter('projects',6);
            Materialize.showStaggeredList('#staggered-test');
            $('.parallax').parallax();
            $('.button-collapse').sideNav();  
        $('.collapsible').collapsible();
        $(".dropdown-button").dropdown({
        hover:true,
        constrain_width: true,
        gutter: 0,
        belowOrigin: true
        });
        });
        
        </script>
</body>
</html>