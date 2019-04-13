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
$uid->displayTable($_SESSION['UserId']);
$user = $uid->getResult(); 
include_once $_SESSION['BASE_PATH']  . '/Admin/View/reportIndexView.php'; ?>
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
			
			jQuery.get("<?php echo $_SESSION['SITE_URL']; ?>/Admin/View/reportTableIndexView.php", {PID : id}, function(data){
		    jQuery('#tableView').html(data);		       
		     });

		};
		
		    $('#checkAll').click(function () {
		        $('input[name="projekti[]"]').attr('checked',true);
		        var arr = $.map($('input[name="projekti[]"]:checked'), function(e, i) {
		            return +e.value;
		        });

		        $('#izvjestaji').attr('href','<?php echo $_SESSION['SITE_URL'] . '/Admin/ReportAll/index.php?id='; ?>' + arr.join(','));
		        provjera();
		        return false;
		    });

		    function calculate() {

		        var arr = $.map($('input[name="projekti[]"]:checked'), function(e, i) {
		            return +e.value;
		        });

		        $('#izvjestaji').attr('href','<?php echo $_SESSION['SITE_URL'] . '/Admin/ReportAll/index.php?id='; ?>' + arr.join(','));
		        provjera();
		    }


		    $('td').on('click', 'input[name="projekti[]"]', calculate);

		    function provjera() {
		        if($('input[name="projekti[]"]').is(':checked')) {
		        	$('#izvjestaji').show();
		         } else {
		        	 $('#izvjestaji').hide();
		         }
		    	
		    }

		    provjera();
		
});
//-->
</script>