<?php
require "../vendor/autoload.php";

//Directory
$folder = __DIR__ . "/vendor/myFolder/";
$url = new \Developers\Dir();
$result = $url -> RemoveDir($folder);

//Print
if($result){
    echo "success";
}else{
    echo "Oops... Error";
}