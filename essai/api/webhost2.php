<?php
if(isset($_POST['id'],$_POST['id2'],$_POST['id4'],$_POST['id5'],$_POST['id6'],$_POST['id7'])){

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
 
//}
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
 function get_data() {
        $name = $_POST['name'];
        $file_name='StudentsData'. '.json';
   
        if(file_exists("$file_name")) { 
            $current_data=file_get_contents("$file_name");
            $array_data=json_decode($current_data, true);
                               
            $extra=array(
                'id8' => $_POST['id8'],
                
            );
            $array_data[]=$extra;
            echo "file exist<br/>";
            return json_encode($array_data);
        }
        else {
            $datae=array();
            $datae[]=array(
                'id8' => $_POST['id8'],
                
            );
            echo "file not exist<br/>";
            return json_encode($datae);   
        }
    }
  
    $file_name='entree'. '.json';
      
    if(file_put_contents("$file_name", get_data())) {
        echo 'success';
    }                
    else {
        echo 'There is some error';                
    }

       

?>
