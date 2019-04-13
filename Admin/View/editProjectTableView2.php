<h1 class="kreiraj-title">Uredi projekt</h1>
<p class="korisnik"><strong>Korisnik:</strong> <?php echo $_SESSION['ProjectUserName'] . " " . $_SESSION['ProjectUserLastName'] ;?></p>
<ul class="stranice clearfix">
	<li class="first"><a href="<?php echo $_SESSION['SITE_URL'] . '/Admin/ProjectEdit/index.php?id=' . $_GET['id'];?>" >Stranica 1</a></li>
	<li class="active"><a href="<?php echo $_SESSION['SITE_URL'] . '/Admin/ProjectEdit2/index.php?id=' . $_GET['id'];?>" >Stranica 2</a></li>
</ul>
<div id="form2" class="new-project-form">
	<div class="evenp clearfix">
	<div class="left">
		<label for="prikljucnaSnagaSustava">Priključna snaga sustava [kW]: </label>
		<input type="text" value="<?php echo trim($td['PowerSupplySystem']);?>" name="prikljucnaSnagaSustava" id="prikljucnaSnagaSustava" class="small" />



		<label for="tipPostrojenja">Tip postrojenja: </label>
		<select id="tipPostrojenja" name="tipPostrojenja" class="large">
		<option <?php if (trim($td['PlantType']) == "Neintegrirano") { echo 'selected="selected"'; }?> value="Neintegrirano">Neintegrirano</option>
		<option <?php if (trim($td['PlantType']) == "Neintegrirano do 10 kW") { echo 'selected="selected"'; }?> value="Neintegrirano do 10 kW">Neintegrirano do 10 kW</option>
		<option <?php if (trim($td['PlantType']) == "Integrirano") { echo 'selected="selected"'; }?> value="Integrirano">Integrirano</option>
		<option <?php if (trim($td['PlantType']) == "Integrirano uz grijanje") { echo 'selected="selected"'; }?> value="Integrirano uz grijanje">Integrirano uz grijanje</option>
		</select>



		<label for="tipModula">Tip modula: </label>
		<input type="text" value="<?php echo trim($td['ModuleType']);?>" name="tipModula" id="tipModula" class="large" />



		<label for="brojModula">Broj modula: </label>
		<input type="text" value="<?php echo trim($td['ModuleNum']);?>" name="brojModula" id="brojModula" class="small" />



		<label for="ukupnaPovrsinaModula">Ukupna površina modula [m2]: </label>
		<input type="text" value="<?php echo trim($td['TotalModuleSurface']);?>" name="ukupnaPovrsinaModula" id="ukupnaPovrsinaModula" class="small" />


		<label for="ukupnaZauzetaPovrsina">Ukupna zauzeta površina [m2]: </label>
		<input type="text" value="<?php echo trim($td['TotalSurfaceOccupied']);?>" name="ukupnaZauzetaPovrsina" id="ukupnaZauzetaPovrsina" class="small" />



		<label for="ocekivanaGodisnjaProizvodnja">Očekivana godišnja proizvodnja [kWh/god]: </label>
		<input type="text" value="<?php echo trim($td['ExpectedAnnualProduction']);?>" name="ocekivanaGodisnjaProizvodnja" id="ocekivanaGodisnjaProizvodnja" class="small"/>
	</div><!--/left-->

	<div class="right">
		
		<?php if(isset($attachments[11]['AttachmentPath']) && trim($attachments[11]['AttachmentPath']) != ""){?>
		<div id="zip1prostorZaFormu"></div>
		<div id="previewzip1" class="obrub clearfix prevdiv">
		<label>Projekt "Nacrti" (ZIP):</label>
			<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/256.png';?>" class="preview" />
			<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[11]['AttachmentPath'])?>">Download</a>
			<input type="button" id="zip1obrisi" value="Obriši" class="obrisi"  />
		</div>
		<input type="hidden" id="zip1original" name="zip1original" value="<?php echo trim($attachments[11]['AttachmentPath']);?>" />
		<?php } else { ?>
		<form id="zipForm1" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxzip.php?tip=zip1">
			<label>Projekt "Nacrti" (ZIP):</label> <input type="file" name="zip" id="zip1File" />
			<div id="previewzip1" class="obrub"></div>
		</form>
		<?php } ?>

		
		<?php if(isset($attachments[12]['AttachmentPath']) && trim($attachments[12]['AttachmentPath']) != ""){?>
		<div id="zip2prostorZaFormu"></div>
		<div id="previewzip2" class="obrub clearfix prevdiv">
			<label>Projekt "Tekst" (ZIP):</label>
			<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/256.png';?>" class="preview" />
			<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[12]['AttachmentPath'])?>">Download</a>
			<input type="button" id="zip2obrisi" value="Obriši" class="obrisi"  />
		</div>		
		<input type="hidden" id="zip2original" name="zip2original" value="<?php echo trim($attachments[12]['AttachmentPath']);?>" />
		<?php } else { ?>
		<form id="zipForm2" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxzip.php?tip=zip2">
			<label>Projekt "Tekst" (ZIP):</label> <input type="file" name="zip" id="zip2File" />
			<div id="previewzip2" class="obrub"></div>
		</form>
		<?php } ?>
	</div><!--/right-->

