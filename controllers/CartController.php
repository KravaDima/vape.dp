<?php

class CartController
{
	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoryList("arom");

		$productsInCart = false;

		$productsInCart = Cart::getProducts();

		if ($productsInCart) {
			// Получаем полную инфо о товарах для списка
			$productsIds = array_keys($productsInCart);
			$products = Product::getProductsByIds($productsIds);

			// получаем общую стоимость товара
			$totalPrice = Cart::getTotalPrice($products);
		}

		require_once(ROOT . "/views/cart/index.php");

		return true;
	}

	public function actionAdd($id)
	{
		// Добавляем товар в корзину
		Cart::addProduct($id);

		// Возвращаем пользователя на страницу
		$referer = $_SERVER['HTTP_REFERER'];
		header("Location: $referer");
	}

	public function actionAddAjax($id)
	{
		echo Cart::addProduct($id);
		return true;
	}

	public function actionCheckout()
	{
		// список категорий для левого меню
		$categories = array();
		$categories = Category::getCategoryList("arom");

		// статус успешности оформления заказа
		$result = false;

		// если форма отправлена
		if (isset($_POST['submit'])) {
			//Форма отправлена? - Да

			// считываем данные формы
			$userName = $_POST['name'];
			$userPhone = $_POST['phone'];
			$userComment = $_POST['comment'];

			// проверка корректности введеных данных
			$errors = false;
			if (!User::checkName($userName)) {
				$errors[] = "Неправильное Имя";
			}
			if (!User::checkPhone($userPhone)) {
				$errors[] = "Неверный номер телефона";
			}

			// Форма заполнена корректно?
			if ($errors == false) {
				// Форма заполнена корректно? - Да
				// Сохраняем заказ в БД

				// Собираем данные о заказе
				if($productsInCart = Cart::getProducts()){
					if (User::isGuest()) {
						$userId = false;
					} else {
						$userId = User::checkLogged();
					}

					// сохраняем заказ в БД
					$result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);

					if ($result) {
						// Оповещаем админа о заказе
						$adminEmail = "kravadima@gmail.com";
						$message = URL . "admin/order";
						$subject = "Новый заказ";
						mail($adminEmail, $subject, $message);

						// очищаем корзину
						Cart::clear();
					}
				}
				
			} else {
				// Форма заполнена корректно? - Нет

				// Общая стоимость и количество товара
				$productsInCart = Cart::getProducts();
				$productsIds = array_keys($productsInCart);
				$products = Product::getProductsByIds($productsIds);
				$totalPrice = Cart::getTotalPrice($products);
				$totalQuantity = Cart::countItems();

			}



		} else {
			// Форма отправлена? - Нет

			// Получаем данные из корзины
			$productsInCart = Cart::getProducts();

			if ($productsInCart == false) {
				// в корзине есть товар?  - Нет
				// отправляем пользователя на главную  страницу

				header("Location: / ");
			} else {
				// в корзине есть товар?  - Да

				// Общая стоимость и количество товара
				$productsIds = array_keys($productsInCart);
				$products = Product::getProductsByIds($productsIds);
				$totalPrice = Cart::getTotalPrice($products);
				$totalQuantity = Cart::countItems();

				$userName = false;
				$userPhone = false;
				$userComment = false;

				// пользователь авторизован?
				if (User::isGuest()) {
					// пользователь авторизован? - Нет
					// Значения для формы - пустые
				} else {
					// пользователь авторизован? - Да
					// получим инфо о пользователе из БД по ИД
					$userId = User::checkLogged();
					$user = User::getUserById($userId);
					// подстваляем в форму
					$userName = $user['name'];
				}
			}
		}

		require_once(ROOT . "/views/cart/checkout.php");
	}

	public static function actionDelete($id)
	{
		if ($result = Cart::delete($id)) {
			header("Location: /cart");
		}
	}
}