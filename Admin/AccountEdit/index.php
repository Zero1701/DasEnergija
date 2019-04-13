<?php
if(!isset($_SESSION)) {
	session_start();
}
if(!isset($_SESSION['privileges']) || $_SESSION['privileges'] != 1) {
	$putanja = 'http://' . $_SERVER["SERVER_NAME"] . "/" . basename($_SESSION['SITE_URL']) . "/index.php";
	header('Location: ' . $putanja . '/index.php ');
	exit();
} 
 include_once $_SESSION['BASE_PATH']  . '/Admin/HeaderFooter/header.php'; ?>
 <script type="text/javascript" src="<?php echo $_SESSION['SITE_URL'];?>/Script/serialise.js"></script>
 <?php 
include_once $_SESSION['BASE_PATH']  . '/Admin/Class/userDetail.php';

$userId = stripslashes($_GET['id']);
$userId = mysql_real_escape_string($userId);
$user = new userDetail();
$user->displayUserById($userId);
$userData = $user->getResult();

include_once $_SESSION['BASE_PATH']  . '/Admin/View/editUserView.php';
include_once $_SESSION['BASE_PATH']  . '/Admin/HeaderFooter/footer.php'; ?>

<script type="text/javascript">
<!--
jQuery(document).ready(function(){

	$('#passwordCheck').click(function () {
		if ($('#passwordCheck').is(':checked')) {
		    passwordForm();
		} else {
			$('#passwordChange').html('');
		} 
	});

	function passwordForm() {
		jQuery.get("<?php echo $_SESSION['SITE_URL']; ?>/Admin/Ajax/userPasswordEdit.php",{}, function(data){
			$('#passwordChange').html(data);
		    
		       
	     });
		};

jQuery('#dodaj').click(function () {
	ImeCheck();
	PrezimeCheck();
	UserNameCheck();
	PasswordCheck();
	
	var provjera = false;
	if(ImeCheck() && PrezimeCheck() && UserNameCheck() && PasswordCheck()) {
	provjera = true;
	}
else
{
 provjera = false;
	}
	
	if(provjera)
	{
		obrada();
		}
return false;
});

function obrada(){
	
	jQuery.get("<?php echo $_SESSION['SITE_URL']; ?>/Admin/Ajax/editAccount.php?id=<?php echo trim($_GET['id']);?>",$('#form1').serializeAnything(), function(data){

    
       
     });

};

	
function ImeCheck() {
	  var ime = $.trim(jQuery("#ime").val());
		if(ime.length == 0) {
			jQuery("#ime").addClass('error');
			$('#errorMessage').html('<h1>Obavezan unos imena</h1><br />');
			return false;
			
		}
		else
		{
			jQuery("#ime").removeClass('error');
			jQuery('#ime').removeAttr("class");
			$('#errorMessage').html('');
		return true;
		}
		
	}

function UserNameCheck() {
	  var UserName = $.trim(jQuery("#userName").val());
		if(UserName.length == 0) {
			jQuery("#userName").addClass('error');
			$('#errorMessage').html('<h1>Obavezan unos korisničkog imena</h1><br />');
			return false;
			
		}
		else
		{
			jQuery("#userName").removeClass('error');
			jQuery('#userName').removeAttr("class");
			$('#errorMessage').html('');
		return true;
		}
		
	}

function PrezimeCheck() {
	  var prezime = $.trim(jQuery("#prezime").val());
		if(prezime.length == 0) {
			jQuery("#prezime").addClass('error');
			$('#errorMessage').html('<h1>Obavezan unos prezimena</h1><br />');
			return false;
			
		}
		else
		{
			jQuery("#prezime").removeClass('error');
			jQuery('#prezime').removeAttr("class");
			$('#errorMessage').html('');
		return true;
		}
		
	}

	function PasswordCheck(){
		if($('#password').val() != undefined && $('#cPassword').val() != undefined){
		if($('#password').val() != $('#cPassword').val()){
			jQuery("#password").addClass('error');
			jQuery("#cPassword").addClass('error');
			$('#errorMessage').html('<h1>Lozinka i potvrda lozinke nemaju jednaku vrijednost</h1><br />');
			return false;
			}
		else if($.trim($('#password').val().length) == 0){
			jQuery("#password").addClass('error');
			$('#errorMessage').html('<h1>Obavezan unos lozinke</h1><br />');
			return false; 
		}
		else
		{
			jQuery("#password").removeClass('error');
			jQuery("#cPassword").removeClass('error');
			jQuery('#password').removeAttr("class");
			jQuery('#cPassword').removeAttr("class");
			$('#errorMessage').html('');
			return true;
		}
		}
		else
		{
			return true;
			}
	}
});
//-->
</script>
