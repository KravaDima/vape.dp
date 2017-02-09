<?php
class ZamesController{
	
	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoryList('zames');

		$title = "всё для самозамеса";

		require_once(ROOT . "/views/zames/index.php");
		return true;
	}

	public function actionSamozames($categoryId, $page = 1)
	{
		$categories = array();
		$categories = Category::getCategoryList('zames');

		$categoryProducts = array();
		$categoryProducts = Product::getProductsListByCategory($categoryId, $page);

		$total = Product::getTotalProductsInCategory($categoryId);

		$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, "page-");

		$category = Category::getCategoryById($categoryId);
		$categoryName = $category['title'];

		$title = "$categoryName";

		require_once ROOT . "/views/zames/category.php";

		return true;
	}
}