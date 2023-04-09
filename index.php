

<?php   
//echo (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] ;
spl_autoload_register(function ($class) {
    if (file_exists('./classes/' . $class . '.php')){
        require_once './classes/' . $class . '.php';
    }else if (file_exists('./Controllers/' . $class . '.php')){
        require_once './Controllers/' . $class . '.php';
    }


   
});
require_once('Routes.php');
//echo Route::get_base_url();



        





?> 
