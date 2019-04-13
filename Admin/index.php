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

$_SESSION['UserId'] = stripslashes($_SESSION['UserId']);
$_SESSION['UserId'] = mysql_real_escape_string($_SESSION['UserId']);
$uid = new projectUserTable();
$uid->displayTable($_SESSION['UserId']);
$user = $uid->getResult();
include_once $_SESSION['BASE_PATH']  . '/Admin/View/Searchbar.php'; ?>
<div id="projectTable">
<?php if(!empty($user)){
include_once $_SESSION['BASE_PATH']  . '/Admin/View/projectUserTableView.php';
}
else
{
	echo '<h1>Korisnik nema kreiranih projekata.</h1>';
}
?>
</div>
<?php include_once $_SESSION['BASE_PATH']  . '/Admin/HeaderFooter/footer.php'; ?>
<script type="text/javascript">
<!--


jQuery(document).ready(function(){

    jQuery('#pretraga').click(function () {
		
    	var upit = jQuery("#uvjet").val();
		 search(upit);
	    return false;
	   });
	   
			
			function search(upit){
				
				jQuery.get("<?php echo $_SESSION['SITE_URL']; ?>/Admin/Ajax/searchTable.php", {UserId : <?php echo $_SESSION['UserId']; ?>, Upit : upit}, function(data){
		        jQuery('#projectTable').html(data);
		       
		         });
			
	  };

	  jQuery('#projectTable').on("click",'#del a',function () {
			
	    	var id = jQuery(this).attr('href');
	    	var table = jQuery(this).attr('rel');
	    	var answer = confirm('Jeste li sigurni da želite obrisati ovaj projekt?');
	    	if (answer)
	    	{
	    		del(id,table);
	    	}
	    	
			 
		    return false;
		   });

	  function del(id,table){
			
			jQuery.get("<?php echo $_SESSION['SITE_URL']; ?>/Admin/Ajax/deleteTable.php", {PID : id, TID : table}, function(data){
	        jQuery('#projectTable').html(data);
	        
		       
	         });
		
};

jQuery('#dolazniK').click(function () {


dolazni();

    return false;
   });

function dolazni(){
	
	jQuery.get("<?php echo $_SESSION['SITE_URL']; ?>/Admin/Ajax/dolazniTable.php", {}, function(data){
    jQuery('#projectTable').html(data);
    $('#del a').attr('rel','dolazno');
    $('#obr a').attr('rel','dolazno'); 
	jQuery('#dolazniK').addClass("active");
	jQuery('#obradjeniK').removeClass("active");
	jQuery('#obradjeniK').removeAttr("class"); 
     });

};

jQuery('#obradjeniK').click(function () {
	
	obradjeni();

	    return false;
	   });

	function obradjeni(){
		
		jQuery.get("<?php echo $_SESSION['SITE_URL']; ?>/Admin/Ajax/obradjeniTable.php", {}, function(data){
	    jQuery('#projectTable').html(data);
	    $('#del a').attr('rel','obradjeno');
	    $('#obr a').attr('rel','obradjeno');
	    jQuery('#obradjeniK').addClass("active");
	    jQuery('#dolazniK').removeClass("active");
	    jQuery('#dolazniK').removeAttr("class");
		});

	};

	  jQuery('#projectTable').on("click",'#obradi',function () {
			
	    	var id = jQuery(this).attr('href');
	    	var table = jQuery(this).attr('rel');
	    	obrada(id,'obradi',table);
		    return false;
		   });
	  jQuery('#projectTable').on("click",'#povuci',function () {
			
	    	var id = jQuery(this).attr('href');
	    	var table = jQuery(this).attr('rel');
	    	obrada(id,'povuci',table);
		    return false;
		   });

		function obrada(id,status,table){
			
			jQuery.get("<?php echo $_SESSION['SITE_URL']; ?>/Admin/Ajax/obradaProjekta.php", {PID : id, Status: status, TID : table}, function(data){
		    jQuery('#projectTable').html(data);
		    $('#del a').attr('rel','obradjeno');
		    
		       
		     });

		};
	   
	   
});
//-->
</script>

