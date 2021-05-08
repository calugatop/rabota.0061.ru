<?php
include("../res/x5engine.php");
$nameList = array("dxg","r3j","jfg","v5l","fy5","hwm","kus","ckd","y83","8z7");
$charList = array("C","N","K","R","W","C","M","N","G","R");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
