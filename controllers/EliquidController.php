<?php

class EliquidController{

	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoryList("eliquid");

		$lastestProducts = array();
		$lastestProducts = Product::getLastestProducts(20);

		$title = "жидкости для электронных сигарет";
		// $description = $product['name'];

		require_once ROOT . "/views/e-liquid/index.php";
		return true;
	}

	public function actionEliquidvape($categoryId, $page = 1)
	{
		$categories = array();
		$categories = Category::getCategoryList("eliquid");

		$categoryProducts = array();
		$categoryProducts = Product::getProductsListByCategory($categoryId, $page);

		$total = Product::getTotalProductsInCategory($categoryId);

		$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, "page-");

		$category = Category::getCategoryById($categoryId);
		$categoryName = $category['title'];

		$title = "$categoryName";

		require_once ROOT . "/views/e-liquid/category.php";

		return true;
	}
}