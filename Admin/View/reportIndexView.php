<?php 
if(!isset($_SESSION)) {
	session_start();
}?>
<h1 class="kreiraj-title nomarg">Izvještaji</h1>
<p class="print-all">
	<a class="print-all-button" id="izvjestaji" href="<?php echo $_SESSION['SITE_URL'] . '/Admin/ReportAll/'; ?>">Ispis svih izvještaja</a>
</p>
<table class="pocetna-table izvjestaji">
<thead>
<tr>
<th>Projekt</th>
<th class="ispis">Ispis</th>
<th style="text-align:center;">Odaberi projekte</th>
</tr>
</thead>
<tbody>
<tr>	
	
	<td class="selectAll" colspan="3"><a href="#" id="checkAll">Odaberi sve projekte</a></td>
</tr>
<?php $x=0; for ($i = 0; $i < count($user); $i++) { ?>
<?php $class = ($x%2 == 0)? 'odd': 'even'; ?>
<tr class="<?php echo $class ?>">
<td width="70%"><?php echo trim($user[$i]['ProjectName']);?></td>
<td class="ispis"><a href="<?php echo $_SESSION['SITE_URL'] . '/Admin/ReportSingle/index.php?id=' . trim($user[$i]['idProject']); ?>">Ispis</a></td>
<td class="check"><input type="checkbox" name="projekti[]" value="<?php echo trim($user[$i]['idProject']); ?>" /></td>
</tr>
<?php $x++;?>
<?php } ?>
</tbody>
</table>