<?php

//spl_autoload_register — Register given function as __autoload() implementation
spl_autoload_register('Autoload');

function Autoload($ClassName){
    $Path = 'classes/';
    $Extension = '.class.php';
    $FullPath = $Path . $ClassName . $Extension;
    $FullPath = str_replace('\\', '/', $FullPath); 
    
    if(!file_exists($FullPath)){
        return false;
    }
    
    include_once $FullPath;
}


?>