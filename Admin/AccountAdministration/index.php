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
include_once $_SESSION['BASE_PATH']  . '/Admin/Class/userDetail.php';
include_once $_SESSION['BASE_PATH']  . '/Admin/View/SearchbarAdministration.php';


$user = new userDetail();
$user->displayUser();
$userData = $user->getResult();
//print_r($userData);
?>

<div id="userDataTable">
<?php include_once $_SESSION['BASE_PATH']  . '/Admin/View/userAdministrationTableView.php'; ?>
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
			
			jQuery.get("<?php echo $_SESSION['SITE_URL']; ?>/Admin/Ajax/searchUserTable.php", {Upit : upit}, function(data){
	        jQuery('#userDataTable').html(data);
	       
	         });
		
  };
  
jQuery('#userDataTable').on("click",'#del a',function () {
	
	var id = jQuery(this).attr('href');
	var table = jQuery(this).attr('rel');
	var answer = confirm('Jeste li sigurni da želite obrisati ovog korisnika?');
	if (answer)
	{
		del(id,table);
	}
	
	 
    return false;
   });

function del(id,table){
	
	jQuery.get("<?php echo $_SESSION['SITE_URL']; ?>/Admin/Ajax/deleteUser.php", {UID : id, TID : table}, function(data){

		jQuery('#userDataTable').html(data);
	    
    
       
     });

};

jQuery('#userDataTable').on("click",'#uAdmina',function () {
	
	var id = jQuery(this).attr('href');
	var table = jQuery(this).attr('rel');
	obrada(id,'admin',table);
    return false;
   });
jQuery('#userDataTable').on("click",'#uKorisnika',function () {
	
	var id = jQuery(this).attr('href');
	var table = jQuery(this).attr('rel');
	obrada(id,'korisnik',table);
    return false;
   });

function obrada(id,status,table){
	
	jQuery.get("<?php echo $_SESSION['SITE_URL']; ?>/Admin/Ajax/obradaKorisnickihOvlasti.php", {UID : id, Status: status, TID : table}, function(data){
    jQuery('#userDataTable').html(data);
if(table == "admin"){
    $('#del a').attr('rel','admin');
    $('#auth a').attr('rel','admin');
}
else if(table = "korisnik")
{
	 $('#del a').attr('rel','korisnik');
	 $('#auth a').attr('rel','korisnik');
	}
else
{
	$('#del a').attr('rel','all');
	$('#auth a').attr('rel','all');
	}
     });

};

jQuery('#KorisnikTable').click(function () {


	korisnici();

	    return false;
	   });

function korisnici(){
	
	jQuery.get("<?php echo $_SESSION['SITE_URL']; ?>/Admin/Ajax/userAdminTable.php", {Table : 0}, function(data){
    jQuery('#userDataTable').html(data);
    $('#del a').attr('rel','korisnik');
    $('#auth a').attr('rel','korisnik'); 
	jQuery('#KorisnikTable').addClass("active");
	jQuery('#AdminTable').removeClass("active");
	jQuery('#AdminTable').removeAttr("class"); 
     });

};

jQuery('#AdminTable').click(function () {
	
	admin();

	    return false;
	   });

	function admin(){
		
		jQuery.get("<?php echo $_SESSION['SITE_URL']; ?>/Admin/Ajax/userAdminTable.php", {Table : 1}, function(data){
	    jQuery('#userDataTable').html(data);
	    $('#del a').attr('rel','admin');
	    $('#auth a').attr('rel','admin');
	    jQuery('#AdminTable').addClass("active");
	    jQuery('#KorisnikTable').removeClass("active");
	    jQuery('#KorisnikTable').removeAttr("class");
		});

	};
});
//-->
</script>