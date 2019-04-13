<form>
<?php for ($i = 0; $i < count($user); $i++) { ?>
<?php
$attach->projectAttachment($user[$i]['idProject']);
$usrAttach = $attach->getResult();  //print_r($usrAttach);?>
<p><b>Naziv projekta : <?php echo $user[$i]['ProjectName']; ?></b></p>
<p>Ime suradnika : <?php echo $user[$i]['Name'] . " " . $user[$i]['LastName']; ?></p>
<p>Ime vlasnika : <?php if(empty($user[$i]['NameNumOfOwner'])) {echo "Ne postoji";} else {echo $user[$i]['NameNumOfOwner'];} ?></p>
<p>Adresa prostora : <?php if(empty($user[$i]['Street'])) {echo "Ne postoji";} else {echo $user[$i]['Street'];} ?></p>
<p>Mjesto prostora : <?php if(empty($user[$i]['Location'])) {echo "Ne postoji";} else {echo $user[$i]['Location'];} ?></p>
<p>Poštanski broj prostora : <?php if(empty($user[$i]['ZipCode'])) {echo "Ne postoji";} else {echo $user[$i]['ZipCode'];} ?></p>
<p>Projektirana snaga postrojenja : <?php if(empty($user[$i]['PowerSupplySystem'])) {echo "Ne postoji";} else {echo $user[$i]['PowerSupplySystem'];} ?></p>
<p>Tip postrojenja : <?php if(empty($user[$i]['PlantType'])) {echo "Ne postoji";} else {echo $user[$i]['PlantType'];} ?></p>
<p>Očekivana god.proizvodnja : <?php if(empty($user[$i]['ExpectedAnnualProduction'])) {echo "Ne postoji";} else {echo $user[$i]['ExpectedAnnualProduction'];} ?></p>
<p>Ponuda vlasniku : <?php if(empty($usrAttach[3]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></p>
<p>Ugovor s vlasnikom : <?php if(empty($usrAttach[4]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></p>
<p>Ugovoreni postotak brutto prihoda za najam : <?php if(empty($user[$i]['PercentageOfGrossIncome'])) {echo "Ne postoji";} else {echo $user[$i]['PercentageOfGrossIncome'];} ?></p>
<p>PEES : <?php if(empty($usrAttach[13]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></p>
<p>Predugovor o priključenju : <?php if(empty($usrAttach[14]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></p>
<p>Ugovor o izvođenju radova : <?php if(empty($usrAttach[18]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></p>
<p>Ugovor o isporuci : <?php if(empty($usrAttach[17]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></p>
<p>EES : <?php if(empty($usrAttach[20]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></p>
<p>Ugovor o priključenju : <?php if(empty($usrAttach[15]['AttachmentPath'])) {echo "Ne postoji";} else {echo "Postoji";} ?></p>
<p>Datum početka primjene ugovora o isporuci : <?php if(empty($user[$i]['DateBeginElectContractDelivery'])) {echo "Ne postoji";} else {echo date("d.m.Y.",strtotime(trim($user[$i]['DateBeginElectContractDelivery'])));} ?></p>
<?php } ?>
</form>