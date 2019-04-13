<h1 class="kreiraj-title">Uredi projekt</h1>
<?php $_SESSION['ProjectUserName'] = trim($td['Name']);?>
<?php $_SESSION['ProjectUserLastName'] = trim($td['LastName']);?>
<p class="korisnik"><strong>Korisnik:</strong> <?php echo $_SESSION['ProjectUserName'] . " " . $_SESSION['ProjectUserLastName'] ;?></p>

<ul class="stranice clearfix">
	<li class="first active"><a href="<?php echo $_SESSION['SITE_URL'] . '/Admin/ProjectEdit/index.php?id=' . $_GET['id'];?>" >Stranica 1</a></li>
	<li><a href="<?php echo $_SESSION['SITE_URL'] . '/Admin/ProjectEdit2/index.php?id=' . $_GET['id'];?>" >Stranica 2</a></li>
</ul>

<div id="form1" class="new-project-form">
<div class="ime-projekta">
	<label for="imeProjekta">Ime projekta: </label>
	<input type="text" value="<?php echo trim($td['ProjectName']);?>" name="imeProjekta" id="imeProjekta" />
</div>


<div class="evenp clearfix">
	<div class="left">
		<label for="ulica">Ulica: </label>
		<input type="text" value="<?php echo trim($td['Street']);?>" name="ulica" id="ulica" class="large" />



		<label for="mjesto">Mjesto: </label>
		<input type="text" value="<?php echo trim($td['Location']);?>" name="mjesto" id="mjesto" class="large" />



		<label for="ulica">Poštanski broj: </label>
		<input type="text" value="<?php echo trim($td['ZipCode']);?>" name="postanskiBroj" id="postanskiBroj" class="small" />
	</div>


	<div class="right">
		<label for="brojKatCestice">Broj katastarske čestice: </label>
		<input type="text" value="<?php echo trim($td['CadPlotNum']);?>" name="brojKatCestice" id="brojKatCestice" class="small" />



		<label for="imeKatOpcine">Ime katastarske općine: </label>
		<input type="text" value="<?php echo trim($td['CadMunName']);?>" name="imeKatOpcine" id="imeKatOpcine" class="large" />



		<label for="nadlezanZKodred">Nadležan zemljišno-knjižni odred suda u: </label>
		<input type="text" value="<?php echo trim($td['ResLandBookCourtIn']);?>" name="nadlezanZKodred" id="nadlezanZKodred" class="large" />
	</div>
</div>


