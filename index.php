<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Language Changer</title>
</head>
<body>
<?php 
include_once(dirname(__FILE__)."/class.translate.php");

if (isset($_GET["lang"])) {
	$_SESSION['lang'] = $_GET["lang"];
}
echo $translate->_("Hello World"); echo "<br>";
echo $translate->_("Welcome");
?>
<br>
<br>
<br>
<div>
<?php 
	foreach ($translate->languages() as $key => $value) {
		echo "<a href=\"index.php?lang=".$key."\">".$value."</a>&nbsp;";
	}
?>
</div>
</body>
</html>