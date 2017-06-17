<?php
// require_once './vendor/autoload.php';
require_once '/autoload.php';
use Controllers\Home\Home;
$oMod = new Home();
print_r($oMod->test());
echo 'hello!!';