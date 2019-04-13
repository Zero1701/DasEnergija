<h1 class="kreiraj-title">Izvještaji o suradnicima</h1>
<form id="radioForm">
<?php for ($i = 0; $i < count($user); $i++) { ?>
	
<p <?php if ($user[$i]['Administrator'] == 1) { ?> style="color:red;" <?php } ?>>
	<input type="radio" name="projekti" value="<?php echo $user[$i]['idUser']; ?>" /><?php echo $user[$i]['Name'] . " " . $user[$i]['LastName']; ?></p>
<?php } ?>
</form>