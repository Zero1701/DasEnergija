<?php
if(!isset($_SESSION)) {
	session_start();
}


$path = $_SESSION['BASE_PATH'] . '/ProjectImage/' . $_SESSION['UserId'] . '/temp/';
$mkpath = $_SESSION['BASE_PATH'] . '/ProjectImage/' . $_SESSION['UserId'] . '/temp';

if (isset($_GET['staraSlika'])) {
	unlink($path . $_GET['staraSlika']);
}

	$valid_formats = array("jpg", "png", "gif", "bmp" , "jpeg");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['slika']['name'];
			$size = $_FILES['slika']['size'];
			
			if(strlen($name))
				{
					
					$string = $name;
					$suffix = strrchr($string, ".");
					$pos = strpos  ( $string  , $suffix);
					$nameFull = substr_replace ($string, "", $pos);
					list($txt, $ext) = array($nameFull,str_ireplace(".", "", $suffix));
					if(in_array(strtolower($ext),$valid_formats))
					{
						
						if(!is_dir($path)){
							mkdir($mkpath, 0755,true);
						}
					//if($size<(1024*1024))
						//{
							//$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
							$actual_image_name = $txt . "." . $ext;
							
							$tmp = $_FILES['slika']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
								//mysql_query("UPDATE users SET profile_image='$actual_image_name' WHERE uid='$session_id'");
									
									echo '<img width="300" class="slika" src="' . $_SESSION['SITE_URL'] . '/ProjectImage/' . $_SESSION['UserId'] . '/temp/' . $actual_image_name . '"  class="preview" />';
									?>
									<input type="hidden" value="<?php echo $actual_image_name; ?>" name="<?php echo $_GET['tip'];?>" id="<?php echo $_GET['tip'];?>" />									
									<?php 
								}
							else
								echo "failed";
						//}
						//else
						//echo "Image file size max 1 MB";					
						}
						else
						echo "Neispravan tip datoteke (Datoteka mora imati jednu od slijedećih ekstenzija : jpg , png , gif , bmp , jpeg )..";	
				}
				
			else
				echo "Molimo odaberite sliku ..!";
				
			exit;
		}
?>