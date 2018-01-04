<!DOCTYPE html>
<html lang="pl">

  <head>
<?php require_once 'head.php'; ?>

  </head>


  <body id="page-top">

  <style>

    @media all and (max-width : 1100px){
      .super_hide{
        display: none;
      }

      #super_hide2{
        display: none;
        visibility: hidden;
      }

      .tekst_kont_glowna{
        height: auto !important;
      }
    }

    @media (max-width: 980px) {

      .galeria-opinie{
        padding:1em!important;
        padding-top:0.2em!important;
      }

    }

    @media (max-width: 400px) {
     .e-kor{
       background-size: contain;
     }
     .e-kor p{
       width: 40%!important;
       top:0%!important;
     }
    }

    @media all and (max-width : 1000px){


          #Czemu_warto_nam_zaufac_tekst{
          padding: 1em;
          hyphens: auto;
          }

          #Czemu_warto_nam_zaufac_tekst_zdj_kont{
            padding: 1em !important;
          }

          #Czemu_warto_nam_zaufac_tekst_zdj p{
            left:7% !important;
            top:45% !important;
            background-color: rgba(255, 255, 255, 0.5);
          }

         #containters_landing_page{

          display: none !important;
          visibility: hidden !important;
         }
         #MainHead{

          padding: 0px !important;
          margin: 0px !important;
         }
         #landing_page_row{
           width: 100vw;
           padding: 0px !important;
           margin:0px !important;
         }
         #galeria{

           width: 100% !important;
           height: 100vh !important;
           padding: 0px !important;
           margin: 0px !important;
           margin-top: 0px !important;
           margin-bottom: 0px !important;
         }

         #tekst_caption{
          height: auto;
          bottom: 40%;
          padding: 10%;
          text-align: center;
          }
         #tekst_caption h5 {
           height: auto;
           text-align: center;
           font-size: 23px !important;
         }

         .carousel-indicators{
           bottom:0% !important;
         }

         #Menu_big{
           display: none;
         }

         #Menu_small{

           display: block !important;

         }
         .carousel-control-prev{
           top:72%!important;
         }
         .carousel-control-next{
           top:72%!important;
         }
         .section_tekst_O_Nas{
           text-align: left;
         }
         .section_tekst_O_Nas p{
           text-align: left;
         }
    }

  </style>

  <div id="Menu_small" style="margin:0;padding:0;height:2em;background-color:white;"><?php require_once 'Nawigacja_mob.html'; ?></div>

  <!-- Include html - Nawigacja -->
  <div id="Menu_big" ><?php require_once 'Nawigacja.html'; ?></div>
      <!-- sekcja po lewej -->

    <p id="Czemu_warto_nam_zaufac"></p>
    <section id="Czemu_warto_nam_zaufac_tekst" class="row o_Nas">
      <style>
      .opinie{
        font-size: 0.8em;
      }
      .e-kor{
        height: 7em;
        background-image: url('e-korepetycje.png');
        background-position: bottom center;
        background-repeat: no-repeat;
      }
      .e-kor p{
        width:30%; text-align:center; margin:0 auto;display:block;font-size:0.8em; position:relative; top:20%;
      }
      .opinie-opis{
        text-align: justify;
        border-left: 1px solid grey;
      }
      span.stars, span.stars span {
          display: block;
          background: url(stars.png) 0 -16px repeat-x;
          width: 80px;
          height: 16px;
      }
      span.stars span {
          background-position: 0 0;
      }

      .carousel-control-prev{
        height:5em;
        background-color:rgba(0,0,0,0.4);
        top:50%;
        left: 0;
        width:5em;
        margin:1em;
        border-radius:50%/50%;
        border:1px solid white; box-shadow: 0px 0px 5px black;
      }
      .carousel-control-next{
        height:5em;background-color:rgba(0,0,0,0.4);
        top:50%;
        right: 0;
        width: 5em;
        margin:1em;
        border-radius:
        50%/50%;
        border:1px solid white; box-shadow: 0px 0px 5px black;
      }
      #playButton:hover{
        border: 1px solid grey;
      }
      #pauseButton:hover{
        border: 1px solid grey;
      }
      </style>

    <?php

    $arr = [
        "Oliwia","17 września 2017",
        "Nauczycielka jakich mało. Tłumaczy bardzo skutecznie. Podobało mi się to, że na lekcjach zawsze realizowałyśmy określony plan,
         wszystko było zawsze poukładane, nie chaotyczne.
         W taki sposób szybko nadrobiłam braki. Po miesiącu współpracy mój wynik maturalny z niepewnego
         30% podskoczył do 60%. Wynik ostateczny: 56%.",

         'Adam', '8 czerwca 2017',
         'Kiedy myślałem, że niemożliwym byłoby uporanie się z moimi zaległościami i zdanie do 3. klasy liceum w przeciągu ok. 2 tygodni,
          te korypetycje pokazały, że wcale tak nie jest i można powiedzieć, uratowały mi rok nauki.
          Bardzo dobry kontakt, przyjemna atmosfera, nie ma co się rozpisywać- korepetycje warte każdej złotówki. Ratują życie!',

          'Magdalena', '29 stycznia 2017',
          'Szybki kontakt z korepetytorem i sprawne rozwiązanie problemu. Serdecznie polecam i dziękuję :)</p>
          <p style="color:white;">Szybki kontakt z korepetytorem i sprawne rozwiązanie problemu. Serdecznie polecam i dziękuję :)
          Szybki kontakt z korepetytorem i sprawne rozwiązanie problemu. Serdecznie polecam iaaaaaaaa dzięk',

          'Joanna', '12 stycznia 2017',
          'Polecam każdemu takiego nauczyciela. Bardzo dobry kontakt z uczniem. Trudne zagadnienia matematyczne umiejętnie przekazywane.
          To nie tylko nauka, ale także rozwijanie umiejętności matematycznych poprzez umiejętne motywowanie,
          dobieranie zadań tak, aby były wyzwaniem dla ucznia.<span style="color:white;">Szybki kontakt z korepet ytorem....... ........ .......</span>',

          'Ilona', '18 listopada 2017',
          'Polecam te korepetycje, moja córka korzysta z matematyki i jesteśmy bardzo zadowolone.
          <span style="color:white;">Szybki kontakt z korepet ytorem....... ........ .......</span>',

          'Dawid', '18 listopada 2017',
          'Jestem naprawdę bardzo wdzięczny za błyskawiczne "pogotowie korepetycyjne" przed sprawdzianem z matematyki. W ciągu dwóch
          godzin udało nam się przebrnąć przez wszystkie typy zadań z ostrosłupów.
          Wczoraj pisałem ten sprawdzian. Jednego zadania tylko nie zrobiłem. Dziękuję za fachową pomoc.',

          'Paweł', '22 października 2017',
          'Szybki kontakt ze szkołą, korepetycje znalezione jeszcze tego samego dnia. Postępy widać, po dwóch lekcjach pierwsza pała poprawiona
          a to już sukces :) Syn również zadowolony.'

    ];
    $var = 0;



     ?>

      <section class="col-sm-8 galeria-opinie" style="padding-left:1.5em;padding-right:1.5em; margin:0 auto;">
        <div class="bd-example">
          <div id="nawigacja_karuzeli" class="carousel slide" data-ride="carousel" data-interval="4500">

            <div class="carousel-inner" role="listbox">
              <!--początek karuzeli -->

              <!-- ITEEEEEEEEEEEEEEEEEM -->
                     <?php while($var < count($arr)): ?>
                       <?php if($var==0): ?>
                    <div class="carousel-item active">
                    <?php endif; ?>
                    <?php if($var>0): ?>
                      <div class="carousel-item">
                    <?php endif; ?>
                <img class="d-block img-fluid" data-src="" alt=""
                src="" data-holder-rendered="true">
                <div class="opinie"
                style="background-color:white; border: 2px solid rgba(0,0,0,0.5); border-radius:10px; padding:1.2em;">
                 <div class="container-fluid">
                   <div class="row">

                     <div class="col-md-4">
                       <p><i><?=$arr[$var]?></i></p>
                       <p><?=$arr[$var+1]?></p>
                       <span class="stars">5</span>
                       <p></p>
                     </div>

                     <div class="col-md-8 opinie-opis">
                       <p><?=$arr[$var+2]?></p>
                         <p></p>
                     </div>
                   </div>

                   <a href="https://www.e-korepetycje.net/excellenttutors" class="col-md-12 e-kor d-block">
                     <p style="">
                       <i>Opinie zaczęrpnięte z portalu:</i></p></a>
                 </div>
               </div>
              </div>
              <?php $var=$var+3;;
              endwhile; ?>

              <!-- koniec karuzeli -->
              </div>
              <a class="carousel-control-prev" data-target="#nawigacja_karuzeli" role="button" data-slide="prev"
              style="">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" data-target="#nawigacja_karuzeli" role="button" data-slide="next"
              style="">
                <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left:6px;"></span>
                <span class="sr-only">Next</span>
              </a>


              <!-- koniec galerii -->
           </div>

           <div id="carouselButtons" style="margin:0 auto;display:block;width:100%;">
               <button id="playButton" type="button" class="btn btn-default btn-xs">
                   <span style="color:grey;" >►</span>
                </button>
               <button id="pauseButton" type="button" class="btn btn-default btn-xs">
                   <span style="color:grey;">◼</span>
               </button>
           </div>
           <!-- koniec kontenera galerii -->
        </div>



      </section>
      <section class="col-sm-8" style="margin:0 auto;">
          <object type="image/svg+xml" data="images/svg.svg" style="width:100%; margin:0 auto; padding:2em; opacity:0.5;">
          </object>
      </section>
      <section class="col-sm-7 section_tekst_O_Nas" style="margin:0 auto;">
        <?php require_once 'teksty/zaufali-nam.html'; ?>
         <p>
           <a href="Misja-i-wizja.html" style="color:black;"><i style="color:#C06014;">...czytaj dalej "Misja i wizja" ↡</i></a>
         </p>

      </section>

    </section>

    <header>
      <?php require_once 'Footer.html'; ?>
    </header>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js">
    </script><script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- skrypty nawigacji galerii -->
    </script><script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <?php

    foreach (glob("js/*.js") as $js) {
      echo "<script src='$js'></script>\n";
    }

     ?>
     <script>new WOW().init();</script>

    <script type="text/javascript">

        $.fn.stars = function() {
          return $(this).each(function() {
              // Get the value
              var val = parseFloat($(this).html());
              // Make sure that the value is in 0 - 5 range, multiply to get width
              var size = Math.max(0, (Math.min(5, val))) * 16;
              // Create stars holder
              var $span = $('<span />').width(size);
              // Replace the numerical value with stars
              $(this).html($span);
          });
        }

      $(function() {
          $('span.stars').stars();

          $('#playButton').click(function () {
            $('#nawigacja_karuzeli').carousel('cycle');
        });
        $('#pauseButton').click(function () {
            $('#nawigacja_karuzeli').carousel('pause');
        });
      });
    </script>


  </body>

</html>
