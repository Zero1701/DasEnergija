<?php
if(!isset($_SESSION)) {
	session_start();
}

include_once $_SESSION['BASE_PATH']  . '/User/Ajax/projectVariable.php';

if($uid !=""){
	$query1 = "update project1 set `ProjectName` = '" . $imeProjekta . "',`Street` = '" . $ulica . 
			"',`Location` = '" . $mjesto . "',`ZipCode` = '" . $postanskiBroj . "',`CadPlotNum` = " . $brojKatCestice .
			",`CadMunName` = '" . $imeKatOpcine . "',`ResLandBookCourtIn` = '" . $nadlezanZKodred .
			"',`PremisNumOfOwner` = " . $brojVlasnikaProstora . ",`NameNumOfOwner` = '" . $imeVlasnikaProstora . 
			"',`TitleSheetNum` = " . $brojPosjedovnogLista . ",`NumZKExcerpt` = " . $brojZKizvatka .
			",`RoofType` = '" . $vrstaKrova  . "',`RoofSize` = " . $velicinaKrova .
			",`RoofPitch` = " . $nagibKrova . ",`RoofOrientation` = " . $orijentacijaKrova .
			",`RoofWidth` = " . $sirinaKrova . ",`RoofHeight` = " . $duzinaKrova . 
			",`YearOfConRecon` = " . $godinaIzgradnje . ",`TypeOfCovMaterial` = '" . $vrstaPokrovnogMaterijala .
			"',`RoofOpacity` = '" . $zasjenjenostKrova . "',`LightDefSpace` = " . $prostorGromobranskeObrane .
			",`AccCapInvProtGear` = '" . $mogucnostSmjestajaIIZopreme . "',`ElecPowDistributor` = '" . $distributerElektricneEnergije .
			"',`DateOfContSigning` = " . $datumPotpisivanjaUgovora . ",`PercentageOfGrossIncome` = " . $ugovoreniPostotak .
			",`DOC` = NOW() where `idProject` = " . $PID;
	
	mysql_query($query1);
	
	$lastProjectId = $PID;
	
	$ioldPath = $_SESSION['BASE_PATH'] . '/ProjectImage/' . $uid . '/temp/';
	$ipath = $_SESSION['BASE_PATH'] . '/ProjectImage/' . $uid . '/' . $lastProjectId . '/';
	$imkpath = $_SESSION['BASE_PATH'] . '/ProjectImage/' . $uid . '/' . $lastProjectId;

	$poldPath = $_SESSION['BASE_PATH'] . '/PdfDocuments/' . $uid . '/temp/';
	$ppath = $_SESSION['BASE_PATH'] . '/PdfDocuments/' . $uid . '/' . $lastProjectId . '/';
	$pmkpath = $_SESSION['BASE_PATH'] . '/PdfDocuments/' . $uid . '/' . $lastProjectId;
	
	if($slika1 != ""){
		unlink($ipath . $slika1original);
		if($slika1 == "obrisano") $slika1 = "";
		$queryAttach = "update `attachment1` set `AttachmentPath` = '" . $slika1 . "' where `ContentType` = 'slika1' and `idProject_FK` = " . $lastProjectId;
	mysql_query($queryAttach);
	}
	
	if($slika2 != ""){
		unlink($ipath . $slika2original);
		if($slika2 == "obrisano") $slika2 = "";
		$queryAttach = "update `attachment1` set `AttachmentPath` = '" . $slika2 . "' where `ContentType` = 'slika2' and `idProject_FK` = " . $lastProjectId;
		mysql_query($queryAttach);
	}
	
	if($slika3 != ""){
		unlink($ipath . $slika3original);
		if($slika3 == "obrisano") $slika3 = "";
		$queryAttach = "update `attachment1` set `AttachmentPath` = '" . $slika3 . "' where `ContentType` = 'slika3' and `idProject_FK` = " . $lastProjectId;
		mysql_query($queryAttach);
	}
	
	if($slika4 != ""){
		unlink($ipath . $slika4original);
		if($slika4 == "obrisano") $slika4 = "";
		$queryAttach = "update `attachment1` set `AttachmentPath` = '" . $slika4 . "' where `ContentType` = 'slika4' and `idProject_FK` = " . $lastProjectId;
		mysql_query($queryAttach);
	}
	
	if($slika5 != ""){
		unlink($ipath . $slika5original);
		if($slika5 == "obrisano") $slika5 = "";
		$queryAttach = "update `attachment1` set `AttachmentPath` = '" . $slika5 . "' where `ContentType` = 'slika5' and `idProject_FK` = " . $lastProjectId;
		mysql_query($queryAttach);
	}
	
	if($pdf1 != ""){
		unlink($ppath . $pdf1original);
		if($pdf1 == "obrisano") $pdf1 = "";
		$queryAttach = "update `attachment1` set `AttachmentPath` = '" . $pdf1 . "' where `ContentType` = 'pdf1' and `idProject_FK` = " . $lastProjectId;
		mysql_query($queryAttach);
	}
	
	if($pdf2 != ""){
		unlink($ppath . $pdf2original);
		if($pdf2 == "obrisano") $pdf2 = "";
		$queryAttach = "update `attachment1` set `AttachmentPath` = '" . $pdf2 . "' where `ContentType` = 'pdf2' and `idProject_FK` = " . $lastProjectId;
		mysql_query($queryAttach);
	}
	
	if($pdf3 != ""){
		unlink($ppath . $pdf3original);
		if($pdf3 == "obrisano") $pdf3 = "";
		$queryAttach = "update `attachment1` set `AttachmentPath` = '" . $pdf3 . "' where `ContentType` = 'pdf3' and `idProject_FK` = " . $lastProjectId;
		mysql_query($queryAttach);
	}
	
	if($pdf4 != ""){
		unlink($ppath . $pdf4original);
		if($pdf4 == "obrisano") $pdf4 = "";
		$queryAttach = "update `attachment1` set `AttachmentPath` = '" . $pdf4 . "' where `ContentType` = 'pdf4' and `idProject_FK` = " . $lastProjectId;
		mysql_query($queryAttach);
	}
	
	if($pdf5 != ""){
		unlink($ppath . $pdf5original);
		if($pdf5 == "obrisano") $pdf5 = "";
		$queryAttach = "update `attachment1` set `AttachmentPath` = '" . $pdf5 . "' where `ContentType` = 'pdf5' and `idProject_FK` = " . $lastProjectId;
		mysql_query($queryAttach);
	}

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
