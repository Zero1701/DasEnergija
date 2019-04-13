

<h1 class="kreiraj-title">Kreiraj novi projekt</h1>

<div id="form1" method="get" class="new-project-form">
	<div class="ime-projekta">
		<label for="imeProjekta">Ime projekta: </label>
		<input type="text" value="" name="imeProjekta" id="imeProjekta" />
	</div>
	<div class="evenp clearfix">

			

		<div class="left">
			<label for="ulica">Ulica: </label>
			<input type="text" value="" name="ulica" id="ulica" class="large" />

			<label for="mjesto">Mjesto: </label>
			<input type="text" value="" name="mjesto" id="mjesto" class="large" />



			<label for="ulica">Poštanski broj: </label>
			<input type="text" value="" name="postanskiBroj" id="postanskiBroj" class="small" />
		</div>

		<div class="right">
			<label for="brojKatCestice">Broj katastarske čestice: </label>
			<input type="text" value="" name="brojKatCestice" id="brojKatCestice" class="small" />


		
			<label for="imeKatOpcine">Ime katastarske općine: </label>
			<input type="text" value="" name="imeKatOpcine" id="imeKatOpcine" class="large" />
	



			<label for="nadlezanZKodred">Nadležan zemljišno-knjižni odred suda u: </label>
			<input type="text" value="" name="nadlezanZKodred" id="nadlezanZKodred" class="large" />
		</div>
		

	</div><!--/opci-podaci-->


	<div class="oddp clearfix">
		<div class="left">
			<label for="brojVlasnikaProstora">Broj vlasnika prostora: </label>
			<input type="text" value="" name="brojVlasnikaProstora" id="brojVlasnikaProstora" class="small" />

			<label for="imeVlasnikaProstora">Imena vlasnika prostora: </label>
			<input type="text" value="" name="imeVlasnikaProstora" id="imeVlasnikaProstora" class="large" />
	
			<label for="brojPosjedovnogLista">Broj posjedovnog lista: </label>
			<input type="text" value="" name="brojPosjedovnogLista" id="brojPosjedovnogLista" class="small" />

			<label for="ulica">Broj ZK izvatka: </label>
			<input type="text" value="" name="brojZKizvatka" id="brojZKizvatka" class="small" />
		</div>	
		
		<div class="right">	
			<form id="pdfForm1" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf1">
			<label>Posjedovni list (PDF):</label>
			<input type="file" name="pdf" id="posjedovniListFile"  />
			</form>	
			<div id="previewposjedovniList" class="obrub clearfix">
			</div>

			<form id="pdfForm2" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf2">
			<label>Izvod iz katastarskog plana (PDF):</label> 
			<input type="file" name="pdf" id="izvodIzKatastarskogPlanaFile" />
			</form>
			<div id="previewizvodIzKatastarskogPlana" class="obrub">
			</div>
			
			
			<form id="pdfForm3" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf3">
			<label>Satelitska snimka prostora (PDF):</label> 
			<input type="file" name="pdf" id="satelitskaSnimkaProstoraFile" />
			</form>
			<div id="previewsatelitskaSnimkaProstora" class="obrub preview-pane">
			</div>
			
		</div>
			
		

	</div><!--/katastar-->


	<div class="evenp clearfix">
		<div class="left">
			<label for="vrstaKrova">Vrsta krova: </label>
			<input type="text" value="" name="vrstaKrova" id="vrstaKrova" class="large" />



			<label for="velicinaKrova">Površina krova [m2]: </label>
			<input type="text" value="" name="velicinaKrova" id="velicinaKrova" class="small" />



			<label for="nagibKrova">Nagib krova [stupnjevi]: </label>
			<input type="text" value="" name="nagibKrova" id="nagibKrova" class="small" />



			<label for="orijentacijaKrova">Orijentacija [azimut] krova [u stupnjevima]: </label>
			<input type="text" value="" name="orijentacijaKrova" id="orijentacijaKrova" class="small" />



			<label for="sirinaKrova">Širina krova[m]: </label>
			<input type="text" value="" name="sirinaKrova" id="sirinaKrova" class="small" />

			<p>
			<input class="checkbox" type="checkbox" value="1" name="prostorGromobranskeObrane" id="prostorGromobranskeObrane" />
			<label class="chcklabel" for="prostorGromobranskeObrane">Prostor gromobranske obrane</label>
			</p>
		</div>


		<div class="right">
			<label for="duzinaKrova">Dužina krova[m]: </label>
			<input type="text" value="" name="duzinaKrova" id="duzinaKrova" class="small" />



			<label for="godinaIzgradnje">Godina izgradnje/zadnja rekonstrukcija: </label>
			<input type="text" value="" name="godinaIzgradnje" id="godinaIzgradnje" class="small"/>



			<label for="vrstaPokrovnogMaterijala">Vrsta pokrovnog materijala: </label>
			<input type="text" value="" name="vrstaPokrovnogMaterijala" id="vrstaPokrovnogMaterijala" class="large" />



			<label for="zasjenjenostKrova">Zasjenjenost krova: </label>
			<input type="text" value="" name="zasjenjenostKrova" id="zasjenjenostKrova" class="large" />


			

			<label for="distributerElektricneEnergije">Distributer električne energije: </label>
			<input type="text" value="" name="distributerElektricneEnergije" id="distributerElektricneEnergije" class="large" />
		</div>

		<div class="clearfix"></div>


		<label for="mogucnostSmjestajaIIZopreme">Mogućnost smještaja invertera i zaštitne opreme: </label>
		<textarea name="mogucnostSmjestajaIIZopreme" id="mogucnostSmjestajaIIZopreme"></textarea>

		<h4>Fotografije krova</h4>


		<form id="slikaForm1" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaximage.php?tip=slika1">
		Slika1: <input type="file" name="slika" id="slika1File" />
		</form>
		<div id="previewslika1" class="obrub">
		</div>

		
		<form id="slikaForm2" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaximage.php?tip=slika2">
		Slika2: <input type="file" name="slika" id="slika2File" />
		</form>
		<div id="previewslika2" class="obrub">
		</div>

		
		<form id="slikaForm3" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaximage.php?tip=slika3">
		Slika3: <input type="file" name="slika" id="slika3File" />
		</form>
		<div id="previewslika3" class="obrub">
		</div>

		
		<form id="slikaForm4" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaximage.php?tip=slika4">
		Slika4: <input type="file" name="slika" id="slika4File" />
		</form>
		<div id="previewslika4" class="obrub">
		</div>

		<form id="slikaForm5" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaximage.php?tip=slika5">
		Slika5: <input type="file" name="slika" id="slika5File" />
		</form>
		<div id="previewslika5" class="obrub">
		</div>
	</div><!--/krov-->

	<div class="oddp clearfix">

		<div class="left">
			<label for="datumPotpisivanjaUgovora">Datum potpisivanja ugovora: </label>
			<input type="text" value="" name="datumPotpisivanjaUgovora" id="datumPotpisivanjaUgovora" class="small" />



			<label for="ugovoreniPostotak">Ugovoren postotak brutto prihoda za najam [%]: </label>
			<input type="text" value="" name="ugovoreniPostotak" id="ugovoreniPostotak" class="small" />
		</div>

		<div class="right">
		
			<form id="pdfForm4" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf4">
			<label>Ponuda (PDF):</label> 
			<input type="file" name="pdf" id="ponudaFile" />
			</form>
			<div id="previewponuda" class="obrub preview-pane">
			</div>


			<form id="pdfForm5" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf5">
			<label>Ugovor s vlasnikom (PDF):</label> 
			<input type="file" name="pdf" id="ugovorSvlasnikomFile" />
			</form>
			<div id="previewugovorSvlasnikom" class="obrub preview-pane">
			</div>
		</div>

		
	</div><!--/ugovor-->

	<div class="save-cancel clearfix">
		<input type="hidden" value="Spremljeno" id="spremljeno" name="spremljeno" />
		<input type="submit" id="spremi" value="Spremi" class="save" />

		<input type="button" id="odustani" value ="Odustani" class="cancel" />
	</div><!--save-cancel-->
</div>
<div id="lid"></div>
