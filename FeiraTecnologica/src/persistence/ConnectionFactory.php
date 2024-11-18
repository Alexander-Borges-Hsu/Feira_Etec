<?php
namespace APP\persistence;

class ConnectionFactory
{

    private static $db_name = "bdlogin";
    private static $db_host = "bd-verdecalc.mysql.database.azure.com";
    private static $db_port = "3306";
    private static $db_username = "alexanderVC";
    private static $db_password = "VCalc2048@";
    private static $conn = null;
    // Testando banco na azure


    static function getConnection()
    {
        $connectionString = "mysql:host=" . self::$db_host . ";dbname=" . self::$db_name . ";dbport=" . self::$db_port;

        if (self::$conn == null) {
            self::$conn = new \PDO($connectionString, self::$db_username, self::$db_password);
            self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }

        return self::$conn;


    }

}

?>