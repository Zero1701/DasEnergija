<h1 class="kreiraj-title nomarg no-print">Pregled projekta</h1>
<p class="print-all no-print clearfix prilagodjen">
	<a class="print-single" href="javascript:window.print()">Ispis</a> <span>(Ispis će bti prilagođen veličini A4 papira)</span>
</p>
<ul class="stranice clearfix no-print">
	<li class="first active"><a href="<?php echo $_SESSION['SITE_URL'] . '/Admin/ReportSingle/index.php?id=' . $_GET['id'];?>" >Stranica 1</a></li>
	<li class=""><a href="<?php echo $_SESSION['SITE_URL'] . '/Admin/ReportSingle/index2.php?id=' . $_GET['id'];?>" >Stranica 2</a></li>
</ul>
<div id="form1" class="new-project-form print">
	<div class="ime-projekta print">
		<label class="no-print" for="imeProjekta">Ime projekta: </label>
		<h2><?php if(empty($td['ProjectName'])) {echo "Ne postoji";} else {echo trim($td['ProjectName']);}?></h2>
	</div>

	<div class="evenp clearfix">
		<div class="left">
			<label for="ulica">Ulica: </label>
			<?php if(empty($td['Street'])) {echo "<span class='nepostoji'>Ne postoji</span>";} else {echo trim($td['Street']);}?>
			<div class="clearfix"></div>



			<label for="mjesto">Mjesto: </label>
			<?php if(empty($td['Location'])) {echo "Ne postoji";} else {echo trim($td['Location']);}?>
			<div class="clearfix"></div>


			<label for="ulica">Poštanski broj: </label>
			<?php if(empty($td['ZipCode'])) {echo "Ne postoji";} else {echo trim($td['ZipCode']);}?>
			<div class="clearfix"></div>
		</div>

		<div class="right">
			<label for="brojKatCestice">Broj katastarske čestice: </label>
			<?php if(empty($td['CadPlotNum'])) {echo "Ne postoji";} else {echo trim($td['CadPlotNum']);}?>
			<div class="clearfix"></div>



			<label for="imeKatOpcine">Ime katastarske općine: </label>
			<?php if(empty($td['CadMunName'])) {echo "Ne postoji";} else {echo trim($td['CadMunName']);}?>
			<div class="clearfix"></div>



			<label for="nadlezanZKodred">Nadležan zemljišno-knjižni odred suda u: </label>
			<?php if(empty($td['ResLandBookCourtIn'])) {echo "Ne postoji";} else {echo trim($td['ResLandBookCourtIn']);}?>
			<div class="clearfix"></div>
		</div><!--/right-->
	</div><!--/evenp-->


	<div class="oddp clearfix">
		<div class="left">

			<label for="brojVlasnikaProstora">Broj vlasnika prostora: </label>
			<?php if(empty($td['PremisNumOfOwner'])) {echo "Ne postoji";} else {echo trim($td['PremisNumOfOwner']);}?>
			<div class="clearfix"></div>



			<label for="imeVlasnikaProstora">Imena vlasnika prostora: </label>
			<?php if(empty($td['NameNumOfOwner'])) {echo "Ne postoji";} else {echo trim($td['NameNumOfOwner']);}?>
			<div class="clearfix"></div>



			<label for="brojPosjedovnogLista">Broj posjedovnog lista: </label>
			<?php if(empty($td['TitleSheetNum'])) {echo "Ne postoji";} else {echo trim($td['TitleSheetNum']);}?>
			<div class="clearfix"></div>


			<label for="ulica">Broj ZK izvatka: </label>
			<?php if(empty($td['NumZKExcerpt'])) {echo "Ne postoji";} else {echo trim($td['NumZKExcerpt']);}?>
			<div class="clearfix"></div>
		</div><!--/left-->

		<div class="right">

			<label for="ulica">Posjedovni list: </label>
			
			<?php if(isset($attachments[0]['AttachmentPath']) && trim($attachments[0]['AttachmentPath']) != ""){?>
			<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
			<?php } ?>
		
			<div class="clearfix"></div>



			<label for="ulica">Izvod iz katastarskog plana:</label>
			
			<?php if(isset($attachments[1]['AttachmentPath']) && trim($attachments[1]['AttachmentPath']) != ""){?>
			<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
			<?php } ?>
			<div class="clearfix"></div>

			<label for="ulica">Satelitska snimka:</label>
			
			<?php if(isset($attachments[2]['AttachmentPath']) && trim($attachments[2]['AttachmentPath']) != ""){?>
			<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
			<?php } ?>
			
			<div class="clearfix"></div>
		</div><!--/right-->
	</div><!--/oddp-->


