# IsiDir Library 

[![Maintainer](http://img.shields.io/badge/maintainer-@Jeferso28179293-blue.svg?style=flat-square)](https://twitter.com/Jeferso28179293)
[![Source Code](http://img.shields.io/badge/source-jeferson-lsouza/isidir-blue.svg?style=flat-square)](https://github.com/jeferson-lsouza/isidir)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/jeferson-lsouza/isidir.svg?style=flat-square)](https://packagist.org/packages/jeferson-lsouza/isidir)
[![Latest Version](https://img.shields.io/github/release/jeferson-lsouza/isidir.svg?style=flat-square)](https://github.com/jeferson-lsouza/isidir/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/jeferson-lsouza/isidir.svg?style=flat-square)](https://scrutinizer-ci.com/g/jeferson-lsouza/isidir)
[![Quality Score](https://img.shields.io/scrutinizer/g/jeferson-lsouza/isidir.svg?style=flat-square)](https://scrutinizer-ci.com/g/jeferson-lsouza/isidir)
[![Total Downloads](https://img.shields.io/packagist/dt/jeferson-lsouza/isidir.svg?style=flat-square)](https://packagist.org/packages/jeferson-lsouza/isidir)

###### IsiDir Library 
IsiDir Library is a set of classes designed to manage files and folders
IsiDir Library é um conjunto de classes desenvolvidas para gerenciar arquivos e pastas


### Highlights

- Simple installation (Instalação simples)
- Easy structuring and application (Fácil estruturação e aplicação)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

## Installation

Uploader is available via Composer:

```bash
"Jeferson-LSouza/IsiDir": "^1.0"
```

or run

```bash
composer require Jeferson-LSouza/IsiDir
```

## Documentation

###### For details on how to use, see a sample folder in the component directory. In it you will have an example of use for each class. It works like this:

Para mais detalhes sobre como usar, veja uma pasta de exemplo no diretório do componente. Nela terá um exemplo de uso para cada classe. Ele funciona assim:
``

#### Create File (Call): To create an file, just follow the example below:

```php
<?php

require __DIR__ . "/vendor/autoload.php";

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

```
#### Read And Print File (Call) - Read and show the file contents on the screen:
```php
<?php

require __DIR__ . "/vendor/autoload.php";

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

```
#### Read File And Add Content (Call) - Read file and add content to the file.:
```php
<?php

require __DIR__ . "/vendor/autoload.php";

 //Directory
 $dirFile = __DIR__ . "/vendor/myFolder/myFile.txt";
 $url = new \Developers\Dir();
 $result = $url ->FileRead($dirFile);
 
 //Print
 echo $result;

```
#### Create Folder And File (Call) - Create folder, subfolder and file with personalized content.:
```php
<?php

require __DIR__ ."/vendor/autoload.php";

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

```
#### Remove File (Call) - Remove only one specific file from our project:
```php
<?php

require __DIR__ . "/vendor/autoload.php";

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

```
#### Remove Multiple Files (Call) - Remove several specific files within our project:
```php
<?php

require __DIR__ . "/vendor/autoload.php";

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

```
#### Remove Folder (Call) - Remove several specific folder within our project:
```php
<?php

require __DIR__ . "/vendor/autoload.php";

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

```
#### Remove Directory (Call) - Remove directory with folders, subfolders and files:
```php
<?php

require __DIR__ . "/vendor/autoload.php";

 $url = new \Developers\Dir();
 
 //Remove Files And SubFolders
 $dirOne = __DIR__ . "/vendor/myFolder/";
 $resultOne = $url -> RemoveDir($dirOne);
 
 //Remove Files And Folders
 $dirTwo = __DIR__ . "/vendor/";
 $resultTwo = $url -> RemoveDir($dirTwo);
 
 //Print
 if($resultOne && $resultTwo){
     echo "success";
 }else{
     echo "Oops... Error";
 }

```
### Others

###### All the documentation of use with practical examples is available in the examples folder library. Please check there.

Toda documentação de uso com exemplos práticos está disponível na pasta examples desta biblioteca. Por favor, consulte lá.

## Contributing

Please see [CONTRIBUTING](https://github.com/jeferson-lsouza/isidir/blob/master/CONTRIBUTING.md) for details.

## Support

###### Security: If you discover any security related issues, please email contato@interligsolucoes.com.br instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para contato@interligsolucoes.com.br em vez de usar o rastreador de problemas.

Thank you

## Credits

- [Jeferson L. Souza](https://github.com/jeferson-lsouza) (Developer)
- [Soluções Inteligentes](https://github.com/jeferson-lsouza) (Team)
- [All Contributors](https://github.com/jeferson-lsouza/isidir/contributors) (Power)

## License

The MIT License (MIT). Please see [License File](https://github.com/jeferson-lsouza/isidir/blob/master/LICENSE) for more information.