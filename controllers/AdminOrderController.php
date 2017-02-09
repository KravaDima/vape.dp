<?php
/**
*
*
* Управление заказами в Админке
*/
class AdminOrderController extends AdminBase
{
	public function actionIndex()
	{
		// проверяем пользователя Админ ли он
		self::checkAdmin();

		// получаем список заказов
		$orderList = Order::getOrderList();

		// подключаем вид
		require_once(ROOT. "/views/admin_order/index.php");
		return true;
	}

	/**
	* Удаление заказа
	*
	*/
	public static function actionDelete($id)
	{
		// проверка доступа
		self::checkAdmin();

		// обработка формы
		if (isset($_POST['submit'])) {
			// если форма отправлена
			// удаляем товар
			Order::deleteOrderById($id);

			// перенаправляем в админ-панель по управлению товарами
			header("Location: /admin/order");
		}

		// подключаем вид
		require_once(ROOT . "/views/admin_order/delete.php");
	}

	/**
	* Action для страницы "Просмотр заказа"
	*
	*/
	public static function actionView($id)
	{
		// проверяем доступ
		self::checkAdmin();

		// данные по товару
		$order = Order::getOrderById($id);

		// Получаем массив с ИД и количесвом товара в заказе
		$productsQuantity = json_decode($order['products'], true);

		// Получаем массив ИД товаров
		$productsIds = array_keys($productsQuantity);

		// Получаем спсиок товаров в заказе
		$products = Product::getProductsByIds($productsIds);

		// подключаем вид
		require_once(ROOT . "/views/admin_order/view.php");
		return true;
	}

	/**
	* Action для страницы "Редактирование заказа"
	*
	*/
	public static function actionUpdate($id)
	{
		// проверяем доступ
		self::checkAdmin();

		// данные по заказу
		$order = Order::getOrderById($id);

		if (isset($_POST['submit'])) {
			// получаем данные из формы
			$options['user_name'] = $_POST['user_name'];
			$options['user_phone'] = $_POST['user_phone'];
			$options['user_comment'] = $_POST['user_comment'];
			$options['date'] = $_POST['date'];
			$options['status'] = $_POST['status'];

			// флаг ошибок в форме
			$errors = false;

			if ($errors == false) {
				// если ошибок нет
				// Добавляем новый товар
				$id = Order::updateOrder($id, $options);

				// перенаправляем на страницу с продуктами
				header("Location: /admin/order");
			}
		}
		// подключаем вид
		require_once(ROOT . "/views/admin_order/update.php");
		return true;
	}
}
?>