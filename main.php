<?php
$DB_SERVER = '185.13.227.203';//185.13.227.203
$DB_USERNAME = 'stephae171_ooiv';
$DB_PASSWORD = 'ooievaar';
$DB_DATABASE = 'stephae171_bsoiv';
$db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
if($db == true) echo "success";
?>