<div class="evenp clearfix">
	<div class="left">
		<label for="vrstaKrova">Vrsta krova: </label>
		<?php if(empty($td['RoofType'])) {echo "Ne postoji";} else {echo trim($td['RoofType']);}?>
		<div class="clearfix"></div>


		<label for="velicinaKrova">Površina krova [m2]: </label>
		<?php if(empty($td['RoofSize'])) {echo "Ne postoji";} else {echo trim($td['RoofSize']);}?>
		<div class="clearfix"></div>


		<label for="nagibKrova">Nagib krova [stupnjevi]: </label>
		<?php if(empty($td['RoofPitch'])) {echo "Ne postoji";} else {echo trim($td['RoofPitch']);}?>
		<div class="clearfix"></div>


		<label for="orijentacijaKrova">Orijentacija [azimut] krova [u stupnjevima]: </label>
		<?php if(empty($td['RoofOrientation'])) {echo "Ne postoji";} else {echo trim($td['RoofOrientation']);}?>
		<div class="clearfix"></div>


		<label for="sirinaKrova">Širina krova[m]: </label>
		<?php if(empty($td['RoofWidth'])) {echo "Ne postoji";} else {echo trim($td['RoofWidth']);}?>
		<div class="clearfix"></div>

		<label for="prostorGromobranskeObrane">Prostor gromobranske obrane: </label>
		<?php if(isset($td['LightDefSpace']) && (int)trim($td['LightDefSpace']) == 1) {echo "Ima";}else{echo "Nema";}?>
		<div class="clearfix"></div>
	</div><!--/left-->


	<div class="right">
		<label for="duzinaKrova">Dužina krova[m]: </label>
		<?php if(empty($td['RoofHeight'])) {echo "Ne postoji";} else {echo trim($td['RoofHeight']);}?>
		<div class="clearfix"></div>



		<label for="godinaIzgradnje">Godina izgradnje/zadnja rekonstrukcija: </label>
		<?php if(empty($td['YearOfConRecon'])) {echo "Ne postoji";} else {echo trim($td['YearOfConRecon']);}?>
		<div class="clearfix"></div>



		<label for="vrstaPokrovnogMaterijala">Vrsta pokrovnog materijala: </label>
		<?php if(empty($td['TypeOfCovMaterial'])) {echo "Ne postoji";} else {echo trim($td['TypeOfCovMaterial']);}?>
		<div class="clearfix"></div>



		<label for="zasjenjenostKrova">Zasjenjenost krova: </label>
		<?php if(empty($td['RoofOpacity'])) {echo "Ne postoji";} else {echo trim($td['RoofOpacity']);}?>
		<div class="clearfix"></div>



		<label for="prostorGromobranskeObrane">Prostor gromobranske obrane: </label>
		<?php if(isset($td['LightDefSpace']) && (int)trim($td['LightDefSpace']) == 1) {echo "Ima";}else{echo "Nema";}?>
		<div class="clearfix"></div>



		



		<label for="distributerElektricneEnergije">Distributer električne energije: </label>
		<?php if(empty($td['ElecPowDistributor'])) {echo "Ne postoji";} else {echo trim($td['ElecPowDistributor']);}?>
		<div class="clearfix"></div>
	</div>

	<div class="clearfix"></div>
	<div class="clearfix" style="width:100%">
	<label for="mogucnostSmjestajaIIZopreme">Mogućnost smještaja invertera i zaštitne opreme: </label>
		<?php if(empty($td['AccCapInvProtGear'])) {echo "Ne postoji";} else {echo trim($td['AccCapInvProtGear']);}?>
	</div>
		<div class="clearfix"></div>




<h4>Fotografije krova:</h4>
<ul class="fotografije-print clearfix">
	<li>
		<label>Slika 1:</label>

		<?php if(isset($attachments[5]['AttachmentPath']) && trim($attachments[5]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
		<?php } else {?>
		<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
	</li>

	<li>
		<label>Slika 2:</label>

		<?php if(isset($attachments[6]['AttachmentPath']) && trim($attachments[6]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
		<?php } else {?>
		<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
	</li>


	<li>
		<label>Slika 3:</label>

		<?php if(isset($attachments[7]['AttachmentPath']) && trim($attachments[7]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
		<?php } else {?>
		<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
	</li>

	<li>
		<label>Slika 4:</label>
		<?php if(isset($attachments[8]['AttachmentPath']) && trim($attachments[8]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
		<?php } else {?>
		<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
	</li>

	<li>
		<label>Slika 5:</label>

		<?php if(isset($attachments[9]['AttachmentPath']) && trim($attachments[9]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
		<?php } else {?>
		<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
	</li>
</ul>


</div><!--/evenp-->

<div class="oddp clearfix">
	<div class="left">
		<label for="datumPotpisivanjaUgovora">Datum potpisivanja ugovora: </label>
		<?php if(empty($td['DateOfContSigning'])) {echo "Ne postoji";} else {echo date("d.m.Y.",strtotime(trim($td['DateOfContSigning'])));}?>
		<div class="clearfix"></div>



		<label for="ugovoreniPostotak">Ugovoren postotak brutto prihoda za najam [%]: </label>
		<?php if(empty($td['PercentageOfGrossIncome'])) {echo "Ne postoji";} else {echo trim($td['PercentageOfGrossIncome']);}?>
		<div class="clearfix"></div>
	</div>

	<div class="right">
		<label>Ponuda:</label>
		
		<?php if(isset($attachments[3]['AttachmentPath']) && trim($attachments[3]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
		
		<div class="clearfix"></div>
		<label>Ugovor s vlasnikom:</label>
		
		<?php if(isset($attachments[4]['AttachmentPath']) && trim($attachments[4]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
	
	</div><!--/right-->

</div>


</div>
