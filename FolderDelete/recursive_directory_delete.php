<?php
if(!isset($_SESSION)) {
	session_start();
}
$mkpathimg = $_SESSION['BASE_PATH'] . '/ProjectImage/' . $_SESSION['UserId'] . '/temp';
$mkpathpdf = $_SESSION['BASE_PATH'] . '/PdfDocuments/' . $_SESSION['UserId'] . '/temp';
$mkpathzip = $_SESSION['BASE_PATH'] . '/ZipDocuments/' . $_SESSION['UserId'] . '/temp';

// ------------ lixlpixel recursive PHP functions -------------
// recursive_remove_directory( directory to delete, empty )
// expects path to directory and optional TRUE / FALSE to empty
// ------------------------------------------------------------
function recursive_remove_directory($directory, $empty=FALSE)
{
	if(substr($directory,-1) == '/')
	{
		$directory = substr($directory,0,-1);
	}
	if(!file_exists($directory) || !is_dir($directory))
	{
		return false;
	}elseif(is_readable($directory))
	{
		$handle = opendir($directory);
		while (false !== ($item = readdir($handle)))
		{
			if($item != '.' && $item != '..')
			{
				$path = $directory.'/'.$item;
				if(is_dir($path)) 
				{
					recursive_remove_directory($path);
				}else{
					unlink($path);
				}
			}
		}
		closedir($handle);
		if($empty == false)
		{
			if(!rmdir($directory))
			{
				return false;
			}
		}
	}
	return TRUE;
}
// ------------------------------------------------------------
recursive_remove_directory($mkpathimg,false);
recursive_remove_directory($mkpathpdf,false);
recursive_remove_directory($mkpathzip,false);
?>