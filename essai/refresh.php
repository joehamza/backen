<?php
//session_start();
//if($_SESSION["auto"]!="oui"){
//header("location:index2.php");
//exit();	
//}
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<div id="message">
<?php
$entree = json_decode(file_get_contents("api2/sortie2.txt"));
$entot = json_decode(file_get_contents("api2/sortot2.txt"));
$gbme = json_decode(file_get_contents("api2/gbmode2.txt"));
$sortie = json_decode(file_get_contents("api2/entree2.txt"));
$sortietot = json_decode(file_get_contents("api2/entot2.txt"));
$stock = json_decode(file_get_contents("api2/entit2.txt"));
$gbmode = json_decode(file_get_contents("api2/gbmode2.txt"));
 
date_default_timezone_set('Africa/Algiers');
    $heure =date('H:i:s');
?>
<center>
	<br><br>
	<?php foreach ($entot as $entt) : ?>
	<?php endforeach; ?>
	<?php if($entt->Date!=''){ ?>
<table border="1"  style="border-collapse:collapse;font-size:25px">
    <?php foreach ($entot as $entt) : ?>
	
    <tr><td colspan="7" align="center"><div style="font-size:30px;background-color:#333;color:#eee">*Les entrées le <?=$entt->Date ?> ( <?=$heure?> )</div></td></tr>
    <?php endforeach; ?>
    <tr>
	    <th>Organisme</th>
        <th>Camion</th>
        <th>Quantité</th>
        <th>Wagon</th>
        <th>Quantité</th>
        <th>Total</th>
	    <th>Produit</th>
    </tr>
    <?php foreach ($entree as $en) : ?>
    <?php 
    $qf=number_format($en->q4,2,',','');
    $wf=number_format($en->wag4,2,',','');
    $tot=number_format($en->ooo4,2,',','');?>
    
        <tr>
            <td align="center"><?= $en->client ?></td>
            <td align="center"><?= $en->c4 ?></td>
            <td align="center"><?= $qf ?></td>
            <td align="center"><?= $en->wa4 ?></td>
            <td align="center"><?= $wf ?></td>
            <td align="center"><?= $tot ?></td>
	    <td align="center"><?= $en->mode ?></td></tr>
    <?php endforeach; ?>
    <?php foreach ($entot as $ent) : ?>
    <?php 
    $qf2=number_format($ent->q5,2,',','');
    $wf2=number_format($ent->wag5,2,',','');
    $tot2=number_format($ent->ooo5,2,',','');?>
    <th>Total général</th><th><?= $ent->c5 ?></th><th><?= $qf2 ?></th><th><?= $ent->wa5 ?></th><th><?= $wf2 ?></th><th><?= $tot2 ?></th><th>/</th></tr>
    <?php endforeach; ?>
    </table>
    <table border="1" width="80%" style="border-collapse:collapse;font-size:25px">
        <tr><td colspan="6" align="center"><div style="font-size:30px;background-color:#333;color:#eee">*Total entrée par produit</div></td></tr>
    <tr><th>Produit</th><th>Camion</th><th>Quantité</th><th>Wagon</th><th>Quantité</th><th>Total</th></tr>
    
    <?php foreach ($gbme as $gbe) : ?>
  <?php  $gbcq2=number_format($gbe->gbcq9,2,',','');
     $gbwq2=number_format($gbe->gbwq9,2,',','');
     $qqqt2=number_format($gbe->qqqt9,2,',','');?>
    <div style="font-size:16px;">
        <tr><td align="center"> <?= $gbe->mode ?></td><td align="center"><?= $gbe->gbc9 ?></td><td align="center"> <?= $gbcq2 ?></td><td align="center"><?= $gbe->gbw9 ?></td><td align="center"><?= $gbwq2 ?></td><td align="center"><?= $qqqt2 ?></td></tr>
        <?php endforeach; ?>

        </table>
    <br><br>
	<?php } ?>
	<?php foreach ($stock as $st) : ?>
	<?php endforeach; ?>
	<?php if($st->stock!=''){ ?>
    <table border="1" width="60%" style="border-collapse:collapse;font-size:25px">
    <tr><td colspan="7" align="center"><div style="font-size:30px;background-color:#333;color:#eee">*Stock comptable</div></td></tr>
    <tr>
        <th>Produit</th>
        <th>Stock</th>
    </tr>
    <?php foreach ($stock as $st) : ?>

        <tr>
            <td align="center"><?= $st->produit ?></td>
            <td align="center"><?= $st->stock ?></td>
    <?php endforeach; ?>
    </table>
	    <br><br>
	    <?php } ?>
	   </div>
    </center>
