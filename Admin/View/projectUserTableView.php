<table class="pocetna-table">
<thead>
<tr>
<th>Korisnik</th>
<th>Projekti</th>
<th>Vlasnici prostora</th>
<th>Mjesto</th>
<th>Poštanski broj</th>
<th>Broj katastarske čestice</th>
<th>Površina krova [m2]</th>
<th>Datum početka primjene ugovora o isporuci EE</th>
<th>Obriši</th>
<th>Uredi</th>
<th>Status</th>

</tr>
</thead>
<tbody>
<?php
$x = 0;
for ($i = 0; $i < count($user); $i++) {
	?>
	<?php  
	$class = ($x%2 == 0)? 'odd': 'even';
	?>
	<tr class="<?php echo $class ?>">
	<td><?php echo $user[$i]['Name'] . " " . $user[$i]['LastName']; ?></td>
	<td><?php echo $user[$i]['ProjectName']; ?></td>
	<td><?php echo $user[$i]['NameNumOfOwner']; ?></td>
	<td><?php echo $user[$i]['Location']; ?></td>
	<td><?php echo $user[$i]['ZipCode']; ?></td>
	<td><?php echo $user[$i]['CadPlotNum']; ?></td>
	<td><?php echo $user[$i]['RoofSize']; ?></td>
	<td>rezervirano za isporuku EE</td>
	<td id="del" class="delete"><a href="<?php echo $user[$i]['idProject']; ?>" rel="all" >Delete Sign</a></td>
	<td class="edit"><a href="<?php echo $putanjaPregled; ?>?id=<?php echo $user[$i]['idProject']; ?>" rel="all" >Edit Sign</a></td>
	<td id="obr">
	<?php if ($user[$i]['Approved'] == 1) {?>
	<a href="<?php echo $user[$i]['idProject']; ?>" id="povuci" rel="all">Povuci</a>
	<?php } else { ?>
	<a href="<?php echo $user[$i]['idProject']; ?>" id="obradi" rel ="all">Obradi</a>
	<?php } ?>
	</td>
	</tr>

	<?php $x++; } ?>
</tbody>
</table>