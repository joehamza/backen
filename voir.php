<?php

$formations = json_decode(file_get_contents("http://localhost/essai/index.php"));

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


