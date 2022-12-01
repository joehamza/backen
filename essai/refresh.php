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
$gbms = json_decode(file_get_contents("api2/sortit2.txt"));
$stock = json_decode(file_get_contents("api2/entit2.txt"));
 
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
	
	<?php foreach ($sortietot as $sott) : ?>
	<?php endforeach; ?>
	<?php if($sott->Date!=''){ ?>
<table border="1"  style="border-collapse:collapse;font-size:25px">
    <?php foreach ($sortietot as $sott) : ?>
	
    <tr><td colspan="7" align="center"><div style="font-size:30px;background-color:#333;color:#eee">*Enlèvements du silo hamadi krouma le <?=$sott->Date ?> ( <?=$heure?> )</div></td></tr>
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
    <?php foreach ($sortie as $srt) : ?>
    <?php 
    $qf2=number_format($srt->q,2,',','');
    $wf2=number_format($srt->wag,2,',','');
    $tot2=number_format($srt->ooo,2,',','');?>
    
        <tr>
            <td align="center"><?= $srt->client ?></td>
            <td align="center"><?= $srt->c ?></td>
            <td align="center"><?= $qf2 ?></td>
            <td align="center"><?= $srt->wa ?></td>
            <td align="center"><?= $wf2 ?></td>
            <td align="center"><?= $tot2 ?></td>
	    <td align="center"><?= $srt->mode ?></td></tr>
    <?php endforeach; ?>
    <?php foreach ($sortietot as $sortt) : ?>
    <?php 
    $qf3=number_format($sortt->q2,2,',','');
    $wf3=number_format($sortt->wag2,2,',','');
    $tot3=number_format($sortt->ooo2,2,',','');?>
    <th>Total général</th><th><?= $sortt->c2 ?></th><th><?= $qf3 ?></th><th><?= $sortt->wa2 ?></th><th><?= $wf3 ?></th><th><?= $tot3 ?></th><th>/</th></tr>
    <?php endforeach; ?>
    </table>
    <table border="1" width="80%" style="border-collapse:collapse;font-size:25px">
        <tr><td colspan="6" align="center"><div style="font-size:30px;background-color:#333;color:#eee">*Total sortie par produit</div></td></tr>
    <tr><th>Produit</th><th>Camion</th><th>Quantité</th><th>Wagon</th><th>Quantité</th><th>Total</th></tr>
    
    <?php foreach ($gbms as $gbs) : ?>
  <?php  $gbcq3=number_format($gbs->gbcq,2,',','');
     $gbwq3=number_format($gbs->gbwq,2,',','');
     $qqqt3=number_format($gbs->qqqt,2,',','');?>
    <div style="font-size:16px;">
        <tr><td align="center"> <?= $gbs->mode ?></td><td align="center"><?= $gbs->gbc ?></td><td align="center"> <?= $gbcq3 ?></td><td align="center"><?= $gbs->gbw ?></td><td align="center"><?= $gbwq3 ?></td><td align="center"><?= $qqqt3 ?></td></tr>
        <?php endforeach; ?>

        </table>
    <br><br>
	<?php } ?>
	
	<br><br>
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
