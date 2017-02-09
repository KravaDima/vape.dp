<?php

class AromaCatalogController
{
	public static function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoryList('arom');

		$lastestProducts = array();
		$lastestProducts = Product::getLastestProducts(20);

		$title = "ароматизаторы для электронных сигарет";

		require_once ROOT . "/views/catalog/index.php";

		return true;
	}

	public function actionAromavape($categoryId, $page = 1)
	{
		$categories = array();
		$categories = Category::getCategoryList("arom");

		$categoryProducts = array();
		$categoryProducts = Product::getProductsListByCategory($categoryId, $page);

		$total = Product::getTotalProductsInCategory($categoryId);

		$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, "page-");

		$category = Category::getCategoryById($categoryId);
		$categoryName = $category['title'];

		$title = "$categoryName";

		require_once ROOT . "/views/catalog/category.php";

		return true;
	}
}