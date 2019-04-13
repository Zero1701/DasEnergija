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
<?php include_once $_SESSION['BASE_PATH']  . '/Admin/Class/projectDetail.php';
$dataStream = new projectDetail();
$ProjectId = $_GET['id'];
$ProjectId = stripslashes($ProjectId);
$ProjectId = mysql_real_escape_string($ProjectId);
if(isset($_SESSION['UserId'])){ $uid = $_SESSION['UserId']; $uid = stripslashes($uid); $uid = mysql_real_escape_string($uid); } else { $uid = ""; }

$dataStream->displayTable($ProjectId);
$td = $dataStream->getResult();
$dataStream->displayAttachment($ProjectId);
$attachments = $dataStream->getResult();

$ipath = $_SESSION['BASE_PATH'] . '/ProjectImage/' . $uid . '/' . $ProjectId . '/';
$ppath = $_SESSION['BASE_PATH'] . '/PdfDocuments/' . $uid . '/' . $ProjectId . '/';

include_once $_SESSION['BASE_PATH']  . '/Admin/View/editProjectTableView.php';

include_once $_SESSION['BASE_PATH']  . '/Admin/HeaderFooter/footer.php';
?>
<script type="text/javascript">
<!--
$(document).ready(function() { 

	
	<?php //-------------------------PDF form1---------------------------------------- ?>
    $('#posjedovniListFile').live('change', function()			{
    	var imePdf1 = $("#posjedovniList").val(); 
	           $("#previewposjedovniList").html('');
	    $("#previewposjedovniList").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
	    if(imePdf1 != undefined)
   	 {$("#pdfForm1").attr("action",$("#pdfForm1").attr("action") + '&stariPdf=' + imePdf1);}
	$("#pdfForm1").ajaxForm({
				target: '#previewposjedovniList'
}).submit();

	});

    <?php //-------------------------PDF form2---------------------------------------- ?>
    	    $('#izvodIzKatastarskogPlanaFile').live('change', function()			{ 
    	    	var imePdf2 = $("#izvodIzKatastarskogPlana").val();
    	        $("#previewizvodIzKatastarskogPlana").html('');
    	 $("#previewizvodIzKatastarskogPlana").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
    	 if(imePdf2 != undefined)
    	 {$("#pdfForm2").attr("action",$("#pdfForm2").attr("action") + '&stariPdf=' + imePdf2);}
    	$("#pdfForm2").ajaxForm({
    				target: '#previewizvodIzKatastarskogPlana'
    	}).submit();

    	});
        	
    <?php //-------------------------PDF form3---------------------------------------- ?>
    $('#satelitskaSnimkaProstoraFile').live('change', function() {
    		var imePdf3 = $("#satelitskaSnimkaProstora").val();			
        $("#previewsatelitskaSnimkaProstora").html('');
 $("#previewsatelitskaSnimkaProstora").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
 if(imePdf3 != undefined)
 {$("#pdfForm3").attr("action",$("#pdfForm3").attr("action") + '&stariPdf=' + imePdf3);}
$("#pdfForm3").ajaxForm({
			target: '#previewsatelitskaSnimkaProstora'
}).submit();

});


    <?php //-------------------------PDF form4---------------------------------------- ?>
    	    $('#ponudaFile').live('change', function()			{ 
    	        var imePdf4 = $("#ponuda").val();
				$("#previewponuda").html('');
    	 $("#previewponuda").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
          if(imePdf4 != undefined)
              {$("#pdfForm4").attr("action",$("#pdfForm4").attr("action") + '&stariPdf=' + imePdf4);}
     	$("#pdfForm4").ajaxForm({
    				target: '#previewponuda'
    	}).submit();

    	});

    <?php //-------------------------PDF form5---------------------------------------- ?>
    	    $('#ugovorSvlasnikomFile').live('change', function()			{ 
    	    	var imePdf5 = $("#ugovorSvlasnikom").val();
    	        $("#previewugovorSvlasnikom").html('');
    	 $("#previewugovorSvlasnikom").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
    	 if(imePdf5 != undefined)
         {$("#pdfForm5").attr("action",$("#pdfForm5").attr("action") + '&stariPdf=' + imePdf5);}
     	$("#pdfForm5").ajaxForm({
    				target: '#previewugovorSvlasnikom'
    	}).submit();

    	});

    <?php //-------------------------Slika1---------------------------------------- ?>
    	    $('#slika1File').live('change', function()			{
    	    	var slika1 = $("#slika1").val(); 
    	        $("#previeslika1").html('');
    	 $("#previewslika1").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
    	 if(slika1 != undefined)
         {$("#slikaForm1").attr("action",$("#slikaForm1").attr("action") + '&staraSlika=' + slika1);}
    	$("#slikaForm1").ajaxForm({
    				target: '#previewslika1'
    	}).submit();

    	});

    <?php //-------------------------Slika2---------------------------------------- ?>
    	    $('#slika2File').live('change', function()			{ 
    	    	var slika2 = $("#slika2").val(); 
    	        $("#previeslika2").html('');
    	 $("#previewslika2").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
    	 if(slika2 != undefined)
         {$("#slikaForm2").attr("action",$("#slikaForm2").attr("action") + '&staraSlika=' + slika2);}
    	$("#slikaForm2").ajaxForm({
    				target: '#previewslika2'
    	}).submit();

    	});

    <?php //-------------------------Slika3---------------------------------------- ?>
    	    $('#slika3File').live('change', function()			{ 
    	    	var slika3 = $("#slika3").val();
    	        $("#previeslika3").html('');
    	 $("#previewslika3").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
    	 if(slika3 != undefined)
         {$("#slikaForm3").attr("action",$("#slikaForm3").attr("action") + '&staraSlika=' + slika3);}
    	$("#slikaForm3").ajaxForm({
    				target: '#previewslika3'
    	}).submit();

    	});

    <?php //-------------------------Slika4---------------------------------------- ?>
    	    $('#slika4File').live('change', function()			{ 
    	    	var slika4 = $("#slika4").val();
     	        $("#previeslika4").html('');
    	 $("#previewslika4").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
    	 if(slika4 != undefined)
         {$("#slikaForm4").attr("action",$("#slikaForm4").attr("action") + '&staraSlika=' + slika4);}
    	$("#slikaForm4").ajaxForm({
    				target: '#previewslika4'
    	}).submit();

    	});

    <?php //-------------------------Slika5---------------------------------------- ?>
    	    $('#slika5File').live('change', function()			{ 
    	    	var slika5 = $("#slika5").val();
    	        $("#previeslika5").html('');
    	 $("#previewslika5").html('<img src="<?php echo $_SESSION['SITE_URL'];?>/Picture/loader.gif" alt="Uploading...."/>');
    	 if(slika5 != undefined)
         {$("#slikaForm5").attr("action",$("#slikaForm5").attr("action") + '&staraSlika=' + slika5);}
    	$("#slikaForm5").ajaxForm({
    				target: '#previewslika5'
    	}).submit();

    	});
 
	

<?php //------------------------------------------------------------------------------------ ?>

	
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

		  function NewPage2(id) {
			  document.location.href= "<?php echo $_SESSION['SITE_URL'];?>/Admin/ProjectEdit2/index.php?id=" + id;
			}
		  <?php //------------------------------------------------------------------------------------ ?>
				  jQuery('#spremi').click(function () {

					  
				       spremi();
				     
				    
				      
				      
				    return false;
				   });
				   
						
						function spremi(){
							
							jQuery.get("<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/update.php?" + $('#form1').serializeAnything(), {PID : <?php echo $ProjectId;?>}, function(data){
					        var id = <?php echo $_GET['id']?>;
								 NewPage2(id);
					         });

							
							
				  };
				
		 

		<?php //------------------------------------------------------------------------------------ ?>
				  jQuery('#pdf1obrisi').click(function () {
						
				       
				      $("#previewposjedovniList").html('<input type="hidden" value="obrisano" id="pdf1" name="pdf1" />');
				      forme(1);
				    return false;
				   });
				   
				  jQuery('#pdf2obrisi').click(function () {
						
				       
				      $("#previewizvodIzKatastarskogPlana").html('<input type="hidden" value="obrisano" id="pdf2" name="pdf2" />');
				      forme(2);
				    return false;
				   });
				  jQuery('#pdf3obrisi').click(function () {
						
				       
				      $("#previewsatelitskaSnimkaProstora").html('<input type="hidden" value="obrisano" id="pdf3" name="pdf3" />');
				      forme(3);
				    return false;
				   });

				  jQuery('#pdf4obrisi').click(function () {
						
				       
				      $("#previewponuda").html('<input type="hidden" value="obrisano" id="pdf4" name="pdf4" />');
				      forme(4);
				    return false;
				   });

				  jQuery('#pdf5obrisi').click(function () {
						
				       
				      $("#previewugovorSvlasnikom").html('<input type="hidden" value="obrisano" id="pdf5" name="pdf5" />');
				      forme(5);
				    return false;
				   });
				   
						
						function forme(brojForme){
							
							jQuery.get("<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/pdfForma.php", {forma: brojForme }, function(data){
					        
								jQuery('#pdf' + brojForme + 'prostorZaFormu').html(data);

								
					         });

							
							
				  };

				  jQuery('#slika1obrisi').click(function () {
						
				       
				      $("#previewslika1").html('<input type="hidden" value="obrisano" id="slika1" name="slika1" />');
				      forme2(1);
				    return false;
				   }); 

				  jQuery('#slika2obrisi').click(function () {
						
				       
				      $("#previewslika2").html('<input type="hidden" value="obrisano" id="slika2" name="slika2" />');
				      forme2(2);
				    return false;
				   });

				  jQuery('#slika3obrisi').click(function () {
						
				       
				      $("#previewslika3").html('<input type="hidden" value="obrisano" id="slika3" name="slika3" />');
				      forme2(3);
				    return false;
				   });  

				  jQuery('#slika4obrisi').click(function () {
						
				       
				      $("#previewslika4").html('<input type="hidden" value="obrisano" id="slika4" name="slika4" />');
				      forme2(4);
				    return false;
				   });

				  jQuery('#slika5obrisi').click(function () {
						
				       
				      $("#previewslika5").html('<input type="hidden" value="obrisano" id="slika5" name="slika5" />');
				      forme2(5);
				    return false;
				   });  
				   
				  function forme2(brojForme){
						
						jQuery.get("<?php echo $_SESSION['SITE_URL'];?>/Admin/Ajax/slikaForma.php", {forma: brojForme }, function(data){
				        
							jQuery('#slika' + brojForme + 'prostorZaFormu').html(data);
							
				         });
		  };
});
//-->
</script>