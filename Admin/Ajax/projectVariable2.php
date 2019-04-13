<?php
if(!isset($_SESSION)) {
	session_start();
}

include_once $_SESSION['BASE_PATH']  . '/DBconnection/dbconnect.php';

if(isset($_SESSION['UserId'])){ $uid = $_SESSION['UserId']; $uid = stripslashes($uid); $uid = mysql_real_escape_string($uid); } else { $uid = ""; }

if(isset($_GET['LID'])){ $lastProjectId = $_GET['LID']; $lastProjectId = stripslashes($lastProjectId); $lastProjectId = mysql_real_escape_string($lastProjectId); } else { $lastProjectId = ""; }

if(isset($_GET['prikljucnaSnagaSustava']) && $_GET['prikljucnaSnagaSustava'] != ""){ $prikljucnaSnagaSustava = $_GET['prikljucnaSnagaSustava']; $prikljucnaSnagaSustava = stripslashes($prikljucnaSnagaSustava); $prikljucnaSnagaSustava = mysql_real_escape_string($prikljucnaSnagaSustava); } else { $prikljucnaSnagaSustava = "null"; }

if(isset($_GET['tipPostrojenja'])){ $tipPostrojenja = $_GET['tipPostrojenja']; $tipPostrojenja = stripslashes($tipPostrojenja); $tipPostrojenja = mysql_real_escape_string($tipPostrojenja); } else { $tipPostrojenja = ""; }

if(isset($_GET['tipModula'])){ $tipModula = $_GET['tipModula']; $tipModula = stripslashes($tipModula); $tipModula = mysql_real_escape_string($tipModula); } else { $tipModula = ""; }

if(isset($_GET['brojModula']) && $_GET['brojModula'] != ""){ $brojModula = $_GET['brojModula']; $brojModula = stripslashes($brojModula); $brojModula = mysql_real_escape_string($brojModula); } else { $brojModula = "null"; }

if(isset($_GET['ukupnaPovrsinaModula']) && $_GET['ukupnaPovrsinaModula'] != ""){ $ukupnaPovrsinaModula = $_GET['ukupnaPovrsinaModula']; $ukupnaPovrsinaModula = stripslashes($ukupnaPovrsinaModula); $ukupnaPovrsinaModula = mysql_real_escape_string($ukupnaPovrsinaModula); } else { $ukupnaPovrsinaModula = "null"; }

if(isset($_GET['ukupnaZauzetaPovrsina']) && $_GET['ukupnaZauzetaPovrsina'] != ""){ $ukupnaZauzetaPovrsina = $_GET['ukupnaZauzetaPovrsina']; $ukupnaZauzetaPovrsina = stripslashes($ukupnaZauzetaPovrsina); $ukupnaZauzetaPovrsina = mysql_real_escape_string($ukupnaZauzetaPovrsina); } else { $ukupnaZauzetaPovrsina = "null"; }

if(isset($_GET['ocekivanaGodisnjaProizvodnja']) && $_GET['ocekivanaGodisnjaProizvodnja'] != ""){ $ocekivanaGodisnjaProizvodnja = $_GET['ocekivanaGodisnjaProizvodnja']; $ocekivanaGodisnjaProizvodnja = stripslashes($ocekivanaGodisnjaProizvodnja); $ocekivanaGodisnjaProizvodnja = mysql_real_escape_string($ocekivanaGodisnjaProizvodnja); } else { $ocekivanaGodisnjaProizvodnja = "null"; }

if(isset($_GET['datumPodnosenjaZahtjevaZaIzdavanjeTEP']) && strtotime($_GET['datumPodnosenjaZahtjevaZaIzdavanjeTEP']) != false){ $datumPodnosenjaZahtjevaZaIzdavanjeTEP = date("Y-m-d",strtotime($_GET['datumPodnosenjaZahtjevaZaIzdavanjeTEP'])); $datumPodnosenjaZahtjevaZaIzdavanjeTEP = stripslashes($datumPodnosenjaZahtjevaZaIzdavanjeTEP); $datumPodnosenjaZahtjevaZaIzdavanjeTEP = mysql_real_escape_string($datumPodnosenjaZahtjevaZaIzdavanjeTEP); $datumPodnosenjaZahtjevaZaIzdavanjeTEP = "'" . $datumPodnosenjaZahtjevaZaIzdavanjeTEP . "'"; } else { $datumPodnosenjaZahtjevaZaIzdavanjeTEP = "null"; }

if(isset($_GET['datumIshodenjaTEP']) && strtotime($_GET['datumIshodenjaTEP']) != false){ $datumIshodenjaTEP = date("Y-m-d",strtotime($_GET['datumIshodenjaTEP'])); $datumIshodenjaTEP = stripslashes($datumIshodenjaTEP); $datumIshodenjaTEP = mysql_real_escape_string($datumIshodenjaTEP); $datumIshodenjaTEP = "'" . $datumIshodenjaTEP . "'"; } else { $datumIshodenjaTEP = "null"; }

