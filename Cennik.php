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

          .Cennik_kontener{
            padding: 1em !important;
            margin: 1em !important;
            font-size: smaller !important;

          }

          .cennik{
            padding: 1em !important;
            margin: 1em !important;
          }

          .cennik_opis{
            padding: 1em !important;
            margin: 1em !important;
            font-size: small !important;
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

  <style>
      @media all and (max-width : 700px){
        .header_cennik{
          margin-top: 1em !important;
        }
      }
  </style>

  <div id="Menu_small" style="margin:0;padding:0;height:2em;background-color:white;"><?php require_once 'Nawigacja_mob.html'; ?></div>

  <!-- Include html - Nawigacja -->
  <div id="Menu_big" ><?php require_once 'Nawigacja.html'; ?></div>

      <!-- sekcja po lewej -->
    <header class="header_cennik" style="margin-top:5em;">
    <style>
    .ceny{
        text-align:center;
        padding:1em;
        padding-bottom:0;
    }
    </style>
    <div class="row">
      <div class="col-md-12" style="background-color:#C06014; color:white; text-align:center;">
        <p><h3>CENNIK</h3></p>
      </div>

      <div class="col-md-6" style="padding:1em;">
        <div class="" style="background-color:lightgrey;">
          <p style=""><h3 class="ceny">Współpraca doraźna</h3></p>
          <hr>
          <div class="row">
            <div class="col-md-6" style="border-right:1px solid grey;">
              <p class="ceny">Korepetycje szkolne oraz Korepetycje maturalne</p>
            </div>
            <div class="col-md-6">
              <h4 class="ceny" style="color:#C06014;">60 zł / 60 minut</h4>
            </div>
          </div>
          <hr>

          <div class="row">
            <div class="col-md-6" style="border-right:1px solid grey;">
              <p class="ceny">Korepetycje akademickie</p>
            </div>
            <div class="col-md-6">
              <p class="ceny">Wycena indywidualna</p>
            </div>
          </div>
          <hr>
        </div>
      </div>

      <div class="col-md-6" style="padding:1em;">
        <div class="" style="background-color:lightgrey;">
          <p style=""><h3 class="ceny">Współpraca stała</h3></p>
          <hr>
          <div class="row">
            <div class="col-md-6" style="border-right:1px solid grey;">
              <p class="ceny">Korepetycje szkolne oraz Korepetycje maturalne</p>
            </div>
            <div class="col-md-6">
              <h4 class="ceny" style="color:#C06014;">50 zł / 60 minut</h4>
            </div>
          </div>
          <hr>

          <div class="row">
            <div class="col-md-6" style="border-right:1px solid grey;">
              <p class="ceny">Korepetycje akademickie</p>
            </div>
            <div class="col-md-6">
              <p class="ceny">Wycena indywidualna</p>
            </div>
          </div>
          <hr>
        </div>
      </div>

    </div>


    <style>
    .hover-btn-a:hover{
      border: 3px solid red;
    }
    </style>

    <a  href="Kontakt.php">
      <div class="hover-btn-a wow fadeInLeft" style="background-color:#C06014; color:white; padding: 1em; text-align:center;" data-wow-duration="5s">
        <h5>ZAPISZ SIĘ JUŻ DZIŚ !</h5>
      </div>
    </a>

    <style>
      .uwagi{
        font-size: 0.7em;
        padding: 2em;
      }
    </style>
    <hr>
    <div class="uwagi">
      <h6>Uwagi:</h6>
      <p>
        <ul>
          &nbsp;
          <li>W cenę zajęć wliczony jest dojazd korepetytora oraz wybrane materiały dydaktyczne.
          </li>

          <li>W przypadku utrudnionego dojazdu, cena zajęć może być wyższa.
          </li>

          <li>Płatności za zajęcia dokonuje się po zajęciach, przelewem na konto szkoły.
          </li>

          <li>Przez współpracę stałą rozumie się współpracę opartą na umowie między Uczniem i Szkołą, obejmującą okres przynajmniej czterech tygodni.

          <li>Wskazana cena jest ceną gwarantowaną od początku nauki do końca roku szkolnego.
          </li>

          <li>Wystawiamy rachunki i na życzenie Klienta przesyłamy je drogą elektroniczną.
          </li>

          <li>Podane ceny są wyłącznie informacją handlową i nie stanowią oferty w myśl art. 66, §1. Kodeksu Cywilnego
          </li>
      </p>
    </div>
    <hr>
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
