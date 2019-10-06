<?php

/*
|
| Kevin.Galindo - galindok829@gmail.com
| 
| Este apartado contiene el código del AutoLoader para cargar 
| las dependencias automáticamente cada vez que se realice la instancia a una clase
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