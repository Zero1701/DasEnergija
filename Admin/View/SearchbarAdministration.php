<form class="pretraga clearfix">
	<div>
		<input type="text" id="uvjet" value="Ime, Prezime, Korisničko ime"> 
		<input type="submit" id="pretraga" value ="Pretraži" class="pretraga-submit">
	</div>
</form>

<ul class="nav clearfix">
<li class="first kreiraj"><a href="<?php echo $putanjaDoNovogKorisnika; ?>"><span class="icon">Kreiraj novog korisnika</span></a></li>

</ul>

<ul class="incoming-done clearfix">
	<li class="first incoming"><a href="#" rel="KorisnikTable" id="KorisnikTable" >Korisnici</a></li>
	<li class="done"><a href="#" rel="AdminTable" id="AdminTable" >Administratori</a></li>
</ul>