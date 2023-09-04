<?php
session_start();
define('SITEURL', 'http://localhost/hospital_mgmt/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'online_hospital_mgmt');
$con = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or mysqli_error($con);
