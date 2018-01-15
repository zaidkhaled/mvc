<?php

// startup file 

session_start();

function autoload($system)
{
    $file = SYSTEM_DIR. strtolower($system).'.php';
    
    if(file_exists($file))
    {
        require_once $file;
    }
}

spl_autoload_register('autoload');