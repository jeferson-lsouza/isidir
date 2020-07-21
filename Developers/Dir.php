<?php

/*
    ***********************************************
   Dir .PHP -
   Class responsible for managing files, folders and subfolders within your project.
   Classe responsável para gerenciar arquivos, pastas e subpastas dentro do seu projeto.

   With this class you can create or remove files, folders and subfolders.
   Com esta classe você pode criar ou remover arquivos, pastas e subpastas.
    ***********************************************

    Copyright (c) 2020, Jeferson L. Souza INTERLIG SOLUÇÕES INTELIGENTES
    E-mail: contato@interligsolucoes.com.br
    Site: http://interligsolucoes.com.br/
*/
namespace Developers;


class Dir
{
    /**
     * Method for Reading Files - Presenting Document Information on the Screen.
     * Método Para Leitura de Arquivos - Apresentando as Informações do Documento na Tela.
     * @param $file
     */
    public function FileRead($file){
        $fopen = fopen($file, "r");
        while($showData = fgets($fopen)){
            echo $showData ."<br>";
        }
        fclose($fopen);
    }

    /**
     * Method for Creating Archive and Adding Content
     * Método Para Criar Arquivo e Adicionar Conteúdos
     * @param $file
     * @param $text
     * @return bool
     */
    public function FileWrite($file, $text){
        $fopen = fopen($file, "w");
        fwrite($fopen, $text);
        fclose($fopen);

        return true;
    }

    /**
     * Method for Reading Files and Adding New Content
     * Método Para Leitura de Arquivos e Adicionar Novo Conteúdo
     * @param $file
     * @param $text
     * @return bool
     */
    public function FileReadWrite($file, $text){
        $fopen = fopen($file, "a+");
        fwrite($fopen, $text.PHP_EOL);
        fclose($fopen);

        return true;
    }

    /**
     * Create Folder Within the Project Directory
     * Criar Pasta Dentro do Diretório do Projeto
     * @param $dir
     * @return bool
     */
    public function CreateDir ($dir) {
        $dirVerify = str_replace("\\", "/", $dir);

        if(!is_dir($dirVerify) && !file_exists($dirVerify)){
            mkdir($dirVerify, "0755");
            return true;
        }else{
            return false;
        }
    }

    /**
     * Create Folder and File Within the Folder
     * Criar Pasta e Arquivo Dentro da Pasta
     * @param $dir
     * @param $folder
     * @param string $file
     * @param string $text
     * @return bool|null
     */
    public function CreateFileDir ($dir, $folder, $file = "", $text = ""){
        $dirVerify = str_replace("\\", "/", $dir);

        //Create the folder
        //Criar a pasta
        if(!is_dir($dirVerify) && !file_exists($dirVerify)) {
            mkdir($dirVerify, "0755");
        }

        //Create the subfolder
        //Criar a subpasta
        if(!is_dir($dirVerify . $folder) && !file_exists($dirVerify . $folder)){
            mkdir($dirVerify . $folder, "0755");
        }

        //Create the file with the text
        //Criar o arquivo com o texto
        if($file != '' || $file != null) {
            $fopen = file_put_contents($dirVerify . $folder . $file, $text . "\n", FILE_APPEND);
        }

        //Checks whether the folder, subfolder and file exist
        //Verifica se a pasta, subpasta e arquivo existem
        if(file_exists($dirVerify . $folder . $file)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Remove Specific Files Within a Directory
     * Remover Arquivos Específico Dentro de um Diretório
     * @param $dir
     * @return bool|null
     */
    public function RemoveFile ($dir){
        $dirVerify = str_replace("\\", "/", $dir);

        if(file_exists($dirVerify)){
            unlink($dirVerify);
            return true;
        }else{
            return false;
        }
    }

    /**
     * Removing Multiple Files Within a Directory
     * Remover Multiplos Arquivos Dentro de Um Diretório
     * @param string $dir
     * @param array $files
     * @return string
     */
    public function RemoveFileMultiple (string $dir, array $files){
        $dirVerify = str_replace("\\", "/", $dir);

        if(is_dir($dirVerify) && file_exists($dirVerify)){

            for($a = 0; $a < count($files); $a++){
                if(is_dir("{$dirVerify}/{$files[$a]}") && !file_exists("{$dirVerify}/{$files[$a]}")){

                }else{
                    if(file_exists($dirVerify . $files[$a])) {
                        unlink("{$dirVerify}/{$files[$a]}");
                    }else{
                        echo "Não foi possível remover um ou mais arquivo(s)!";
                        return;
                    }
                }
            }
            echo "Arquivo(s) removido(s) com sucesso!";
        }else{
            echo "Erro: Não foi possível localizar o(s) arquivo(s)!";
        }
    }

    /** Removing a Directory with PHP
     * Remover Um Diretório com o PHP
     * @param $dir
     * @return bool
     */
    public function RemoveDir ($dir){
        $dirVerify = str_replace("\\", "/", $dir);
        //Lista os arquivos e remove os pontos da listagem do scandir com array_diff
        $files = array_diff(scandir($dirVerify), array(".", ".."));

        if(is_dir($dirVerify) && file_exists($dirVerify)){
            foreach($files as $file){
                if(is_dir("{$dirVerify}/{$file}")){
                    delTree("{$dirVerify}/{$file}");
                }else{
                    unlink("{$dirVerify}/{$file}");
                }
            }
            rmdir($dir);
            return true;
        }else{
            return false;
        }
    }
}