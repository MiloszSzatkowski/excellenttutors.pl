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
            <h3>Karolina Stachowiak</h3>

            <hr>
            <div>
              <p></p>
              <p>Przedmioty, których naucza korepetytor: <a href="Przedmioty.php" class="d-block"><i>biologia</i></a></p>

            </div>
            <hr>
            <p>Pani Karolina to uzdolniona młoda osoba. Od dziecka z zafascynowaniem przeglądała atlasy anatomiczne. Według niej biologia jest nauką najkompletniej opisującą otaczający świat. Studia licencjackie w tej dziedzinie ukończyła na Uniwersytecie Przyrodniczym we Wrocławiu. Od roku studiuje na Uniwersytecie Jagiellońskim i współpracuje z Jagiellońskim Centrum Rozwoju Leków. Uczestniczyła także w badaniach terenowych organizowanych przez Uniwersytet w Namibii. Interesuje się teorią ewolucji oraz roślinami leczniczymi.</p>

              <p>Nie brakuje jej doświadczenia pedagogicznego - w ramach swoich studiów pani Karolina realizuje sekcję pedagogiczną i odbywa praktyki nauczycielskie w gimnazjum. Prowadzone przez nią zajęcia porywają uczniów - z wielkim zainteresowaniem słuchają ciekawostek, których próżno szukać w podręcznikach. Prowadząc lekcje, nasza tutorka stawia głównie na wiedzę praktyczną, najbardziej przydatną w życiu codziennym, oraz zachęca uczniów do aktywnej dyskusji. </p>

              <p>Jak twierdzi pani Karolina, biologię można zrozumieć, podobnie jak fizykę czy chemię. Posiada unikatowy sposób przekazywania wiedzy, wsparty obszernymi, autorskimi materiałami. Jest osobą przyjazną i otwartą.</p>

            </div>

          <div class="col-lg-4">
            <div style="padding:3em;">
              <a href="#">
                <img src="images/Korepetytorzy/Karolina-Stachowiak.png" class="kor-border" alt="" style="width:100%; border-radius:5px; ">
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
