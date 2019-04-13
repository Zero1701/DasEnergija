<?php
if(!isset($_SESSION)) {
	session_start();
}

include_once $_SESSION['BASE_PATH']  . '/DBconnection/dbconnect.php';

if(isset($_SESSION['UserId'])){ $uid = $_SESSION['UserId']; $uid = stripslashes($uid); $uid = mysql_real_escape_string($uid); } else { $uid = ""; }

if(isset($_GET['ulica'])){ $ulica = $_GET['ulica']; $ulica = stripslashes($ulica); $ulica = mysql_real_escape_string($ulica); } else { $ulica = ""; }

if(isset($_GET['imeProjekta'])){ $imeProjekta = $_GET['imeProjekta']; $imeProjekta = stripslashes($imeProjekta); $imeProjekta = mysql_real_escape_string($imeProjekta); } else { $imeProjekta = ""; }

if(isset($_GET['prostorGromobranskeObrane'])){ $prostorGromobranskeObrane = $_GET['prostorGromobranskeObrane']; $prostorGromobranskeObrane = stripslashes($prostorGromobranskeObrane); $prostorGromobranskeObrane = mysql_real_escape_string($prostorGromobranskeObrane); } else { $prostorGromobranskeObrane = 0; }

if(isset($_GET['mjesto'])){ $mjesto = $_GET['mjesto']; $mjesto = stripslashes($mjesto); $mjesto = mysql_real_escape_string($mjesto); } else { $mjesto = ""; }

if(isset($_GET['postanskiBroj'])){ $postanskiBroj = $_GET['postanskiBroj']; $postanskiBroj = stripslashes($postanskiBroj); $postanskiBroj = mysql_real_escape_string($postanskiBroj); }	else { $postanskiBroj = ""; }

if(isset($_GET['brojKatCestice']) && $_GET['brojKatCestice'] != ""){ $brojKatCestice = $_GET['brojKatCestice']; $brojKatCestice = stripslashes($brojKatCestice); $brojKatCestice = mysql_real_escape_string($brojKatCestice);} else { $brojKatCestice = "null"; }

if(isset($_GET['imeKatOpcine'])){ $imeKatOpcine = $_GET['imeKatOpcine']; $imeKatOpcine = stripslashes($imeKatOpcine); $imeKatOpcine = mysql_real_escape_string($imeKatOpcine); } else { $imeKatOpcine = ""; }

if(isset($_GET['nadlezanZKodred'])){ $nadlezanZKodred = $_GET['nadlezanZKodred']; $nadlezanZKodred = stripslashes($nadlezanZKodred); $nadlezanZKodred = mysql_real_escape_string($nadlezanZKodred); } else { $nadlezanZKodred = ""; }

if(isset($_GET['brojVlasnikaProstora']) && $_GET['brojVlasnikaProstora'] != ""){ $brojVlasnikaProstora = $_GET['brojVlasnikaProstora']; $brojVlasnikaProstora = stripslashes($brojVlasnikaProstora); $brojVlasnikaProstora = mysql_real_escape_string($brojVlasnikaProstora);} else { $brojVlasnikaProstora = "null"; }

if(isset($_GET['imeVlasnikaProstora'])){ $imeVlasnikaProstora = $_GET['imeVlasnikaProstora']; $imeVlasnikaProstora = stripslashes($imeVlasnikaProstora); $imeVlasnikaProstora = mysql_real_escape_string($imeVlasnikaProstora); } else { $imeVlasnikaProstora = ""; }

if(isset($_GET['brojPosjedovnogLista']) && $_GET['brojPosjedovnogLista'] != ""){ $brojPosjedovnogLista = $_GET['brojPosjedovnogLista']; $brojPosjedovnogLista = stripslashes($brojPosjedovnogLista); $brojPosjedovnogLista = mysql_real_escape_string($brojPosjedovnogLista); } else { $brojPosjedovnogLista = "null"; }

if(isset($_GET['brojZKizvatka']) && $_GET['brojZKizvatka'] != ""){ $brojZKizvatka = $_GET['brojZKizvatka']; $brojZKizvatka = stripslashes($brojZKizvatka); $brojZKizvatka = mysql_real_escape_string($brojZKizvatka); } else { $brojZKizvatka = "null"; }

if(isset($_GET['vrstaKrova'])){ $vrstaKrova = $_GET['vrstaKrova']; $vrstaKrova = stripslashes($vrstaKrova); $vrstaKrova = mysql_real_escape_string($vrstaKrova); } else { $vrstaKrova = ""; }

if(isset($_GET['velicinaKrova']) && $_GET['velicinaKrova'] != ""){ $velicinaKrova = $_GET['velicinaKrova']; $velicinaKrova = stripslashes($velicinaKrova); $velicinaKrova = mysql_real_escape_string($velicinaKrova); } else { $velicinaKrova = "null"; }

