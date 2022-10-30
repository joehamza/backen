<?php
$entree = json_decode(file_get_contents("essai/api/sortot.json"));
$entot = json_decode(file_get_contents("essai/api/sortie.json"));
$entreshif = json_decode(file_get_contents("essai/api/entit.json"));
$sortie = json_decode(file_get_contents("essai/api/entree.json"));
$sortietot = json_decode(file_get_contents("essai/api/entot.json"));
$stock = json_decode(file_get_contents("essai/api/sortit.json"));
ob_start();
?>
<center>
    <table border="1" style="border-collapse:collapse;font-size:25px">
    <?php foreach ($entot as $et) : ?>
    <tr><td colspan="7" align="center"><div style="font-size:30px;">*Les entrées le <?=$et->Date ?></div></td></tr>
    <?php endforeach; ?>
    <tr>
        <th>Navire</th>
        <th>NBR</th>
        <th>Fosse</th>
        <th>Débarqué</th>
        <th>T/Débarqué</th>
        <th>R/à bord</th>
        <th>Produit</th>
    </tr>
    <?php foreach ($entree as $ent) : ?>    
     <tr>
            <td align="center"><?= $ent->client ?></td>
            <td align="center"><?= $ent->nbr ?></td>
            <td align="center"><?= $ent->fos ?></td>
            <td align="center"><?= $ent->quantite ?></td>
            <td align="center"><?= $ent->deb ?></td>
            <td align="center"><?= $ent->rest ?></td>
            <td align="center"><?= $ent->produit ?></td></tr>
    <?php endforeach; ?>
       <?php foreach ($entot as $ent) : ?>
       <?php $qe4=number_format($ent->ooo4,2,',','');
        $fos4=number_format($ent->fos4,2,',','');?>
        <tr><th>Total</th><td align="center"><?= $ent->c4?></td><td align="center"><?= $fos4 ?></td><td align="center"><?= $qe4 ?></td><td align="center">/</td><td align="center">/</td><td align="center">/</td></tr>
        <?php endforeach; ?>
        <?php foreach ($entreshif as $es) : ?>
        <tr><th colspan="7" align="center"><em>Shift <?= $es->navire ?> / début : <?= $es->jour ?> <?= $es->shift ?> le <?= $es->date ?></em></th></tr>
        <tr><th colspan='2'>Matin</th><th colspan='2.5'>Soir</th><th colspan='3'>Nuit</th></tr>
        <?php endforeach; ?>
</table>
  //////////////////////////////////////////////////////////////////  
<table border="1" style="border-collapse:collapse;font-size:25px">
    <?php foreach ($sortietot as $sortot) : ?>
    <tr><td colspan="7" align="center"><div style="font-size:30px;">*Enlèvements du silo portuaire le <?=$sortot->Date ?></div></td></tr>
    <?php endforeach; ?>
    <tr>
        <th>Organisme</th>
        <th>Camion</th>
        <th>Quantité</th>
        <th>Wagon</th>
        <th>Quantité</th>
        <th>Produit</th>
        <th>Total</th>
    </tr>
    <?php foreach ($sortie as $sort) : ?>
    <?php 
    $qf=number_format($sort->q,2,',','');
    $wf=number_format($sort->wag,2,',','');
    $tot=number_format($sort->ooo,2,',','');?>
    
        <tr>
            <td align="center"><?= $sort->client ?></td>
            <td align="center"><?= $sort->c ?></td>
            <td align="center"><?= $qf ?></td>
            <td align="center"><?= $sort->wa ?></td>
            <td align="center"><?= $wf ?></td>
            <td align="center"><?= $sort->mode ?></td>
            <td align="center"><?= $tot ?></td></tr>
    <?php endforeach; ?>
    <?php foreach ($sortietot as $sortot) : ?>
    <?php 
    $qf2=number_format($sortot->q2,2,',','');
    $wf2=number_format($sortot->wag2,2,',','');
    $tot2=number_format($sortot->ooo2,2,',','');?>
    <th>Total</th><td align="center"><?= $sortot->c2 ?></td><td align="center"><?= $qf2 ?></td><td align="center"><?= $sortot->wa2 ?></td><td align="center"><?= $wf2 ?></td><td align="center">/</td><td align="center"><?= $tot2 ?></td>
    <?php endforeach; ?>
    </table>
    <br><br>
    <table border="1" width="50%" style="border-collapse:collapse;font-size:25px">
    <tr><td colspan="7" align="center"><div style="font-size:30px;">*Stock comptable</div></td></tr>
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
    </center>
    
 
