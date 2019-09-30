<?php

/*
|
| Kevin.Galindo - galindok829@gmail.com
| 
| Este archivo contiene las configuraciones de la 
| conexion de la base de datos mysql, oracle, etc...
|
*/

/**
 * Variable que prioriza la conexion.
*/
define('DB_PRIORITY_CONNECTION', 'MYSQL');

/**
 * Variables de Conexion Base de Datos ORACLE
 */
define('DB_HOST_ORA','');         #RUTA DEL SERVIDOR
define('DB_USER_ORA','');         #NOMBRE DEL ESQUEMA
define('DB_PASSWORD_ORA','');     #CONTRASEÑA DE ACCESO AL ESQUEMA
define('DB_SERVICE_NAME_ORA',''); #NOMBRE DEL SERVICIO (opcional)
define('DB_SID_ORA',''); 	      #SID
define('DB_PORT_ORA',''); 	      #PORT

/**
 * Variables de Conexion Base de Datos MYSQL
 */
define('DB_HOST_MYSQL','localhost');     #RUTA DEL SERVIDOR
define('DB_NAME_MYSQL','test');     #NOMBRE DE LA BASE
define('DB_USER_MYSQL','root');     #USUARIO DE BASE DE DATOS
define('DB_PASSWORD_MYSQL',''); #CONTRASEÑA DE BASE DE DATOS

/**
 * Variables de Conexion Base de Datos SQLITE
 */
define('DB_PATH_SQLITE',''); #RUTA DEL ARCHIVO DE LA BASE SQLITE (.db)*
