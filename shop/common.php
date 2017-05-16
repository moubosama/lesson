<?php
session_start();

function connect () {

$pdo = array(
	'datasource' => 'Database/Mysql',
	'persistent' => false,
	'host' => 'localhost',
	'user' => 'root',
	'password' => '',
	'database' => 'dotinstall_db',
	'encoding' => 'utf8'　// ＜－－これ
	);

	return $pdo;
}

function img_tag($code) {
	if (file_exists("image/$code.jpg")) $name = $code;
	else $name = "noimage";
	return '<img src="images/' . $name . '.jpg" alt="">';
}