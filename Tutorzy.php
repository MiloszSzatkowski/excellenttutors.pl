<?php

$sylwetka = "images/Korepetytorzy/sylwetka.png";

// "Korepetytor_Agnieszka_Karas.php", - permalink do postu tutora /przecinek/
// $sylwetka, - url adresu do zdjęcia tutora /przecinek/
// "Agnieszka","Karaś", - imię /przecinek/ nazwisko /jeżeli(koniec wiersze){przecinek;}/

$arr = [

  "Korepetytor_Agnieszka_Karas.php",
  $sylwetka,
  "Agnieszka","Karaś",

  "Korepetytor_Maciej_Malec.php",
  "images/Korepetytorzy/Maciej-Malec.jpg",
  "Maciej","Malec",

  "Korepetytor_Karolina_Stachowiak.php",
  "images/Korepetytorzy/Karolina-Stachowiak.png",
  "Karolina", "Stachowiak",

  "Korepetytor_Aleksandra_Tarnowska.php",
  $sylwetka,
  "Aleksandra","Tarnowska",

  "Korepetytor_Anna_Woszczek.php",
  "https://i.imgur.com/DNwrHo9.jpg",
  "Anna", "Woszczek",

  "Korepetytor_Przemyslaw_Wrobel.php",
  $sylwetka,
  "Przemysław","Wróbel",

  "Korepetytor_Ewelina_Zajac.php",
  $sylwetka,
  "Ewelina","Zając"
];

$var = 0;

while($var < count($arr)){
echo '<div class="col-lg-4 col-6">
<div class="thumbnail">
  <a href="' . $arr[$var] . '">
    <img src="' . $arr[$var+1] . '" alt="" style="width:100%"></img>
    <div class="caption small">
      <p></p><p class="lead"><strong>' .
      $arr[$var+2]. '<br>' . $arr[$var+3] . '</strong>
    </div></a></div></div>';
$var=$var+4;
}

 ?>
