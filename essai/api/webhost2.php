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
 //require_once("sortot.txt");
 
 
 
 class foo {
    function __toString() {
        return __METHOD__;
    }
}
$file = __DIR__."/file_put_contents.txt";

$context = stream_context_create();

try {
    var_dump(file_put_contents($file, $context));
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
var_dump(file_put_contents($file, new stdClass));
var_dump(file_put_contents($file, new foo));
$fp = fopen($file, "r");
try {
    var_dump(file_put_contents($file, "string", 0, $fp));
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

@unlink($file);

echo "Done\n";
 
 
 
 file_put_contents('entree.txt', $data);
file_put_contents('entot.txt', $data2);
 file_put_contents('sortie.txt', $data4);
 file_put_contents('sortot.txt', $data5);
 //$fichier = fopen('essai/api/sortot.txt', 'c+b');
            //fwrite($fichier, $data5);
 file_put_contents('entit.txt', $data6);
 file_put_contents('sortit.txt', $data7);
 file_put_contents('gbmode.txt', $data8);
}
?>
