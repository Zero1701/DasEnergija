<div id="errorMessage">
</div>

<?php // Svaki input koji nije zadovoljio uvjet dobija klasu error, u div errorMessage se ispisuju poruke pogreške, stavio sam ih u h1 ako to želiš makniti reci mi ?>
<div id="form1">

<p>
<input type="radio" name="ovlasti" value="0" id="user" checked="checked" /><label for="user">Korisnik</label>
<input type="radio" name="ovlasti" value="1" id="admin" /><label for="admin">Administrator</label>
</p>

<p>
	<label for="ime">Ime: </label>
		<input type="text" value="" name="ime" id="ime" />
</p>

<p>
	<label for="prezime">Prezime: </label>
		<input type="text" value="" name="prezime" id="prezime" />
</p>

<p>
	<label for="userName">Korisničko ime: </label>
	<input type="text" value="" name="userName" id="userName" />
</p>

<p>
	<label for="password">Lozinka: </label>
	<input type="text" value="" name="password" id="password" />
</p>

<p>
	<label for="cPassword">Potvrda lozinke: </label>
	<input type="text" value="" name="cPassword" id="cPassword" />
</p>

</div>

<p>
<input type="button" id="dodaj" name="dodaj" value="Dodaj korisnika" />
</p>