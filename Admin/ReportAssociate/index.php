<?php
if(!isset($_SESSION)) {
	session_start();
}
if(!isset($_SESSION['privileges']) || $_SESSION['privileges'] != 1) {
	$putanja = 'http://' . $_SERVER["SERVER_NAME"] . "/" . basename($_SESSION['SITE_URL']) . "/index.php";
	header('Location: ' . $putanja . '/index.php ');
	exit();
}
include_once $_SESSION['BASE_PATH']  . '/Admin/HeaderFooter/header.php';
include_once $_SESSION['BASE_PATH']  . '/Admin/Class/projectUserTable.php';

$uid = new projectUserTable();
$uid->user($_SESSION['UserId']);
$user = $uid->getResult(); 
//print_r($user);

include_once $_SESSION['BASE_PATH']  . '/Admin/View/reportAssociateView.php'; ?>

<div id="tableView">
</div>

<?php include_once $_SESSION['BASE_PATH']  . '/Admin/HeaderFooter/footer.php';?>
<script type="text/javascript">
<!--
jQuery(document).ready(function(){
	 $("input[name='projekti']",$('#radioForm')).change(
			    function(e)
			    {
			       var id = $("input[@name=projekti]:checked").val();
			       table(id);
			    });

		function table(id){
			
			jQuery.get("<?php echo $_SESSION['SITE_URL']; ?>/Admin/ReportAssociate/stats.php", {UID : id}, function(data){
		    jQuery('#tableView').html(data);		       
		     });

		};
});
//-->
</script>