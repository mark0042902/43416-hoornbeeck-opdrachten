<?php
include "SingletonLogin.php";
$singleton = SingletonLogin::getInstance();
echo "Version: " . $singleton::getVersion();
