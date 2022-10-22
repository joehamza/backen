<?php
$request_method=define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
"://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

$data=array(

'id'=>$_POST['id'],
'code'=>$_POST['code'],
'produit'=>$_POST['produit'],
'cat'=>$_POST['cat']);
//}
$a[] = $data;
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
  echo $b=json_encode($a);

 file_put_contents('model.json', $b);
?>
