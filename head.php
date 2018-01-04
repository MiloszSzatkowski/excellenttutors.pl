<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="og:image" property="og:image" content="http://excellenttutors.pl/images/facebook.jpg" />
<meta name="description"
  content="Nazywamy się Excellent Tutors i jesteśmy mobilną szkołą korepetycji.
  Prowadzimy indywidualne lekcje z dojazdem do domu ucznia na terenie Krakowa z przedmiotów takich jak matematyka, fizyka, chemia i biologia.">
<meta name="author" content="@Miłosz Szatkowski@.pl">

<title>Excellent Tutors - Mobilna Szkoła Korepetycji w Krakowie</title>

<link rel="pingback" href="xmlrpc.php">

<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Pacifico" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/6.1.4/jquery.mmenu.all.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/6.1.4/jquery.mmenu.all.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<style media="screen">
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript,
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
position: fixed;
left: 0px;
top: 0px;
width: 100%;
height: 100%;
z-index: 9999;
background: url('images/loader.gif') center no-repeat #fff;
}
</style>

<script type="text/javascript">
  $(function() {

    //	create a menu
    $('#menu').mmenu();

    //	fire the plugin
    $('.mh-head.first').mhead({
      scroll: false
    });
    $('.mh-head.second').mhead({
      scroll: {
        hide: 200
      },
      hamburger :  {
      menu  : "#menu"
      }
    });
    $(".se-pre-con").fadeOut("slow");

  });
//paste this code under the head tag or in a separate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen

	});
</script>


<!-- favikona -->
<link rel="shortcut icon" type="image/png" href="/images/favicon.png"/>


<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<?php

foreach (glob("./css/*.css") as $css) {
  echo "<link type='text/css' rel='stylesheet' href='$css'>\n";
}

 ?>

<!-- css Galeria -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

<!-- FIRA -->
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
<!-- OZDOBNA -->
<link href='http://fonts.googleapis.com/css?family=Lalezar&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
