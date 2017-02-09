<?php
/**
* 
* Управление товарами в Админ-панеле
*/
class AdminProductController extends AdminBase
{
	public function actionIndex()
	{
		// проверяем пользователя, админ ли он
		self::checkAdmin();

		// получаем список товаров
		$productsList = Product::getProductsList();

		// подключаем вид
		require_once(ROOT . "/views/admin_product/index.php");
		return true;
	}

	/**
	*Action для страницы "Добавить товар"
	*/

	public function actionCreate()
	{
		// проверка доступа
		self::checkAdmin();

		// получаем список категорий для 
		$categoryList = Category::getCategoryListAdmin();

		// массив по товару
		$options = array();

		// если форма отправлена
		if (isset($_POST['submit'])) {

			// получаем данные из формы
			$options['name'] = $_POST['name'];
			$options['code'] = $_POST['code'];
			$options['price'] = $_POST['price'];
			$options['size'] = $_POST['size'];
			$options['category_id'] = $_POST['category_id'];
			$options['brand'] = $_POST['brand'];
			$options['description'] = $_POST['description'];
			$options['availability'] = $_POST['availability'];
			$options['is_new'] = $_POST['is_new'];
			$options['is_recommended'] = $_POST['is_recommended'];
			$options['status'] = $_POST['status'];

			// флаг ошибок в форме
			$errors = false;

			if (!isset($options['name']) || empty($options['name'])) {
				$errors[] = "Некорректно заполнено поле!";
			}

			if ($errors == false) {
				// если ошибок нет
				// Добавляем новый товар
				$id = Product::createProduct($options);

				// если товар добавлен
				if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                    }
                };

				// перенаправляем на страницу с продуктами
				header("Location: /admin/product");
			}
		}

		// подключаем вид
		require_once(ROOT . "/views/admin_product/create.php");
		return true;
	}

	/**
	* Удаление товара
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
			Product::deleteProductById($id);

			// перенаправляем в админ-панель по управлению товарами
			header("Location: /admin/product");
		}

		// подключаем вид
		require_once(ROOT . "/views/admin_product/delete.php");
	}

	/**
	* Action для страницы "Редактирование товара"
	*
	*/
	public static function actionUpdate($id)
	{
		// проверяем доступ
		self::checkAdmin();

		// список категорий
		$categoryList = Category::getCategoryListAdmin();

		// данные по товару
		$product = Product::getProductById($id);

		if (isset($_POST['submit'])) {
			// получаем данные из формы
			$options['name'] = $_POST['name'];
			$options['code'] = $_POST['code'];
			$options['price'] = $_POST['price'];
			$options['size'] = $_POST['size'];
			$options['category_id'] = $_POST['category_id'];
			$options['brand'] = $_POST['brand'];
			$options['description'] = $_POST['description'];
			$options['availability'] = $_POST['availability'];
			$options['is_new'] = $_POST['is_new'];
			$options['is_recommended'] = $_POST['is_recommended'];
			$options['status'] = $_POST['status'];

			// флаг ошибок в форме
			$errors = false;

			if (!isset($options['name']) || empty($options['name'])) {
				$errors[] = "Некорректно заполнено поле!";
			}

			if ($errors == false) {
				// если ошибок нет
				// Добавляем новый товар
				$id = Product::updateProduct($id, $options);

				// если товар добавлен
				if ($id) {
                    // Проверим, загружалось ли через форму изображение

                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                    }
                };

				// перенаправляем на страницу с продуктами
				header("Location: /admin/product");
			}
		}
		// подключаем вид
		require_once(ROOT . "/views/admin_product/update.php");
		return true;
	}
}