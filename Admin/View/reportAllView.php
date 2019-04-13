<h1 class="kreiraj-title nomarg">Pregled svih izvještaja</h1>
<p class="print-all no-print clearfix prilagodjen">
	<a class="print-single" href="javascript:window.print()">Ispis</a> <span>(Ispis će bti prilagođen veličini A4 papira)</span>
</p>
<form>
	<div class="print-all-page">
<?php for ($i = 0; $i < count($user); $i++) { ?>
<?php
$attach->projectAttachment($user[$i]['idProject']);
$usrAttach = $attach->getResult();  //print_r($usrAttach);?>

	<h2 class="print-naziv-projekta"><strong>Naziv projekta:</strong> <?php echo $user[$i]['ProjectName']; ?></h2>
	<ul class="clearfix">
		<li class="clearfix even"><span class="field-name">Ime suradnika :</span><span class="result"> <?php echo $user[$i]['Name'] . " " . $user[$i]['LastName']; ?></span></li>
		<li class="clearfix odd"><span class="field-name">Ime vlasnika :</span><span class="result"> <?php if(empty($user[$i]['NameNumOfOwner'])) {echo "Ne postoji";} else {echo $user[$i]['NameNumOfOwner'];} ?></span></li>
		<li class="clearfix even"><span class="field-name">Adresa prostora :</span><span class="result"> <?php if(empty($user[$i]['Street'])) {echo "Ne postoji";} else {echo $user[$i]['Street'];} ?></span></li>
		<li class="clearfix odd"><span class="field-name">Mjesto prostora :</span><span class="result"> <?php if(empty($user[$i]['Location'])) {echo "Ne postoji";} else {echo $user[$i]['Location'];} ?></span></li>
		<li class="clearfix even"><span class="field-name">Poštanski broj prostora :</span><span class="result"> <?php if(empty($user[$i]['ZipCode'])) {echo "Ne postoji";} else {echo $user[$i]['ZipCode'];} ?></span></li>
		<li class="clearfix odd"><span class="field-name">Projektirana snaga postrojenja :</span><span class="result"> <?php if(empty($user[$i]['PowerSupplySystem'])) {echo "Ne postoji";} else {echo $user[$i]['PowerSupplySystem'];} ?></span></li>
		<li class="clearfix even"><span class="field-name">Tip postrojenja :</span><span class="result"> <?php if(empty($user[$i]['PlantType'])) {echo "Ne postoji";} else {echo $user[$i]['PlantType'];} ?></span></li>
		<li class="clearfix odd"><span class="field-name">Očekivana god.proizvodnja :</span><span class="result"> <?php if(empty($user[$i]['ExpectedAnnualProduction'])) {echo "Ne postoji";} else {echo $user[$i]['ExpectedAnnualProduction'];} ?></span></li>
		<li class="clearfix even"><span class="field-name">Ponuda vlasniku :</span><span class="result"> <?php if(empty($usrAttach[3]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></span></li>
		<li class="clearfix odd"><span class="field-name">Ugovor s vlasnikom :</span><span class="result"> <?php if(empty($usrAttach[4]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></span></li>
		<li class="clearfix even"><span class="field-name">Ugovoreni postotak brutto prihoda za najam :</span><span class="result"> <?php if(empty($user[$i]['PercentageOfGrossIncome'])) {echo "Ne postoji";} else {echo $user[$i]['PercentageOfGrossIncome'];} ?></span></li>
		<li class="clearfix odd"><span class="field-name">PEES :</span><span class="result"> <?php if(empty($usrAttach[13]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></span></li>
		<li class="clearfix even"><span class="field-name">Predugovor o priključenju :</span><span class="result"> <?php if(empty($usrAttach[14]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></span></li>
		<li class="clearfix odd"><span class="field-name">Ugovor o izvođenju radova :</span><span class="result"> <?php if(empty($usrAttach[18]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></span></li>
		<li class="clearfix even"><span class="field-name">Ugovor o isporuci :</span><span class="result"> <?php if(empty($usrAttach[17]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></span></li>
		<li class="clearfix odd"><span class="field-name">EES :</span><span class="result"> <?php if(empty($usrAttach[20]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></span></li>
		<li class="clearfix even"><span class="field-name">Ugovor o priključenju :</span><span class="result"> <?php if(empty($usrAttach[15]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></span></li>
		<li class="clearfix odd"><span class="field-name">Datum početka primjene ugovora o isporuci :</span><span class="result"> <?php if(empty($user[$i]['DateBeginElectContractDelivery'])) {echo "Ne postoji";} else {echo date("d.m.Y.",strtotime(trim($user[$i]['DateBeginElectContractDelivery'])));} ?></span></li>
	</ul>
	<div class="clearfix"></div>

<?php } ?>
</div>
</form>