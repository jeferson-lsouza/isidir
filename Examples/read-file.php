<?php
require "../vendor/autoload.php";

//Directory
$dirFile = __DIR__ . "/vendor/myFolder/myFile.txt";
$url = new \Developers\Dir();
$result = $url ->FileRead($dirFile);

//Print
echo $result;