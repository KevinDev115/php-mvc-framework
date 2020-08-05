<?php
/**
 * 
 * Muestra el contenido de una variable dentro de unas 
 * etiquetas <pre></pre>
 * 
 * @author: Kevin.Galindo
 * @param: $var any
 */
function var_dump_pro($var)
{
	if (!empty($var)) {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }
}

/**
 * Contiene la ruta de assets 
 * 
 * @author: Kevin.Galindo
 * @param: $var String
 */
function assets($var)
{
	return APP_URL.'/public/assets'.$var;
}