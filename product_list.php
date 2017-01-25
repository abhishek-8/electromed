<?php
$x= $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Product Category</title>
        <!-- CSS  -->
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
        <!-- <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>  -->
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <!--Import jQuery before materialize.js-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>‌
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Coming+Soon|Pacifico|Shadows+Into+Light" rel="stylesheet">
         <script src="action.js" type="text/javascript"></script>
        <script>
        $(document).ready(function(){
        $('.collapsible').collapsible();
        $(".dropdown-button").dropdown({
        hover:true,
        constrain_width: true,
        gutter: 0,
        belowOrigin: true
        });
        });
        
        </script>
    </head>
    <body>
        <div class="dropdown-content" id="products">
            <div class="container">
                <div class="row">
          <div class="col l2"><p class="dropdown_headName"><a href="product_list.php?id=LED_display">LED Display</a></p><hr></div>
          <div class="col l3"><p class="dropdown_headName"><a href="product_list.php?id=Product_for_office">Products for Office</a></p><hr></div>
          <div class="col l3"><p class="dropdown_headName"><a href="product_list.php?id=Standalone_projects">Standalone Projects</a></p><hr></div>
          <div class="col l4"><p class="dropdown_headName"><a href="product_list.php?id=Industrial_Instruments">Industrial Instruments</a></p><hr></div>
        </div>
                <div class="row" style="margin-top:-50px;">
                    <div class="col l2">
                        <p class="product_name"><a href="products.php?id=">TRUE COLOR HD SCREEN</a></p>
                        <p class="product_name"><a href="products.php?id=">TRI COLOR DISPLAY BOARDS</a></p>
                        <p class="product_name"><a href="products.php?id=">UNI COLOR DISPLAY BOARDS</a></p>
                        
                    </div>
                    <div class="col l3">
                        <p class="product_name"><a href="products.php?id=token">TOKEN DISPLAY</a></p>
                        <p class="product_name"><a href="products.php?id=digital_clock">DIGITAL CLOCKS</a></p>
                        <p class="product_name"><a href="products.php?id=industrial_display">INDUSTRIAL DISPLAY</a></p>
                        <p class="product_name"><a href="products.php?id=scrolling_display">SCROLLING DISPLAY</a></p>
                    </div>
                    <div class="col l3">
                        <p class="product_name"><a href="products.php?id=">COACH GUIDANCE SYSTEM</a></p>
                        <p class="product_name"><a href="products.php?id=">TRAIN INFORMATION BOARD</a></p>
                        <p class="product_name"><a href="products.php?id=">POWER GENERATION DISPLAY BOARD</a></p>
                        
                    </div>
                    <div class="col l4">
                        <p class="product_name"><a href="products.php?id=flow_monitor">FLOW MONITOR</a></p>
                        <p class="product_name"><a href="products.php?id=lfm">LINE FREQUENCY MONITOR</a></p>
                        <p class="product_name"><a href="products.php?id=megawatt_pannel">MEGA WATT PANEL</a></p>
                        <p class="product_name"><a href="products.php?id=process_n_indicator">PROCESS INDICATORS</a></p>
                        <p class="product_name"><a href="products.php?id=ph_meter">PH METER</a></p>
                        <p class="product_name"><a href="products.php?id=tachometer">TACHOMETER</a></p>
                        <p class="product_name"><a href="products.php?id=temp_cont">TEMPERATURE CONTROLLER</a></p>
                        <p class="product_name"><a href="products.php?id=twilight_switches">TWILIGHT SWITCHES</a></p>
                        <p class="product_name"><a href="products.php?id=industrial_display">INDUSTRIAL DISPLAY</a></p>
                        <p class="product_name"><a href="products.php?id=wsm">WEIGHING SCALE MONITOR</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper container">
                    <a id="logo-container" href="" class="brand-logo">Electro-med</a>
                    <ul class="right hide-on-med-and-down">
                        <li class="active"><a href="home.html" class="navLink">Home</a></li>
                        <li><a href="about.html" class="navLink">About Us</a></li>
                        <li><a href="product_list.php" class="dropdown-button navLink" data-activates="products">Products<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a href="contactForm.html" class="navLink">Contact Us</a></li>
                    </ul>
                    
                    <!-- <ul id="nav-mobile" class="side-nav">
                        <li><a href="home.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="" class="dropdown-button" data-activates="products">Products<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a href="contactForm.html">Contact Us</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>-->
                </div>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col l3">
                    <a href="#!" class="btn" onclick="Materialize.showStaggeredList('#staggered-test')">Categories</a>
                    <ul id="staggered-test" class="collapsible" data-collapsible="accordion">
                        <li style="opacity: 0;">
                            <div class="collapsible-header" onclick="temp()">LED Display</div>
                            <div class="collapsible-body container"><br>
                                <a href="products.php?id=">TRUE COLOR HD SCREEN</a><br>
                                <hr>
                                <a href="products.php?id=">TRI COLOR DISPLAY BOARDS</a><br>
                                <hr>
                                <a href="products.php?id=">UNI COLOR DISPLAY BOARDS</a><br>
                                
                            </div>
                        </li>
                        <li style="opacity: 0;">
                            <div class="collapsible-header">Product for Office</div>
                            <div class="collapsible-body container"><br>
                                
                                <a href="products.php?id=token">TOKEN DISPLAY</a><br>
                                <hr>
                                <a href="products.php?id=digital_clock">DIGITAL CLOCKS</a><br>
                                <hr>
                                <a href="products.php?id=industrial_display">INDUSTRIAL DISPLAY</a><br>
                                <hr>
                                <a href="products.php?id=scrolling_display">SCROLLING DISPLAY</a><br>
                            </div>
                            
                        </li>
                        <li style="opacity: 0;">
                            <div class="collapsible-header">Industrial Instruments</div>
                            <div class="collapsible-body container"><br>
                                <a href="products.php?id=flow_monitor">FLOW MONITOR</a><br>
                                <hr>
                                <a href="products.php?id=lfm">LINE FREQUENCY MONITOR</a><br>
                                <hr>
                                <a href="products.php?id=megawatt_pannel">MEGA WATT PANEL</a><br>
                                <hr>
                                <a href="products.php?id=process_n_indicator">PROCESS INDICATORS</a><br>
                                <hr>
                                <a href="products.php?id=ph_meter">PH METER</a><br>
                                <hr>
                                <a href="products.php?id=tachometer">TACHOMETER</a><br>
                                <hr>
                                <a href="products.php?id=temp_cont">TEMPERATURE CONTROLLER</a><br>
                                <hr>
                                <a href="products.php?id=twilight_switches">TWILIGHT SWITCHES</a><br>
                                <hr>
                                <a href="products.php?id=industrial_display">INDUSTRIAL DISPLAY</a><br>
                                <hr>
                                <a href="products.php?id=wsm">WEIGHING SCALE MONITOR</a><br>
                            </div>
                        </li>
                        <li style="opacity: 0;">
                            <div class="collapsible-header">Featured Projects</div>
                            <div class="collapsible-body container"><br>
                                <a href="products.php?id=">COACH GUIDANCE SYSTEM</a><br>
                                <hr>
                                <a href="products.php?id=">TRAIN INFORMATION BOARD</a><br>
                                <hr>
                                <a href="products.php?id=">POWER GENERATION DISPLAY BOARD</a><br>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col l9">
                    <h3 class="headName1" id='t'><?php echo $x; ?></h3>
                    <div class="row">
                        <div class="col s12 m7 l3">
                            <div class="card">
                                <div class="card-image">
                                    <img src="photos/lfm1.jpg">
                                    <span class="card-title">Card Title</span>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m7 l3">
                            <div class="card">
                                <div class="card-image">
                                    <img src="photos/lfm1.jpg">
                                    <span class="card-title">Card Title</span>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m7 l3">
                            <div class="card">
                                <div class="card-image">
                                    <img src="photos/lfm1.jpg">
                                    <span class="card-title">Card Title</span>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m7 l3">
                            <div class="card">
                                <div class="card-image">
                                    <img src="photos/lfm1.jpg">
                                    <span class="card-title">Card Title</span>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col s12 m7 l3">
                            <div class="card">
                                <div class="card-image">
                                    <img src="photos/lfm1.jpg">
                                    <span class="card-title">Card Title</span>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m7 l3">
                            <div class="card">
                                <div class="card-image">
                                    <img src="photos/lfm1.jpg">
                                    <span class="card-title">Card Title</span>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m7 l3">
                            <div class="card">
                                <div class="card-image">
                                    <img src="photos/lfm1.jpg">
                                    <span class="card-title">Card Title</span>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m7 l3">
                            <div class="card">
                                <div class="card-image">
                                    <img src="photos/lfm1.jpg">
                                    <span class="card-title">Card Title</span>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l3 s12">
                        <div class="row">
                            <h5 class="white-text"><strong>[ Electro-Med ]</strong></h5>
                            <p class="white-text foot" >Welcome to the leading company delivering services that combine quality,reliability and compliance.</p>
                        </div>
                        <div class="row">
                            <div class="col l5">
                                <h6 class="white-text">Follow Us: </h6>
                            </div>
                            <div class="col l2"><a href="" target="_blank">
                                <img title="LinkedIn" alt="LinkedIn" src="icons/linkedin.png" width="30" height="30" />
                            </a></div>
                            <div class="col l2">
                                <a href="" target="_blank" target="_blank">
                                <img title="Facebook" alt="Facebook" src="icons/facebook.png" width="30" height="30" /></a>
                            </div>
                            <div class="col l2"><a href="" target="_blank">
                                <img title="Google" alt="Google" src="icons/google.png" width="30" height="30" />
                            </a></div>
                        </div>
                    </div>
                    <div class="col l3 s12">
                        <h6 class="white-text"><strong>Our Links</strong></h6>
                        
                        <ul>
                            <li><a class="white-text foot" href="#!">About Us</a></li>
                            <li><a class="white-text foot" href="#!">Clients</a></li>
                            <li><a class="white-text foot" href="#!">Coach Guidance System</a></li>
                            <li><a class="white-text foot" href="#!">Contact Us</a></li>
                            <li><a class="white-text foot" href="#!">Customers List</a></li>
                            <li><a class="white-text foot" href="#!">Enquiry</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h6 class="white-text"><strong>Career</strong></h6>
                        <ul>
                            <li><a class="white-text foot" href="#!">Job/Apprenticeship</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h6 class="white-text"><strong>Contact Info</strong></h6>
                        <div class="row">
                            <div class="col l1"><i class="material-icons prefix blue-text">phone</i></div>
                            <div class="col l8 offset-l1"><p class="white-text foot" style="display:inline;">9415039393</p></div>
                        </div>
                        
                        <div class="row">
                            <div class="col l1"><i class="material-icons prefix blue-text">email</i></div>
                            <div class="col l8 offset-l1"><p class="white-text foot" style="display:inline;">electro.med25@gmail.com</p></div>
                        </div>
                        <div class="row">
                            <div class="col l1"><i class="material-icons prefix blue-text">room</i></div>
                            <div class="col l8 offset-l1"><p class="white-text foot" style="display:inline;">D -17, Vivekanand Puri,
                            <br/>Lucknow –226007 India</p></div>
                        </div>
                        <!-- <ul>
                            <li><i class="material-icons prefix blue-text">phone</i><p class="white-text foot" style="display:inline;">9415039393</p></li>
                            <li><i class="material-icons prefix blue-text">email</i><p class="white-text foot" style="display:inline;">  electro.med25@gmail.com</p></li>
                            <li><i class="material-icons prefix blue-text">room</i><p class="white-text foot" style="display:inline;">D -17, Vivekanand Puri,
                            <br/>Lucknow –226007 India</p></li>
                            
                            
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="fixed-action-btn horizontal">
                <a class="btn-floating btn-large blue">
                    <i class="large material-icons">phone</i>
                </a>
                <ul>
                    <li><a href="" target="_blank">
                        <img title="LinkedIn" alt="LinkedIn" src="icons/linkedin.png" width="35" height="35" />
                    </a></li>
                    <li><a href="" target="_blank" target="_blank">
                    <img title="Facebook" alt="Facebook" src="icons/facebook.png" width="35" height="35" /></a></li>
                    <li><a href="" target="_blank">
                        <img title="Google" alt="Google" src="icons/google.png" width="35" height="35" />
                    </a></li>
                    <li><a href="" target="_blank">
                        <img title="Yahoo" alt="RSS" src="icons/yahoo.png" width="35" height="35" />
                    </a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="footer-copyright">
            <div class="container foot">
                © 2017 Copyright Electromed. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>