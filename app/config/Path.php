<?php

/*
|
| Kevin.Galindo - galindok829@gmail.com
| 
| Configuraciones del PATH al requerir recursos en el 
| aplicativo, ya sea llamando archivos css, js, imagenes, entre otros.
|
*/

#Ruta de aplicativo

//Se valida si el aplicativo esta en produccion
if (APP_PRODUCTION) {
    error_reporting(0);
    define('APP_PROTOCOL', 'https'); #PROTOCOLO
    define('APP_DOMAIN','');         #DOMINIO DEL APLICATIVO
    define('APP_PORT', '');          #PUERTOS DEL SERVIDOR

}else{
    define('APP_PROTOCOL', 'http');   #PROTOCOLO
    define('APP_DOMAIN','127.0.0.1'); #DOMINIO DEL APLICATIVO
    define('APP_PORT', '80');         #PUERTOS DEL SERVIDOR
}

#Define la ruta del aplicativo para la llamada de recursos.
define('APP_URL_ASSETS', APP_PROTOCOL.'://'.APP_DOMAIN.':'.APP_PORT.'/'.APP_NAME.'/assests');   #URL DEL PROYECTO

#Define la ruta del aplicativo para la llamada de recursos.
define('APP_URL', APP_PROTOCOL.'://'.APP_DOMAIN.':'.APP_PORT.'/'.APP_NAME);   #URL DEL PROYECTO

#Ruta del proyecto en el servidor.
define('APP_PATH_DIR', dirname(dirname(dirname(__FILE__)))); 