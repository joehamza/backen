<?php
$entree = json_decode(file_get_contents("essai/api/sortot.json"));
$entot = json_decode(file_get_contents("essai/api/sortie.json"));
$entreshif = json_decode(file_get_contents("essai/api/entit.json"));
$sortie = json_decode(file_get_contents("essai/api/entree.json"));
$sortietot = json_decode(file_get_contents("essai/api/entot.json"));
$stock = json_decode(file_get_contents("essai/api/sortit.json"));
$gbmode = json_decode(file_get_contents("essai/api/gbmode.json"));
date_default_timezone_set('Africa/Algiers');
    $heure =date('H:i');
?>
