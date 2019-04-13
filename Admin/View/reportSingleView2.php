<h1 class="kreiraj-title nomarg no-print">Pregled projekta [Stranica 2]</h1>
<p class="print-all no-print clearfix prilagodjen">
	<a class="print-single" href="javascript:window.print()">Ispis</a> <span>(Ispis će bti prilagođen veličini A4 papira)</span>
</p>

<ul class="stranice clearfix no-print">
	<li class="first"><a href="<?php echo $_SESSION['SITE_URL'] . '/Admin/ReportSingle/index.php?id=' . $_GET['id'];?>" >Stranica 1</a></li>
	<li class="active"><a href="<?php echo $_SESSION['SITE_URL'] . '/Admin/ReportSingle/index2.php?id=' . $_GET['id'];?>" >Stranica 2</a></li>
</ul>
<div id="form2" class="new-project-form print">


	<div class="evenp clearfix">
		<div class="left">

			<label for="prikljucnaSnagaSustava">Priključna snaga sustava [kW]: </label>
			<?php if(empty($td['PowerSupplySystem'])) {echo "Ne postoji";} else {echo trim($td['PowerSupplySystem']);}?>
			<div class="clearfix"></div>



			<label for="tipPostrojenja">Tip postrojenja: </label>
			<?php if(empty($td['PlantType'])) {echo "Tip postrojenja : Ne postoji";} else {echo trim($td['PlantType']);} ?>
			<div class="clearfix"></div>



			<label for="tipModula">Tip modula: </label>
			<?php if(empty($td['ModuleType'])) {echo "Ne postoji";} else {echo trim($td['ModuleType']);}?>
			<div class="clearfix"></div>


			<label for="brojModula">Broj modula: </label>
			<?php if(empty($td['ModuleNum'])) {echo "Ne postoji";} else {echo trim($td['ModuleNum']);}?>
			<div class="clearfix"></div>


			<label for="ukupnaPovrsinaModula">Ukupna površina modula [m2]: </label>
			<?php if(empty($td['TotalModuleSurface'])) {echo "Ne postoji";} else {echo trim($td['TotalModuleSurface']);}?>
			<div class="clearfix"></div>


			<label for="ukupnaZauzetaPovrsina">Ukupna zauzeta površina [m2]: </label>
			<?php if(empty($td['TotalSurfaceOccupied'])) {echo "Ne postoji";} else {echo trim($td['TotalSurfaceOccupied']);}?>
			<div class="clearfix"></div>


			<label for="ocekivanaGodisnjaProizvodnja">Očekivana godišnja proizvodnja [kWh/god]: </label>
			<?php if(empty($td['ExpectedAnnualProduction'])) {echo "Ne postoji";} else {echo trim($td['ExpectedAnnualProduction']);}?>
			<div class="clearfix"></div>
		</div><!--/left-->

		<div class="right">
			
				<label>Projekt "Nacrti" (ZIP):</label> 
			<?php if(isset($attachments[11]['AttachmentPath']) && trim($attachments[11]['AttachmentPath']) != ""){?>
			<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
			<?php } ?>
			<div class="clearfix"></div>

			
				<label>Projekt "Tekst" (ZIP):</label> 
			<?php if(isset($attachments[12]['AttachmentPath']) && trim($attachments[12]['AttachmentPath']) != ""){?>
			<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
			<?php } ?>
			<div class="clearfix"></div>
		</div>
	</div><!--/evenp-->

	<div class="oddp clearfix">

		<div class="left">
			<label for="datumPodnosenjaZahtjevaZaIzdavanjeTEP">Datum podnošenja zahtjeva za izdavanje TEP: </label>
			<?php if(empty($td['DateOfTEPSubmission'])) {echo "Ne postoji";} else {echo date("d.m.Y.",strtotime(trim($td['DateOfTEPSubmission'])));}?>
			<div class="clearfix"></div>
			<label for="datumIshodenjaTEP">Datum ishođenja TEP: </label>
			<?php if(empty($td['DateOfTEPObtaining'])) {echo "Ne postoji";} else {echo date("d.m.Y.",strtotime(trim($td['DateOfTEPObtaining'])));}?>
			<div class="clearfix"></div>
			<label for="datumPodnosenjaZahtjevaZaIzdavanjePEES">Datum podnošenja zahtjeva za izdavanje PEES: </label>
			<?php if(empty($td['DateOfPEESSubmission'])) {echo "Ne postoji";} else {echo date("d.m.Y.",strtotime(trim($td['DateOfPEESSubmission'])));}?>
			<div class="clearfix"></div>
			<label for="datumIshodenjaPEES">Datum ishođenja PEES: </label>
			<?php if(empty($td['DateOfPEESObtaining'])) {echo "Ne postoji";} else {echo date("d.m.Y.",strtotime(trim($td['DateOfPEESObtaining'])));}?>
			<div class="clearfix"></div>
		</div><!--/left-->

	<div class="right">
		
			<label>Zahtjev za izdavanje TEP (PDF):</label> 
		<?php if(isset($attachments[0]['AttachmentPath']) && trim($attachments[0]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
		<div class="clearfix"></div>


		


		
			<label>TEP (PDF):</label> 
		<?php if(isset($attachments[1]['AttachmentPath']) && trim($attachments[1]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
		<div class="clearfix"></div>



		


		
			<label>Zahtjev za izdavanje PEES (PDF):</label>
		<?php if(isset($attachments[2]['AttachmentPath']) && trim($attachments[2]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
		<div class="clearfix"></div>


		


		
			<label>PEES (PDF):</label> 
		<?php if(isset($attachments[3]['AttachmentPath']) && trim($attachments[3]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
		<div class="clearfix"></div>



		
			<label>Predugovor o priključenju (PDF):</label> 
		<?php if(isset($attachments[4]['AttachmentPath']) && trim($attachments[4]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
		<div class="clearfix"></div>

		
			<label>Ugovor o priključenju (PDF):</label>
		<?php if(isset($attachments[5]['AttachmentPath']) && trim($attachments[5]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
		<div class="clearfix"></div>
	</div><!--/right-->
</div><!--/oddp-->

<div class="evenp clearfix">

	<div class="left">
		<label for="datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci">Datum podnošenja zahtjeva za sklapanje ugovora o isporuci: </label>
		<?php if(empty($td['DateOfReqForDeliveryCont'])) {echo "Ne postoji";} else {echo date("d.m.Y.",strtotime(trim($td['DateOfReqForDeliveryCont'])));}?>
		<div class="clearfix"></div>
		<label for="datumIshodenjaUgovoraOIsporuci">Datum ishođenja ugovora o isporuci: </label>
		<?php if(empty($td['DateOfObtainingDeliveryCont'])) {echo "Ne postoji";} else {echo date("d.m.Y.",strtotime(trim($td['DateOfObtainingDeliveryCont'])));}?>
		<div class="clearfix"></div>
		<label for="ugovorniIzvodacRadova">Ugovorni izvođač radova: </label>
		<?php if(empty($td['ContractualContractor'])) {echo "Ne postoji";} else {echo trim($td['ContractualContractor']);}?>
		<div class="clearfix"></div>

		<label for="datumSklapanjaUgovoraOIzvodenjuRadova">Datum sklapanja ugovora o izvođenju radova: </label>
		<?php if(empty($td['DateOfConclOfWorkCont'])) {echo "Ne postoji";} else {echo date("d.m.Y.",strtotime(trim($td['DateOfConclOfWorkCont'])));}?>
		<div class="clearfix"></div>
		<label for="datumPocetkaIzvodenjaRadova">Datum početka izvođenja radova: </label>
		<?php if(empty($td['WorkCommencementDate'])) {echo "Ne postoji";} else {echo date("d.m.Y.",strtotime(trim($td['WorkCommencementDate'])));}?>
		<div class="clearfix"></div>
		<label for="datumZavrsetkaIzvodenjaRadova">Datum završetka izvođenja radova: </label>
		<?php if(empty($td['WorkConclusionDate'])) {echo "Ne postoji";} else {echo date("d.m.Y.",strtotime(trim($td['WorkConclusionDate'])));}?>
		<div class="clearfix"></div>
		<label for="datumPodnosenjaZahtjevaZaIzdavanjeEES">Datum podnošenja zahtjeva za izdavanje EES: </label>
		<?php if(empty($td['DateOfEESSubmission'])) {echo "Ne postoji";} else {echo date("d.m.Y.",strtotime(trim($td['DateOfEESSubmission'])));}?>
		<div class="clearfix"></div>
		<label for="datumIshodenjaEES">Datum ishođenja EES: </label>
		<?php if(empty($td['DateOfEESObtaining'])) {echo "Ne postoji";} else {echo date("d.m.Y.",strtotime(trim($td['DateOfEESObtaining'])));}?>
		<div class="clearfix"></div>
		<label for="brojMjernogMjesta">Broj mjernog mjesta [OMG]: </label>
		<?php if(empty($td['NumMeteringPoint'])) {echo "Ne postoji";} else {echo trim($td['NumMeteringPoint']);}?>
		<div class="clearfix"></div>


		<label for="datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije">Datum početka primjene ugovora o isporuci električne energije
		[datum trajnog priključenja elektrane na mrežu i predaje energije u sustav]: </label>
		<?php if(empty($td['DateBeginElectContractDelivery'])) {echo "Ne postoji";} else {echo date("d.m.Y.",strtotime(trim($td['DateBeginElectContractDelivery'])));}?>
		<div class="clearfix"></div>


		<label for="provizija">Provizija [%]: </label>
		<?php if(empty($td['Commision'])) {echo "Ne postoji";} else {echo trim($td['Commision']);}?>
		<div class="clearfix"></div>
	</div><!--/left-->

	<div class="right">
		
			<label>Zahtjev za ugovor o isporuci (PDF):</label> 
		<?php if(isset($attachments[6]['AttachmentPath']) && trim($attachments[6]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
		<div class="clearfix"></div>

		<div id="previewpdf13" class="obrub">
			<label>Ugovor o isporuci električne energije (PDF):</label> 
		<?php if(isset($attachments[7]['AttachmentPath']) && trim($attachments[7]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
		<div class="clearfix"></div>



	
			<label>Ugovor o izvođenju radova (PDF):</label>
		<?php if(isset($attachments[8]['AttachmentPath']) && trim($attachments[8]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
		<div class="clearfix"></div>


		
			<label>Zahtjev za izdavanje EES (PDF):</label> 
		<?php if(isset($attachments[9]['AttachmentPath']) && trim($attachments[9]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
		<div class="clearfix"></div>


		
			<label>EES (PDF):</label> 
		<?php if(isset($attachments[10]['AttachmentPath']) && trim($attachments[10]['AttachmentPath']) != ""){?>
		<span class='postoji'>Postoji</span>
			<?php } else {?>
			<span class='nepostoji'>Nepostoji</span>
		<?php } ?>
		<div class="clearfix"></div>

	</div><!--/right-->
</div>


		


</div>
