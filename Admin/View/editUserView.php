<div id="errorMessage">
</div>

<?php // Svaki input koji nije zadovoljio uvjet dobija klasu error, u div errorMessage se ispisuju poruke pogreške, stavio sam ih u h1 ako to želiš makniti reci mi ?>
<div id="form1">

<?php for ($i = 0; $i < count($userData); $i++) { ?>
<p>
<input type="radio" name="ovlasti" value="0" id="user" <?php if(isset($userData[$i]['Administrator']) && $userData[$i]['Administrator'] == 0 ) { ?>checked="checked" <?php } ?>/><label for="user">Korisnik</label>
<input type="radio" name="ovlasti" value="1" id="admin" <?php if(isset($userData[$i]['Administrator']) && $userData[$i]['Administrator'] == 1 ) { ?>checked="checked" <?php } ?> /><label for="admin">Administrator</label>
</p>

<p>
	<label for="ime">Ime: </label>
		<input type="text" value="<?php if(isset($userData[$i]['Name'])){ echo trim($userData[$i]['Name']); }?>" name="ime" id="ime" />
</p>

<p>
	<label for="prezime">Prezime: </label>
		<input type="text" value="<?php if(isset($userData[$i]['LastName'])){ echo trim($userData[$i]['LastName']); }?>" name="prezime" id="prezime" />
</p>

<p>
	<label for="userName">Korisničko ime: </label>
	<input type="text" value="<?php if(isset($userData[$i]['UserName'])){ echo trim($userData[$i]['UserName']); }?>" name="userName" id="userName" />
</p>
<p>
<label for="passwordCheck">Promjena lozinke: </label><input type="checkbox" id="passwordCheck" />
</p>
<div id="passwordChange">
</div>
<?php } ?>
</div>

<p>
<input type="button" id="dodaj" name="dodaj" value="Promjeni korisničke podatke" />
</p>