<?php
require "../vendor/autoload.php";

$url = new \Developers\Dir();

//Remove Files And SubFolders
$dirOne = __DIR__ . "/vendor/myFolder/";
$resultOne = $url -> RemoveDir($dirOne);

//Remove Files And SubFolders
$dirTwo = __DIR__ . "/vendor/";
$resultTwo = $url -> RemoveDir($dirTwo);

//Print
if($resultOne && $resultTwo){
    echo "success";
}else{
    echo "Oops... Error";
}