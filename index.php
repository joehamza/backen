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

$formations = json_decode(file_get_contents($b));

?>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Code produit</td>
        <td>Produit</td>
		<td>Categorie</td>
    </tr>
    <?php foreach ($formations as $formation) : ?>
        <tr>
            
            <td><?= $formation->id ?></td>
            <td><?= $formation->code ?></td>
            <td><?= $formation->produit ?></td>
			<td><?= $formation->cat ?></td>

        </tr>
    <?php endforeach; ?>
</table>



?>
	
