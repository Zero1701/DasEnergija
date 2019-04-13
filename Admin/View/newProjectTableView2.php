<h1 class="kreiraj-title">Kreiraj novi projekt</h1>
<div id="form2" method="get" class="new-project-form">

<div class="evenp clearfix">

	<div class="left">
		<label for="prikljucnaSnagaSustava">Priključna snaga sustava [kW]: </label>
		<input type="text" value="" name="prikljucnaSnagaSustava" id="prikljucnaSnagaSustava" class="small" />



		<label for="tipPostrojenja">Tip postrojenja: </label>
		<select id="tipPostrojenja" name="tipPostrojenja" class="large">
		<option value="Neintegrirano">Neintegrirano</option>
		<option value="Neintegrirano do 10 kW">Neintegrirano do 10 kW</option>
		<option value="Integrirano">Integrirano</option>
		<option value="Integrirano uz grijanje">Integrirano uz grijanje</option>
		</select>



		<label for="tipModula">Tip modula: </label>
		<input type="text" value="" name="tipModula" id="tipModula" class="large" />



		<label for="brojModula">Broj modula: </label>
		<input type="text" value="" name="brojModula" id="brojModula" class="small" />



		<label for="ukupnaPovrsinaModula">Ukupna površina modula [m2]: </label>
		<input type="text" value="" name="ukupnaPovrsinaModula" id="ukupnaPovrsinaModula" class="small" />
	

	
		<label for="ukupnaZauzetaPovrsina">Ukupna zauzeta površina [m2]: </label>
		<input type="text" value="" name="ukupnaZauzetaPovrsina" id="ukupnaZauzetaPovrsina" class="small" />



		<label for="ocekivanaGodisnjaProizvodnja">Očekivana godišnja proizvodnja [kWh/god]: </label>
		<input type="text" value="" name="ocekivanaGodisnjaProizvodnja" id="ocekivanaGodisnjaProizvodnja" class="small" />

		
	</div>
		

	
	<div class="right">
		<form id="zipForm1" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxzip.php?tip=zip1">
		<label>Projekt "Nacrti" (ZIP):</label> 
		<input type="file" name="zip" id="zip1File" />
		</form>
		<div id="previewzip1" class="obrub">
		</div>

		<form id="zipForm2" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxzip.php?tip=zip2">
		<label>Projekt "Tekst" (ZIP):</label> 
		<input type="file" name="zip" id="zip2File" />
		</form>
		<div id="previewzip2" class="obrub">
		</div>
	</div>
</div><!--/opci-podaci-->


<div class="oddp clearfix">
	<div class="left">
		<label for="datumPodnosenjaZahtjevaZaIzdavanjeTEP">Datum podnošenja zahtjeva za izdavanje TEP: </label>
		<input type="text" value="" name="datumPodnosenjaZahtjevaZaIzdavanjeTEP" id="datumPodnosenjaZahtjevaZaIzdavanjeTEP" class="small" />

		<label for="datumIshodenjaTEP">Datum ishođenja TEP: </label>
		<input type="text" value="" name="datumIshodenjaTEP" id="datumIshodenjaTEP" class="small" />

		<label for="datumPodnosenjaZahtjevaZaIzdavanjePEES">Datum podnošenja zahtjeva za izdavanje PEES: </label>
		<input type="text" value="" name="datumPodnosenjaZahtjevaZaIzdavanjePEES" id="datumPodnosenjaZahtjevaZaIzdavanjePEES" class="small"/>

		<label for="datumIshodenjaPEES">Datum ishođenja PEES: </label>
		<input type="text" value="" name="datumIshodenjaPEES" id="datumIshodenjaPEES" class="small" />
	</div>

<div class="right">
	<form id="pdfForm6" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf6">
	<label>Zahtjev za izdavanje TEP (PDF):</label> 
	<input type="file" name="pdf" id="pdf6File" />
	</form>
	<div id="previewpdf6" class="obrub">
	</div>

	<form id="pdfForm7" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf7">
	<label>TEP (PDF):</label> 
	<input type="file" name="pdf" id="pdf7File" />
	</form>
	<div id="previewpdf7" class="obrub">
	</div>

	<form id="pdfForm8" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf8">
	<label>Zahtjev za izdavanje PEES (PDF):</label> 
	<input type="file" name="pdf" id="pdf8File" />
	</form>
	<div id="previewpdf8" class="obrub">
	</div>
	
	<form id="pdfForm9" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf9">
	<label>PEES (PDF):</label> 
	<input type="file" name="pdf" id="pdf9File" />
	</form>
	<div id="previewpdf9" class="obrub">
	</div>


	<form id="pdfForm10" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf10">
	<label>Predugovor o priključenju (PDF):</label> 
	<input type="file" name="pdf" id="pdf10File" />
	</form>
	<div id="previewpdf10" class="obrub">
	</div>
	


	<form id="pdfForm11" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf11">
	<label>Ugovor o priključenju (PDF):</label> 
	<input type="file" name="pdf" id="pdf11File" />
	</form>
	<div id="previewpdf11" class="obrub">
	</div>
