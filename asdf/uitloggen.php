<?php 
include "header.inc.php";
$_SESSION["username"] = "";
session_destroy();
header("Location: index.php");