if(isset($_GET['datumPodnosenjaZahtjevaZaIzdavanjePEES']) && strtotime($_GET['datumPodnosenjaZahtjevaZaIzdavanjePEES']) != false){ $datumPodnosenjaZahtjevaZaIzdavanjePEES = date("Y-m-d",strtotime($_GET['datumPodnosenjaZahtjevaZaIzdavanjePEES'])); $datumPodnosenjaZahtjevaZaIzdavanjePEES = stripslashes($datumPodnosenjaZahtjevaZaIzdavanjePEES); $datumPodnosenjaZahtjevaZaIzdavanjePEES = mysql_real_escape_string($datumPodnosenjaZahtjevaZaIzdavanjePEES); $datumPodnosenjaZahtjevaZaIzdavanjePEES = "'" . $datumPodnosenjaZahtjevaZaIzdavanjePEES . "'"; } else { $datumPodnosenjaZahtjevaZaIzdavanjePEES = "null"; }

if(isset($_GET['datumIshodenjaPEES']) && strtotime($_GET['datumIshodenjaPEES']) != false){ $datumIshodenjaPEES = date("Y-m-d",strtotime($_GET['datumIshodenjaPEES'])); $datumIshodenjaPEES = stripslashes($datumIshodenjaPEES); $datumIshodenjaPEES = mysql_real_escape_string($datumIshodenjaPEES); $datumIshodenjaPEES = "'" . $datumIshodenjaPEES . "'"; } else { $datumIshodenjaPEES = "null"; }

if(isset($_GET['datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci']) && strtotime($_GET['datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci']) != false){ $datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci = date("Y-m-d",strtotime($_GET['datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci'])); $datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci = stripslashes($datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci); $datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci = mysql_real_escape_string($datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci); $datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci = "'" . $datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci . "'"; } else { $datumPodnosenjaZahtjevaZaSklapanjeUgovoraOIsporuci = "null"; }

if(isset($_GET['datumIshodenjaUgovoraOIsporuci']) && strtotime($_GET['datumIshodenjaUgovoraOIsporuci']) != false){ $datumIshodenjaUgovoraOIsporuci = date("Y-m-d",strtotime($_GET['datumIshodenjaUgovoraOIsporuci'])); $datumIshodenjaUgovoraOIsporuci = stripslashes($datumIshodenjaUgovoraOIsporuci); $datumIshodenjaUgovoraOIsporuci = mysql_real_escape_string($datumIshodenjaUgovoraOIsporuci); $datumIshodenjaUgovoraOIsporuci = "'" . $datumIshodenjaUgovoraOIsporuci . "'"; } else { $datumIshodenjaUgovoraOIsporuci = "null"; }

if(isset($_GET['ugovorniIzvodacRadova'])){ $ugovorniIzvodacRadova = $_GET['ugovorniIzvodacRadova']; $ugovorniIzvodacRadova = stripslashes($ugovorniIzvodacRadova); $ugovorniIzvodacRadova = mysql_real_escape_string($ugovorniIzvodacRadova); } else { $ugovorniIzvodacRadova = ""; }

if(isset($_GET['datumSklapanjaUgovoraOIzvodenjuRadova']) && strtotime($_GET['datumSklapanjaUgovoraOIzvodenjuRadova']) != false){ $datumSklapanjaUgovoraOIzvodenjuRadova = date("Y-m-d",strtotime($_GET['datumSklapanjaUgovoraOIzvodenjuRadova'])); $datumSklapanjaUgovoraOIzvodenjuRadova = stripslashes($datumSklapanjaUgovoraOIzvodenjuRadova); $datumSklapanjaUgovoraOIzvodenjuRadova = mysql_real_escape_string($datumSklapanjaUgovoraOIzvodenjuRadova); $datumSklapanjaUgovoraOIzvodenjuRadova = "'" . $datumSklapanjaUgovoraOIzvodenjuRadova . "'"; } else { $datumSklapanjaUgovoraOIzvodenjuRadova = "null"; }

if(isset($_GET['datumPocetkaIzvodenjaRadova']) && strtotime($_GET['datumPocetkaIzvodenjaRadova']) != false){ $datumPocetkaIzvodenjaRadova = date("Y-m-d",strtotime($_GET['datumPocetkaIzvodenjaRadova'])); $datumPocetkaIzvodenjaRadova = stripslashes($datumPocetkaIzvodenjaRadova); $datumPocetkaIzvodenjaRadova = mysql_real_escape_string($datumPocetkaIzvodenjaRadova); $datumPocetkaIzvodenjaRadova = "'" . $datumPocetkaIzvodenjaRadova . "'"; } else { $datumPocetkaIzvodenjaRadova = "null"; }

