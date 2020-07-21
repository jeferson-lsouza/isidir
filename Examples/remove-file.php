<?php
require "../vendor/autoload.php";

//Directory
$dir = __DIR__ . "/vendor/myFolder/myFile.txt";
$url = new \Developers\Dir();
$result = $url -> RemoveFile($dir, $file);

//Print
if($result){
    echo "success";
}else{
    echo "Oops... Error";
}