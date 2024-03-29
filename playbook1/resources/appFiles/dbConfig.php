<?php


class Config
{
   
    private static $dbHost = '192.168.195.138';
    private static $dbUser = 'course_user';
    private static $pass = 'Test@123';
    private static $dbName = 'course_db';
    private static $cont = null;
    
    public function __construct() 
    {
        die('Connection issue!');
    }
    
    public static function connector()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUser, self::$pass); 
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    
    public static function disconnect()
    {
        self::$cont = null;
    }
}

?>