if(isset($_GET['datumZavrsetkaIzvodenjaRadova']) && strtotime($_GET['datumZavrsetkaIzvodenjaRadova']) != false){ $datumZavrsetkaIzvodenjaRadova = date("Y-m-d",strtotime($_GET['datumZavrsetkaIzvodenjaRadova'])); $datumZavrsetkaIzvodenjaRadova = stripslashes($datumZavrsetkaIzvodenjaRadova); $datumZavrsetkaIzvodenjaRadova = mysql_real_escape_string($datumZavrsetkaIzvodenjaRadova); $datumZavrsetkaIzvodenjaRadova = "'" . $datumZavrsetkaIzvodenjaRadova . "'"; } else { $datumZavrsetkaIzvodenjaRadova = "null"; }

if(isset($_GET['datumPodnosenjaZahtjevaZaIzdavanjeEES']) && strtotime($_GET['datumPodnosenjaZahtjevaZaIzdavanjeEES']) != false){ $datumPodnosenjaZahtjevaZaIzdavanjeEES = date("Y-m-d",strtotime($_GET['datumPodnosenjaZahtjevaZaIzdavanjeEES'])); $datumPodnosenjaZahtjevaZaIzdavanjeEES = stripslashes($datumPodnosenjaZahtjevaZaIzdavanjeEES); $datumPodnosenjaZahtjevaZaIzdavanjeEES = mysql_real_escape_string($datumPodnosenjaZahtjevaZaIzdavanjeEES); $datumPodnosenjaZahtjevaZaIzdavanjeEES = "'" . $datumPodnosenjaZahtjevaZaIzdavanjeEES . "'"; } else { $datumPodnosenjaZahtjevaZaIzdavanjeEES = "null"; }

if(isset($_GET['datumIshodenjaEES']) && strtotime($_GET['datumIshodenjaEES']) != false){ $datumIshodenjaEES = date("Y-m-d",strtotime($_GET['datumIshodenjaEES'])); $datumIshodenjaEES = stripslashes($datumIshodenjaEES); $datumIshodenjaEES = mysql_real_escape_string($datumIshodenjaEES); $datumIshodenjaEES = "'" . $datumIshodenjaEES . "'"; } else { $datumIshodenjaEES = "null"; }

if(isset($_GET['brojMjernogMjesta']) && $_GET['brojMjernogMjesta'] != ""){ $brojMjernogMjesta = $_GET['brojMjernogMjesta']; $brojMjernogMjesta = stripslashes($brojMjernogMjesta); $brojMjernogMjesta = mysql_real_escape_string($brojMjernogMjesta); } else { $brojMjernogMjesta = "null"; }

if(isset($_GET['datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije']) && strtotime($_GET['datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije']) != false){ $datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije = date("Y-m-d",strtotime($_GET['datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije'])); $datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije = stripslashes($datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije); $datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije = mysql_real_escape_string($datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije); $datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije = "'" . $datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije . "'"; } else { $datumPocetkaPrimjeneUgovoraOIsporuciElektricneEnergije = "null"; }

if(isset($_GET['provizija']) && $_GET['provizija'] != ""){ $provizija = $_GET['provizija']; $provizija = stripslashes($provizija); $provizija = mysql_real_escape_string($provizija); } else { $provizija = "null"; }

//------------------------------------------------------------------------------------------------------------------------------------------

if(isset($_GET['pdf6'])){ $pdf6 = $_GET['pdf6']; $pdf6 = stripslashes($pdf6); $pdf6 = mysql_real_escape_string($pdf6); } else { $pdf6 = ""; }

if(isset($_GET['pdf7'])){ $pdf7 = $_GET['pdf7']; $pdf7 = stripslashes($pdf7); $pdf7 = mysql_real_escape_string($pdf7); } else { $pdf7 = ""; }

if(isset($_GET['pdf8'])){ $pdf8 = $_GET['pdf8']; $pdf8 = stripslashes($pdf8); $pdf8 = mysql_real_escape_string($pdf8); } else { $pdf8 = ""; }

if(isset($_GET['pdf9'])){ $pdf9 = $_GET['pdf9']; $pdf9 = stripslashes($pdf9); $pdf9 = mysql_real_escape_string($pdf9); } else { $pdf9 = ""; }

if(isset($_GET['pdf10'])){ $pdf10 = $_GET['pdf10']; $pdf10 = stripslashes($pdf10); $pdf10 = mysql_real_escape_string($pdf10); } else { $pdf10 = ""; }

if(isset($_GET['pdf11'])){ $pdf11 = $_GET['pdf11']; $pdf11 = stripslashes($pdf11); $pdf11 = mysql_real_escape_string($pdf11); } else { $pdf11 = ""; }

