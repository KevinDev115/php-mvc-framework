<?php

/*
|
| Kevin.Galindo - galindok829@gmail.com
| 
| En este apartado se agregan las Variables Globales referentes 
| a la aplicación en general como el nombre, versión, estado en producción, etc...
|
*/

#Nombre del aplicativo.
define('APP_NAME','php-mvc-framework');

#Version del aplicativo.
define('APP_VERSION','v1');

#Footer del aplicativo.
define('APP_COPYRIGHT','@Kevin Galindo - '.date('Y'));

#Estado del aplicativo en produccion.
define('APP_PRODUCTION',false);

#Intentos de logeo del usuario.
define('APP_USER_TRY_LOGIN',3);
