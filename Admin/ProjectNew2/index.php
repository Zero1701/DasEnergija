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
<script type="text/javascript" src="<?php echo $_SESSION['SITE_URL'];?>/Script/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo $_SESSION['SITE_URL'];?>/Script/serialise.js"></script>
<?php include_once $_SESSION['BASE_PATH']  . '/Admin/Class/projectUserTable.php';
include_once $_SESSION['BASE_PATH']  . '/Admin/View/newProjectTableView2.php';

include_once $_SESSION['BASE_PATH']  . '/Admin/HeaderFooter/footer.php';
?>
<script type="text/javascript">
<!--
$(document).ready(function() { 
	<?php //-------------------------PDF form6---------------------------------------- ?>
	 	    $('#pdf6File').live('change', function()			{
    	    	var pdf6 = $("#pdf6").val(); 
    	        $("#previepdf6").html('');
    	 $("#previewpdf6").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
    	 if(pdf6 != undefined)
         {$("#pdfForm6").attr("action",$("#pdfForm6").attr("action") + '&stariPdf=' + pdf6);}
    	$("#pdfForm6").ajaxForm({
    				target: '#previewpdf6'
    	}).submit();

    	});

	 	   <?php //-------------------------PDF form7---------------------------------------- ?>
	 		 	    $('#pdf7File').live('change', function()			{
	 		    	    	var pdf7 = $("#pdf7").val(); 
	 		    	        $("#previepdf7").html('');
	 		    	 $("#previewpdf7").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
	 		    	 if(pdf7 != undefined)
	 		         {$("#pdfForm7").attr("action",$("#pdfForm7").attr("action") + '&stariPdf=' + pdf7);}
	 		    	$("#pdfForm7").ajaxForm({
	 		    				target: '#previewpdf7'
	 		    	}).submit();

	 		    	});
	 		 	  
	 	   <?php //-------------------------PDF form8---------------------------------------- ?>
	 		 	 	    $('#pdf8File').live('change', function()			{
	 		 	    	    	var pdf8 = $("#pdf8").val(); 
	 		 	    	        $("#previepdf8").html('');
	 		 	    	 $("#previewpdf8").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
	 		 	    	 if(pdf8 != undefined)
	 		 	         {$("#pdfForm8").attr("action",$("#pdfForm8").attr("action") + '&stariPdf=' + pdf8);}
	 		 	    	$("#pdfForm8").ajaxForm({
	 		 	    				target: '#previewpdf8'
	 		 	    	}).submit();

	 		 	    	});

	 		 	 	 <?php //-------------------------PDF form9---------------------------------------- ?>
	 		 	 	 	    $('#pdf9File').live('change', function()			{
	 		 	 	    	    	var pdf9 = $("#pdf9").val(); 
	 		 	 	    	        $("#previepdf9").html('');
	 		 	 	    	 $("#previewpdf9").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
	 		 	 	    	 if(pdf9 != undefined)
	 		 	 	         {$("#pdfForm9").attr("action",$("#pdfForm9").attr("action") + '&stariPdf=' + pdf9);}
	 		 	 	    	$("#pdfForm9").ajaxForm({
	 		 	 	    				target: '#previewpdf9'
	 		 	 	    	}).submit();

	 		 	 	    	});

	 		 	 	 	<?php //-------------------------PDF form10---------------------------------------- ?>
	 		 	 	  	    $('#pdf10File').live('change', function()			{
	 		 	 	     	    	var pdf10 = $("#pdf10").val(); 
	 		 	 	     	        $("#previepdf10").html('');
	 		 	 	     	 $("#previewpdf10").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
	 		 	 	     	 if(pdf10 != undefined)
	 		 	 	          {$("#pdfForm10").attr("action",$("#pdfForm10").attr("action") + '&stariPdf=' + pdf10);}
	 		 	 	     	$("#pdfForm10").ajaxForm({
	 		 	 	     				target: '#previewpdf10'
	 		 	 	     	}).submit();

	 		 	 	     	});

	 		 	 	  	<?php //-------------------------PDF form11---------------------------------------- ?>
	 		 	 	  	    $('#pdf11File').live('change', function()			{
	 		 	 	     	    	var pdf11 = $("#pdf11").val(); 
	 		 	 	     	        $("#previepdf11").html('');
	 		 	 	     	 $("#previewpdf11").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
	 		 	 	     	 if(pdf11 != undefined)
	 		 	 	          {$("#pdfForm11").attr("action",$("#pdfForm11").attr("action") + '&stariPdf=' + pdf11);}
	 		 	 	     	$("#pdfForm11").ajaxForm({
	 		 	 	     				target: '#previewpdf11'
	 		 	 	     	}).submit();

	 		 	 	     	});

	 		 	 	  	<?php //-------------------------PDF form12---------------------------------------- ?>
	 		 	 	  	    $('#pdf12File').live('change', function()			{
	 		 	 	     	    	var pdf12 = $("#pdf12").val(); 
	 		 	 	     	        $("#previepdf12").html('');
	 		 	 	     	 $("#previewpdf12").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
	 		 	 	     	 if(pdf12 != undefined)
	 		 	 	          {$("#pdfForm12").attr("action",$("#pdfForm12").attr("action") + '&stariPdf=' + pdf12);}
	 		 	 	     	$("#pdfForm12").ajaxForm({
	 		 	 	     				target: '#previewpdf12'
	 		 	 	     	}).submit();

	 		 	 	     	});

	 		 	 	  	<?php //-------------------------PDF form13---------------------------------------- ?>
	 		 	 	  	    $('#pdf13File').live('change', function()			{
	 		 	 	     	    	var pdf13 = $("#pdf13").val(); 
	 		 	 	     	        $("#previepdf13").html('');
	 		 	 	     	 $("#previewpdf13").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
	 		 	 	     	 if(pdf13 != undefined)
	 		 	 	          {$("#pdfForm13").attr("action",$("#pdfForm13").attr("action") + '&stariPdf=' + pdf13);}
	 		 	 	     	$("#pdfForm13").ajaxForm({
	 		 	 	     				target: '#previewpdf13'
	 		 	 	     	}).submit();

	 		 	 	     	});

	 		 	 	  	<?php //-------------------------PDF form14---------------------------------------- ?>
	 		 	 	  	    $('#pdf14File').live('change', function()			{
	 		 	 	     	    	var pdf14 = $("#pdf14").val(); 
	 		 	 	     	        $("#previepdf14").html('');
	 		 	 	     	 $("#previewpdf14").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
	 		 	 	     	 if(pdf14 != undefined)
	 		 	 	          {$("#pdfForm14").attr("action",$("#pdfForm14").attr("action") + '&stariPdf=' + pdf14);}
	 		 	 	     	$("#pdfForm14").ajaxForm({
	 		 	 	     				target: '#previewpdf14'
	 		 	 	     	}).submit();

	 		 	 	     	});

	 		 	 	  	<?php //-------------------------PDF form15---------------------------------------- ?>
	 		 	 	  	    $('#pdf15File').live('change', function()			{
	 		 	 	     	    	var pdf15 = $("#pdf15").val(); 
	 		 	 	     	        $("#previepdf15").html('');
	 		 	 	     	 $("#previewpdf15").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
	 		 	 	     	 if(pdf15 != undefined)
	 		 	 	          {$("#pdfForm15").attr("action",$("#pdfForm15").attr("action") + '&stariPdf=' + pdf15);}
	 		 	 	     	$("#pdfForm15").ajaxForm({
	 		 	 	     				target: '#previewpdf15'
	 		 	 	     	}).submit();

	 		 	 	     	});

	 		 	 	  	<?php //-------------------------PDF form16---------------------------------------- ?>
	 		 	 	  	    $('#pdf16File').live('change', function()			{
	 		 	 	     	    	var pdf16 = $("#pdf16").val(); 
	 		 	 	     	        $("#previepdf16").html('');
	 		 	 	     	 $("#previewpdf16").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
	 		 	 	     	 if(pdf16 != undefined)
	 		 	 	          {$("#pdfForm16").attr("action",$("#pdfForm16").attr("action") + '&stariPdf=' + pdf16);}
	 		 	 	     	$("#pdfForm16").ajaxForm({
	 		 	 	     				target: '#previewpdf16'
	 		 	 	     	}).submit();

	 		 	 	     	});

	 		 	 	  	<?php //-------------------------zip form1---------------------------------------- ?>
	 		 	 	  	    $('#zip1File').live('change', function()			{
	 		 	 	     	    	var zip1 = $("#zip1").val(); 
	 		 	 	     	        $("#previezip1").html('');
	 		 	 	     	 $("#previewzip1").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
	 		 	 	     	 if(zip1 != undefined)
	 		 	 	          {$("#zipForm1").attr("action",$("#zipForm1").attr("action") + '&stariZip=' + zip1);}
	 		 	 	     	$("#zipForm1").ajaxForm({
	 		 	 	     				target: '#previewzip1'
	 		 	 	     	}).submit();

	 		 	 	     	});

	 		 	 	  	<?php //-------------------------zip form2---------------------------------------- ?>
	 		 	 	  	    $('#zip2File').live('change', function()			{
	 		 	 	     	    	var zip2 = $("#zip2").val(); 
	 		 	 	     	        $("#previezip2").html('');
	 		 	 	     	 $("#previewzip2").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
	 		 	 	     	 if(zip2 != undefined)
	 		 	 	          {$("#zipForm2").attr("action",$("#zipForm2").attr("action") + '&stariZip=' + zip2);}
	 		 	 	     	$("#zipForm2").ajaxForm({
	 		 	 	     				target: '#previewzip2'
	 		 	 	     	}).submit();

	 		 	 	     	});
	 		 	 	  	<?php //------------------------------------------------------------------------------------- ?>
	jQuery('#odustani').click(function () {
			
		       brisi();
		     
		    
		      
		      
		    return false;
		   });
		   
				
				function brisi(){
					
					jQuery.get("<?php echo $_SESSION['SITE_URL'];?>/FolderDelete/recursive_directory_delete.php", {}, function(data){
			        
						 NewPage();
			         });

					
					
		  };
		  function NewPage() {
			  document.location.href= "<?php echo $_SESSION['SITE_URL'];?>/Admin/index.php";
			}
		  <?php //------------------------------------------------------------------------------------ ?>
				  jQuery('#spremi').click(function () {
						
				       spremi();
				     
				    
				      
				      
				    return false;
				   });
				   
						
						function spremi(){
							
							jQuery.get("<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/insert2.php?" + $('#form2').serializeAnything(), {LID : <?php echo $_GET['id']; ?>}, function(data){
					        
								 NewPage();
					         });

							
							
				  };
				
				  
		  });

//-->
</script>