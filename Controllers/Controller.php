<?php
class Controller extends Database {
    

    public static function CreateView($viewName){
        require_once("./base/Header.php");
        require_once("./Views/$viewName.php");
        require_once("./base/Footer.php");
    }
}


?>