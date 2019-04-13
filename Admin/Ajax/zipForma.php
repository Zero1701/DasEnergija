<?php
if(!isset($_SESSION)) {
	session_start();
} ?>
<?php if ($_GET['forma'] == 1) { ?>
<form id="zipForm1" method="post" enctype="multipart/form-data" action='<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxzip.php?tip=zip1'>
<label>Projekt "Nacrti" (ZIP):</label> <input type="file" name="zip" id="zip1File" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 2) { ?>
<form id="zipForm2" method="post" enctype="multipart/form-data" action='<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxzip.php?tip=zip2'>
<label>Projekt "Tekst" (ZIP):</label> <input type="file" name="zip" id="zip2File" />
</form>
<?php } ?>
