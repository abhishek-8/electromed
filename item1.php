<!!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <!-- CSS  -->
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <!-- <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>  -->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    
    <!--Import jQuery before materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>‌
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script type="text/javascript" src="actions.js"></script>
  </head>

  <body>
  
  <?php echo '<div class="card">
      <a onclick="hide()" style="float:right;"><i class="material-icons right">close</i></a>
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="banner_4.jpg" style="width:70%;">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<p style="float:right;">Details<i class="material-icons right">more_vert</i></p></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Salient features.</p>
      <ul>
      <li>f1</li>
      <li>f2</li>
      <li>f3</li>
      <li>f4</li>
      </ul>
    </div>

  </div>';
  ?>
  </body>
  </html>