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
    <header id="MainHead" class="MainHead container">
      <div class="row" style="">
        <div class="col-md-6" style="background-color:white; box-shadow: 3px 3px 3px rgba(0,0,0,0.3);padding:1.5em;">
          <h5>NASZA KADRA</h5>

          <hr>

          <p style="font-size:0.97em;">
            Rekrutacja osób ubiegających się o stanowisko Tutora w Excellent Tutors jest bardzo zaostrzona -
            na rozmowę kwalifikacyjną zapraszamy zaledwie około 10% aplikujących do nas osób.
            Bezwzględnym wymogiem jest ukończenie studiów stopnia co najmniej pierwszego na
            kierunku ściśle związanym z nauczanym przedmiotem oraz doświadczenie w udzielaniu prywatnych lekcji.
            Skrupulatnie sprawdzamy referencje, dopytujemy o szczegóły praktyk zawodowych oraz wnikliwie słuchamy każdego Kandydata,
            by ostatecznie wybrać osoby najbardziej oryginalne, odznaczające się nieszablonowym podejściem do wymagającej pracy nauczyciela
            oraz posiadające ponadprzeciętne zdolności interpersonalne.
          </p>

          <p style="font-size:0.97em;">
            Staramy się, by kompletowana przez nas Kadra była możliwie jak najbardziej różnorodna -
            nie brakuje wśród nas osób młodych - aktywnych i przedsiębiorczych absolwentów najlepszych
            uczelni jak również wybitnych pedagogów z wieloletnim doświadczeniem. Jesteśmy przekonani, że każdy z naszych Tutorów świetnie poradzi sobie z każdym powierzonym mu zadaniem.
          </p>

          <p style="font-size:0.97em;">
            W przeciwieństwie do innych działających na rynku szkół korepetycji oraz szkół językowych, nasza oferta jest całkowicie transparentna - prezentujemy sylwetki wszystkich pracujących dla nas Tutorów, abyście Państwo sami mogli przekonać się, że są to osoby starannie wyselekcjonowane i nieprzeciętne.
          </p>
          <style>.hover-btn-a:hover{border: 5px solid red;}</style>

          <div class="col-md-12">
            <a  href="Kontakt.php">
              <div class="hover-btn-a wow fadeIn" style="background-color:#C06014; color:white; padding: 1em; text-align:center;" data-wow-duration="8s">
                <h3>ZAPISZ SIĘ JUŻ DZIŚ !</h3>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-6 row">

          <h5 class="col-md-12 text-center">TUTORZY:<hr ></h5>

          <?php require_once 'Tutorzy.php'; ?>
        </div>



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
