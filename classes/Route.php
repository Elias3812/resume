<?php 

class Route {

    public static $validRoutes = array();

    public static function get_url(){
        $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] ;
        $path = $_SERVER['REQUEST_URI'];
        $p1 = stristr($root.$path, 'resume',true);
        $p2 = stristr($root.$path, 'resume');
        $n=substr($p2,7);
        
        return $n;
    }
    public static function get_base_url(){
        $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] ;
        $path = $_SERVER['REQUEST_URI'];
        $p1 = stristr($root.$path, 'resume',true);
        $p2 = stristr($root.$path, 'resume');
        $p2 = stristr($p2,'/',true);
        return $p1.$p2;
    }
    

    public static function set($route, $function){

        self::$validRoutes[] = $route;
        
        if (self::get_url() == $route){
            $function->__invoke();
            
        }
        
        for ($i=0;$i<12;$i++) {
            
            if (self::get_url() == $route.'/'.$i and $route=="skill-page"){
                $function->__invoke();
                
            }
        }
        

    }
    


}


?>