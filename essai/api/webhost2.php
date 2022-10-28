<?php
//if(isset($_POST['id'],$_POST['id2'],$_POST['id4'],$_POST['id5'],$_POST['id6'],$_POST['id7'])){
$data=array(
'id'=>$_POST['id'],
  'id2'=>$_POST['id2'],
'id4'=>$_POST['id4'],
'id5'=>$_POST['id5'],
'id6'=>$_POST['id6'],
'id7'=>$_POST['id7']
);
//}
$rt= array();
$rt[]=$data;
$b=json_encode($rt);
//header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json");
  echo"$b";

 file_put_contents('entree.json', $b);

?>
