
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


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                   
    function get_data() {
        $name = $_POST['name'];
        $file_name =file_get_contents("https://fichierjson.000webhostapp.com/model.json");
        //$file_name='model'. '.json';
   
        if(file_exists("$file_name")) { 
            $current_data=file_get_contents("$file_name");
            $array_data=json_decode($current_data, true);
                               
            $extra=array(
                'id' => $_POST['id'],
                'code' => $_POST['code'],
                'produit' => $_POST['produit'],
				'cat' => $_POST['cat'],
            );
            $array_data[]=$extra;
            echo "file exist<br/>";
            return json_encode($array_data);
        }
        else {
            $datae=array();
            $datae[]=array(
                'id' => $_POST['id'],
                'code' => $_POST['code'],
                'produit' => $_POST['produit'],
				'cat' => $_POST['cat'],
            );
            echo "file not exist<br/>";
            return json_encode($datae);   
        }
    }
  
    $file_name='model'. '.json';
    if(file_put_contents("$file_name", get_data())) {

        echo 'success';
    }                
    else {
        echo 'There is some error';                
    }
}
?>
	
