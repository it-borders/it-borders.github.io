<?php
include("../res/x5engine.php");
$nameList = array("xje","wtu","ad7","nu4","zdn","5yl","hzd","3hs","vgs","5x3");
$charList = array("Y","E","Z","E","M","Y","M","P","D","W");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
