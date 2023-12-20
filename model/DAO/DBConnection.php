<?php
class DBConnection
{
    private static $Conn;

    public function __construct()
    {
    }

    public static function getConnection()
    {
        if (!isset(self::$Conn)) {
            self::$Conn = new PDO('mysql:host=localhost:3306;dbname=sgturma', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            self::$Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$Conn->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }
        return self::$Conn;
    }

    public static function closeConnection()
    {
        self::$Conn = null;
    }
}
?>
