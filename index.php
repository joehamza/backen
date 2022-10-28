<?php
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
"://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

 $sortie = json_decode(file_get_contents("essai/api/webhost2.php"));
  foreach ($sortie as $sor) :?>
<=? $sor->id?>
<=? $sor->id2?>
<=? $sor->id4?>
<=? $sor->id5?>
<=? $sor->id6?>
<=? $sor->id7?>
<?php  endforeach; ?>
 
