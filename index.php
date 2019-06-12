<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $testo = "La Lamborghini Aventador è un'autovettura sportiva costruita dalla casa automobilistica italiana Lamborghini. È stata presentata nel marzo del 2011 al salone dell'automobile di Ginevra.";
      $array_testo = explode(' ', $testo);
      $parola_errata = $_GET["badword"];
      $sostituzione = str_replace($parola_errata,'xxx', $array_testo);
      $testo_modificato =  join(' ',$sostituzione);
      var_dump($testo_modificato);
    ?>
  </body>
</html>
