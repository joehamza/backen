<?php
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
"://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

 $sortie = json_decode(file_get_contents("essai/api/entree.json"));
  foreach ($sortie as $sor) :?>
<?= $sor->client?>
<?= $sor->c?>
<?= $sor->q?>
<?= $sor->wa?>
<?= $sor->ooo?>
<?= $sor->mode?>
<?php  endforeach; ?>
 
