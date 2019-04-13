<?php
$filename = $_GET['file'];
//echo $filename;
if( ! is_file($filename) || $filename[0] == '.' || $filename[0] == '/' )
//die("Bad access attempt.\n");
	header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment; filename=".basename($filename).";");
header("Content-Transfer-Encoding: binary");
header("Content-Length: ".filesize($filename));
readfile("$filename");
exit();
?>