# php-languages-hook
The easy way to translate your website in PHP to hook all language files
It is based on Key => Value dictionary array for every language.

Getting Started
---------
First of all define your default website language inside of class.translate.php
```php
$default_lang = "tr";
```
then go to your code and translate it
```php
<?php 
include_once(dirname(__FILE__)."/class.translate.php");

if (isset($_GET["lang"])) {
	$_SESSION['lang'] = $_GET["lang"];
}
echo $translate->_("Hello World"); echo "<br>";
echo $translate->_("Welcome");
?>
```
and then you could define your languages bar option (optional)
```php
<?php 
	foreach ($translate->languages() as $key => $value) {
		echo "<a href=\"index.php?lang=".$key."\">".$value."</a>&nbsp;";
	}
?>
```
then go to /lang/hooks/ directory and create your custome language based on two standart variables, and do not forget rename it as 2 characters language code *e.g. it.php for italian language*.
```php
$name = "YOURLANGUAGENAME";
$hook = array("KEYWORDS" => "VALUEWORDSOFMEANING");
```
that is all.

License
---------

GNU © [Tarek Kalaji](https://github.com/tarek-aec)
