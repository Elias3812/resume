<?php
class DataBase {
    public static $host="localhost";
    public static $dbName="resume";
    public static $username="root";
    public static $password="";

        private static function connect() {
            
            return mysqli_connect(self::$host,self::$username,self::$password, self::$dbName);
        }

        public static function query($query, $params = array()) {
                
            return (mysqli_query(self::connect(),$query));

        }

}