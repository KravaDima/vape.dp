<?php

class AboutController
{
	public function actionIndex()
	{
		$title = "всё для вейпа, узнать всё о нас";

		require_once(ROOT . "/views/about/index.php");
		return true;
	}
}