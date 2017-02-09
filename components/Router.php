<?php

	class Router
	{
		private $routes;	// массив в котором будут храниться маршруты


		public function __construct()
		{
			$routesPath = ROOT."/config/routes.php"; 	// путь к файлу с роутами
			$this->routes = include($routesPath);		// подключаем файл с роутами и присваиваем массив в routes
		}

		/**
		* Возвращает строку запроса
		*
		*/
		private function getURI()	// получаем строку запроса
		{
			if (!empty($_SERVER["REQUEST_URI"])) {
				return trim($_SERVER["REQUEST_URI"], "/");	
			}
		}

		public function run()	// будет принимать управление от фронт контроллера
		{
			// Получить строку запроса
			$uri = $this->getURI();

			// Проверить наличие такого запроса в routes.php
			foreach ($this->routes as $uriPattern => $path) {
				// сравнивание $uriPattern и $uri
				if (preg_match("~$uriPattern~", $uri)) {

					// получаем внутренний путь
					$internalRoute = preg_replace("~^$uriPattern$~", $path, $uri); // если сделать ~^$uriPattern$~, то после номера товара наименование его уже не допишешь
					
					// Если есть совпадение, определить какой котроллер и экшн обрабатывает запрос
					$segments = explode("/", $internalRoute);	// разбиваем строку по "/"
					
					$controllerName = array_shift($segments)."Controller"; // получаем первый элемент массива (удаляя его из массива) и добавляем "Controller" 
					$controllerName = ucfirst($controllerName); //делаем первую букву строки Заглавной0
					$actionName = "action".ucfirst(array_shift($segments));	// получаем наименование action

					// Определяем параметры
					$parameters = $segments;

					// Подключить файл класса-контроллера
					$controllerFile = ROOT."/controllers/".$controllerName.".php";
					
					if (file_exists($controllerFile)) {
						include_once($controllerFile);
					}
					// Создать Объект, вызвать метод

					$controllerObject = new $controllerName;
					$result = call_user_func_array(array($controllerObject, $actionName), $parameters);
					
					if ($result != null) {
						break;
					}
				}
			}
		}
	}