<?php

class Singleton
{
    private static $instance;
    private static $version = "1.0";
    public static function getInstance()
    {
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }
    public static function getVersion()
    {
        return self::$version;
    }
    private function __construct(){}

    private function __clone(){}
}
