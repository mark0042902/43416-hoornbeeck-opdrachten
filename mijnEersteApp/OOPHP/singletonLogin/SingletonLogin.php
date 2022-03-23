<?php

class SingletonLogin
{
    private static $instance;
    protected static $version = rand(0,90);
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
