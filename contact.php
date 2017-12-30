<?php
    $res='';
    $done='false';
    include('submit.php');
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Contact - Manufacturer and supplier of LED display and Digital Instruments - Electromed, Lucknow</title>
        <link rel="icon" href="images/logoIcon.ico">
        <!-- CSS  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css'>
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
        <!--Import jQuery before materialize.js-->
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/styleNavbar.css">

    </head>
    <body id="contactPage">
        <!-- ====================================================== -->
        <!-- Top NavBar -->
        <?php include('include/navbarNew.php'); ?> 
        <!-- ====================================================== -->
        <div class="z-depth-5 card-panel hoverable" id="popup">
            <p class="custom-text" style="color:#263238;text-align:center;font-size:17px;"><?php echo $res; ?><br><br><a href=""><u>Close</u></a></p>
        </div>
        <!--div class="parallax-container" id="contact_us">
            <div class="parallax"><img src="images/contact.jpg"></div>
            <div class="container">
                <br>
                <p class="white-text custom-text" style="font-size:30px;text-align:center;">Have Questions About Our Products or Services?
                    Use the Contact Catalog Below So That We Can Better Assist You.
                </p>
            </div>
        </div-->
        <div class="container-fluid">
            <div class="row" >
                <div class="col l6 m7 s12" id="contactform">
                    <p class="custom-text" style="color:#263238;font-size:26px;">We'd love to help you </p>
                    <hr class="style11">
                    <br>
                    <form name="query_form" action="" method="post" id="qform">
                        <div class="row">
                            <div class="col l6 m6 s12">
                                <div class="col l12 m12 s12">
                                    <div class="input-field">
                                        <i class="material-icons prefix">perm_identity</i>
                                        <input id="name" name="name" type="text" class="validate" required>
                                        <label for="name">Name</label>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="col l12 m12 s12">
                                    <div class="input-field">
                                        <i class="material-icons prefix">email</i>
                                        <input id="email" name="email" type="email" class="validate" required>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="col l12 m12 s12">
                                    <div class="input-field">
                                        <i class="material-icons prefix">phone</i>
                                        <input id="phone" name="phone" type="tel" class="validate" required>
                                        <label for="phone">Phone</label>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="col l12 m12 s12 contact-page-form">
                                    <div class="input-field">
                                        <img class="prefix" alt="factory" src="jdev/icons/factory.svg" width="20" height="28" style="padding-right: 12px" />
                                        <select name="industry">
                                            <option value="">Industry</option>
                                            <option value="Power">Power</option>
                                            <option value="Sugar">Sugar</option>
                                            <option value="Railway">Railway</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <br><br><br>
                            </div>
                            <div class="col l6 m6 s12">
                                <div class="col l12 m12 s12" >
                                    <div class="input-field" >
                                        <i class="material-icons prefix">shopping_cart</i>
                                        <input id="poi" name="poi" type="text" class="validate">
                                        <label for="poi">Products of Interest</label>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="col l12 m12 s12">
                                    <div class="input-field">
                                        <i class="material-icons prefix">message</i>
                                        <textarea id="qry" name="query" class="materialize-textarea" required style="min-height:128px;"></textarea>
                                        <label for="qry">Write your query...</label>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <center><input type="submit" name="submit" class="red accent-4 btn" style="width:40%;border-radius:5px;"></center>
                        </div>
                    </form>
                    <hr class="style11">
                    <br>
                </div>
                <div class="col l3 m3 s11 offset-s1" id="contactinfo">
                    <p class="custom-text" style="color:#263238;font-size:22px;line-height:90%">Address</p>
                    <p class="headName1" style="font-size:18px;line-height:90%">D-17, Vivekanand Puri,
                        <br/>Lucknow –226007 India
                    </p>
                    <p class="headName1">Monday-Saturday : <span style="font-size:18px;line-height:10%">9:00 to 5:30 PM (IST)</span></p>
                    <p class="custom-text" style="color:#263238;font-size:22px;line-height:90%">Phone</p>
                    <p class="headName1" style="font-size:18px;line-height:90%">+91 941 508 5804<br>+91 941 503 9393</p>
                    <p class="custom-text" style="color:#263238;font-size:22px;line-height:90%">Email</p>
                    <p class="headName1" style="font-size:18px;line-height:90%">sales@electromed.co.in<br>support@electromed.co.in<br>info@electromed.co.in</p>
                </div>
            </div>
        </div>
        <center>
            <h2 class="custom-text" style="color:#263238;"><b>FIND US</b></h2>
        </center>
        <div class="overlay" onClick="style.pointerEvents='none'"></div>
        <div id="map" class="center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14234.872605313356!2d80.93281223137183!3d26.880694430260508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf8e238a7eafccff!2sELECTRO-MED!5e0!3m2!1sen!2sin!4v1484311290986&zoom=5" width="100%" height="370" frameborder="0" style="border:none" allowfullscreen></iframe>
        </div>
        <!-- ====================================================== -->
        <!-- Footer -->
        <?php  include('include/footer.php')  ?> 
        <!-- ====================================================== -->
        <script>
            $(document).ready(function(){
                if(<?php echo $done; ?>==true)
                  $('#popup').show();
            $('select').material_select();
            $('.parallax').parallax();
            });
            
        </script>
    </body>
</html>