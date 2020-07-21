<?php
require "../vendor/autoload.php";

//Directory
$dirFile = __DIR__ . "/vendor/myFolder/myFile.txt";

//Add Content
$text = "Lê, cria e escreve";
$url = new \Developers\Dir();
$result = $url -> FileReadWrite($dirFile, $text);

//Print
if($result){
    echo "success";
}else{
    echo "Oops... Error";
}
