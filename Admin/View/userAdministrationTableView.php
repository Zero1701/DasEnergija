 <table class="pocetna-table">
	<thead>
  <tr>
    <th>Ime i prezime</th>
    <th>Korisničko ime</th>
    <th>Uredi korisničke podatke</th>
    <th>Obriši korisnika</th>
    <th>Ovlasti</th>
  </tr>
  </thead>
  <tbody>
  <?php for ($i = 0; $i < count($userData); $i++) { ?>
  <tr>
    <td><?php echo $userData[$i]['Name'] . " " . $userData[$i]['LastName']; ?></td>
    <td><?php echo $userData[$i]['UserName']; ?></td>
    <td><a href="<?php echo $_SESSION['SITE_URL']; ?>/Admin/AccountEdit/index.php?id=<?php echo $userData[$i]['idUser'];?>">Uredi</a></td>
    <td id="del"><a rel="all" href="<?php echo $userData[$i]['idUser'];?>">Obriši</a></td>
    <td id="auth"><?php if(isset($userData[$i]['Administrator']) && $userData[$i]['Administrator'] == 1) {?><a id="uKorisnika" rel="all" href="<?php echo $userData[$i]['idUser'];?>">Administrator</a><?php } else { ?><a id="uAdmina" rel="all" href="<?php echo $userData[$i]['idUser'];?>">Korisnik</a><?php } ?></td>
  </tr>
  <?php } ?>
  </tbody>
</table>


