<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'db_demo_2022');


$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);


if (!$connect) {
	die('Error connect to database!');
}
