
<ul class="quick-overview clearfix">
<li class="first">Započeti projekti <span><?php echo $UkupnoProjekata; ?> </span></li>
<li>Potpisani ugovori o najmu <span><?php echo $PotpisaniUgovori; ?></span></li>
<li>Prosječna cijena najma <span><?php echo ($Najamnina - $Najamnina2); ?></span></li>
<li>Prosječna provizija <span><?php echo ($NajamninaP - $NajamninaP2); ?></span></li>
</ul>


<ul class="long-overview clearfix">
<li>Postotak vlastitih ponuda u odnosu na ukupan broj ponuda za najam: <span><?php echo $PostotakVlastitihPonuda . " %"; ?></span></li>
<li>Postotak vlastitih sklopljenih ugovora u odnosu na ukupan broj sklopljenih ugovora  : <span><?php echo $PostotakSkopljeniUgovori . " %"; ?></span></li>
<li>Postotak vlastito ugovorene projektirane snage elektrana u odnosu ukupno ugovorenu projektiranu snagu  : <span><?php echo $PostotakMaxPow . " %"; ?></span></li>
<li>Ukupna projektirana snaga elektrana za koje je potpisan ugovor : <span><?php echo $MaxPowCont; ?></span></li>
<li>Ukupna predviđena godišnja proizvodnja elektrana  na površinama za koje je suradnik ponudio najam : <span><?php echo $AnnualPow; ?></span></li>
<li>Ukupna predviđena godišnja proizvodnja elektrana  na površinama za koje je suradnik ugovorio najam  : <span><?php echo $AnnualPowCont; ?></span></li>
<li>Postotak predviđene proizvodnje elektrana na ugovorenim površinama u odnosu na ukupnu predviđenu proizvodnju elektrana na svim ponuđenim površinama  : <span><?php echo $PostotakProizvodnjePow . " %"; ?></span></li>

</ul>
<?php //------------------------------------------------------------------------------------?>
<form>
<?php for ($i = 0; $i < count($details); $i++) { ?>
<?php
$attach->projectAttachment($details[$i]['idProject']);
$usrAttach = $attach->getResult();  //print_r($usrAttach);?>
<div class="project-overview">
<h4>Naziv projekta : <?php echo $details[$i]['ProjectName']; ?></h4>
	<ul>
		<li>Ime vlasnika : <span><?php if(empty($details[$i]['NameNumOfOwner'])) {echo "Ne postoji";} else {echo $details[$i]['NameNumOfOwner'];} ?></span></li>
		<li>Adresa prostora : <span><?php if(empty($details[$i]['Street'])) {echo "Ne postoji";} else {echo $details[$i]['Street'];} ?></span></li>
		<li>Mjesto prostora : <span><?php if(empty($details[$i]['Location'])) {echo "Ne postoji";} else {echo $details[$i]['Location'];} ?></span></li>
		<li>Poštanski broj prostora : <span><?php if(empty($details[$i]['ZipCode'])) {echo "Ne postoji";} else {echo $details[$i]['ZipCode'];} ?></span></li>
		<li>Ponuda vlasniku : <span><?php if(empty($usrAttach[3]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></span></li>
		<li>Ugovor s vlasnikom : <span><?php if(empty($usrAttach[4]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></span></li>
	</ul>
</div>
<?php } ?>
</form>