<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

<link href="https://fonts.googleapis.com/css?family=PT+Sans|PT+Serif" rel="stylesheet">

<meta name="description" content="<?php echo get_option('meta_google'); ?>" />

<meta name="author" content="<?php echo get_option('author'); ?>" />
<meta name="contact" content="<?php echo get_option('meta_mail'); ?>" />
<meta name="keywords" content="<?php echo get_option('meta_key'); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<style media="screen">

<?php $url = get_option('tlo_strony'); ; ?>

body, html{
  background-image: url(<?=$url?>);
    background-position: center;
    background-repeat: repeat-y;
    background-size: 100%;
}


</style>


<header id="header">

<!-- MENU -->
<nav id="menu_main" role="navigation">

<div class="top_banner">
  <div class="info_banner">

    <a href="tel:<?php echo get_option('mytel'); ?>" class=""><i class="fa fa-phone" aria-hidden="true"></i> <?php echo get_option('mytel'); ?></a>
  </div>
</div>

<div class="logo_baner">
  <p>
    <a href="<?php echo home_url(); ?>">
      <img src="<?php echo get_option('url_baner'); ?>" alt="" id="logo_baner_img">
    </a>
  </p>
</div>

<div class="menu_wrap">
  <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</div>

</nav>
<!-- KONIEC MENU -->

</header>
<div id="zaslona"></div>

<!-- jquery do pokazywania menu -->
<script type="text/javascript">

jQuery(document).ready(function( $ ) {
  $('nav .menu-item-has-children')
  .append(' <i style="font-size:0.6em;transform:translateY(-3px);color:rgba(0,0,0,0.5);" class="fa fa-chevron-down" aria-hidden="true"></i>');
  $('nav .menu_wrap li > .sub-menu').parent().hover(function() {
    var submenu = $(this).children('.sub-menu');
    if ( $(submenu).is(':hidden') ) {
      $(submenu).stop(false,true,false).fadeIn(200);
      $(submenu).css({display: 'flex',   flexDirection: 'column'});
    } else {
      $(submenu).stop(false,true,false).fadeOut(200);
    }
  });

  var dg = $('#logo_baner_img');
  var logo = $('#logo_baner_img');

 $(window).on('scroll', function(){
    if ($(this).scrollTop() > 80){dg.addClass('anim');}
    else{dg.removeClass('anim');}
});

    var speed = 6000;

    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; //id of previous button
    var next = 'next'; //id of next button
    slides.width(item_width); //set the slides to the correct pixel width
    container.parent().width(item_width);
    container.width(slides.length * item_width); //set the slides container to the correct total width
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();


    //if user clicked on prev button

    $('#buttons a').click(function (e) {
        //slide the item

        if (container.is(':animated')) {
            return false;
        }
        if (e.target.id == previous) {
            container.stop().animate({
                'left': 0
            }, 1500, function () {
                container.find(elm + ':first').before(container.find(elm + ':last'));
                resetSlides();
            });
        }

        if (e.target.id == next) {
            container.stop().animate({
                'left': item_width * -2
            }, 1500, function () {
                container.find(elm + ':last').after(container.find(elm + ':first'));
                resetSlides();
            });
        }

        //cancel the link behavior
        return false;

    });

    //if mouse hover, pause the auto rotation, otherwise rotate it
    container.parent().mouseenter(function () {
        clearInterval(run);
    }).mouseleave(function () {
        run = setInterval(rotate, speed);
    });


    function resetSlides() {
        //and adjust the container so current is in the frame
        container.css({
            'left': -1 * item_width
        });
    }

    //a simple function to click next link
    //a timer will call this function, and the rotation will begin


    function rotate() {
        $('#prev').click();
    }

});

</script>
<!-- koniec jquery -->
