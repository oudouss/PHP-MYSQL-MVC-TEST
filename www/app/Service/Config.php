<?php
namespace App\Service;

class Config
{
    private $settings = [];
    private static $_instance;
    public static function getInstance()
    {
        if (self::$_instance === null) 
        {
            self::$_instance = new Config();
        }
        return self::$_instance;
    }
    public function __construct()
    {
        $this->settings = require dirname(dirname(__FILE__)) . '/config/config.php';
    }
    public function get($key){
        return (!isset($this->settings[$key])) ? null : $this->settings[$key];
    }
}