<?php

namespace App\Service;

use App\Service\Config;

final class DatabaseConnection
{
    //TODO get the configuration file and set connection params dynamically
    //   DB_DRIVER     = 'mysql';
    //   DB_HOST      = 'host.docker.internal:3306';
    //   DB_PORT      = '3306';
    //   DB_NAME       = 'php-mysql-mvc-test';
    //   DB_USER       = 'php';
    //   DB_PASSWORD = 'php';
    //   DB_CHARSET = 'utf8';
    //   $conf = Config::getInstance();
    //   $conexionString="'".$conf->get('DB_DRIVER').":host=".$conf->get('DB_HOST').";port=".$conf->get('DB_PORT').";dbname=".$conf->get('DB_NAME').";charset=".$conf->get('DB_CHARSET')."'";
    //   $pdo = new \PDO($conexionString, "'".$conf->get('DB_USER')."'", "'".$conf->get('DB_PASSWORD')."'");
    private static $instance;
    public static function getInstance()
    {
        if (static::$instance === null) {
            $conexionString="mysql:host=host.docker.internal:3306;port=3306;dbname=php-mysql-mvc-test;charset=utf8";
            try {
                $pdo = new \PDO($conexionString, 'php','php');
                if ($pdo) {
                    static::$instance = $pdo;
                }
            } catch (\PDOException $e) {
                //TODO extract log error connexion to service Loger
                $logdir= dirname(dirname(__DIR__));
                $fp = fopen($logdir.'/var/logs/app.log', 'a');
                fwrite($fp, __CLASS__.' : Cannot connect to database ! ');
            }
        }

        return static::$instance;
    }

    private function __construct()
    {
        // singleton pattern deny the object creation 
    }
    
    private function __clone()
    {
        // singleton pattern deny cloning the object
    }
}
