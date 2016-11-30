<?php
/*This function is calling the class on class folder path*/

define('DS', DIRECTORY_SEPARATOR);


function getClass($class_name)
{
	require_once __DIR__.DS.'class'.DS.$class_name.'.php';
}

spl_autoload_register('getClass');
// function __autoload($class_name)
// {
// 	include_once __DIR__.'/class/'.$class_name.'.class.php';
// }
