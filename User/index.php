<?php
if(!isset($_SESSION)) {
     session_start();
}
if(!isset($_SESSION['privileges'])) {
	$putanja = 'http://' . $_SERVER["SERVER_NAME"] . "/" . basename($_SESSION['SITE_URL']) . "/index.php";
	header('Location: ' . $putanja . '/index.php ');
	exit();
}
include_once $_SESSION['BASE_PATH']  . '/User/HeaderFooter/header.php';
include_once $_SESSION['BASE_PATH']  . '/User/Class/projectUserTable.php';

$_SESSION['UserId'] = stripslashes($_SESSION['UserId']);
$_SESSION['UserId'] = mysql_real_escape_string($_SESSION['UserId']);
$uid = new projectUserTable();
$uid->displayTable($_SESSION['UserId']);
$user = $uid->getResult();
include_once $_SESSION['BASE_PATH']  . '/User/View/Searchbar.php';
if(!empty($user)){
include_once $_SESSION['BASE_PATH']  . '/User/View/projectUserTableView.php';
}
else
{
	echo '<h1>Korisnik nema kreiranih projekata.</h1>';
}
include_once $_SESSION['BASE_PATH']  . '/User/HeaderFooter/footer.php';
?>

<script type="text/javascript">
<!--


jQuery(document).ready(function(){

    jQuery('#pretraga').click(function () {
		
    	var upit = jQuery("#uvjet").val();
		 search(upit);
	    return false;
	   });
	   
			
			function search(upit){
				
				jQuery.get("<?php echo $_SESSION['SITE_URL']; ?>/User/Ajax/searchTable.php", {UserId : <?php echo $_SESSION['UserId']; ?>, Upit : upit}, function(data){
		        jQuery('#projectTable').html(data);
		       
		         });
			
	  };
});
//-->
</script>

