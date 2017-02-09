<?php

	// FRONT CONTROLLER

	// 1.Общме настройки

	// отображение ошибок на время разработки
	ini_set("display_errors", 1);
	error_reporting(E_ALL);

	session_start();
	
	// 2.Подключение файлов системы
	define("ROOT", dirname(__FILE__));	// абсолютный путь
	define("URL", "http://dripping.me/"); // URL сайта
	define("TEL", "0934699806, 0970069555, 0508769555");

	require_once(ROOT."/components/Autoload.php");

	// 3. Установка соединения с БД

	// 4. Вызов Router
	$router = new Router();
	$router->run();
