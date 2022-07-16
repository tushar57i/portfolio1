<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background: linear-gradient(#e66465, #9198e5);
		}
	</style>
</head>
<body>
<?
session_start();
session_unset();
session_destroy();

header("location:home.php");
exit();
?>
</body>
</html>