<div class="oddp clearfix">
	<div class="left">
		<label for="brojVlasnikaProstora">Broj vlasnika prostora: </label>
		<input type="text" value="<?php echo trim($td['PremisNumOfOwner']);?>" name="brojVlasnikaProstora" id="brojVlasnikaProstora" class="small" />


		<label for="imeVlasnikaProstora">Imena vlasnika prostora: </label>
		<input type="text" value="<?php echo trim($td['NameNumOfOwner']);?>" name="imeVlasnikaProstora" id="imeVlasnikaProstora" class="large"/>



		<label for="brojPosjedovnogLista">Broj posjedovnog lista: </label>
		<input type="text" value="<?php echo trim($td['TitleSheetNum']);?>" name="brojPosjedovnogLista" id="brojPosjedovnogLista" class="small" />

		<label for="ulica">Broj ZK izvatka: </label>
		<input type="text" value="<?php echo trim($td['NumZKExcerpt']);?>" name="brojZKizvatka" id="brojZKizvatka" class="small" />
	</div>

	<div class="right">
		<?php /* --- Posjedovni list ---*/ ?>

			
			<?php if(isset($attachments[0]['AttachmentPath']) && trim($attachments[0]['AttachmentPath']) != ""){?>
			<div id="pdf1prostorZaFormu">
			</div>
			<div id="previewposjedovniList" class="obrub clearfix prevdiv">
				<label>Posjedovni list (PDF):</label>
				<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/pdf transparent.gif';?>" class="preview" />
				<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[0]['AttachmentPath'])?>">Download</a>
				<input type="button" id="pdf1obrisi" value="Obriši" class="obrisi"  />
			</div>
			<input type="hidden" id="pdf1original" name="pdf1original" value="<?php echo trim($attachments[0]['AttachmentPath']);?>" />
			<?php } else { ?>
				<form id="pdfForm1" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf1">
					<label>Posjedovni list (PDF):</label> <input type="file" name="pdf" id="posjedovniListFile" />
				</form>
				<div id="previewposjedovniList" class="obrub">
				</div>
			<?php }?>
		
		<?php /* --- //Posjedovni list -- */ ?>



		<?php /* --- Izvod iz katastarskog plana ---*/ ?>

			
			<?php if(isset($attachments[1]['AttachmentPath']) && trim($attachments[1]['AttachmentPath']) != ""){?>
			<div id="pdf2prostorZaFormu">
			</div>
			<div id="previewizvodIzKatastarskogPlana" class="obrub prevdiv clearfix">
				<label>Izvod iz katastarskog plana (PDF):</label>
				<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/pdf transparent.gif';?>" class="preview" />
				<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[1]['AttachmentPath'])?>">Download</a>
				<input type="button" id="pdf2obrisi" value="Obriši" class="obrisi"  />
			</div>
			<input type="hidden" id="pdf2original" name="pdf2original" value="<?php echo trim($attachments[1]['AttachmentPath']);?>" />
			<?php } else { ?>
				<form id="pdfForm2" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf2">
					<label>Izvod iz katastarskog plana (PDF):</label> <input type="file" name="pdf" id="izvodIzKatastarskogPlanaFile" />
				</form>
				<div id="previewizvodIzKatastarskogPlana" class="obrub">
				</div>
			<?php }?>
			

		<?php /* --- //Izvod iz katastarskog plana ---*/ ?>


		<?php /* --- Satlitska snimka ---*/ ?>
			
			<?php if(isset($attachments[2]['AttachmentPath']) && trim($attachments[2]['AttachmentPath']) != ""){?>
			<div id="pdf3prostorZaFormu">
			</div>
			<div id="previewsatelitskaSnimkaProstora" class="obrub clearfix prevdiv">
				<label>Satelitska snimka prostora (PDF):</label>
				<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/pdf transparent.gif';?>" class="preview" />
				<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[2]['AttachmentPath'])?>">Download</a>
				<input type="button" id="pdf3obrisi" value="Obriši" class="obrisi"  />
			</div>
			<input type="hidden" id="pdf3original" name="pdf3original" value="<?php echo trim($attachments[2]['AttachmentPath']);?>" />
			<?php } else { ?>
			<form id="pdfForm3" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf3">
				<label>Satelitska snimka prostora (PDF):</label> 
				<input type="file" name="pdf" id="satelitskaSnimkaProstoraFile" />
				<div id="previewsatelitskaSnimkaProstora" class="obrub">
				</div>
			</form>
			<?php } ?>
			
		<?php /* --- //Satelitska snimka ---*/ ?>
	</div> <!--/right-->
</div><!--/katastar-->

<div class="evenp">

	<div class="left">
		<label for="vrstaKrova">Vrsta krova: </label>
		<input type="text" value="<?php echo trim($td['RoofType']);?>" name="vrstaKrova" id="vrstaKrova" class="large" />

		<label for="velicinaKrova">Površina krova [m2]: </label>
		<input type="text" value="<?php echo trim($td['RoofSize']);?>" name="velicinaKrova" id="velicinaKrova" class="small" />

		<label for="nagibKrova">Nagib krova [stupnjevi]: </label>
		<input type="text" value="<?php echo trim($td['RoofPitch']);?>" name="nagibKrova" id="nagibKrova" class="small" />

		<label for="orijentacijaKrova">Orijentacija [azimut] krova [u stupnjevima]: </label>
		<input type="text" value="<?php echo trim($td['RoofOrientation']);?>" name="orijentacijaKrova" id="orijentacijaKrova" class="small" />

		<label for="sirinaKrova">Širina krova[m]: </label>
		<input type="text" value="<?php echo trim($td['RoofWidth']);?>" name="sirinaKrova" id="sirinaKrova" class="small" />
		<p>
			<input class="checkbox" type="checkbox" <?php if(isset($td['LightDefSpace']) && (int)trim($td['LightDefSpace']) == 1) {echo 'checked="checked"';}?> value="1"  name="prostorGromobranskeObrane" id="prostorGromobranskeObrane" />
			<label class="chcklabel" for="prostorGromobranskeObrane">Prostor gromobranske obrane</label>
		</p>
	</div><!--/left-->

<div class="right">
	<label for="duzinaKrova">Dužina krova[m]: </label>
	<input type="text" value="<?php echo trim($td['RoofHeight']);?>" name="duzinaKrova" id="duzinaKrova" class="small" />



	<label for="godinaIzgradnje">Godina izgradnje/zadnja rekonstrukcija: </label>
	<input type="text" value="<?php echo trim($td['YearOfConRecon']);?>" name="godinaIzgradnje" id="godinaIzgradnje" class="small" />



	<label for="vrstaPokrovnogMaterijala">Vrsta pokrovnog materijala: </label>
	<input type="text" value="<?php echo trim($td['TypeOfCovMaterial']);?>" name="vrstaPokrovnogMaterijala" id="vrstaPokrovnogMaterijala" class="large" />

	<label for="zasjenjenostKrova">Zasjenjenost krova: </label>
	<input type="text" value="<?php echo trim($td['RoofOpacity']);?>" name="zasjenjenostKrova" id="zasjenjenostKrova" class="large" />

	<label for="distributerElektricneEnergije">Distributer električne energije: </label>
	<input type="text" value="<?php echo trim($td['ElecPowDistributor']);?>" name="distributerElektricneEnergije" id="distributerElektricneEnergije" class="large" />
