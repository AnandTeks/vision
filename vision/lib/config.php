<?php
define('HOST', 'localhost');
define('DBNAME', 'vision');
define('USERNAME', 'root');
define('PASSWORD', '');
define('CSS_PATH', 'css/');
define('JS_PATH','js/');
define("BASE_URL", "http://localhost/vision");

include "DBConnection.class.php";
$DB = new DBConnection();

?>