if(isset($_GET['nagibKrova']) && $_GET['nagibKrova'] != ""){ $nagibKrova = $_GET['nagibKrova']; $nagibKrova = stripslashes($nagibKrova); $nagibKrova = mysql_real_escape_string($nagibKrova); } else { $nagibKrova = "null"; }

if(isset($_GET['orijentacijaKrova']) && $_GET['orijentacijaKrova'] != ""){ $orijentacijaKrova = $_GET['orijentacijaKrova']; $orijentacijaKrova = stripslashes($orijentacijaKrova); $orijentacijaKrova = mysql_real_escape_string($orijentacijaKrova); } else { $orijentacijaKrova = "null"; }

if(isset($_GET['sirinaKrova']) && $_GET['sirinaKrova'] != ""){ $sirinaKrova = $_GET['sirinaKrova']; $sirinaKrova = stripslashes($sirinaKrova); $sirinaKrova = mysql_real_escape_string($sirinaKrova); } else { $sirinaKrova = "null"; }

if(isset($_GET['duzinaKrova']) && $_GET['duzinaKrova'] != ""){ $duzinaKrova = $_GET['duzinaKrova']; $duzinaKrova = stripslashes($duzinaKrova); $duzinaKrova = mysql_real_escape_string($duzinaKrova); } else { $duzinaKrova = "null"; }

if(isset($_GET['godinaIzgradnje']) && $_GET['godinaIzgradnje'] != ""){ $godinaIzgradnje = $_GET['godinaIzgradnje']; $godinaIzgradnje = stripslashes($godinaIzgradnje); $godinaIzgradnje = mysql_real_escape_string($godinaIzgradnje); } else { $godinaIzgradnje = "null"; }

if(isset($_GET['vrstaPokrovnogMaterijala'])){ $vrstaPokrovnogMaterijala = $_GET['vrstaPokrovnogMaterijala']; $vrstaPokrovnogMaterijala = stripslashes($vrstaPokrovnogMaterijala); $vrstaPokrovnogMaterijala = mysql_real_escape_string($vrstaPokrovnogMaterijala); } else { $vrstaPokrovnogMaterijala = ""; }

if(isset($_GET['zasjenjenostKrova'])){ $zasjenjenostKrova = $_GET['zasjenjenostKrova']; $zasjenjenostKrova = stripslashes($zasjenjenostKrova); $zasjenjenostKrova = mysql_real_escape_string($zasjenjenostKrova); } else { $zasjenjenostKrova = ""; }

if(isset($_GET['mogucnostSmjestajaIIZopreme'])){ $mogucnostSmjestajaIIZopreme = $_GET['mogucnostSmjestajaIIZopreme']; $mogucnostSmjestajaIIZopreme = stripslashes($mogucnostSmjestajaIIZopreme); $mogucnostSmjestajaIIZopreme = mysql_real_escape_string($mogucnostSmjestajaIIZopreme); } else { $mogucnostSmjestajaIIZopreme = ""; }

if(isset($_GET['distributerElektricneEnergije'])){ $distributerElektricneEnergije = $_GET['distributerElektricneEnergije']; $distributerElektricneEnergije = stripslashes($distributerElektricneEnergije); $distributerElektricneEnergije = mysql_real_escape_string($distributerElektricneEnergije); } else { $distributerElektricneEnergije = ""; }

if(isset($_GET['datumPotpisivanjaUgovora']) && $_GET['datumPotpisivanjaUgovora'] != ""){ $datumPotpisivanjaUgovora = date("Y-m-d",strtotime($_GET['datumPotpisivanjaUgovora'])); $datumPotpisivanjaUgovora = stripslashes($datumPotpisivanjaUgovora); $datumPotpisivanjaUgovora = mysql_real_escape_string($datumPotpisivanjaUgovora); $datumPotpisivanjaUgovora = "'" . $datumPotpisivanjaUgovora . "'"; } else { $datumPotpisivanjaUgovora = "null"; }

if(isset($_GET['ugovoreniPostotak']) && $_GET['ugovoreniPostotak'] != ""){ $ugovoreniPostotak = $_GET['ugovoreniPostotak']; $ugovoreniPostotak = stripslashes($ugovoreniPostotak); $ugovoreniPostotak = mysql_real_escape_string($ugovoreniPostotak); } else { $ugovoreniPostotak = "null"; }

if(isset($_GET['spremljeno'])){ $spremljeno = $_GET['spremljeno']; $spremljeno = stripslashes($spremljeno); $spremljeno = mysql_real_escape_string($spremljeno); } else { $spremljeno = ""; }