</div><!--/opci-podaci-->


<div class="oddp clearfix">

	<div class="left">
		<label for="datumPodnosenjaZahtjevaZaIzdavanjeTEP">Datum podnošenja zahtjeva za izdavanje TEP: </label>
		<input type="text" value="<?php if (!empty($td['DateOfTEPSubmission'])) echo date("d.m.Y.",strtotime(trim($td['DateOfTEPSubmission'])));?>" name="datumPodnosenjaZahtjevaZaIzdavanjeTEP" id="datumPodnosenjaZahtjevaZaIzdavanjeTEP" class="small" />

		<label for="datumIshodenjaTEP">Datum ishođenja TEP: </label>
		<input type="text" value="<?php if (!empty($td['DateOfTEPObtaining'])) echo date("d.m.Y.",strtotime(trim($td['DateOfTEPObtaining'])));?>" name="datumIshodenjaTEP" id="datumIshodenjaTEP" class="small" />

		<label for="datumPodnosenjaZahtjevaZaIzdavanjePEES">Datum podnošenja zahtjeva za izdavanje PEES: </label>
		<input type="text" value="<?php if (!empty($td['DateOfPEESSubmission'])) echo date("d.m.Y.",strtotime(trim($td['DateOfPEESSubmission'])));?>" name="datumPodnosenjaZahtjevaZaIzdavanjePEES" id="datumPodnosenjaZahtjevaZaIzdavanjePEES" class="small" />

		<label for="datumIshodenjaPEES">Datum ishođenja PEES: </label>
		<input type="text" value="<?php  if (!empty($td['DateOfPEESObtaining'])) echo date("d.m.Y.",strtotime(trim($td['DateOfPEESObtaining'])));?>" name="datumIshodenjaPEES" id="datumIshodenjaPEES" class="small" />
	</div><!--/left-->

	<div class="right">

		
		<?php if(isset($attachments[0]['AttachmentPath']) && trim($attachments[0]['AttachmentPath']) != ""){?>
		<div id="pdf6prostorZaFormu"></div>
		<div id="previewpdf6" class="obrub clearfix prevdiv">
			<label>Zahtjev za izdavanje TEP (PDF):</label>
			<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/pdf transparent.gif';?>" class="preview" />
			<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[0]['AttachmentPath'])?>">Download</a>
			<input type="button" id="pdf6obrisi" value="Obriši" class="obrisi"  />
		</div>
		<input type="hidden" id="pdf6original" name="pdf6original" value="<?php echo trim($attachments[0]['AttachmentPath']);?>" />
		
		<?php } else { ?>
		<form id="pdfForm6" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf6">
			<label>Zahtjev za izdavanje TEP (PDF):</label> <input type="file" name="pdf" id="pdf6File" />
			<div id="previewpdf6" class="obrub"></div>
		</form>
		<?php } ?>





		
		<?php if(isset($attachments[1]['AttachmentPath']) && trim($attachments[1]['AttachmentPath']) != ""){?>
		<div id="pdf7prostorZaFormu"></div>
		<div id="previewpdf7" class="obrub prevdiv clearfix">
			<label>TEP (PDF):</label>
			<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/pdf transparent.gif';?>" class="preview" />
			<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[1]['AttachmentPath'])?>">Download</a>
			<input type="button" id="pdf7obrisi" value="Obriši" class="obrisi"  />
		</div>
		<input type="hidden" id="pdf7original" name="pdf7original" value="<?php echo trim($attachments[1]['AttachmentPath']);?>" />
		<?php } else { ?>
		<form id="pdfForm7" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf7">
			<label>TEP (PDF):</label> <input type="file" name="pdf" id="pdf7File" />
			<div id="previewpdf7" class="obrub"></div>
		</form>
		<?php } ?>

		



		
		<?php if(isset($attachments[2]['AttachmentPath']) && trim($attachments[2]['AttachmentPath']) != ""){?>
		<div id="pdf8prostorZaFormu"></div>
		<div id="previewpdf8" class="obrub prevdiv clearfix">
			<label>Zahtjev za izdavanje PEES (PDF):</label>
			<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/pdf transparent.gif';?>" class="preview" />
			<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[2]['AttachmentPath'])?>">Download</a>
			<input type="button" id="pdf8obrisi" value="Obriši" class="obrisi"  />
		</div>
		<input type="hidden" id="pdf8original" name="pdf8original" value="<?php echo trim($attachments[2]['AttachmentPath']);?>" />
		<?php } else { ?>
		<form id="pdfForm8" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf8">
			<label>Zahtjev za izdavanje PEES (PDF):</label> <input type="file" name="pdf" id="pdf8File" />
			<div id="previewpdf8" class="obrub"></div>
		</form>
		<?php } ?>




		
		<?php if(isset($attachments[3]['AttachmentPath']) && trim($attachments[3]['AttachmentPath']) != ""){?>
		<div id="pdf9prostorZaFormu"></div>
		<div id="previewpdf9" class="obrub clearfix prevdiv">
			<label>PEES (PDF):</label> 
			<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/pdf transparent.gif';?>" class="preview" />
			<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[3]['AttachmentPath'])?>">Download</a>
			<input type="button" id="pdf9obrisi" value="Obriši" class="obrisi"  />
		</div>
		<input type="hidden" id="pdf9original" name="pdf9original" value="<?php echo trim($attachments[3]['AttachmentPath']);?>" />
		<?php } else { ?>
		<form id="pdfForm9" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf9">
			<label>PEES (PDF):</label> <input type="file" name="pdf" id="pdf9File" />
			<div id="previewpdf9" class="obrub"></div>
		</form>
		<?php } ?>

		

		
		<?php if(isset($attachments[4]['AttachmentPath']) && trim($attachments[4]['AttachmentPath']) != ""){?>
		<div id="pdf10prostorZaFormu"></div>
		<div id="previewpdf10" class="obrub prevdiv clearfix">
			<label>Predugovor o priključenju (PDF):</label>
			<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/pdf transparent.gif';?>" class="preview" />
			<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[4]['AttachmentPath'])?>">Download</a>
			<input type="button" id="pdf10obrisi" value="Obriši" class="obrisi"  />
		</div>
		<input type="hidden" id="pdf10original" name="pdf10original" value="<?php echo trim($attachments[4]['AttachmentPath']);?>" />
		<?php } else { ?>
		<form id="pdfForm10" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf10">
			<label>Predugovor o priključenju (PDF):</label> <input type="file" name="pdf" id="pdf10File" />
			<div id="previewpdf10" class="obrub"></div>
		</form>
		<?php } ?>

		
		<?php if(isset($attachments[5]['AttachmentPath']) && trim($attachments[5]['AttachmentPath']) != ""){?>
		<div id="pdf11prostorZaFormu"></div>
		<div id="previewpdf11" class="obrub clearfix prevdiv">
			<label>Ugovor o priključenju (PDF):</label>
			<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/pdf transparent.gif';?>" class="preview" />
			<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[5]['AttachmentPath'])?>">Download</a>
			<input type="button" id="pdf11obrisi" value="Obriši" class="obrisi"  />
		</div>
		<input type="hidden" id="pdf11original" name="pdf11original" value="<?php echo trim($attachments[5]['AttachmentPath']);?>" /><?php } else { ?>
		<form id="pdfForm11" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf11">
			<label>Ugovor o priključenju (PDF):</label> <input type="file" name="pdf" id="pdf11File" />
			<div id="previewpdf11" class="obrub"></div>
		</form>
		<?php } ?>
	</div><!--/right-->
