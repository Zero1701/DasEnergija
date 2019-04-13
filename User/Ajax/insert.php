<?php
if(!isset($_SESSION)) {
	session_start();
}

include_once $_SESSION['BASE_PATH']  . '/User/Ajax/projectVariable.php';
$data = array();
$pdfArray = array();
$imageArray = array();
array_push($data, $imeProjekta,$ulica,$mjesto, ":::" . $postanskiBroj . ":::",$brojKatCestice,$imeKatOpcine,$nadlezanZKodred,$brojVlasnikaProstora,$imeVlasnikaProstora,$brojPosjedovnogLista,$brojZKizvatka,$vrstaKrova,$velicinaKrova,$nagibKrova,$orijentacijaKrova,$sirinaKrova,$duzinaKrova,$godinaIzgradnje,$vrstaPokrovnogMaterijala,$zasjenjenostKrova,$prostorGromobranskeObrane,$mogucnostSmjestajaIIZopreme,$distributerElektricneEnergije,$datumPotpisivanjaUgovora,$ugovoreniPostotak,0,'NOW()','NOW()');


foreach ($data as $field) {
	if(is_numeric(trim(str_ireplace(":::","",str_ireplace("'","",$field)))) || trim($field) == 'NOW()' || trim($field) == "null" || (strtotime(str_ireplace("'", "", $field)) != false && (trim(str_ireplace("'","",$field))) != '1969-12-31')){
		$fields[] = '' . trim(str_ireplace(":::","",$field)) . '';
	}
	elseif (trim(str_ireplace(":::","",str_ireplace("'","",$field))) == "" || trim(str_ireplace("'","",$field)) == '1969-12-31')
	{
		$fields[] = 'null';
	}
	else {
		$fields[] = '\'' . trim(str_ireplace(":::","",$field)) . '\'';
	}
}
$data_list = join(',', $fields);

if($uid !=""){
	$query1 = "insert into project1 (`ProjectName`,`Street`,`Location`,`ZipCode`,`CadPlotNum`,`CadMunName`,`ResLandBookCourtIn`,`PremisNumOfOwner`,`NameNumOfOwner`,`TitleSheetNum`,`NumZKExcerpt`,`RoofType`,`RoofSize`,`RoofPitch`,`RoofOrientation`,`RoofWidth`,`RoofHeight`,`YearOfConRecon`,`TypeOfCovMaterial`,`RoofOpacity`,`LightDefSpace`,`AccCapInvProtGear`,`ElecPowDistributor`,`DateOfContSigning`,`PercentageOfGrossIncome`,`Approved`,`DOE`,`DOC`) values (" . $data_list . ")";
	$query2 = "SELECT LAST_INSERT_ID() as idl;";

	mysql_query($query1);
	$lastProjectId = mysql_result(mysql_query($query2),0);

	$j = 1;
	for ($i = 0; $i < 5; $i++) {

		$pdfArray[$i] = '(' . $lastProjectId . ',\'pdf' . $j . '\',\'' . ${"pdf" . $j} . '\')';
		$j++;
	}
	$pdf_list = join(',',$pdfArray);

	$j = 1;

	for ($i = 0; $i < 5; $i++) {

		$imageArray[$i] = '(' . $lastProjectId . ',\'slika' . $j . '\',\'' . ${"slika" . $j} . '\')';
		$j++;
	}
	$image_list = join(',',$imageArray);

	$query3 = "insert into user_to_project1 (`User_idUser`,`Project1_idProject`) values (" . $uid . ", " . $lastProjectId . ")";
	$query4 = "insert into attachment1 (`idProject_FK`,`ContentType`,`AttachmentPath`) values " . $pdf_list . "";
	$query5 = "insert into attachment1 (`idProject_FK`,`ContentType`,`AttachmentPath`) values " .  $image_list . "";

	mysql_query($query3);
	mysql_query($query4);
	mysql_query($query5);

	$ioldPath = $_SESSION['BASE_PATH'] . '/ProjectImage/' . $_SESSION['UserId'] . '/temp/';
	$ipath = $_SESSION['BASE_PATH'] . '/ProjectImage/' . $_SESSION['UserId'] . '/' . $lastProjectId . '/';
	$imkpath = $_SESSION['BASE_PATH'] . '/ProjectImage/' . $_SESSION['UserId'] . '/' . $lastProjectId;

	$poldPath = $_SESSION['BASE_PATH'] . '/PdfDocuments/' . $_SESSION['UserId'] . '/temp/';
	$ppath = $_SESSION['BASE_PATH'] . '/PdfDocuments/' . $_SESSION['UserId'] . '/' . $lastProjectId . '/';
	$pmkpath = $_SESSION['BASE_PATH'] . '/PdfDocuments/' . $_SESSION['UserId'] . '/' . $lastProjectId;


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