if(isset($_GET['pdf1'])){ $pdf1 = $_GET['pdf1']; $pdf1 = stripslashes($pdf1); $pdf1 = mysql_real_escape_string($pdf1); } else { $pdf1 = ""; }

if(isset($_GET['pdf2'])){ $pdf2 = $_GET['pdf2']; $pdf2 = stripslashes($pdf2); $pdf2 = mysql_real_escape_string($pdf2); } else { $pdf2 = ""; }

if(isset($_GET['pdf3'])){ $pdf3 = $_GET['pdf3']; $pdf3 = stripslashes($pdf3); $pdf3 = mysql_real_escape_string($pdf3); } else { $pdf3 = ""; }

if(isset($_GET['pdf4'])){ $pdf4 = $_GET['pdf4']; $pdf4 = stripslashes($pdf4); $pdf4 = mysql_real_escape_string($pdf4); } else { $pdf4 = ""; }

if(isset($_GET['pdf5'])){ $pdf5 = $_GET['pdf5']; $pdf5 = stripslashes($pdf5); $pdf5 = mysql_real_escape_string($pdf5); } else { $pdf5 = ""; }

if(isset($_GET['slika1'])){ $slika1 = $_GET['slika1']; $slika1 = stripslashes($slika1); $slika1 = mysql_real_escape_string($slika1); } else { $slika1 = ""; }

if(isset($_GET['slika2'])){ $slika2 = $_GET['slika2']; $slika2 = stripslashes($slika2); $slika2 = mysql_real_escape_string($slika2); } else { $slika2 = ""; }

if(isset($_GET['slika3'])){ $slika3 = $_GET['slika3']; $slika3 = stripslashes($slika3); $slika3 = mysql_real_escape_string($slika3); } else { $slika3 = ""; }

if(isset($_GET['slika4'])){ $slika4 = $_GET['slika4']; $slika4 = stripslashes($slika4); $slika4 = mysql_real_escape_string($slika4); } else { $slika4 = ""; }

if(isset($_GET['slika5'])){ $slika5 = $_GET['slika5']; $slika5 = stripslashes($slika5); $slika5 = mysql_real_escape_string($slika5); } else { $slika5 = ""; }

//--------------------------------------------------------------- update -----------------------------------------------------------------
if(isset($_GET['PID'])){ $PID = $_GET['PID']; $PID = stripslashes($PID); $PID = mysql_real_escape_string($PID); }	else { $PID = ""; }

if(isset($_GET['pdf1original'])){ $pdf1original = $_GET['pdf1original']; $pdf1original = stripslashes($pdf1original); $pdf1original = mysql_real_escape_string($pdf1original); }	else { $pdf1original = ""; }

if(isset($_GET['pdf2original'])){ $pdf2original = $_GET['pdf2original']; $pdf2original = stripslashes($pdf2original); $pdf2original = mysql_real_escape_string($pdf2original); }	else { $pdf2original = ""; }

if(isset($_GET['pdf3original'])){ $pdf3original = $_GET['pdf3original']; $pdf3original = stripslashes($pdf3original); $pdf3original = mysql_real_escape_string($pdf3original); }	else { $pdf3original = ""; }

if(isset($_GET['pdf4original'])){ $pdf4original = $_GET['pdf4original']; $pdf4original = stripslashes($pdf4original); $pdf4original = mysql_real_escape_string($pdf4original); }	else { $pdf4original = ""; }

if(isset($_GET['pdf5original'])){ $pdf5original = $_GET['pdf5original']; $pdf5original = stripslashes($pdf5original); $pdf5original = mysql_real_escape_string($pdf5original); }	else { $pdf5original = ""; }

if(isset($_GET['slika1original'])){ $slika1original = $_GET['slika1original']; $slika1original = stripslashes($slika1original); $slika1original = mysql_real_escape_string($slika1original); }	else { $slika1original = ""; }

if(isset($_GET['slika2original'])){ $slika2original = $_GET['slika2original']; $slika2original = stripslashes($slika2original); $slika2original = mysql_real_escape_string($slika2original); }	else { $slika2original = ""; }

if(isset($_GET['slika3original'])){ $slika3original = $_GET['slika3original']; $slika3original = stripslashes($slika3original); $slika3original = mysql_real_escape_string($slika3original); }	else { $slika3original = ""; }

if(isset($_GET['slika4original'])){ $slika4original = $_GET['slika4original']; $slika4original = stripslashes($slika4original); $slika4original = mysql_real_escape_string($slika4original); }	else { $slika4original = ""; }

if(isset($_GET['slika5original'])){ $slika5original = $_GET['slika5original']; $slika5original = stripslashes($slika5original); $slika5original = mysql_real_escape_string($slika5original); }	else { $slika5original = ""; }
//-------------------------------------------------------------------------------------------------------------------------------------------

