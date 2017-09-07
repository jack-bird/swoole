<?php

spl_autoload_register(function($class_name){
    $path = PATH.str_replace('\\','/',$class_name);
    include_once $path.'.php';
});