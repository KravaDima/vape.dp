<?php

class AromaCatalogController
{
	public static function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoryList();

		$lastestProducts = array();
		$lastestProducts = Product::getLastestProducts(20);

		require_once ROOT . "/views/catalog/index.php";

		return true;
	}

	public function actionAromavape($categoryId, $page = 1)
	{
		$categories = array();
		$categories = Category::getCategoryList();

		$categoryProducts = array();
		$categoryProducts = Product::getProductsListByCategory($categoryId, $page);

		$total = Product::getTotalProductsInCategory($categoryId);

		$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, "page-");

		require_once ROOT . "/views/catalog/category.php";

		return true;
	}
}