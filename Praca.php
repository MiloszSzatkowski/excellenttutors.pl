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

          .kontener_Praca{
            padding: 1em !important;
            margin: 1em !important;
            border: 0;
            font-size: smaller !important;
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
    <header class="kontener_Praca">
      <div class="row">

        <section class="col-md-6" style="">
            <img src="images/Praca.jpg" alt="" style="width:100%;">
            <p></p>
            <hr>
        </section>

        <section class="col-md-12 col-offset clearfix">

          <h5> Praca </h5>
          <hr>

        <p>
        Systematycznie rekrutujemy i szkolimy najlepszych studentów oraz absolwentów prestiżowych kierunków,
        <br>doświadczonych w pracy z młodzieżą, na następujące stanowiska:
        </p>

        <ul>
          <li>Korepetytor matematyki</li>
          <li>Korepetytor fizyki</li>
          <li>Korepetytor chemii</li>
          <li>Korepetytor biologii</li>
        </ul>

          <p> Bezwzględnie wymagane są: </p>

          <ul>
          <li>Pasja do nauczanego przedmiotu</li>
          <li>Doświadczenie w udzielaniu prywatnych lekcji</li>
          <li>Wysoki poziom kultury osobistej</li>
          <li>Pełne zaangażowanie w lekcje i otwartość na potrzeby Ucznia</li>
          <li>Punktualność, odpowiedzialność, sumienne wywiązywanie się z powierzonych obowiązków</li>
          <li>Akceptacja Regulaminu Współpracy</li>
          </ul>

        <p>Mile widziane są dodatkowo:</p>

      <ul>
        <li>Samochód i prawo jazdy kat. B</li>
        <li>Referencje dotychczasowych uczniów</li>
        <li>Doświadczenie w branży edukacyjnej (inne niż wymagane)</li>
      </ul>

      <p>Oferujemy:</p>
      <ul>
        <li>Legalne zatrudnienie na umowę-zlecenie</li>
        <li>Atrakcyjne wynagrodzenie wypłacane w systemie tygodniowym</li>
        <li>Elastyczne godziny pracy</li>
        <li>Przejrzyste warunki współpracy</li>
        <li>Nasz czas oraz środki poświęcone na reklamę i marketing</li>
        <li>Możliwość rozwoju i zdobycia udokumentowanego doświadczenia</li>
        <li>Opiekę metodyczną</li>
        <li>Dużą samodzielność pracy</li>
      </ul>

      <p>Do obowiązków Nauczyciela należy:</p>
      <ul>
        <li>Udzielanie lekcji na godziny z dojazdem do domu Ucznia na terenie Krakowa</li>
        <li>Dbanie o pozytywny wizerunek szkoły Excellent Tutors</li>
        <li>Składanie dziennych sprawozdań z wykonanej pracy</li>
        <li>Sprawne odpowiadanie na propozycje zleceń</li>
        <li>Przestrzeganie Regulaminu Współpracy</li>
      </ul>

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
