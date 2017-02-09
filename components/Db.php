<?php

class Db
{
	public static function getConnection()
	{
		$paramPath = ROOT . "/config/db_params.php";
		$params = include($paramPath);

		$dns = "mysql:host={$params['host']};dbname={$params['dbname']}";
		$db = new PDO($dns, $params['user'], $params['password']);
		$db->exec("set names utf8");

		return $db;
	}
}