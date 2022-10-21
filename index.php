<?php
$request_method=define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
"://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

//function add(){
$url = 'http://localhost/essai/json.php';
//mysql_connect("localhost","root","");
//mysql_select_db("oaic");
//$reg=mysql_query("SELECT * from model");
//while ( $a=mysql_fetch_array($reg)){
//function add(){
$data=array(

'id'=>$_POST['id'],
'code'=>$_POST['code'],
'produit'=>$_POST['produit'],
'cat'=>$_POST['cat']);
//}
$a[] = $data;
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
  echo json_encode($a);
$options = array(
		'http' => array(
			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			'method'  => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	if ($result === FALSE) { /* Handle error */ }

//}


?>
	