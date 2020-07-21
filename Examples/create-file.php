<?php
require "../vendor/autoload.php";

//My text And File name
$text = "My Text";
$file = "teste2.txt";
$url = new \Developers\Dir();

//Call the method to create the password
$result = $url -> FileWrite($file, $text);

//Print
if($result){
    echo "Success!";
}else{
    echo "Oops, error";
}
