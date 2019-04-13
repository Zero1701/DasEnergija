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
<?php include_once $_SESSION['BASE_PATH']  . '/Admin/Class/projectDetail.php';
$dataStream = new projectDetail();
$ProjectId = $_GET['id'];
$ProjectId = stripslashes($ProjectId);
$ProjectId = mysql_real_escape_string($ProjectId);
if(isset($_SESSION['UserId'])){ $uid = $_SESSION['UserId']; $uid = stripslashes($uid); $uid = mysql_real_escape_string($uid); } else { $uid = ""; }

$dataStream->displayTable2($ProjectId);
$td = $dataStream->getResult();
$dataStream->displayAttachment2($ProjectId);
$attachments = $dataStream->getResult();

$zpath = $_SESSION['BASE_PATH'] . '/ZipDocuments/' . $uid . '/' . $ProjectId . '/';
$ppath = $_SESSION['BASE_PATH'] . '/PdfDocuments/' . $uid . '/' . $ProjectId . '/';

include_once $_SESSION['BASE_PATH']  . '/Admin/View/reportSingleView2.php';
include_once $_SESSION['BASE_PATH']  . '/Admin/HeaderFooter/footer.php';

?>
