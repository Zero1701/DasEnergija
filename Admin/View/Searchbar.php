
<form class="pretraga clearfix">
	<div>
		<input type="text" id="uvjet" value="Vlasnik prostora, Mjesto, Poš. broj, Broj KČ, Površina krova"> 
		<input type="submit" id="pretraga" value ="Pretraži" class="pretraga-submit">
	</div>
</form>

<ul class="nav clearfix">
<li class="first kreiraj"><a href="<?php echo $putanjaDoNovog; ?>"><span class="icon">Kreiraj novi projekt</span></a></li>
<li class="izvjestaji"><a href="<?php echo $putanjaDoIzvjestaja; ?>"><span class="icon">Izvještaji</span></a></li>
<li class="o-suradnicima"><a href="<?php echo $putanjaDoIzvjestajaOSuradnicima; ?>"><span class="icon">Izvještaji o suradnicima</span></a></li>
<li class="o-ukupnom-stanju"><a href="<?php echo $putanjaDoIzvjestajaOUkupnomStanju; ?>"><span class="icon">Izvještaj o ukupnom stanju</span></a></li>
</ul>

<ul class="incoming-done clearfix">
	<li class="first incoming"><a href="#" rel="dolazniK" id="dolazniK" >Dolazni korisnikovi zahtjevi</a></li>
	<li class="done"><a href="#" rel="obradjeniK" id="obradjeniK" >Obrađeni korisnikovi zahtjevi</a></li>
</ul>
