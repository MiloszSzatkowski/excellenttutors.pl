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


    @media all and (max-width : 1000px){
          [class*="col-"] {
            width: 100%;
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
    }

  </style>

  <div id="Menu_small" style="margin:0;padding:0;height:2em;background-color:white;"><?php require_once 'Nawigacja_mob.html'; ?></div>

  <!-- Include html - Nawigacja -->
  <div id="Menu_big" ><?php require_once 'Nawigacja.html'; ?></div>

      <!-- sekcja po lewej -->
    <header class="MainHead">
      <div class="row">

      <section class="podstrona_tekst_przedmiot col-lg-12 col-md-12">
        <div class="row">
          <div class="col-lg-8">
            <h3>Maciej Malec</h3>

            <hr>
            <div>
              <p></p>
              <p>Przedmioty, których naucza korepetytor: <a href="Przedmioty.php" class="d-block"><i>matematyka</i></a>
              <a href="Przedmioty.php" class="d-block"><i>fizyka</i></a></p>

            </div>
            <hr>
            <p>Pan Maciej jest absolwentem Uniwersytetu Pedagogicznego w Krakowie oraz Eiran High School w Helsinkach. Maturę zdawał w Cambridge.
              Od dwóch lat współpracuje z nastolatkami - licealistami i gimnazjalistami, których przygotowuje do sprawdzianów i egzaminów.
              Jest niezastąpiony w przypadku uczniów ze sporymi brakami z poprzednich klas. Poprzez odpowiednio dostosowane tempo prowadzenia
               zajęć i umiejętne motywowanie ucznia, potrafi dotrzeć niemalże do każdego młodego człowieka i pokazać mu, że przedmioty ścisłe
               nie tylko nie muszą sprawiać problemów, ale przede wszystkim mogą być ciekawe i pasjonujące. </p>

              <p>Programuje w czterech językach, mówi po japońsku oraz interesuje się psychologią. </p>

            </div>

          <div class="col-lg-4">
            <div style="padding:3em;">
              <a href="#">
                <img src="images/Korepetytorzy/Maciej-Malec.jpg" class="kor-border" alt="" style="width:100%; border-radius:5px;">
                <div class="caption small">
                  <p></p>
                  <p></p>
                </div>
              </a>
            </div>
          </div>
        </div>



     </section>

    </div>
    </header>

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

  </body>

</html>