</div><!--/right-->
<div class="clearfix"></div>





<label for="mogucnostSmjestajaIIZopreme">Mogućnost smještaja invertera i zaštitne opreme: </label>
<textarea name="mogucnostSmjestajaIIZopreme" id="mogucnostSmjestajaIIZopreme"><?php if(isset($td['AccCapInvProtGear'])) {echo $td['AccCapInvProtGear'];} else {echo 'enter text...';}?></textarea>


<h4>Fotografije krova:</h4>


	
	<?php if(isset($attachments[5]['AttachmentPath']) && trim($attachments[5]['AttachmentPath']) != ""){?>
	<div id="slika1prostorZaFormu">
	</div>
	<div id="previewslika1" class="obrub clearfix prevdiv">
		<img class="slika" width="300" alt="" src="<?php echo $_SESSION['SITE_URL'] . '/ProjectImage/' . $_SESSION['UserId'] . "/" .  $ProjectId . "/" . $attachments[5]['AttachmentPath'];?>" class="preview" />
		<input type="button" id="slika1obrisi" value="Obriši" class="obrisi"  />
	</div>
	<input type="hidden" id="slika1original" name="slika1original" value="<?php echo trim($attachments[5]['AttachmentPath']);?>" />
	<?php } else { ?>
	<form id="slikaForm1" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaximage.php?tip=slika1">
		Slika1: <input type="file" name="slika" id="slika1File" />
		<div id="previewslika1" class="obrub"></div>
	</form>
	<?php } ?>
	
	<?php //KrajSlika1-------------------------------------------------------?>

	<?php if(isset($attachments[6]['AttachmentPath']) && trim($attachments[6]['AttachmentPath']) != ""){?>
	<div id="slika2prostorZaFormu">
	</div>
	<div id="previewslika2" class="obrub prevdiv clearfix">
		<img class="slika" width="300" alt="" src="<?php echo $_SESSION['SITE_URL'] . '/ProjectImage/' . $_SESSION['UserId'] . "/" .  $ProjectId . "/" . $attachments[6]['AttachmentPath'];?>" class="preview" />
		<input type="button" id="slika2obrisi" value="Obriši" class="obrisi"  />
	</div>
	<input type="hidden" id="slika2original" name="slika2original" value="<?php echo trim($attachments[6]['AttachmentPath']);?>" />

	<?php } else { ?>
	<form id="slikaForm2" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaximage.php?tip=slika2">
		Slika2: <input type="file" name="slika" id="slika2File" />
		<div id="previewslika2" class="obrub"></div>
	</form>
	<?php } ?>

	<?php //KrajSlika2-------------------------------------------------------?>

	
	<?php if(isset($attachments[7]['AttachmentPath']) && trim($attachments[7]['AttachmentPath']) != ""){?>
	<div id="slika3prostorZaFormu">
	</div>
	<div id="previewslika3" class="obrub clearfix prevdiv">
		<img class="slika" width="300" alt="" src="<?php echo $_SESSION['SITE_URL'] . '/ProjectImage/' . $_SESSION['UserId'] . "/" .  $ProjectId . "/" . $attachments[7]['AttachmentPath'];?>" class="preview" />
		<input type="button" id="slika3obrisi" value="Obriši" class="obrisi"  />
	</div>

	<input type="hidden" id="slika3original" name="slika3original" value="<?php echo trim($attachments[7]['AttachmentPath']);?>" />
	
	<?php } else { ?>
	<form id="slikaForm3" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaximage.php?tip=slika3">
		Slika3: <input type="file" name="slika" id="slika3File" />
		<div id="previewslika3" class="obrub"></div>
	</form>
	<?php } ?>

	<?php //KrajSlika3-------------------------------------------------------?>

	
	<?php if(isset($attachments[8]['AttachmentPath']) && trim($attachments[8]['AttachmentPath']) != ""){?>
	<div id="slika4prostorZaFormu">
	</div>
	<div id="previewslika4" class="obrub clearfix prevdiv">
		<img class="slika" width="300" alt="" src="<?php echo $_SESSION['SITE_URL'] . '/ProjectImage/' . $_SESSION['UserId'] . "/" .  $ProjectId . "/" . $attachments[8]['AttachmentPath'];?>" class="preview" />
		<input type="button" id="slika4obrisi" value="Obriši" class="obrisi"  />
	</div>
	<input type="hidden" id="slika4original" name="slika4original" value="<?php echo trim($attachments[8]['AttachmentPath']);?>" />
	<?php } else { ?>
	<form id="slikaForm4" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaximage.php?tip=slika4">
		Slika4: <input type="file" name="slika" id="slika4File" />
		<div id="previewslika4" class="obrub"></div>
	</form>
	<?php } ?>

	<?php //KrajSlika4-------------------------------------------------------?>

	
	<?php if(isset($attachments[9]['AttachmentPath']) && trim($attachments[9]['AttachmentPath']) != ""){?>
	<div id="slika5prostorZaFormu"></div>
	<div id="previewslika5" class="obrub prevdiv clearfix">
		<img class="slika" width="300" alt="" src="<?php echo $_SESSION['SITE_URL'] . '/ProjectImage/' . $_SESSION['UserId'] . "/" .  $ProjectId . "/" . $attachments[9]['AttachmentPath'];?>" class="preview" />
		<input type="button" id="slika5obrisi" value="Obriši" class="obrisi"  />
	</div>
	<input type="hidden" id="slika5original" name="slika5original" value="<?php echo trim($attachments[9]['AttachmentPath']);?>" />
	<?php } else { ?>
	<form id="slikaForm5" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaximage.php?tip=slika5">
		Slika5: <input type="file" name="slika" id="slika5File" />
		<div id="previewslika5" class="obrub"></div>
	</form>
	<?php } ?>

	<?php //KrajSlika5-------------------------------------------------------?>
