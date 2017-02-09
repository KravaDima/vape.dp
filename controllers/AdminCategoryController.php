<?php
/**
*	Котроллер AdminCategoryController
*	Управление категориями в Админпанеле
*/
class AdminCategoryController extends AdminBase
{
	/**
	* Функция отображения перечня категорий в Админпанеле
	*/
	public function actionIndex()
	{
		// проверяем доступ
		self::checkAdmin();

		// получаем список категорий
		$categoryList = Category::getCategoryListAdmin();

		// подключаем вид
		require_once(ROOT . "/views/admin_category/index.php");
		return true;
	}

	/**
	* Action добавления категории
	*/
	public function actionCreate()
	{
		// првоерка доступа
		self::checkAdmin();

		// если форма отправлена
		if (isset($_POST['submit'])) {

			// получаем данные из формы
			$options['name'] = $_POST['name'];
			$options['sort_order'] = $_POST['sort_order'];
			$options['status'] = $_POST['status'];
			$options['type'] = $_POST['type'];

			// флаг ошибок в форме
			$errors = false;

			if (!isset($options['name']) || empty($options['name'])) {
				$errors[] = "Некорректно заполнено поле!";
			}

			if ($errors == false) {
				// если ошибок нет
				// Добавляем новую категорию
				Category::createCategory($options);

				// перенаправляем на страницу с продуктами
				header("Location: /admin/category");
			}
		}

		// подключаем вид
		require_once(ROOT . "/views/admin_category/create.php");
		return true;
	}

	/**
	* Action удаления категории
	*/
	public function actionDelete($id)
	{
		// проверяем доступ
		self::checkAdmin();

		// если форма отправлена
		if (isset($_POST['submit'])) {

			// удаляем категорию
			Category::deleteCategoryById($id);

			// перенаправляем на страницу работы с категориями
			header("Location: /admin/category");
		}

		// подключаем вид
		require_once(ROOT . "/views/admin_category/delete.php");
		// return true;
	}

	/**
	* Action для страницы "Редактирование товара"
	*
	*/
	public static function actionUpdate($id)
	{
		// проверяем доступ
		self::checkAdmin();

		// данные по категории
		$category = Category::getCategoryById($id);

		if (isset($_POST['submit'])) {
			// получаем данные из формы
			$options['name'] = $_POST['name'];
			$options['sort_order'] = $_POST['sort_order'];
			$options['status'] = $_POST['status'];
			$options['type'] = $_POST['type'];
			$options['description'] = $_POST['description'];

			// Обновляем категорию
			Category::updateCategory($id, $options);

			// перенаправляем на страницу с продуктами
			header("Location: /admin/category");
			}
		// подключаем вид
		require_once(ROOT . "/views/admin_category/update.php");
		return true;
	}
}