<?php

/*
|
| Kevin.Galindo - galindok829@gmail.com
|
| Este archivo se encarga de incluir algunos otros archivos que son 
| necesarios para el funcionamiento del aplicativo.
|
*/

session_start();
#/config
require_once 'config/App.php'; 
require_once 'config/DataBase.php';
require_once 'config/File.php';
require_once 'config/Path.php';
require_once 'config/AutoLoad.php';

#/libs
require_once 'helpers/any.php'; 

$ini = new Core();
