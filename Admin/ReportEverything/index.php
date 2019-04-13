<?php
if(!isset($_SESSION)) {
	session_start();
}
if(!isset($_SESSION['privileges']) || $_SESSION['privileges'] != 1) {
	$putanja = 'http://' . $_SERVER["SERVER_NAME"] . "/" . basename($_SESSION['SITE_URL']) . "/index.php";
	header('Location: ' . $putanja . '/index.php ');
	exit();
}
include_once $_SESSION['BASE_PATH']  . '/Admin/HeaderFooter/header.php';
include_once $_SESSION['BASE_PATH']  . '/Admin/Class/projectUserTable.php';

$uid = new projectUserTable();
$uid->user($_SESSION['UserId']);
$user = $uid->getResult(); 
//print_r($user);


if(!isset($_SESSION)) {
	session_start();
}

//include_once $_SESSION['BASE_PATH']  . '/DBconnection/dbconnect.php';
include_once $_SESSION['BASE_PATH']  . '/Admin/Class/projectUserTable.php';
include_once $_SESSION['BASE_PATH']  . '/Admin/Class/projectDetail.php';
$uid = stripslashes($_SESSION['UserId']);
$uid = mysql_real_escape_string($uid);

$uidd = new projectUserTable();
$uidd->displayTableByUser($uid);
$details = $uidd->getResult();
$attach = new projectDetail();
//print_r($details);

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupanBrojSuradnika = "select count(distinct(c.idUser)) as UkupanBrojSuradnika from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK";
$result=mysql_query($sqlUkupanBrojSuradnika);
$row = mysql_fetch_array($result);
$UkupanBrojSuradnika = $row['UkupanBrojSuradnika'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupanBrojPonudaZaNajamProstora = "SELECT count(`ContentType`) as UkupanBrojPonudaZaNajamProstora FROM `attachment1` WHERE `ContentType` like 'pdf4' and AttachmentPath IS NOT NULL and AttachmentPath <> ''";
$result=mysql_query($sqlUkupanBrojPonudaZaNajamProstora);
$row = mysql_fetch_array($result);
$UkupanBrojPonudaZaNajamProstora = $row['UkupanBrojPonudaZaNajamProstora'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupnaPovrsinaProstoraZaKojuJePonudenNajam = "SELECT sum(distinct(a.TotalModuleSurface)) as UkupnaPovrsinaProstoraZaKojuJePonudenNajam FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf4' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> ''";
$result=mysql_query($sqlUkupnaPovrsinaProstoraZaKojuJePonudenNajam);
$row = mysql_fetch_array($result);
$UkupnaPovrsinaProstoraZaKojuJePonudenNajam = $row['UkupnaPovrsinaProstoraZaKojuJePonudenNajam'];
if($UkupnaPovrsinaProstoraZaKojuJePonudenNajam == null){
	$UkupnaPovrsinaProstoraZaKojuJePonudenNajam = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupnoProjektiranaSnagaElektranaSvi = "SELECT sum(distinct(PowerSupplySystem)) as UkupnoProjektiranaSnagaElektranaSvi FROM `project1admin`";
$result=mysql_query($sqlUkupnoProjektiranaSnagaElektranaSvi);
$row = mysql_fetch_array($result);
$UkupnoProjektiranaSnagaElektranaSvi = $row['UkupnoProjektiranaSnagaElektranaSvi'];
if($UkupnoProjektiranaSnagaElektranaSvi == null){
	$UkupnoProjektiranaSnagaElektranaSvi = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupnoProjektiranaSnagaElektranaPonudjeno = "SELECT sum(distinct(a.PowerSupplySystem)) as UkupnoProjektiranaSnagaElektranaPonudjeno FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf4' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> ''";
$result=mysql_query($sqlUkupnoProjektiranaSnagaElektranaPonudjeno);
$row = mysql_fetch_array($result);
$UkupnoProjektiranaSnagaElektranaPonudjeno = $row['UkupnoProjektiranaSnagaElektranaPonudjeno'];
if($UkupnoProjektiranaSnagaElektranaPonudjeno == null){
	$UkupnoProjektiranaSnagaElektranaPonudjeno = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupnoProjektiranaSnagaElektranaPonudjenoNaKojojJeSklopljenUgovor = "SELECT sum(distinct(a.PowerSupplySystem)) as UkupnoProjektiranaSnagaElektranaPonudjeno FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf5' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> ''";
$result=mysql_query($sqlUkupnoProjektiranaSnagaElektranaPonudjenoNaKojojJeSklopljenUgovor);
$row = mysql_fetch_array($result);
$UkupnoProjektiranaSnagaElektranaPonudjenoNaKojojJeSklopljenUgovor = $row['UkupnoProjektiranaSnagaElektranaPonudjeno'];
if($UkupnoProjektiranaSnagaElektranaPonudjenoNaKojojJeSklopljenUgovor == null){
	$UkupnoProjektiranaSnagaElektranaPonudjenoNaKojojJeSklopljenUgovor = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupanBrojSklopljenihUgovoraONajmu= "SELECT count(`ContentType`) as UkupanBrojSklopljenihUgovoraONajmu FROM `attachment1` WHERE `ContentType` like 'pdf5' and AttachmentPath IS NOT NULL and AttachmentPath <> ''";
$result=mysql_query($sqlUkupanBrojSklopljenihUgovoraONajmu);
$row = mysql_fetch_array($result);
$UkupanBrojSklopljenihUgovoraONajmu = $row['UkupanBrojSklopljenihUgovoraONajmu'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupnoProjektiranaSnagaElektranaPonudjenoNaZakupljenimProstorima = "SELECT sum(distinct(a.PowerSupplySystem)) as UkupnoProjektiranaSnagaElektranaPonudjenoNaZakupljenimProstorima FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf13' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> ''";
$result=mysql_query($sqlUkupnoProjektiranaSnagaElektranaPonudjenoNaZakupljenimProstorima);
$row = mysql_fetch_array($result);
$UkupnoProjektiranaSnagaElektranaPonudjenoNaZakupljenimProstorima = $row['UkupnoProjektiranaSnagaElektranaPonudjenoNaZakupljenimProstorima'];
if($UkupnoProjektiranaSnagaElektranaPonudjenoNaZakupljenimProstorima == null){
	$UkupnoProjektiranaSnagaElektranaPonudjenoNaZakupljenimProstorima = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlPonudjeniUgovori = "SELECT count(a.`idProject`) as PonudjeniUgovori FROM `project1` a inner join attachment1 b on a.`idProject`=b.`idProject_FK` WHERE b.`ContentType` like 'pdf4' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> ''";
$result=mysql_query($sqlPonudjeniUgovori);
$row = mysql_fetch_array($result);
$PonudjeniUgovori = $row['PonudjeniUgovori'];

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlPotpisaniUgovori = "SELECT count(a.`idProject`) as PotpisaniUgovori FROM `project1` a inner join attachment1 b on a.`idProject`=b.`idProject_FK` WHERE b.`ContentType` like 'pdf5' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> ''";
$result=mysql_query($sqlPotpisaniUgovori);
$row = mysql_fetch_array($result);
$PotpisaniUgovori = $row['PotpisaniUgovori'];

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupnaPovrsinaProstoraZaKojuJePonudenNajamPostotak = "SELECT count(distinct(a.idProject1Admin)) as UkupnaPovrsinaProstoraZaKojuJePonudenNajamPostotak FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf4' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> ''";
$result=mysql_query($sqlUkupnaPovrsinaProstoraZaKojuJePonudenNajamPostotak);
$row = mysql_fetch_array($result);
$UkupnaPovrsinaProstoraZaKojuJePonudenNajamPostotak  = $row['UkupnaPovrsinaProstoraZaKojuJePonudenNajam'];
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupnaPovrsinaProstoraKojaJeUZajmuPostotak = "SELECT count(distinct(a.idProject1Admin)) as UkupnaPovrsinaProstoraKojaJeUZajmuPostotak FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf5' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> ''";
$result=mysql_query($sqlUkupnaPovrsinaProstoraKojaJeUZajmuPostotak);
$row = mysql_fetch_array($result);
$UkupnaPovrsinaProstoraKojaJeUZajmuPostotak = $row['UkupnaPovrsinaProstoraKojaJeUZajmuPostotak'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupnoPredvidjenaSnagaElektranaPonudjeno = "SELECT sum(distinct(a.ExpectedAnnualProduction)) as UkupnoPredvidjenaSnagaElektranaPonudjeno FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf4' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> ''";
$result=mysql_query($sqlUkupnoPredvidjenaSnagaElektranaPonudjeno);
$row = mysql_fetch_array($result);
$UkupnoPredvidjenaSnagaElektranaPonudjeno = $row['UkupnoPredvidjenaSnagaElektranaPonudjeno'];
if($UkupnoPredvidjenaSnagaElektranaPonudjeno == null){
	$UkupnoPredvidjenaSnagaElektranaPonudjeno = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupnoPredvidjenaSnagaElektranaSklopljeno = "SELECT sum(distinct(a.ExpectedAnnualProduction)) as UkupnoPredvidjenaSnagaElektranaSklopljeno FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf5' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> ''";
$result=mysql_query($sqlUkupnoPredvidjenaSnagaElektranaSklopljeno);
$row = mysql_fetch_array($result);
$UkupnoPredvidjenaSnagaElektranaSklopljeno = $row['UkupnoPredvidjenaSnagaElektranaSklopljeno'];
if($UkupnoPredvidjenaSnagaElektranaSklopljeno == null){
	$UkupnoPredvidjenaSnagaElektranaSklopljeno = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupanBrojPredanihZahtjevaZaPEES = "SELECT count(distinct(a.idProject1Admin)) as UkupanBrojPredanihZahtjevaZaPEES FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf8' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> ''";
$result=mysql_query($sqlUkupanBrojPredanihZahtjevaZaPEES);
$row = mysql_fetch_array($result);
$UkupanBrojPredanihZahtjevaZaPEES = $row['UkupanBrojPredanihZahtjevaZaPEES'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupanBrojIshodenihZahtjevaZaPEES = "SELECT count(distinct(a.idProject1Admin)) as UkupanBrojIshodenihZahtjevaZaPEES FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf9' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> ''";
$result=mysql_query($sqlUkupanBrojIshodenihZahtjevaZaPEES);
$row = mysql_fetch_array($result);
$UkupanBrojIshodenihZahtjevaZaPEES = $row['UkupanBrojIshodenihZahtjevaZaPEES'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlProsjecnoVrijemeTrajanjaIshodenjaPEES  = "SELECT sum(DATEDIFF(`DateOfPEESObtaining`,`DateOfPEESSubmission`)) AS UkupanBrojIshodenihZahtjevaZaPEES ,count(distinct(`idProject1Admin`)) AS BrojacPEES FROM project1admin where `DateOfPEESSubmission` IS NOT NULL and `DateOfPEESSubmission` <> '' and `DateOfPEESObtaining` IS NOT NULL and `DateOfPEESObtaining` <> ''";
//echo $sqlProsjecnoVrijemeTrajanjaIshodenjaPEES . "<br />";
$result=mysql_query($sqlProsjecnoVrijemeTrajanjaIshodenjaPEES);
while($row = mysql_fetch_array($result))
{
$ProsjecnoVrijemeTrajanjaIshodenjaPEES = $row['UkupanBrojIshodenihZahtjevaZaPEES'];
$BrojacPEES = $row['BrojacPEES'];
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupanBrojPredanihZahtjevaZaSklapanjeUgovoraOIsporuci = "SELECT count(distinct(a.idProject1Admin)) as UkupanBrojPredanihZahtjevaZaSklapanjeUgovoraOIsporuci FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf12' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> ''";
$result=mysql_query($sqlUkupanBrojPredanihZahtjevaZaSklapanjeUgovoraOIsporuci);
$row = mysql_fetch_array($result);
$UkupanBrojPredanihZahtjevaZaSklapanjeUgovoraOIsporuci = $row['UkupanBrojPredanihZahtjevaZaSklapanjeUgovoraOIsporuci'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupanBrojPotpisanihUgovoraOIsporuci  = "SELECT count(distinct(a.idProject1Admin)) as UkupanBrojPotpisanihUgovoraOIsporuci FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf12' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> ''";
$result=mysql_query($sqlUkupanBrojPotpisanihUgovoraOIsporuci);
$row = mysql_fetch_array($result);
$UkupanBrojPotpisanihUgovoraOIsporuci = $row['UkupanBrojPotpisanihUgovoraOIsporuci'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlProsjecnoVrijemeTrajanjaIshodenjaUgovoraOIsporuci  = "SELECT sum(DATEDIFF(`DateOfObtainingDeliveryCont`,`DateOfReqForDeliveryCont`)) AS ProsjecnoVrijemeTrajanjaIshodenjaUgovoraOIsporuci ,count(distinct(`idProject1Admin`)) AS Brojac FROM project1admin where `DateOfReqForDeliveryCont` IS NOT NULL and `DateOfReqForDeliveryCont` <> '' and `DateOfObtainingDeliveryCont` IS NOT NULL and `DateOfObtainingDeliveryCont` <> ''";
//echo $sqlProsjecnoVrijemeTrajanjaIshodenjaPEES . "<br />";
$result=mysql_query($sqlProsjecnoVrijemeTrajanjaIshodenjaUgovoraOIsporuci);
while($row = mysql_fetch_array($result))
{
	$ProsjecnoVrijemeTrajanjaIshodenjaUgovoraOIsporuci = $row['ProsjecnoVrijemeTrajanjaIshodenjaUgovoraOIsporuci'];
	$BrojacProsjecnoVrijemeTrajanjaIshodenjaUgovoraOIsporuci = $row['Brojac'];
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupanBrojPredanihZahtjevaZaEES = "SELECT count(distinct(a.idProject1Admin)) as UkupanBrojPredanihZahtjevaZaEES FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf15' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> ''";
$result=mysql_query($sqlUkupanBrojPredanihZahtjevaZaEES);
$row = mysql_fetch_array($result);
$UkupanBrojPredanihZahtjevaZaEES = $row['UkupanBrojPredanihZahtjevaZaEES'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupanBrojIshodenihZahtjevaZaEES = "SELECT count(distinct(a.idProject1Admin)) as UkupanBrojIshodenihZahtjevaZaEES FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf16' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> ''";
$result=mysql_query($sqlUkupanBrojIshodenihZahtjevaZaEES);
$row = mysql_fetch_array($result);
$UkupanBrojIshodenihZahtjevaZaEES = $row['UkupanBrojIshodenihZahtjevaZaEES'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlProsjecnoVrijemeTrajanjaIshodenjaEES  = "SELECT sum(DATEDIFF(`DateOfEESObtaining`,`DateOfEESSubmission`)) AS UkupanBrojIshodenihZahtjevaZaEES ,count(distinct(`idProject1Admin`)) AS BrojacEES FROM project1admin where `DateOfEESSubmission` IS NOT NULL and `DateOfEESSubmission` <> '' and `DateOfEESObtaining` IS NOT NULL and `DateOfEESObtaining` <> ''";
//echo $sqlProsjecnoVrijemeTrajanjaIshodenjaEES . "<br />";
$result=mysql_query($sqlProsjecnoVrijemeTrajanjaIshodenjaEES);
while($row = mysql_fetch_array($result))
{
	$ProsjecnoVrijemeTrajanjaIshodenjaEES = $row['UkupanBrojIshodenihZahtjevaZaEES'];
	$BrojacEES = $row['BrojacEES'];
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupanBrojUgovoraOIsporuciElektricneEnergijeZaKojeJePocelaPrimjenaUgovora = "SELECT count(distinct(a.idProject1Admin)) as UkupanBrojUgovoraOIsporuciElektricneEnergijeZaKojeJePocelaPrimjenaUgovora FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf13' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> '' and a.`DateOfObtainingDeliveryCont` IS NOT NULL and a.`DateOfObtainingDeliveryCont` <> '' and a.`DateOfObtainingDeliveryCont` > NOW()";
//"SELECT count(distinct(`idProject1Admin`)) as UkupanBrojUgovoraOIsporuciElektricneEnergijeZaKojeJePocelaPrimjenaUgovora FROM `project1admin` WHERE `DateBeginElectContractDelivery` IS NOT NULL and `DateBeginElectContractDelivery` <> ''";
$result=mysql_query($sqlUkupanBrojUgovoraOIsporuciElektricneEnergijeZaKojeJePocelaPrimjenaUgovora);
$row = mysql_fetch_array($result);
$UkupanBrojUgovoraOIsporuciElektricneEnergijeZaKojeJePocelaPrimjenaUgovora = $row['UkupanBrojUgovoraOIsporuciElektricneEnergijeZaKojeJePocelaPrimjenaUgovora'];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupnaInstaliranaSnagaElektranaKojeSuTrajnoPrikljuceneNaMrezuIIsporucujuEnergijuUSustav = "SELECT sum(distinct(a.`PowerSupplySystem`)) as UkupnaInstaliranaSnagaElektranaKojeSuTrajnoPrikljuceneNaMrezuIIsporucujuEnergijuUSustav FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf13' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> '' and a.`DateOfObtainingDeliveryCont` IS NOT NULL and a.`DateOfObtainingDeliveryCont` <> '' and a.`DateOfObtainingDeliveryCont` > NOW()";
$result=mysql_query($sqlUkupnaInstaliranaSnagaElektranaKojeSuTrajnoPrikljuceneNaMrezuIIsporucujuEnergijuUSustav);
$row = mysql_fetch_array($result);
$UkupnaInstaliranaSnagaElektranaKojeSuTrajnoPrikljuceneNaMrezuIIsporucujuEnergijuUSustav = $row['UkupnaInstaliranaSnagaElektranaKojeSuTrajnoPrikljuceneNaMrezuIIsporucujuEnergijuUSustav'];
if($UkupnaInstaliranaSnagaElektranaKojeSuTrajnoPrikljuceneNaMrezuIIsporucujuEnergijuUSustav == null){
	$UkupnaInstaliranaSnagaElektranaKojeSuTrajnoPrikljuceneNaMrezuIIsporucujuEnergijuUSustav = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlUkupnaOcekivanaGodisnjaProizvodnjaElektranaKojeSuPrikljuceneNaMrezuIIsporucujuEnergijuUSustav = "SELECT sum(distinct(a.`ExpectedAnnualProduction`)) as UkupnaOcekivanaGodisnjaProizvodnjaElektranaKojeSuPrikljuceneNaMrezuIIsporucujuEnergijuUSustav FROM `project1admin` a inner join attachment1 b on a.`idProject_FK` = b.`idProject_FK` WHERE b.`ContentType` like 'pdf13' and b.AttachmentPath IS NOT NULL and b.AttachmentPath <> '' and a.`DateOfObtainingDeliveryCont` IS NOT NULL and a.`DateOfObtainingDeliveryCont` <> '' and a.`DateOfObtainingDeliveryCont` > NOW()";
$result=mysql_query($sqlUkupnaOcekivanaGodisnjaProizvodnjaElektranaKojeSuPrikljuceneNaMrezuIIsporucujuEnergijuUSustav);
$row = mysql_fetch_array($result);
$UkupnaOcekivanaGodisnjaProizvodnjaElektranaKojeSuPrikljuceneNaMrezuIIsporucujuEnergijuUSustav = $row['UkupnaOcekivanaGodisnjaProizvodnjaElektranaKojeSuPrikljuceneNaMrezuIIsporucujuEnergijuUSustav'];
if($UkupnaOcekivanaGodisnjaProizvodnjaElektranaKojeSuPrikljuceneNaMrezuIIsporucujuEnergijuUSustav == null){
	$UkupnaOcekivanaGodisnjaProizvodnjaElektranaKojeSuPrikljuceneNaMrezuIIsporucujuEnergijuUSustav = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlgodBruttoPrihod = "select sum(a.PercentageOfGrossIncome) as persum from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK where d.DateOfConclOfWorkCont IS NOT NULL and d.DateOfConclOfWorkCont <> ''";
$result=mysql_query($sqlgodBruttoPrihod);
$row = mysql_fetch_array($result);
$godBruttoPrihod = $row['persum'];
if($row['persum'] == 0){
	$godBruttoPrihod = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlBrojBruttoPrihod = "select count(a.idProject) as Sprojekti from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK where d.DateOfConclOfWorkCont IS NOT NULL and d.DateOfConclOfWorkCont <> ''";
$result=mysql_query($sqlBrojBruttoPrihod);
$row = mysql_fetch_array($result);
$BrojBruttoPrihod = $row['Sprojekti'];
if($row['Sprojekti'] == 0){
	$BrojBruttoPrihod = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlgodBruttoPrihod = "select sum(d.Commision) as persum from project1 a left join user_to_project1 b on a.idProject=b.Project1_idProject left join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK left join role e on c.idUser=e.idUser_FK where d.DateOfConclOfWorkCont IS NOT NULL and d.DateOfConclOfWorkCont <> ''";
$result=mysql_query($sqlgodBruttoPrihod);
$row = mysql_fetch_array($result);
$godBruttoProvizija = $row['persum'];
if($row['persum'] == 0){
	$godBruttoProvizija = 0;
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$sqlProsjecnoVrijemeRazvojaProjekta = "SELECT sum(DATEDIFF(`DateOfConclOfWorkCont`,`DateOfReqForDeliveryCont`)) AS ProsjecnoVrijemeRazvojaProjekta ,count(distinct(`idProject1Admin`)) AS Brojac FROM project1admin where `DateOfReqForDeliveryCont` IS NOT NULL and `DateOfReqForDeliveryCont` <> '' and `DateOfConclOfWorkCont` IS NOT NULL and `DateOfConclOfWorkCont` <> ''";
//echo $sqlProsjecnoVrijemeTrajanjaIshodenjaEES . "<br />";
$result=mysql_query($sqlProsjecnoVrijemeRazvojaProjekta);
while($row = mysql_fetch_array($result))
{
	$ProsjecnoVrijemeRazvojaProjekta = $row['ProsjecnoVrijemeRazvojaProjekta'];
	$BrojacProsjecnoVrijemeRazvojaProjekta = $row['Brojac'];
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

if($ProsjecnoVrijemeRazvojaProjekta == 0){

	$PostotakProsjecnoVrijemeRazvojaProjekta = 0;
}

else

{
	if($BrojacProsjecnoVrijemeRazvojaProjekta == 0) {
		$BrojacProsjecnoVrijemeRazvojaProjekta = 1;
	}

	$PostotakProsjecnoVrijemeRazvojaProjekta = ($ProsjecnoVrijemeRazvojaProjekta / $BrojacProsjecnoVrijemeRazvojaProjekta);

}


//***********************************************************************************************

if($godBruttoProvizija == 0){

	$Najamnina = 0;
}

else

{
	if($BrojBruttoPrihod == 0) {
		$BrojBruttoPrihod = 1;
	}

	$NajamninaP = (($godBruttoProvizija / $BrojBruttoPrihod) * 100);
	$NajamninaP2 = $godBruttoProvizija / $BrojBruttoPrihod;
}


//***********************************************************************************************
if($godBruttoPrihod == 0){

	$Najamnina = 0;
}

else

{
	if($BrojBruttoPrihod == 0) {
		$BrojBruttoPrihod = 1;
	}

	$Najamnina = (($godBruttoPrihod / $BrojBruttoPrihod) * 100);
	$Najamnina2 = $godBruttoPrihod / $BrojBruttoPrihod;
}
//***********************************************************************************************
if($ProsjecnoVrijemeTrajanjaIshodenjaEES == 0){

	$PostotakProsjecnoVrijemeTrajanjaIshodenjaEES = 0;
}

else

{
	if($BrojacEES == 0) {
		$BrojacEES = 1;
	}

	$PostotakProsjecnoVrijemeTrajanjaIshodenjaEES = ($ProsjecnoVrijemeTrajanjaIshodenjaEES / $BrojacEES);

}


//***********************************************************************************************

if($ProsjecnoVrijemeTrajanjaIshodenjaUgovoraOIsporuci == 0){

	$PostotakProsjecnoVrijemeTrajanjaIshodenjaUgovoraOIsporuci = 0;
}

else

{
	if($BrojacProsjecnoVrijemeTrajanjaIshodenjaUgovoraOIsporuci == 0) {
		$BrojacProsjecnoVrijemeTrajanjaIshodenjaUgovoraOIsporuci = 1;
	}

	$PostotakProsjecnoVrijemeTrajanjaIshodenjaUgovoraOIsporuci = ($ProsjecnoVrijemeTrajanjaIshodenjaUgovoraOIsporuci / $BrojacProsjecnoVrijemeTrajanjaIshodenjaUgovoraOIsporuci);

}


//***********************************************************************************************

if($ProsjecnoVrijemeTrajanjaIshodenjaPEES == 0){

	$PostotakProsjecnoVrijemeTrajanjaIshodenjaPEES = 0;
}

else

{
	if($BrojacPEES == 0) {
		$BrojacPEES = 1;
	}

	$PostotakProsjecnoVrijemeTrajanjaIshodenjaPEES = ($ProsjecnoVrijemeTrajanjaIshodenjaPEES / $BrojacPEES);

}


//***********************************************************************************************

if($UkupnoPredvidjenaSnagaElektranaSklopljeno == 0){

	$PostotakPredvidjeneSnageElektranaNaUgovorenim = 0;
}

else

{
	if($UkupnoPredvidjenaSnagaElektranaPonudjeno == 0) {
		$UkupnoPredvidjenaSnagaElektranaPonudjeno = 1;
	}

	$PostotakPredvidjeneSnageElektranaNaUgovorenim = (($UkupnoPredvidjenaSnagaElektranaSklopljeno / $UkupnoPredvidjenaSnagaElektranaPonudjeno) * 100);

}


//***********************************************************************************************

if($UkupnoProjektiranaSnagaElektranaPonudjenoNaKojojJeSklopljenUgovor == 0){

	$UkupnaPredvidenaGodisnjaProizvodnjaElektranaUgovoreno = 0;
}

else

{
	if($UkupnoProjektiranaSnagaElektranaSvi == 0) {
		$UkupnoProjektiranaSnagaElektranaSvi = 1;
	}

	$UkupnaPredvidenaGodisnjaProizvodnjaElektranaUgovoreno = ($UkupnoProjektiranaSnagaElektranaPonudjenoNaKojojJeSklopljenUgovor / $UkupnoProjektiranaSnagaElektranaSvi);

}


//***********************************************************************************************

if($UkupnoProjektiranaSnagaElektranaPonudjeno== 0){

	$UkupnaPredvidenaGodisnjaProizvodnjaElektranaPonudjeno = 0;
}

else

{
	if($UkupnoProjektiranaSnagaElektranaSvi == 0) {
		$UkupnoProjektiranaSnagaElektranaSvi = 1;
	}

	$UkupnaPredvidenaGodisnjaProizvodnjaElektranaPonudjeno = ($UkupnoProjektiranaSnagaElektranaPonudjeno / $UkupnoProjektiranaSnagaElektranaSvi);

}


//***********************************************************************************************

if($UkupnoProjektiranaSnagaElektranaPonudjeno == 0){

	$PostotakProjektiraneSnageElektranaNaUgovorenim = 0;
}

else

{
	if($UkupnoProjektiranaSnagaElektranaPonudjenoNaKojojJeSklopljenUgovor == 0) {
		$UkupnoProjektiranaSnagaElektranaPonudjenoNaKojojJeSklopljenUgovor = 1;
	}

	$PostotakProjektiraneSnageElektranaNaUgovorenim = (($UkupnoProjektiranaSnagaElektranaPonudjeno / $UkupnoProjektiranaSnagaElektranaPonudjenoNaKojojJeSklopljenUgovor) * 100);

}


//***********************************************************************************************

if($UkupnaPovrsinaProstoraZaKojuJePonudenNajamPostotak == 0){

	$PostotakPovrsinaUZajmu = 0;
}

else

{
	if($UkupnaPovrsinaProstoraKojaJeUZajmuPostotak == 0) {
		$UkupnaPovrsinaProstoraKojaJeUZajmuPostotak = 1;
	}

	$PostotakPovrsinaUZajmu = (($UkupnaPovrsinaProstoraZaKojuJePonudenNajamPostotak / $UkupnaPovrsinaProstoraKojaJeUZajmuPostotak) * 100);

}


//***********************************************************************************************

if($PonudjeniUgovori == 0){

	$PostotakPotpisanihUgovora = 0;
}

else

{
	if($PotpisaniUgovori == 0) {
		$PotpisaniUgovori = 1;
	}

	$PostotakPotpisanihUgovora = (($PonudjeniUgovori / $PotpisaniUgovori) * 100);

}


//***********************************************************************************************
?>
<?php 
include_once $_SESSION['BASE_PATH']  . '/Admin/View/reportEverythingDetailsView.php';
include_once $_SESSION['BASE_PATH']  . '/Admin/HeaderFooter/footer.php';
?>