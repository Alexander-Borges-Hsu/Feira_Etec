<?php
namespace APP\persistence;

class ConnectionFactory
{
/*      
        IMPORTANTE!

   Alterações para conseguir abrir a porta pelo cmd e mudar o site:
   
  1 - Mude o host para "127.0.0.1"
  2 - Mude o username para "root"
  3 - Deixe o password vazio, somente ""
  
  NÃO ESQUEÇA DE RETORNAR PARA AS CONFIGURAÇÕES INICIAIS ANTES DE REALIZAR O GIT PUSH, SE NÃO VC DERRUBA O SITE!

*/
    private static $db_name = "bdlogin";
    private static $db_host = "bd-verdecalc.mysql.database.azure.com";
    private static $db_port = "3306";
    private static $db_username = "alexanderVC";
    private static $db_password = "VCalc2048@";
    private static $conn = null;

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