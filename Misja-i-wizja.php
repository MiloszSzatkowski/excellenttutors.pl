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
        .section_tekst_O_Nas{
        text-justify:none;
        }
        #Misja_i_wizja{
          padding:1em;
          font-size: x-small;
          text-align: left;

        }

        .quote-card{
          padding:1em;
          padding-left:2.5em;
        }

        #Misja_i_wizja_zdj_kont{
          padding: 2em !important;
        }

        #Misja_i_wizja_zdj p{
          text-align: center;
          font-size: medium;
          left:4% !important;
          top:45% !important;
          background-color: rgba(0, 0, 0, 0.7);
        }

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

    <section id="Misja_i_wizja" class="row o_Nas">
      <section class="col-md-7 section_tekst_O_Nas" style="padding-top:0.5em;">
        <h5>MISJA</h5>

        <blockquote class="quote-card" >
              <p style="font-size:15px;">
                Naszą misją jest całkowicie zindywidualizowana edukacja, dopasowana do osobistych potrzeb każdego ucznia.
            Kładziemy duży nacisk na dobrą organizację pracy, aby optymalnym nakładem energii osiągnąć
            maksymalne rezultaty w jak najkrótszym czasie. Pomagamy nie tylko pokonać stres,
            uwierzyć w siebie i poprawić swoje wyniki, ale także odkrywamy w naszych
            Podopiecznych ich ukryte talenty i zarażamy swoją pasją.
              </p>

              <cite style="font-size:10px;color:#C06014;">
                Excellent Tutors tm.
              </cite>
            </blockquote>

        <h5>WIZJA</h5>
        <p><ul>
          <li>Chcemy kształcić ambitnych Uczniów i pomagać im spełniać marzenia -
            począwszy od poprawy ocen w szkole po otwarcie drzwi na najlepsze uczelnie.</li>
            <li>Chcemy być liderem na rynku korepetycji w Krakowie oraz z biegiem czasu
            otwierać coraz więcej oddziałów w całej Polsce.</li>
            <li>Chcemy tworzyć przyjazne młodym osobom miejsce pracy, oferujące uczciwe i przejrzyste
            warunki zatrudnienia, dające możliwość dynamicznego rozwoju oraz poczucie misji i satysfakcji.</li>
            <li>Chcemy być prężnie działającą, rozrastającą się, nowoczesną marką.</li>
            <li>Chcemy wytyczać nowe standardy edukacji, opartej na partnerskim, pełnym życzliwości i wsparcia,
              indywidualnym podejściu do każdego Ucznia. </li>
        </ul></p>

      </section>

      <section id="Misja_i_wizja_zdj_kont" class="col-md-5" style="padding-left:1em;padding-right:1em;">
        <div id="Misja_i_wizja_zdj" >
          <p>
            <a href="Zaufali-Nam.html#Czemu_warto_nam_zaufac" style="color:white;">...czytaj dalej "Dlaczego warto nam zaufać" ↡</a>
          </p>
        </div>
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

  </body>

</html>
