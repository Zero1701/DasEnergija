<?php
if(!isset($_SESSION)) {
	session_start();
}

include_once $_SESSION['BASE_PATH']  . '/Admin/Ajax/projectVariable2.php';
$data = array();
$pdfArray = array();
$zipArray = array();
array_push($data, $lastProjectId,$prikljucnaSnagaSustava,$tipPostrojenja,$tipModula,$brojModula,$ukupnaPovrsinaModula,$ukupnaZauzetaPovrsina,$ocekivanaGodisnjaProizvodnja,$datumPodnosenjaZahtjevaZaIzdavanjeTEP,$datumIshodenjaTEP,$datumPodnosenjaZahtjevaZaIzdavanjePEES,$datumIshodenjaPEES,$datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci,$datumIshodenjaUgovoraOIsporuci,$ugovorniIzvodacRadova,$datumSklapanjaUgovoraOIzvodenjuRadova,$datumPocetkaIzvodenjaRadova,$datumZavrsetkaIzvodenjaRadova,$datumPodnosenjaZahtjevaZaIzdavanjeEES,$datumIshodenjaEES,$brojMjernogMjesta,$datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije,$provizija,'NOW()','NOW()');


foreach ($data as $field) {
	if(is_numeric(trim(str_ireplace("'","",$field))) || trim($field) == 'NOW()' || trim($field) == "null" || (strtotime(str_ireplace("'", "", $field)) != false && (trim(str_ireplace("'","",$field))) != '1969-12-31')){
		$fields[] = '' . trim(str_ireplace("'","",$field)) . '';
	}
	elseif (trim(str_ireplace("'","",$field)) == "" || trim(str_ireplace("'","",$field)) == '1969-12-31')
	{
		$fields[] = 'null';
	}
	else {
		$fields[] = '\'' . trim($field) . '\'';
	}
}
$data_list = join(',', $fields);


if($uid !=""){
	$query1 = "insert into `project1admin` (`idProject_FK`,`PowerSupplySystem`,`PlantType`,`ModuleType`,`ModuleNum`,`TotalModuleSurface`,`TotalSurfaceOccupied`,`ExpectedAnnualProduction`,`DateOfTEPSubmission`,`DateOfTEPObtaining`,`DateOfPEESSubmission`,`DateOfPEESObtaining`,`DateOfReqForDeliveryCont`,`DateOfObtainingDeliveryCont`,`ContractualContractor`,`DateOfConclOfWorkCont`,`WorkCommencementDate`,`WorkConclusionDate`,`DateOfEESSubmission`,`DateOfEESObtaining`,`NumMeteringPoint`,`DateBeginElectContractDelivery`,`Commision`,`DOE`,`DOC`) values (" . $data_list . ")";
	$query2 = "SELECT LAST_INSERT_ID() as idl;";
echo $query1;
	mysql_query($query1);
	$thisLastProjectId = mysql_result(mysql_query($query2),0);

	$j = 6;
	for ($i = 6; $i <= 16; $i++) {

		$pdfArray[$i] = '(' . $lastProjectId . ',\'pdf' . $j . '\',\'' . ${"pdf" . $j} . '\')';
		$j++;
	}
	$pdf_list = join(',',$pdfArray);

	$j = 1;

	for ($i = 1; $i <= 2; $i++) {

		$zipArray[$i] = '(' . $lastProjectId . ',\'zip' . $j . '\',\'' . ${"zip" . $j} . '\')';
		$j++;
	}
	$zip_list = join(',',$zipArray);

	$query3 = "insert into attachment1 (`idProject_FK`,`ContentType`,`AttachmentPath`) values " . $pdf_list . "";
	$query4 = "insert into attachment1 (`idProject_FK`,`ContentType`,`AttachmentPath`) values " .  $zip_list . "";
	
	mysql_query($query3);
	mysql_query($query4);



	$poldPath = $_SESSION['BASE_PATH'] . '/PdfDocuments/' . $_SESSION['UserId'] . '/temp/';
	$ppath = $_SESSION['BASE_PATH'] . '/PdfDocuments/' . $_SESSION['UserId'] . '/' . $lastProjectId . '/';
	$pmkpath = $_SESSION['BASE_PATH'] . '/PdfDocuments/' . $_SESSION['UserId'] . '/' . $lastProjectId;

	$zoldPath = $_SESSION['BASE_PATH'] . '/ZipDocuments/' . $_SESSION['UserId'] . '/temp/';
	$zpath = $_SESSION['BASE_PATH'] . '/ZipDocuments/' . $_SESSION['UserId'] . '/' . $lastProjectId . '/';
	$zmkpath = $_SESSION['BASE_PATH'] . '/ZipDocuments/' . $_SESSION['UserId'] . '/' . $lastProjectId;


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
	
	if(is_dir($zoldPath)){
		if(!is_dir($zpath)){
			mkdir($zmkpath, 0755,true);
		}
		$files = scandir($zoldPath);
		// Identify directories
		$source = $zoldPath;
		$destination = $zpath;
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
		rmdir($zoldPath);
	}
	//---------------------------------------------------------------------------------------------------------------
}
?>

