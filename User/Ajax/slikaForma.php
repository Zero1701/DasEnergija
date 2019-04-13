<?php
if(!isset($_SESSION)) {
	session_start();
} ?>
<?php if ($_GET['forma'] == 1) { ?>
<form id="slikaForm1" method="post" enctype="multipart/form-data" action='<?php echo $_SESSION['SITE_URL'];?>/User/Ajax/ajaximage.php?tip=slika1'>
Slika1: <input type="file" name="slika" id="slika1File" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 2) { ?>
<form id="slikaForm2" method="post" enctype="multipart/form-data" action='<?php echo $_SESSION['SITE_URL'];?>/User/Ajax/ajaximage.php?tip=slika2'>
Slika2: <input type="file" name="slika" id="slika2File" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 3) { ?>
<form id="slikaForm3" method="post" enctype="multipart/form-data" action='<?php echo $_SESSION['SITE_URL'];?>/User/Ajax/ajaximage.php?tip=slika3'>
Slika3: <input type="file" name="slika" id="slika3File" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 4) { ?>
<form id="slikaForm4" method="post" enctype="multipart/form-data" action='<?php echo $_SESSION['SITE_URL'];?>/User/Ajax/ajaximage.php?tip=slika4'>
Slika4: <input type="file" name="slika" id="slika4File" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 5) { ?>
<form id="slikaForm5" method="post" enctype="multipart/form-data" action='<?php echo $_SESSION['SITE_URL'];?>/User/Ajax/ajaximage.php?tip=slika5'>
Slika5: <input type="file" name="slika" id="slika5File" />
</form>
<?php } ?>