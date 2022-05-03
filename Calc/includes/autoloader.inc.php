<?php

//spl_autoload_register — Register given function as __autoload() implementation
spl_autoload_register('Autoload');

function Autoload($ClassName){
    $Url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($Url, 'includes') != false){
        $Path = '../classes/';
    }
    else{
        $Path = 'classes/';
    }
    $Extension = '.class.php';
    $FullPath = $Path . $ClassName . $Extension;
    $FullPath = str_replace('\\', '/', $FullPath); 
    if(!file_exists($FullPath)){
        return false;
    }
    include_once $FullPath;
}


?>