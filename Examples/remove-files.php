<?php
require "../vendor/autoload.php";

//Directory
$dir = __DIR__ . "/vendor/myFolder/";

//Files
$file = array("myFile1.txt", "myFile2.txt","myFile3.txt");
$url = new \Developers\Dir();
$result = $url -> RemoveFileMultiple($dir, $file);

//Print
if($result){
    echo "success";
}else{
    echo "Oops... Error";
}