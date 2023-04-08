<?php 

class Route {

    public static $validRoutes = array();

    public static function set($route, $function){

        self::$validRoutes[] = $route;
        $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] ;
        $path = $_SERVER['REQUEST_URI'];
        $p1 = stristr($root.$path, 'resume',true);
        $p2 = stristr($root.$path, 'resume');
       

        if ($_GET['url'] == $route){
            $function->__invoke();

        }
        

    }



}


?>