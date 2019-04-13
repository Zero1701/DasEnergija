<?php
if(!isset($_SESSION)) {
     session_start();
}
if(!isset($_SESSION['myusername'])){
header("location:" . $_SESSION['SITE_URL'] . "/Login/main_login.php");
}
?>
<?php echo $_SESSION['privileges'];?>
<html>
<body>
Login Successful
</body>
</html>