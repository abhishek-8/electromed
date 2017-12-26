<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Affix a Materialize Navbar on scroll</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>

      <link rel="stylesheet" href="css/styleNew.css">

  
</head>

<body>

<?php include('include/navbarNew.php'); ?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>

<script>
  // AFFIX LOWER NAVBAR ON SCROLL
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 64) {
        $(".navbar-lower").addClass("navbar-fixed");
    }
    else {
        $(".navbar-lower").removeClass("navbar-fixed");     
    }
});


// FADE IN SMALL LOGO AND FAB ON SCROLL
$(window).scroll(function() {
  var scrollPosition = $(this).scrollTop();
  var $fadeInLogo = $('.fadeInLogo');
  var $growInFab = $('.halfway-fab');
  if (scrollPosition > 128) {
    // Fade in logo & bring in FAB
    $fadeInLogo.fadeIn(200);
    $growInFab.removeClass("scale-out");
  } else {
    // Fade out logo & remove FAB
    $fadeInLogo.fadeOut(200);
    $growInFab.addClass("scale-out");
  }
});


// MODAL
$(document).ready(function(){
  $('.modal').modal();
});

// DROPDOWNS
$(document).ready(function(){
  $(".dropdown-button").dropdown(
    {
      belowOrigin: true
    }
  );
});

//TABS
$(document).ready(function(){
  $('ul.tabs').tabs();
});

//SCROLLSPY
$(document).ready(function(){
    $('.scrollspy').scrollSpy();
});

// SIDEBAR
$(document).ready(function(){
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
});

</script>