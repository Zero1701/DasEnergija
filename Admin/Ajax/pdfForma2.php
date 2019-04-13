<?php
if(!isset($_SESSION)) {
	session_start();
} ?>
<?php if ($_GET['forma'] == 6) { ?>
<form id="pdfForm6" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf6">
<label>Zahtjev za izdavanje TEP (PDF):</label> <input type="file" name="pdf" id="pdf6File" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 7) { ?>
<form id="pdfForm7" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf7">
<label>TEP (PDF):</label> <input type="file" name="pdf" id="pdf7File" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 8) { ?>
<form id="pdfForm8" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf8">
<label>Zahtjev za izdavanje PEES (PDF):</label> <input type="file" name="pdf" id="pdf8File" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 9) { ?>
<form id="pdfForm9" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf9">
<label>PEES (PDF):</label> <input type="file" name="pdf" id="pdf9File" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 10) { ?>
<form id="pdfForm10" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf10">
<label>Predugovor o priključenju (PDF):</label> <input type="file" name="pdf" id="pdf10File" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 11) { ?>
<form id="pdfForm11" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf11">
<label>Ugovor o priključenju (PDF):</label> <input type="file" name="pdf" id="pdf11File" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 12) { ?>
<form id="pdfForm12" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf12">
<label>Zahtjev za ugovor o isporuci (PDF):</label> <input type="file" name="pdf" id="pdf12File" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 13) { ?>
<form id="pdfForm13" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf13">
<label>Ugovor o isporuci električne energije (PDF):</label> <input type="file" name="pdf" id="pdf13File" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 14) { ?>
<form id="pdfForm14" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf14">
<label>Ugovor o izvođenju radova (PDF):</label> <input type="file" name="pdf" id="pdf14File" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 15) { ?>
<form id="pdfForm15" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf15">
<label>Zahtjev za izdavanje EES (PDF):</label> <input type="file" name="pdf" id="pdf15File" />
</form>
<?php } ?>
<?php if ($_GET['forma'] == 16) { ?>
<form id="pdfForm16" method="post" enctype="multipart/form-data" action="<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/ajaxpdf.php?tip=pdf16">
<label>EES (PDF):</label> <input type="file" name="pdf" id="pdf16File" />
</form>
<?php } ?>
