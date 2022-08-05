<?php
abstract class Connection
{
    private static $conn;

    public static function getConn()
    {

        if(self::$conn == null) {

            self::$conn = new PDO('mysql:host=localhost;dbname=serie_criando_site;charset=utf8', 'root', '', array(
                PDO::ATTR_EMULATE_PREPARES=>false,
                PDO::MYSQL_ATTR_DIRECT_QUERY=>false,
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
            ));
        }

        return self::$conn;
    }

}