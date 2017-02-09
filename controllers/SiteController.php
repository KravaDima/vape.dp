<?php

class SiteController
{
	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoryList('arom');

		$lastestProducts = array();
		$lastestProducts = Product::getLastestProducts();

		$recomendedProducts = array();
		$recomendedProducts = Product::getRecommendedProducts();

		$categoryProducts = Product::getProductsListByCategory(8);

		require_once(ROOT . "/views/site/index.php");

		return true;
	}	

	public function actionContact()
	{
		$userMail = "";
		$userText = "";
		$result = false;

		if (isset($_POST['submit'])){
			$userMail = $_POST['userMail'];
			$userText = $_POST['userText'];
			$userMes = $_POST['userMes'];

			$errors = false;

			if (!User::checkEmail($userMail)){
				$errors[] = "Неверный email";
			}

			if ($errors == false){
				$adminEmail = "kravadima@gmail.com";
				$message = "Текст: $userMes. От: $userMail";
				$subject = $userText;
				$result = mail($adminEmail, $subject, $message);
				$result = true;
			}
		}
		
		require_once(ROOT . "/views/contacts/index.php");

		return true;
	}
}