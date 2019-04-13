<?php
if(!isset($_SESSION)) {
	session_start();
}

include_once $_SESSION['BASE_PATH']  . '/Admin/Ajax/projectVariable2.php';

if($uid !=""){
	$queryCheck = "SELECT * FROM `project1admin` WHERE `idProject_FK` = " . $lastProjectId;
	$result = mysql_query($queryCheck);
	$num_rows = mysql_num_rows($result);
	if( $num_rows == 0 )
	{
		$queryInsert = "insert into `project1admin` (`idProject_FK`,`DOE`,`DOC`) values (" . $lastProjectId . ",NOW(),NOW())";
		mysql_query($queryInsert);
		
	}
	
	$query1 ="update `project1admin` set `PowerSupplySystem` = " . $prikljucnaSnagaSustava . ",`PlantType` = '" . $tipPostrojenja . "', " .
	"`ModuleType` = '" . $tipModula . "',`ModuleNum` = " . $brojModula . ", `TotalModuleSurface` = " . $ukupnaPovrsinaModula . " , " .
	"`TotalSurfaceOccupied` = " . $ukupnaZauzetaPovrsina . ",`ExpectedAnnualProduction` = " . $ocekivanaGodisnjaProizvodnja . " , " .
	"`DateOfTEPSubmission` = " . $datumPodnosenjaZahtjevaZaIzdavanjeTEP . ",`DateOfTEPObtaining` = " . $datumIshodenjaTEP . ", " .
	"`DateOfPEESSubmission` = " . $datumPodnosenjaZahtjevaZaIzdavanjePEES . ",`DateOfPEESObtaining` = " . $datumIshodenjaPEES . ", " .
	"`DateOfReqForDeliveryCont` = " . $datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci . ",`DateOfObtainingDeliveryCont` = " . $datumIshodenjaUgovoraOIsporuci . ", " .
	"`ContractualContractor` = '" . $ugovorniIzvodacRadova . "',`DateOfConclOfWorkCont` = " . $datumSklapanjaUgovoraOIzvodenjuRadova . ", " .
	"`WorkCommencementDate` = " . $datumPocetkaIzvodenjaRadova . ",`WorkConclusionDate` = " . $datumZavrsetkaIzvodenjaRadova . ", " . 
	"`DateOfEESSubmission` = " . $datumPodnosenjaZahtjevaZaIzdavanjeEES . ",`DateOfEESObtaining` = " . $datumIshodenjaEES . ", " .
	"`NumMeteringPoint` = " . $brojMjernogMjesta . ",`DateBeginElectContractDelivery` = " . $datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije . ", " .
	"`Commision` = " . $provizija . ",`DOC` = NOW() where `idProject_FK` = " . $lastProjectId;
	
	mysql_query($query1);

	$ioldPath = $_SESSION['BASE_PATH'] . '/ProjectImage/' . $_SESSION['UserId'] . '/temp/';
	$ipath = $_SESSION['BASE_PATH'] . '/ProjectImage/' . $_SESSION['UserId'] . '/' . $lastProjectId . '/';
	$imkpath = $_SESSION['BASE_PATH'] . '/ProjectImage/' . $_SESSION['UserId'] . '/' . $lastProjectId;

	$poldPath = $_SESSION['BASE_PATH'] . '/PdfDocuments/' . $_SESSION['UserId'] . '/temp/';
	$ppath = $_SESSION['BASE_PATH'] . '/PdfDocuments/' . $_SESSION['UserId'] . '/' . $lastProjectId . '/';
	$pmkpath = $_SESSION['BASE_PATH'] . '/PdfDocuments/' . $_SESSION['UserId'] . '/' . $lastProjectId;
	
	 function updatePdf($pdf,$broj,$lastProjectId){
	 	
		if($pdf != ""){
			unlink($ipath . ${'pdf' . $brojPdf . 'original'});
			if($pdf == "obrisano") $pdf = "";
			$queryAttach = "update `attachment1` set `AttachmentPath` = '" . $pdf . "' where `ContentType` = 'pdf" . $broj . "' and `idProject_FK` = " . $lastProjectId;
			mysql_query($queryAttach);
			
		}
	}
	
	function updateZip($zip,$broj,$lastProjectId){
		 
		if($zip != ""){
			unlink($ipath . ${'zip' . $brojzip . 'original'});
			if($zip == "obrisano") $zip = "";
			$queryAttach = "update `attachment1` set `AttachmentPath` = '" . $zip . "' where `ContentType` = 'zip" . $broj . "' and `idProject_FK` = " . $lastProjectId;
			mysql_query($queryAttach);
				
		}
	}
	
	updatePdf($pdf6,6,$lastProjectId);
	updatePdf($pdf7,7,$lastProjectId);
	updatePdf($pdf8,8,$lastProjectId);
	updatePdf($pdf9,9,$lastProjectId);
	updatePdf($pdf10,10,$lastProjectId);
	updatePdf($pdf11,11,$lastProjectId);
	updatePdf($pdf12,12,$lastProjectId);
	updatePdf($pdf13,13,$lastProjectId);
	updatePdf($pdf14,14,$lastProjectId);
	updatePdf($pdf15,15,$lastProjectId);
	updatePdf($pdf16,16,$lastProjectId);
	
	updateZip($zip1, 1, $lastProjectId);
	updateZip($zip2, 2, $lastProjectId);
	
	//---------------------------------------------------------------------------------------------------------------
	if(is_dir($ioldPath)){
		if(!is_dir($ipath)){
			mkdir($imkpath, 0755,true);
		}
		$files = scandir($ioldPath);
		// Identify directories
		$source = $ioldPath;
		$destination = $ipath;
		// Cycle through all source files
		foreach ($files as $file) {
			if (in_array($file, array(".",".."))) continue;
			// If we copied this successfully, mark it for deletion
			if (copy($source.$file, $destination.$file)) {
				$delete[] = $source.$file;
			}
		}
		// Delete all successfully-copied files
		foreach ($delete as $file) {
			unlink($file);
		}
		rmdir($ioldPath);
	}
	//----------------------------------------------------------------------------------------------------------------
	if(is_dir($poldPath)){
		if(!is_dir($ppath)){
			mkdir($pmkpath, 0755,true);
		}
		$files = scandir($poldPath);
		// Identify directories
		$source = $poldPath;
		$destination = $ppath;
		// Cycle through all source files
		foreach ($files as $file) {
			if (in_array($file, array(".",".."))) continue;
			// If we copied this successfully, mark it for deletion
			if (copy($source.$file, $destination.$file)) {
				$delete[] = $source.$file;
			}
		}
		// Delete all successfully-copied files
		foreach ($delete as $file) {
			unlink($file);
		}
		rmdir($poldPath);
	}
	//-----------------------------------------------------------------------------------------------------------

}
