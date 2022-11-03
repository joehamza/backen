<title>Complex silo portuaire</title>
<link rel="icon" href="ecran 3D.ico" >
<style>
body{
background-color:#dddd99;
}
    table{background-color:#ddd;}
	.h{align-items:center;justify-content:center;display:flex;}
	th,td{padding:5px;}
    .aaa{
position:absolute;
background-color:#9999FF;
width:0px;
height:0px;
margin:auto;
overflow:hidden;
top:7px;

align-items:center;justify-content:center;display:flex;
transition:transform 0.5s 0.7s ,width 1.3s 0.7s,height 0.5s 0.2s,border-radius 0.5s 1.3s; }
/*transition:transform 0.5s 0.7s ,width 0.5s 0.4s,height 0.5s 0.2s;}*/

.txt{
color:#fff;
font-size:35px;
transform:translateX(1000px);}
.text2{
transition:transform 0.5s 1.5s;
transform:translateX(0);
}
</style>
<div class="h">
<div class="aaa"><em class="txt">UCA DE SKIKDA</em></div></div></div>
<img src="11.jpg"  style="width: 60px; height: 85px; position:absolute; left:100px;top:7px;" />
<br><br><br><br><br>
<?php
echo"<div id='message'>";
$entree = json_decode(file_get_contents("essai/api/sortot.txt"));
$entot = json_decode(file_get_contents("essai/api/sortie.txt"));
$entreshif = json_decode(file_get_contents("essai/api/entit.txt"));
$sortie = json_decode(file_get_contents("essai/api/entree.txt"));
$sortietot = json_decode(file_get_contents("essai/api/entot.txt"));
$stock = json_decode(file_get_contents("essai/api/sortit.txt"));
$gbmode = json_decode(file_get_contents("essai/api/gbmode.txt"));
 
date_default_timezone_set('Africa/Algiers');
    $heure =date('H:i');
ob_start();
?>
<center>
	<?php foreach ($entot as $ett) : ?>
	<?php endforeach; ?>
	<?php if($ett->Date!=''){ ?>
    <table border="1"  style="border-collapse:collapse;font-size:25px">
    <?php foreach ($entot as $et) : ?>
     
    <tr><td colspan="6" align="center"><div style="font-size:30px;background-color:#333;color:#eee;">*Les entrées le <?=$et->Date ?> à <?=$heure?></div></td></tr>
    <?php endforeach; ?>
       
    <tr>
        <th>Navire</th>
        <th>NBR</th>
        <th>Fosse</th>
        <th>Débarqué</th>
        <th>T/Débarqué</th>
        <th>R/à bord</th>
        
    </tr>
    <?php foreach ($entree as $ent) : ?>    
     <tr>
            <td align="center"><?= $ent->client ?></td>
            <td align="center"><?= $ent->nbr ?></td>
            <td align="center"><?= $ent->fos ?></td>
            <td align="center"><?= $ent->quantite ?></td>
            <td align="center"><?= $ent->deb ?></td>
         <td align="center"><?= $ent->rest ?></td></tr>
    <?php endforeach; ?>
       <?php foreach ($entot as $ent) : ?>
       <?php $qe4=number_format($ent->ooo4,2,',','');
        $fos4=number_format($ent->fos4,2,',','');?>
        <tr><th>Total</th><th><?= $ent->c4?></th><th><?= $fos4 ?></th><th><?= $qe4 ?></th><th>/</th><th>/</th></tr>
        <?php endforeach; ?>
        <?php foreach ($entreshif as $es) : ?>
        <tr><th colspan="6" align="center"><em>Shift <?= $es->navire ?> / début : <?= $es->jour ?> <?= $es->shift ?> le <?= $es->date ?>  <br>(<?= $es->produit ?>)</em></th></tr>
        <tr><th colspan='2'>Matin</th><th colspan='2'>Soir</th><th colspan='2'>Nuit</th></tr>
        <tr><th>Quantité</th><th>Camions</th><th>Quantité</th><th>Camions</th><th>Quantité</th><th>Camions</th></tr>
<tr><td align='center'><?= $es->qm ?></td><td align='center'><?= $es->nm ?></td><td align='center'><?= $es->qs ?></td><td align='center'><?= $es->ns ?></td><td align='center'><?= $es->qn ?></td><td align='center'><?= $es->nn ?></td></tr>
        <tr><td colspan='6' align='center'>Nombre de séjour après le début de débarquement : <?= $es->apre ?><br>Nombre de jours de débarquement : <?= $es->njour ?><br>Nombre de jours neant : <?= $es->neant ?></td></tr>
        <?php endforeach; ?>
</table>
  <br><br>
	<?php } ?>
	<?php foreach ($sortietot as $sortot) : ?>
	<?php endforeach; ?>
	<?php if($sortot->Date!=''){ ?>
<table border="1"  style="border-collapse:collapse;font-size:25px">
    <?php foreach ($sortietot as $sortot) : ?>
	
    <tr><td colspan="7" align="center"><div style="font-size:30px;background-color:#333;color:#eee"">*Enlèvements du silo portuaire le <?=$sortot->Date ?> à <?=$heure?></div></td></tr>
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
            <td align="center"><?= $tot ?></td>
	    <td align="center"><?= $sort->mode ?></td></tr>
    <?php endforeach; ?>
    <?php foreach ($sortietot as $sortot) : ?>
    <?php 
    $qf2=number_format($sortot->q2,2,',','');
    $wf2=number_format($sortot->wag2,2,',','');
    $tot2=number_format($sortot->ooo2,2,',','');?>
    <th>Total</th><th><?= $sortot->c2 ?></th><th><?= $qf2 ?></th><th><?= $sortot->wa2 ?></th><th><?= $wf2 ?></th><th><?= $tot2 ?></th><th>/</th></tr>
    <?php endforeach; ?>
    </table>
    <table border="1" style="border-collapse:collapse;font-size:25px">
        <tr><td colspan="5" align="center"><div style="font-size:30px;background-color:#333;color:#eee"">*Total par produit</div></td></tr>
    <tr><th>Produit</th><th>Camion</th><th>Quantité</th><th>Wagon</th><th>Quantité</th></tr>
    
    <?php foreach ($gbmode as $gbm) : ?>
  <?php  $gbcq2=number_format($gbm->gbcq,2,',','');
     $gbwq2=number_format($gbm->gbwq,2,',','');?>
    <div style="font-size:16px;">
        <tr><td align="center"> <?= $gbm->mode ?></td><td align="center"><?= $gbm->gbc ?></td><td align="center"> <?= $gbcq2 ?></td><td align="center"><?= $gbm->gbw ?></td><td align="center"><?= $gbwq2 ?></td></tr>
        <?php endforeach; ?>

        </table>
    <br><br>
	<?php } ?>
	<?php foreach ($stock as $st) : ?>
	<?php endforeach; ?>
	<?php if($st->stock!=''){ ?>
    <table border="1" width="50%" style="border-collapse:collapse;font-size:25px">
    <tr><td colspan="7" align="center"><div style="font-size:30px;background-color:#333;color:#eee"">*Stock comptable</div></td></tr>
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
	    echo"</div>";
    </center>
	    <script src="jquery.js"></script>
	    <script>
setInterval('loadm()',1000);
function loadm(){
$(window).load('index.php');}
</script>
    <script>
var aa=document.querySelector(".aaa");
var tx=document.querySelector(".txt");
window.addEventListener("contextmenu",f);
function f(e){
e.preventDefault();
}
window.addEventListener('load',f2);
function f2(){
    aa.style.transform="rotate(720deg)";
    aa.style.width="300px";
	aa.style.height="80px";
	aa.style.borderRadius="100px";
tx.classList.add("text2");
setTimeout(()=>{
	aa.style.transform="rotate(0deg)";
         aa.style.width="0px";
         aa.style.height="0px";
		aa.style.borderRadius="0px";	 
tx.classList.remove("text2");
    }, 5500);
    
	setTimeout("f2()",10500);
}
</script>
	   
