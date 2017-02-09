<?php

class ProductController
{
	public function actionView($id)
	{
		$product = Product::getProductById($id);
		$title = $product['name'];
		$description = $product['name'];
		$dopprod = Product::getProductComponent($product);
		require_once(ROOT . "/views/product/view.php");
		
		return true;
	}

	public function actionRaiting()
	{	
		$id = $_GET['id_item'];
		$user_votes = $_GET['user_votes'];

		if(Product::getRaitingProduct($id, $user_votes)){
			if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
				sleep(2);
				echo "Вы поставили оценку ".$_GET['user_votes'];
			}
		}
		
	}
}