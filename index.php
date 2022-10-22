<?php
$request_method=define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
"://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));



mysql_connect('localhost','root','');
    mysql_select_db('oaic');
	$row=mysql_query("select * from model ");
	$a=mysql_fetch_array($row);
	
//$data=array(

//'id'=>$b['id'],
//'code'=>$b['code'],
//'produit'=>$b['produit'],
//'cat'=>$b['cat']);
//}
$aa[] = $a;
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
  echo $b=json_encode($aa);

 file_put_contents('model.json', $b);


?>
