<?php
if(isset($_POST['id'],$_POST['id2'],$_POST['id4'],$_POST['id5'],$_POST['id7'],$_POST['id8'],$_POST['id9'])){

if($_POST['id']!='' and $_POST['id2']!='' and $_POST['id4']!='' and $_POST['id5']!='' and $_POST['id7']!='' and $_POST['id8']!='' and $_POST['id9']!=''){
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
$data7=array(
'id7'=>$_POST['id7'],
);
$data8=array(
'id8'=>$_POST['id8'],
);
 
$data9=array(
'id9'=>$_POST['id9'],
);
 
}
//$rt= array();
//$rt[]=$data;
//$b=json_encode($rt);
//header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json");
 
//$fichier = fopen('sortot.txt', 'w');
            //fwrite($fichier, 'Un premier texte dans mon fichier'); 
 
 file_put_contents('entree2.txt', $data);
file_put_contents('entot2.txt', $data2);
 file_put_contents('sortie2.txt', $data4);
 file_put_contents('sortot2.txt', $data5);
 //$fichier = fopen('essai/api/sortot.txt', 'c+b');
            //fwrite($fichier, $data5);
 file_put_contents('entit2.txt', $data7);
 file_put_contents('sortit2.txt', $data8);
 file_put_contents('gbmode2.txt', $data9);
}
?>
