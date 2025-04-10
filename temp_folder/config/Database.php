<?php
class Database {

    private static $_dbname = "mybase";
    private static $_user = "Eya_u1";
    private static $_pwd = "Eya1";
    private static $_host = "localhost";

    private static $_bdd = null;

    private function __construct()
    {
        try {
            self::$_bdd = new PDO("mysql:host=" . self::$_host . ";dbname=" . self::$_dbname . ";charset=utf8", self::$_user, self::$_pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public static function getInstance(): ?PDO
    {
        if (!self::$_bdd) {
            new Database();
        }
        return (self::$_bdd);
    }

    

}
?>