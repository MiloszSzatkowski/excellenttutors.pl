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

  var set = false;

  if (!jQuery.contains(document, $('.carousel-inner')) && window.innerWidth>600) {
  set = true;
  }

  if (set==true) {

    console.log($('.galeria_zdj').eq(2).attr('alt'));

    $('.carousel-control-prev span').css('display','none');
    $('.carousel-control-next span').css('display','none');

    $('.carousel-control-prev span').fadeIn('slow');
    $('.carousel-control-next span').fadeIn('slow');


    var ind = 0;
    var l = $('.carousel-inner .carousel-item').toArray();

    $('.carousel-control-prev').click(function() {
      clearInterval(inter);
      if (ind==0) {
        ind=l.length-1;
      } else { ind--;
      }
      animateGallery();

      inter = setInterval(changeIt, time);
    });

    $('.carousel-control-next').click(function() {
      clearInterval(inter);
      if (ind==l.length-1 || ind>l.length) {
        ind = 0;
      } else { ind++;
      }
      animateGallery();

      inter = setInterval(changeIt, time);
    });

    $('.carousel-inner').css('background-color','grey');

    var time = 5000;
    // getImageBrightness();
    var inter = setInterval(changeIt, time);

  function changeIt () {

    animateGallery();

    if (ind==l.length-1) {
      ind = 0;
    } else {
      ind++;
    }
  }

  // var counter = [];

  function animateGallery(){

    // getImageBrightness(ind);

    $('.bullet').css('background-color','rgba(255,255,255,0.6)');
    $('.bullet').css('border','0');
    $( "[data-slide-to='"+ind+"']").css('background-color','white');
    $( "[data-slide-to='"+ind+"']").css('border','2px solid rgba(0,0,0,0.8)');
    $('.carousel-inner .carousel-item').fadeOut('slow', 'linear');

    setTimeout(function () {
      $('.carousel-inner .carousel-item').eq(ind).fadeIn('slow', 'linear');
    }, 500);

    // console.log(counter);
    // if ($.inArray(ind, counter) == -1){counter.push(ind); }
  }

  var ind_slide;

  $('.bullet').click(function(){

      clearInterval(inter);
      ind_slide = $(this).attr('data-slide-to');
      ind = parseInt(ind_slide);
      animateGallery();
      inter = setInterval(changeIt, time);
  });


  var indx=0;

  while (indx<l.length) {
    // if ($.inArray(ind, counter) !== -1){
    //   console.log('Div ma klasę');
    //   return;
    // }

      var imgSrc = new Image();
      imgSrc.id = 'temp';
      imgSrc.src = $('.galeria_zdj').eq(indx).data('custom-src');
      imgSrc.style.display = "none";

      console.log($('.galeria_zdj').eq(indx).data('custom-src'));
      // console.log($('.galeria_tekst').eq(ind).hasClass('backgroundLight'));

      var colorSum = 0;

              // create canvas
              var canvas = document.createElement("canvas");
              canvas.width = Math.max(1, Math.floor(imgSrc.width));
              canvas.height = Math.max(1, Math.floor(imgSrc.height));

              var ctx = canvas.getContext("2d");
              ctx.drawImage(imgSrc,0,0);

              var imageData = ctx.getImageData(0,0,canvas.width,canvas.height);
              var data = imageData.data;
              var r,g,b,avg;

              for(var x = 0, len = data.length; x < len; x+=8) {
                r = data[x];
                g = data[x+1];
                b = data[x+2];

                avg = Math.floor((r+g+b)/3);
                colorSum += avg;
              }

              $('canvas').remove();
              $('#temp').remove();

              var brightness = Math.floor(colorSum / (imgSrc.width*imgSrc.height));
              console.log(brightness);

              // wyzerowanie
              colorSum = 0;
              r = 0; g = 0; b = 0; avg = 0; data = 0;

              if (brightness>65) {
                $('.galeria_tekst').eq(indx).addClass('backgroundLight');
                $('.galeria_tekst2').eq(indx).addClass('backgroundLight');
              // } else if (brightness<71 && brightness>60) {
              //   $('.galeria_tekst').eq(ind).addClass('background-complex ');
              } else {
                $('.galeria_tekst').eq(indx).addClass('backgroundDark');
                $('.galeria_tekst2').eq(indx).addClass('backgroundDark');
              }

            indx++;
            console.log(indx);
          }
          //koniec while

        //   // koniec funkcji
        // }

      }
      // koniec setIt

});

</script>
<!-- koniec jquery -->
