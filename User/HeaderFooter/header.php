<?php
if(!isset($_SESSION)) {
     session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php echo $_SESSION['SITE_URL'];?>/User/View/style.css" type="text/css" media="screen, projection" />
<script type="text/javascript" src="<?php echo $_SESSION['SITE_URL'];?>/Script/jquery-1.7.2.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
	<div id="container">
	<div class="header clearfix">
		<div class="logout-front">
<?php 
if(isset($_SESSION['myusername'])){ ?>
	<a href="<?php echo $_SESSION['SITE_URL'] . "/Login/logout.php"; ?>">Odjava</a>
	<?php } ?>
	
		<?php if($_SESSION['privileges'] == 1){ ?>
<a href="<?php echo $_SESSION['SITE_URL'] . "/Admin/index.php"; ?>">Početna stranica</a>
<?php }  else { ?>
<a href="<?php echo $_SESSION['SITE_URL'] . "/User/index.php"; ?>">Početna stranica</a>
<?php } ?>
</div><!--/logout-front-->
<div class="admin">	
	<?php if($_SESSION['privileges'] == 1){ ?>
	Administrator: <?php echo $_SESSION['Name'] . " " . $_SESSION['LastName'];?>
	<?php }  else { ?>
	Korisnik: <?php echo $_SESSION['Name'] . " " . $_SESSION['LastName'];?>
	<?php } ?>
</div><!--/admin-->
</div><!--/header-->
<div class="content clearfix">