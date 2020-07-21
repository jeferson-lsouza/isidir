<?php
require "../vendor/autoload.php";

//Create Folder
$dir = __DIR__ . "/vendor/";

//Create Subfolder
$folder = "myFolder";

//Create File
$new = "/myFile.txt";

//Create Content
$text = "My text Here";

$url = new \Developers\Dir();
$result = $url -> CreateFileDir($dir, $folder, $new, $text);

//Print
if($result){
    echo "Success!";
}else{
    echo "Oops, error";
}