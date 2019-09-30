<?php

/*
|
| Kevin.Galindo - galindok829@gmail.com
| 
| Este archivo contiene el auto loader para las clases y treats
| Que se quieran instanciar.
|
*/

spl_autoload_register(function($name){
    #/core
    if (file_exists(APP_PATH_DIR.'/app/core/'.$name.'.php')) {
        include_once APP_PATH_DIR.'/'.'app/core/'.$name.'.php';
    }

    #/traits
    if (file_exists(APP_PATH_DIR.'/app/traits/'.$name.'.php')) {
        include_once APP_PATH_DIR.'/app/traits/'.$name.'.php';
    }
});