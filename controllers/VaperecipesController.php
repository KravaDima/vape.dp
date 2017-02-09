<?php

class VaperecipesController{

	public function actionIndex()
	{
		require_once ROOT . "/views/vaperecipes.php";
		return true;
	}
}