</div>
	
</div><!--krov-->

<div class="evenp clearfix">
	<div class="left">
		<label for="datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci">Datum podnošenja zahtjeva za sklapanje ugovora o isporuci: </label>
		<input type="text" value="" name="datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci" id="datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci" />
	
	


		<label for="datumIshodenjaUgovoraOIsporuci">Datum ishođenja ugovora o isporuci: </label>
		<input type="text" value="" name="datumIshodenjaUgovoraOIsporuci" id="datumIshodenjaUgovoraOIsporuci" />

	

	
		<label for="ugovorniIzvodacRadova">Ugovorni izvođač radova: </label>
		<input type="text" value="" name="ugovorniIzvodacRadova" id="ugovorniIzvodacRadova" />


	
		<label for="datumSklapanjaUgovoraOIzvodenjuRadova">Datum sklapanja ugovora o izvođenju radova: </label>
		<input type="text" value="" name="datumSklapanjaUgovoraOIzvodenjuRadova" id="datumSklapanjaUgovoraOIzvodenjuRadova" />
	
	

	
		<label for="datumPocetkaIzvodenjaRadova">Datum početka izvođenja radova: </label>
		<input type="text" value="" name="datumPocetkaIzvodenjaRadova" id="datumPocetkaIzvodenjaRadova" />
	


		<label for="datumZavrsetkaIzvodenjaRadova">Datum završetka izvođenja radova: </label>
		<input type="text" value="" name="datumZavrsetkaIzvodenjaRadova" id="datumZavrsetkaIzvodenjaRadova" />
	


		<label for="datumPodnosenjaZahtjevaZaIzdavanjeEES">Datum podnošenja zahtjeva za izdavanje EES: </label>
		<input type="text" value="" name="datumPodnosenjaZahtjevaZaIzdavanjeEES" id="datumPodnosenjaZahtjevaZaIzdavanjeEES" />

	

	
		<label for="brojMjernogMjesta">Broj mjernog mjesta [OMG]: </label>
		<input type="text" value="" name="brojMjernogMjesta" id="brojMjernogMjesta" />
	

	
		<label for="datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije">Datum početka primjene ugovora o isporuci električne energije
		[datum trajnog priključenja elektrane na mrežu i predaje energije u sustav]: </label>
		<input type="text" value="" name="datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije" id="datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije" />



		<label for="provizija">Provizija [%]: </label>
		<input type="text" value="" name="provizija" id="provizija" />

		<label for="datumIshodenjaEES">Datum ishođenja EES: </label>
		<input type="text" value="" name="datumIshodenjaEES" id="datumIshodenjaEES" />
	</div>

	<div class="right">
		<form id="pdfForm12" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf12">
		<label>Zahtjev za ugovor o isporuci (PDF):</label> 
		<input type="file" name="pdf" id="pdf12File" />
		</form>
		<div id="previewpdf12" class="obrub">
		</div>

		<form id="pdfForm13" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf13">
		<label>Ugovor o isporuci električne energije (PDF):</label> 
		<input type="file" name="pdf" id="pdf13File" />
		</form>
		<div id="previewpdf13" class="obrub">
		</div>

		<form id="pdfForm14" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf14">
		<label>Ugovor o izvođenju radova (PDF):</label> 
		<input type="file" name="pdf" id="pdf14File" />
		</form>
		<div id="previewpdf14" class="obrub">
		</div>

		
		<form id="pdfForm15" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf15">
		<label>Zahtjev za izdavanje EES (PDF):</label> 
		<input type="file" name="pdf" id="pdf15File" />
		</form>
		<div id="previewpdf15" class="obrub">
		</div>

		<form id="pdfForm16" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf16">
		<label>EES (PDF):</label> 
		<input type="file" name="pdf" id="pdf16File" />
		</form>
		<div id="previewpdf16" class="obrub">
		</div>
	</div>

</div><!--/katastar-->

	<div class="save-cancel clearfix">
		<input type="submit" id="spremi" value="Spremi" class="save" />
		<input type="button" id="odustani" value ="Odustani" class="cancel" />
	</div><!--/save-cancel-->
</div>
<?php //-----------------------------------------------PDF forme----------------------------------------------------------------------------?>




























<?php //-----------------------------------------------Kraj PDF formi----------------------------------------------------------------------------?>

<?php //-----------------------------------------------Zip forme----------------------------------------------------------------------------?>


<?php //-----------------------------------------------Kraj Zip formi----------------------------------------------------------------------------?>


