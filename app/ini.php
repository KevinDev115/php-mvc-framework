<?php

/*
|
| Kevin.Galindo - galindok829@gmail.com
|
| En este apartado se haran las llamadas de archivos importantes 
| para el funcionamiento de la aplicacion.
|
*/

#Ejecutamos esta function para trabajar con las sessiones.
session_start();


#Incluimos todos los archivos de configuracion necesario.
require_once 'config/app.php'; 
require_once 'config/database.php';
require_once 'config/file.php';
require_once 'config/path.php';
require_once 'config/autoload.php';

#Incluimos los "Helpers" para utilizarlos en toda la aplicacion. 
require_once 'helpers/any.php'; 

#Realizamos la instancia a la clase "Core" para iniciar el programa. 
$ini = new Core();
