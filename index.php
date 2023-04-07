<?php   

spl_autoload_register(function ($class) {
    if (file_exists('./classes/' . $class . '.php')){
        require_once './classes/' . $class . '.php';
    }else if (file_exists('./Controllers/' . $class . '.php')){
        require_once './Controllers/' . $class . '.php';
    }


   
});
require_once('Routes.php');

$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] ;
$path = $_SERVER['REQUEST_URI'];
$p1 = stristr($root.$path, 'resume',true);
$p2 = stristr($root.$path, 'resume');
$p2 = stristr($p2,'/',true);
//echo $p1.$p2;
//echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];


?> 