</div>


<div class="oddp clearfix">
	<div class="left">
		
		<label for="datumPotpisivanjaUgovora">Datum potpisivanja ugovora: </label>
		<input type="text" value="<?php  if (!empty($td['DateOfContSigning'])) echo date("d.m.Y.",strtotime(trim($td['DateOfContSigning'])));?>" name="datumPotpisivanjaUgovora" id="datumPotpisivanjaUgovora" />
		

		
		<label for="ugovoreniPostotak">Ugovoren postotak brutto prihoda za najam [%]: </label>
		<input type="text" value="<?php echo trim($td['PercentageOfGrossIncome']);?>" name="ugovoreniPostotak" id="ugovoreniPostotak" />
		
	</div><!--/left-->

	<div class="right">

		
		<?php if(isset($attachments[3]['AttachmentPath']) && trim($attachments[3]['AttachmentPath']) != ""){?>
		<div id="pdf4prostorZaFormu"></div>
		<div id="previewponuda" class="obrub prevdiv clearfix">
		<label>Ponuda (PDF):</label>
			<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/pdf transparent.gif';?>" class="preview" />
			<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[3]['AttachmentPath'])?>">Download</a>
			<input type="button" id="pdf4obrisi" value="Obriši" class="obrisi"  />
		</div>
		<input type="hidden" id="pdf4original" name="pdf4original" value="<?php echo trim($attachments[3]['AttachmentPath']);?>" />
		<?php } else { ?>
		<form id="pdfForm4" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf4">
			<label>Ponuda (PDF):</label> <input type="file" name="pdf" id="ponudaFile" />
			<div id="previewponuda" class="obrub"></div>
		</form>
		<?php } ?>

		<?php //KrajPdfForma4-----------------------------------------------------?>

		
		<?php if(isset($attachments[4]['AttachmentPath']) && trim($attachments[4]['AttachmentPath']) != ""){?>
		<div id="pdf5prostorZaFormu"></div>
		<div id="previewugovorSvlasnikom" class="obrub prevdiv clearfix">
			<label>Ugovor s vlasnikom (PDF):</label>
			<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/pdf transparent.gif';?>" class="preview" />
			<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[4]['AttachmentPath'])?>">Download</a>
			<input type="button" id="pdf5obrisi" value="Obriši" class="obrisi"  />
		</div>
		<input type="hidden" id="pdf5original" name="pdf5original" value="<?php echo trim($attachments[4]['AttachmentPath']);?>" />
		<?php } else { ?>
		<form id="pdfForm5" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf5">
			<label>Ugovor s vlasnikom (PDF):</label> <input type="file" name="pdf" id="ugovorSvlasnikomFile" />
			<div id="previewugovorSvlasnikom" class="obrub"></div>
		</form>
		<?php }?>
	</div><!--/right-->

</div><!--/ugovor-->

<div class="save-cancel clearfix">
	<input type="submit" id="spremi" value="Spremi" class="save" />
	<input type="button" id="odustani" value="Odustani" class="cancel" />
</div>

</div>
