<?php

function autoload($class){
    if (file_exists(CORE . $class . '.php')) {
        require_once(CORE . $class . '.php');
    }else if(file_exists(MODELS . $class . '.php')){
        require_once(MODELS . $class . '.php');
    } else if(file_exists(CONTROLLERS . $class . '.php')){
        require_once(CONTROLLERS . $class . '.php');
    }
}