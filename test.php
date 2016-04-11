<?php 
$DB_SERVER = '185.13.227.203';//185.13.227.203
$DB_USERNAME = 'stephae171_ooiv';
$DB_PASSWORD = 'bsoiv';
$DB_DATABASE = 'stephae171_bsoiv';
$mysqli = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
var_dump($mysqli);