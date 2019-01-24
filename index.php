<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Už skoro :|</title>
  </head> 
  <body>
<table>
  <?php

  for ($i=0; $i < 100 ; $i++) {
   ?><tr><?php
      for ($j=0; $j < 100 ; $j++) {
        ?><td><?php
          $letters = rand(0,1);
          if ($letters == 0) {
            echo "O";
          }
        else {
          echo "X";
        }

        ?></td><?php
        }
    ?></tr><?php
  }
?>
  </table>
<?php

  for ($s=0; $s < 100; $s++) {
  $iRand=rand(0,99);
  $jRand=rand(0,99);
}

 ?>
  </body>
  </html>
