<?php
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
"://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));
//if(!empty($_POST["id"])){
//if(isset($_POST['id'],$_POST['id2'],$_POST['id4'],$_POST['id5'],$_POST['id6'],$_POST['id7'])){
$data=array(
'id'=>$_POST['id'],
'id2'=>$_POST['id2'],
'id4'=>$_POST['id4'],
'id5'=>$_POST['id5'],
'id6'=>$_POST['id6'],
'id7'=>$_POST['id7']
);

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
$b=json_encode($data);
  echo"$data";
 file_put_contents('entree.json', $data);
 //file_put_contents('entot.json', $data2);
 //file_put_contents('sortie.json', $data4);
 //file_put_contents('sortot.json', $data5);
 //file_put_contents('entit.json', $data6);
 //file_put_contents('sortit.json', $data7);

//}
 //$sortie = json_decode(file_get_contents("entree.json"));
  //foreach ($sortie as $sor) :
      ?>
 