</div><!--/krov-->

<div class="evenp clearfix">
	<div class="left">
		<label for="datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci">Datum podnošenja zahtjeva za sklapanje ugovora o isporuci: </label>
		<input type="text" value="<?php if (!empty($td['DateOfReqForDeliveryCont'])) echo date("d.m.Y.",strtotime(trim($td['DateOfReqForDeliveryCont'])));?>" name="datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci" id="datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci" class="small" />
		
		<label for="datumIshodenjaUgovoraOIsporuci">Datum ishođenja ugovora o isporuci: </label>
		<input type="text" value="<?php if (!empty($td['DateOfObtainingDeliveryCont']))  echo date("d.m.Y.",strtotime(trim($td['DateOfObtainingDeliveryCont'])));?>" name="datumIshodenjaUgovoraOIsporuci" id="datumIshodenjaUgovoraOIsporuci" class="small" />
		
		<label for="ugovorniIzvodacRadova">Ugovorni izvođač radova: </label>
		<input type="text" value="<?php echo trim($td['ContractualContractor']);?>" name="ugovorniIzvodacRadova" id="ugovorniIzvodacRadova" class="large" />

		<label for="datumSklapanjaUgovoraOIzvodenjuRadova">Datum sklapanja ugovora o izvođenju radova: </label>
		<input type="text" value="<?php if (!empty($td['DateOfConclOfWorkCont'])) echo date("d.m.Y.",strtotime(trim($td['DateOfConclOfWorkCont'])));?>" name="datumSklapanjaUgovoraOIzvodenjuRadova" id="datumSklapanjaUgovoraOIzvodenjuRadova" class="small" />
		
		<label for="datumPocetkaIzvodenjaRadova">Datum početka izvođenja radova: </label>
		<input type="text" value="<?php if (!empty($td['WorkCommencementDate'])) echo date("d.m.Y.",strtotime(trim($td['WorkCommencementDate'])));?>" name="datumPocetkaIzvodenjaRadova" id="datumPocetkaIzvodenjaRadova" class="small" />

		<label for="datumZavrsetkaIzvodenjaRadova">Datum završetka izvođenja radova: </label>
		<input type="text" value="<?php if (!empty($td['WorkConclusionDate'])) echo date("d.m.Y.",strtotime(trim($td['WorkConclusionDate'])));?>" name="datumZavrsetkaIzvodenjaRadova" id="datumZavrsetkaIzvodenjaRadova" class="small" />

		<label for="datumPodnosenjaZahtjevaZaIzdavanjeEES">Datum podnošenja zahtjeva za izdavanje EES: </label>
		<input type="text" value="<?php if (!empty($td['DateOfEESSubmission'])) echo date("d.m.Y.",strtotime(trim($td['DateOfEESSubmission'])));?>" name="datumPodnosenjaZahtjevaZaIzdavanjeEES" id="datumPodnosenjaZahtjevaZaIzdavanjeEES" class="small" />
		
		<label for="datumIshodenjaEES">Datum ishođenja EES: </label>
		<input type="text" value="<?php if (!empty($td['DateOfEESObtaining'])) echo date("d.m.Y.",strtotime(trim($td['DateOfEESObtaining'])));?>" name="datumIshodenjaEES" id="datumIshodenjaEES" class="small" />

		<label for="brojMjernogMjesta">Broj mjernog mjesta [OMG]: </label>
		<input type="text" value="<?php echo trim($td['NumMeteringPoint']);?>" name="brojMjernogMjesta" id="brojMjernogMjesta" class="small" />



		<label for="datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije">Datum početka primjene ugovora o isporuci električne energije
		[datum trajnog priključenja elektrane na mrežu i predaje energije u sustav]: </label>
		<input type="text" value="<?php if (!empty($td['DateBeginElectContractDelivery'])) echo date("d.m.Y.",strtotime(trim($td['DateBeginElectContractDelivery'])));?>" name="datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije" id="datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije" class="small" />



		<label for="provizija">Provizija [%]: </label>
		<input type="text" value="<?php echo trim($td['Commision']);?>" name="provizija" id="provizija" class="small" />
	</div><!--/left-->

	<div class="right">
		
		<?php if(isset($attachments[6]['AttachmentPath']) && trim($attachments[6]['AttachmentPath']) != ""){?>
		<div id="pdf12prostorZaFormu"></div>
		<div id="previewpdf12" class="obrub clearfix prevdiv">
			<label>Zahtjev za ugovor o isporuci (PDF):</label> 
			<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/pdf transparent.gif';?>" class="preview" />
			<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[6]['AttachmentPath'])?>">Download</a>
			<input type="button" id="pdf12obrisi" value="Obriši" class="obrisi"  />
		</div>
		<input type="hidden" id="pdf12original" name="pdf12original" value="<?php echo trim($attachments[6]['AttachmentPath']);?>" />
		
		<?php } else { ?>
		<form id="pdfForm12" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf12">
			<label>Zahtjev za ugovor o isporuci (PDF):</label> <input type="file" name="pdf" id="pdf12File" />
			<div id="previewpdf12" class="obrub"></div>
		</form>
		<?php } ?>




		
		<?php if(isset($attachments[7]['AttachmentPath']) && trim($attachments[7]['AttachmentPath']) != ""){?>
		<div id="pdf13prostorZaFormu"></div>
		<div id="previewpdf13" class="obrub clearfix prevdiv">
			<label>Ugovor o isporuci električne energije (PDF):</label>
			<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/pdf transparent.gif';?>" class="preview" />
			<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[7]['AttachmentPath'])?>">Download</a>
			<input type="button" id="pdf13obrisi" value="Obriši" class="obrisi"  />
		</div>
		<input type="hidden" id="pdf13original" name="pdf13original" value="<?php echo trim($attachments[7]['AttachmentPath']);?>" />
		<?php } else { ?>
		<form id="pdfForm13" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf13">
			<label>Ugovor o isporuci električne energije (PDF):</label> <input type="file" name="pdf" id="pdf13File" />
			<div id="previewpdf13" class="obrub"></div>
		</form>
		<?php } ?>

		

		
		<?php if(isset($attachments[8]['AttachmentPath']) && trim($attachments[8]['AttachmentPath']) != ""){?>
		<div id="pdf14prostorZaFormu"></div>
		<div id="previewpdf14" class="obrub clearfix prevdiv">
			<label>Ugovor o izvođenju radova (PDF):</label>
			<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/pdf transparent.gif';?>" class="preview" />
			<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[8]['AttachmentPath'])?>">Download</a>
			<input type="button" id="pdf14obrisi" value="Obriši" class="obrisi"  />		
		</div>
		<input type="hidden" id="pdf14original" name="pdf14original" value="<?php echo trim($attachments[8]['AttachmentPath']);?>" />
		<?php } else { ?>
		<form id="pdfForm14" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf14">
			<label>Ugovor o izvođenju radova (PDF):</label> <input type="file" name="pdf" id="pdf14File" />
			<div id="previewpdf14" class="obrub"></div>
		</form>
		<?php } ?>


		
		<?php if(isset($attachments[9]['AttachmentPath']) && trim($attachments[9]['AttachmentPath']) != ""){?>
		<div id="pdf15prostorZaFormu"></div>
		<div id="previewpdf15" class="obrub clearfix prevdiv">
			<label>Zahtjev za izdavanje EES (PDF):</label> 
			<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/pdf transparent.gif';?>" class="preview" />
			<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[9]['AttachmentPath'])?>">Download</a>
			<input type="button" id="pdf15obrisi" value="Obriši" class="obrisi"  />
		</div>
		<input type="hidden" id="pdf15original" name="pdf15original" value="<?php echo trim($attachments[9]['AttachmentPath']);?>" />
		<?php } else { ?>
		<form id="pdfForm15" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf15">
			<label>Zahtjev za izdavanje EES (PDF):</label> <input type="file" name="pdf" id="pdf15File" />
			<div id="previewpdf15" class="obrub"></div>
		</form>
		<?php } ?>


		
		<?php if(isset($attachments[10]['AttachmentPath']) && trim($attachments[10]['AttachmentPath']) != ""){?>
		<div id="pdf16prostorZaFormu"></div>
		<div id="previewpdf16" class="obrub clearfix prevdiv">
			<label>EES (PDF):</label>
			<img alt="" src="<?php echo $_SESSION['SITE_URL'] . '/Picture/pdf transparent.gif';?>" class="preview" />
			<a href="<?php echo $_SESSION['SITE_URL']; ?>/Script/download.php?file=<?php echo $ppath . trim($attachments[10]['AttachmentPath'])?>">Download</a>
			<input type="button" id="pdf16obrisi" value="Obriši" class="obrisi"  />
		</div>
		<input type="hidden" id="pdf16original" name="pdf16original" value="<?php echo trim($attachments[10]['AttachmentPath']);?>" />
		<?php } else { ?>
		<form id="pdfForm16" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf16">
			<label>EES (PDF):</label> <input type="file" name="pdf" id="pdf16File" />
			<div id="previewpdf16" class="obrub"></div>
		</form>
		<?php } ?>
	</div><!--/right-->



</div><!--/katastar-->
<div class="save-cancel clearfix">
	<input type="submit" id="spremi" value="Spremi" class="save" />
	<input type="button" id="odustani" value ="Odustani" class="cancel" />
</div>

</div>