if(isset($_GET['pdf12'])){ $pdf12 = $_GET['pdf12']; $pdf12 = stripslashes($pdf12); $pdf12 = mysql_real_escape_string($pdf12); } else { $pdf12 = ""; }

if(isset($_GET['pdf13'])){ $pdf13 = $_GET['pdf13']; $pdf13 = stripslashes($pdf13); $pdf13 = mysql_real_escape_string($pdf13); } else { $pdf13 = ""; }

if(isset($_GET['pdf14'])){ $pdf14 = $_GET['pdf14']; $pdf14 = stripslashes($pdf14); $pdf14 = mysql_real_escape_string($pdf14); } else { $pdf14 = ""; }

if(isset($_GET['pdf15'])){ $pdf15 = $_GET['pdf15']; $pdf15 = stripslashes($pdf15); $pdf15 = mysql_real_escape_string($pdf15); } else { $pdf15 = ""; }

if(isset($_GET['pdf16'])){ $pdf16 = $_GET['pdf16']; $pdf16 = stripslashes($pdf16); $pdf16 = mysql_real_escape_string($pdf16); } else { $pdf16 = ""; }

if(isset($_GET['zip1'])){ $zip1 = $_GET['zip1']; $zip1 = stripslashes($zip1); $zip1 = mysql_real_escape_string($zip1); } else { $zip1 = ""; }

if(isset($_GET['zip2'])){ $zip2 = $_GET['zip2']; $zip2 = stripslashes($zip2); $zip2 = mysql_real_escape_string($zip2); } else { $zip2 = ""; }

//--------------------------------------------------------------- update -----------------------------------------------------------------

if(isset($_GET['pdf6original'])){ $pdf6original = $_GET['pdf6original']; $pdf6original = stripslashes($pdf6original); $pdf6original = mysql_real_escape_string($pdf6original); } else { $pdf6original = ""; }

if(isset($_GET['pdf7original'])){ $pdf7original = $_GET['pdf7original']; $pdf7original = stripslashes($pdf7original); $pdf7original = mysql_real_escape_string($pdf7original); } else { $pdf7original = ""; }

if(isset($_GET['pdf8original'])){ $pdf8original = $_GET['pdf8original']; $pdf8original = stripslashes($pdf8original); $pdf8original = mysql_real_escape_string($pdf8original); } else { $pdf8original = ""; }

if(isset($_GET['pdf9original'])){ $pdf9original = $_GET['pdf9original']; $pdf9original = stripslashes($pdf9original); $pdf9original = mysql_real_escape_string($pdf9original); } else { $pdf9original = ""; }

if(isset($_GET['pdf10original'])){ $pdf10original = $_GET['pdf10original']; $pdf10original = stripslashes($pdf10original); $pdf10original = mysql_real_escape_string($pdf10original); } else { $pdf10original = ""; }

if(isset($_GET['pdf11original'])){ $pdf11original = $_GET['pdf11original']; $pdf11original = stripslashes($pdf11original); $pdf11original = mysql_real_escape_string($pdf11original); } else { $pdf11original = ""; }

if(isset($_GET['pdf12original'])){ $pdf12original = $_GET['pdf12original']; $pdf12original = stripslashes($pdf12original); $pdf12original = mysql_real_escape_string($pdf12original); } else { $pdf12original = ""; }

if(isset($_GET['pdf13original'])){ $pdf13original = $_GET['pdf13original']; $pdf13original = stripslashes($pdf13original); $pdf13original = mysql_real_escape_string($pdf13original); } else { $pdf13original = ""; }

if(isset($_GET['pdf14original'])){ $pdf14original = $_GET['pdf14original']; $pdf14original = stripslashes($pdf14original); $pdf14original = mysql_real_escape_string($pdf14original); } else { $pdf14original = ""; }

if(isset($_GET['pdf15original'])){ $pdf15original = $_GET['pdf15original']; $pdf15original = stripslashes($pdf15original); $pdf15original = mysql_real_escape_string($pdf15original); } else { $pdf15original = ""; }

if(isset($_GET['pdf16original'])){ $pdf16original = $_GET['pdf16original']; $pdf16original = stripslashes($pdf16original); $pdf16original = mysql_real_escape_string($pdf16original); } else { $pdf16original = ""; }

if(isset($_GET['zip1original'])){ $zip1original = $_GET['zip1original']; $zip1original = stripslashes($zip1original); $zip1original = mysql_real_escape_string($zip1original); } else { $zip1original = ""; }

if(isset($_GET['zip2original'])){ $zip2original = $_GET['zip2original']; $zip2original = stripslashes($zip2original); $zip2original = mysql_real_escape_string($zip2original); } else { $zip2original = ""; }

//-------------------------------------------------------------------------------------------------------------------------------------------
