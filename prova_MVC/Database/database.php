<?php
class Database{

    private static $pdo;

    public static function conectar(){
        if (!self::$pdo){
            try {
                self::$pdo = new PDO(
                    'mysql:host=127.0.0.1;
                    dbname=prova_MVC;
                    charset=utf8',
                    'root',
                    '');
                self::$pdp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOExeption $e) {
                die("Erro na conexão: ".$e->getMessage());
            }
        }
        return self::$pdo;
    }
}