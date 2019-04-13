<div id="projectTable">
<table class="pocetna-table">
<thead>
<tr>
<th>Projekti</th>
<th>Vlasnici prostora</th>
<th>Mjesto</th>
<th>Poštanski broj</th>
<th>Broj katastarske čestice</th>
<th>Površina krova [m2]</th>
<th>Pregled</th>
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
	<td><?php echo $user[$i]['ProjectName']; ?></td>
	<td><?php echo $user[$i]['NameNumOfOwner']; ?></td>
	<td><?php echo $user[$i]['Location']; ?></td>
	<td><?php echo $user[$i]['ZipCode']; ?></td>
	<td><?php echo $user[$i]['CadPlotNum']; ?></td>
	<td><?php echo $user[$i]['RoofSize']; ?></td>
	<td class="edit"><a href="<?php echo $putanjaPregled; ?>?id=<?php echo $user[$i]['idProject']; ?>" >Edit arrow</a></td>
	</tr>
	<?php $x++; } ?>
</tbody>
</table>
</div>