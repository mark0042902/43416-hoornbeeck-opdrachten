<?php
include "Singleton.php";
$singleton = Singleton::getInstance();
echo "Version: " . $singleton::getVersion();
