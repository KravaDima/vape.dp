<?php

class VapebookController{

	public function actionIndex()
	{
		require_once(ROOT . "/views/vapebook/index.php");
		return true;
	}
}