<?php

/*
|
| Kevin.Galindo - galindok829@gmail.com
| 
| Este archivo contiene las variables globales de todo el aplicativo
| alguna de ellas son utilizadas para especificar ciertas tareas y po ende si son modificadas 
| pueden afectar el funcionamiento del aplicativo.
|
*/

/**
 * Nombre del aplicativo
*/
define('APP_NAME','php-mvc-template');

/**
 * Version del aplicativo
*/
define('APP_VERSION','v1');

/**
 * Footer del aplicativo
*/
define('APP_COPYRIGHT','@Kevin Galindo - '.date('Y'));

/**
 * Estado del aplicativo en produccion
*/
define('APP_PRODUCTION',false);

/**
 * Intentos de logeo del usuario
*/
define('APP_USER_TRY_LOGIN',3);
