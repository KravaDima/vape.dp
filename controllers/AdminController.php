<?php

/**
* Контроллер AdminController
* главная страница в АдминПанеле
*/
class AdminController extends AdminBase
{
	/**
	*Action для стартовой страницы "Панели администратора"
	*/
	public function actionIndex()
	{
		// проверка доступа
		self::checkAdmin();

		//подключаем вид
		require_once(ROOT . "/views/admin/index.php");
		return true;
	}
}