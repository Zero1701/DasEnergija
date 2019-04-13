<h1 class="kreiraj-title rep">Izvještaj o ukupnom stanju</h1>

<ul class="quick-overview clearfix">
	<li>Broj suradnika <span><?php echo $UkupanBrojSuradnika; ?></span></li>
	<li>Prosječna cijena najma  <span><?php echo ($Najamnina - $Najamnina2); ?></span> </li>
	<li>Prosječna provizija <span><?php echo ($NajamninaP - $NajamninaP2); ?></span> </li>
	<li>Prosječno vrijeme razvoja projekta <span><?php echo $PostotakProsjecnoVrijemeRazvojaProjekta; ?></span></li>
</ul>

<ul class="najam-report reports">
	<li class="report-title">Najmovi</li>
	<li>Ukupan broj ponuda za najam prostora : <span><?php echo $UkupanBrojPonudaZaNajamProstora; ?></span></li>	
	<li>Ukupna površina prostora za koju je ponuđen najam : <span><?php echo $UkupnaPovrsinaProstoraZaKojuJePonudenNajam; ?></span></li>
	<li>Ukupan broj sklopljenih ugovora o najmu : <span><?php echo $UkupanBrojSklopljenihUgovoraONajmu; ?></span></li>
	<li>Postotak potpisanih ugovora u odnosu na ponuđene ugovore : <span><?php echo $PostotakPotpisanihUgovora . " %"; ?></span></li>
	<li>Postotak površina u zajmu u odnosu na ukupnu površinu za koju je ponuđen najam : <span><?php echo $PostotakPovrsinaUZajmu . " %"; ?></span></li>
</ul>

<ul class="elektrane-report reports">
	<li class="report-title">Elektrane</li>
	<li>Ukupno projektirana snaga elektrana na površinama za koje je ponuđen najam : <span><?php echo $UkupnoProjektiranaSnagaElektranaPonudjeno; ?></span></li>
	<li>Ukupna projektirana snaga elektrana na zakupljenim prostorima : <span><?php echo $UkupnoProjektiranaSnagaElektranaPonudjenoNaZakupljenimProstorima; ?></span></li>
	<li>Postotak projektirane snage elektrana na ugovorenim površinama u odnosu na projektiranu snagu elektrana na svim ponuđenim površinama : <span><?php echo $PostotakProjektiraneSnageElektranaNaUgovorenim . " %"; ?></span></li>
	<li>Ukupna predviđena godišnja proizvodnja elektrana  na površinama za koje je ponuđen najam : <span><?php echo $UkupnaPredvidenaGodisnjaProizvodnjaElektranaPonudjeno; ?></span></li>
	<li>Ukupna predviđena godišnja proizvodnja elektrana  na površinama za koje je ugovoren najam : <span><?php echo $UkupnaPredvidenaGodisnjaProizvodnjaElektranaUgovoreno; ?></span></li>
	<li>Postotak predviđene proizvodnje elektrana na ugovorenim površinama u odnosu na ukupnu predviđenu proizvodnju elektrana na svim ponuđenim površinama : <span><?php echo $PostotakPredvidjeneSnageElektranaNaUgovorenim . " %"; ?></span></li>
	<li>Ukupna instalirana snaga elektrana koje su trajno priključene na mrežu i isporučuju energiju u sustav : <span><?php echo $UkupnaInstaliranaSnagaElektranaKojeSuTrajnoPrikljuceneNaMrezuIIsporucujuEnergijuUSustav; ?></span></li>
	<li>Ukupna očekivana godišnja proizvodnja elektrana koje su priključene na mrežu i isporučuju energiju u sustav : <span><?php echo $UkupnaOcekivanaGodisnjaProizvodnjaElektranaKojeSuPrikljuceneNaMrezuIIsporucujuEnergijuUSustav; ?></span></li>
</ul>

<ul class="ees-report reports">
	<li class="report-title">EES</li>
	<li>Ukupan broj predanih zahtjeva za EES : <span><?php echo $UkupanBrojPredanihZahtjevaZaEES; ?></span></li>
	<li>Ukupan broj ishođenih EES  : <span><?php echo $UkupanBrojIshodenihZahtjevaZaEES; ?></span></li>
	<li>Prosječno vrijeme trajanja ishođenja EES  : <span><?php echo $PostotakProsjecnoVrijemeTrajanjaIshodenjaEES; ?></span></li>
</ul>


<ul class="pees-report reports">
	<li class="report-title">PEES</li>
	<li>Ukupan broj predanih zahtjeva za PEES : <span><?php echo $UkupanBrojPredanihZahtjevaZaPEES; ?></span></li>
	<li>Ukupan broj ishođenih PEES : <span><?php echo $UkupanBrojIshodenihZahtjevaZaPEES; ?></span></li>
	<li>Prosječno vrijeme trajanja ishođenja PEES  : <span><?php echo $PostotakProsjecnoVrijemeTrajanjaIshodenjaPEES; ?></span></li>
	
</ul>

<ul class="ugovor-o-isporuci-report reports">
	<li class="report-title">Ugovori o isporuci</li>
	<li>Ukupan broj predanih zahtjeva za sklapanje ugovora o isporuci : <span><?php echo $UkupanBrojPredanihZahtjevaZaSklapanjeUgovoraOIsporuci; ?></span></li>
	<li>Ukupan broj potpisanih Ugovora o isporuci  : <span><?php echo $UkupanBrojPotpisanihUgovoraOIsporuci; ?></span></li>
	<li>Prosječno vrijeme trajanja ishođenja Ugovora o isporuci : <span><?php echo $PostotakProsjecnoVrijemeTrajanjaIshodenjaUgovoraOIsporuci; ?></span></li>
	<li>Ukupan broj ugovora o isporuci električne energije za koje je počela primjena ugovora : <span><?php echo $UkupanBrojUgovoraOIsporuciElektricneEnergijeZaKojeJePocelaPrimjenaUgovora; ?></span></li>
</ul>


