<?php
if(isset($_POST['id'],$_POST['id2'],$_POST['id4'],$_POST['id5'],$_POST['id6'],$_POST['id7'])){

if($_POST['id']!='' and $_POST['id2']!='' and $_POST['id4']!='' and $_POST['id5']!='' and $_POST['id6']!='' and $_POST['id7']!=''){
$data=array(
'id'=>$_POST['id'],
);
$data2=array(
'id2'=>$_POST['id2'],
);
$data4=array(
'id4'=>$_POST['id4'],
);
$data5=array(
'id5'=>$_POST['id5'],
);
$data6=array(
'id6'=>$_POST['id6'],
);
$data7=array(
'id7'=>$_POST['id7'],
);
 
$data8=array(
'id8'=>$_POST['id8'],
);
 
}
//$rt= array();
//$rt[]=$data;
//$b=json_encode($rt);
//header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json");
 // echo"$b";

 file_put_contents('entree.json', $data);
file_put_contents('entot.json', $data2);
 file_put_contents('sortie.json', $data4);
 file_put_contents('sortot.json', $data5);
 file_put_contents('entit.json', $data6);
 file_put_contents('sortit.json', $data7);
 file_put_contents('gbmode.json', $data8);
}
?>
