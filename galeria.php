<!-- html -->
<div class="row">
  <?php $images = acf_photo_gallery('galeria', $post->ID);
  // if( count($images) ):
      foreach($images as $image):
         $title = $image['title'];
         $url = preg_split('/[\ \n\,]+/',$image['large_srcset'])[0];
  ?>

  <div class="col-md-4" >
    <div class="" style="border: 3px solid rgba(0,0,0,0.1); border-radius: 5px;">
      <div class="" style="height:12em; background-image:url(<?=$url?>); background-size:cover;">
        <!-- obraz -->
      </div>
      <h4 class="text-center" style="padding:0.8em;">
        <?=$title?>
      </h4>
    </div>
  </div>

<?php endforeach; ?>
<?php //endif; ?>
</div>
<!-- php -->
<?php

require_once ('simple_html_dom.php');

function galeria_slajdy( $atts, $content ) {

		$exp = array();
		$alt = array();
		$cap = array();
		$link = array();

		$ht = str_get_html($content);

		foreach($ht->find('img') as $element) {

			 array_push($exp,$element->src);

			 $tt = $element->alt;
			 $tt2 = explode('#',$tt);
			 array_push($alt,$tt2[0]);
			 array_push($cap,$tt2[1]);
			 array_push($link,$tt2[2]);

		}

		// print_r($content);

    $html = '<div class="d-md-none d-block">
							<div class="d-none d-sm-block" style="background-color:lightgrey;padding:1em;">
								<h5 style=" text-align:center; color:rgba(0,0,0,0.5)">
								'.$alt[0].'
								</h5>
							</div>
							<div>
							<img src="'.$exp[0].'"'. ' ' .'style="width:100%;">
							</div>
						</div>
						<div class="bd-example galeria_duza_kontener d-none d-md-block">
            <div id="nawigacja_karuzeli_galerii_duzej_1"
            class="carousel slide" data-ride="carousel"
            >
            <ol class="carousel-indicators">';
            $ind = 0;


          while($ind<count($exp)){

            $src = $exp[$ind];


                  if($ind == 0){

                    $html .= '<div data-target="#nawigacja_karuzeli_galerii_duzej_1" data-slide-to="' . $ind . '"
										class="bullet" style="">
                    </div>';
                  }
                  if($ind > 0){
                    $html .= '<div data-target="#nawigacja_karuzeli_galerii_duzej_1" data-slide-to="' . $ind . '"
										class="bullet " style="">
                    </div>';
                  }
            $ind++;
          }
          $ind = 0;
          $html .= '</ol>';
          $html .= '<div class="carousel-inner" role="listbox">';
          while($ind<count($exp)){

            $src2  = $exp[$ind];
						$meta_alt = $alt[$ind];
						$meta_cap = $cap[$ind];
						$meta_link = $link[$ind];

            if($ind == 0){

              $html .= '
                <div class="carousel-item active">
                  <img id="" class="d-block img-fluid galeria_zdj" data-custom-src="'.$src2.'" alt=""
                  src="" data-holder-rendered="true" style="background-image:url('.$src2.');"
                   >
                  <div class="carousel-caption d-md-block opis_karuzela black_high">

									<div style="position:absolute; left:50%; top:-650%;">

										<h1 class="galeria_tekst">
										'.$meta_alt.'
										</h1>

										<div class="" style="position:relative;left:-50%; padding:1em;">'
											.( isset($meta_cap)  ?
											'<a href="'. $meta_link .'" style="display:block;">
											<h2 class="galeria_tekst2">'.$meta_cap.'</h2></a>': ' ').

										'</div>

									</div>

                  </div>
                </div>';
            }
            if($ind > 0){
              $html .= '
                <div class="carousel-item">
                  <img id="" class="d-block img-fluid galeria_zdj" data-custom-src="'.$src2.'" alt=""
                  src="" data-holder-rendered="true" style="background-image:url('.$src2.');"
                   >
                  <div class="carousel-caption d-md-block opis_karuzela black_high">

									<div style="position:absolute; left:50%; top:-650%;">

										<h1 class="galeria_tekst">
										'.$meta_alt.'
										</h1>

										<div class="" style="position:relative;left:-50%; padding:1em;">'
											.( isset($meta_cap)   ?
											'<a href="'. $meta_link .'" style="display:block;">
											<h2 class="galeria_tekst2">'.$meta_cap.'</h2></a>': ' ').

										'</div>

									</div>

                  </div>
                </div>';
            }
            $ind++;
          }

          $html .= '</div>';
          $html .='<a class="carousel-control-prev" data-target="#nawigacja_karuzeli_galerii_duzej_1" role="button" data-slide="prev"
          style="">
                    <span class="carousel-control-prev-icon" aria-none="true" style=""></span>
                    <span class="sr-only">Previous</span>
                  </a>

              <a class="carousel-control-next" data-target="#nawigacja_karuzeli_galerii_duzej_1" role="button" data-slide="next"
              style="">
                <span class="carousel-control-next-icon" aria-none="true" style=""></span>
                <span class="sr-only">Next</span>
              </a>';

      $html .= "</div></div>";

      return $html;
}

add_shortcode( 'galeria_slajdy', 'galeria_slajdy' );


 ?>

<!-- opis -->


<h2>Galeria - slider:</h2>

<p><strong>[do_gallery]</strong>  tutaj wklej zdjęcia używając guzika "dodaj medium" <strong>[/do_gallery]</strong>

<p>Dodatkowe ustawienia <strong>[do-gallery]</strong> :
<p>Po kliknięciu na dodane zdjęcie, klikamy na ołówek, co przenosi nas do szczegółów obrazka. Wpisując w polu "Tekst alternatywny" tekst, pojawi się on na slajdzie w galerii.
<p>Przykład:

<p>Po prostu Excellent # szczegóły # http://excellenttutors.dev/index.php/cennik/ .

<p>Separator # oddziela całostki, pierwsza całostka to motto, druga to tekst w guziku, a trzecia to link, do którego przekierowuje guzik. Jeżeli nie zostanie wypełniona któraś z dalszych całostek, tylko ona nie pojawi się ona na slajdzie.

<p>Kod tworzy następującą galerię (fragment):
	<img src="https://i.imgur.com/6GYgzvo.jpg" />
<p>UWAGA - kolor tekstu dopasowuje się automatycznie do koloru tła, więc wrzucając ciemne zdjęcie - tekst automatycznie zmieni kolor na biały oraz odwrotnie.
<p></p>

<script type="text/javascript">
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
</script>



            
