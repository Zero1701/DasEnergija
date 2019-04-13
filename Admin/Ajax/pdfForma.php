<?php
if(!isset($_SESSION)) {
	session_start();
} ?>
<?php if ($_GET['forma'] == 1) { ?>
<form id="pdfForm1" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf1">
<label>Posjedovni list (PDF):</label> <input type="file" name="pdf" id="posjedovniListFile" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 2) { ?>
<form id="pdfForm2" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf2">
<label>Izvod iz katastarskog plana (PDF):</label> <input type="file" name="pdf" id="izvodIzKatastarskogPlanaFile" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 3) { ?>
<form id="pdfForm3" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf3">
<label>Satelitska snimka prostora (PDF):</label> <input type="file" name="pdf" id="satelitskaSnimkaProstoraFile" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 4) { ?>
<form id="pdfForm4" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf4">
<label>Ponuda (PDF):</label> <input type="file" name="pdf" id="ponudaFile" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 5) { ?>
<form id="pdfForm5" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf5">
<label>Ugovor s vlasnikom (PDF):</label> <input type="file" name="pdf" id="ugovorSvlasnikomFile" />
</form>
<?php } ?>