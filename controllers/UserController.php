<?php
class UserController
{
	public function actionRegister()
	{

		$name = '';
		$email = '';
		$password = '';
		$result = false;
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			

			$errors = false;

			if(!User::checkName($name)){
				$errors[] = "Имя должно быть более 2-х символов";
			}
			if(!User::checkEmail($email)){
				$errors[] = "Некорректный email";
			}
			if (User::checkEmailExists($email)){
				$errors[] = "Такой email уже используется";
			}

			if(!User::checkPassword($password)){
				$errors[] = "Пароль не может быть короче 6-ти символов";
			}

			if ($errors == false) {
				$result = User::register($name, $email, $password);
			}
		}

		require_once(ROOT . "/views/user/register.php");

		return true;
	}

	public static function actionLogin()
	{
		$email = "";
		$password = "";

		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$errors = false;

			// Валидация полей
			if (!User::checkEmail($email)) {
				$errors[] = "Неверный email";
			}
			if (!User::checkPassword($password)) {
				$errors[] = "Пароль не может быть короче 6-ти символов";
			}

			// Проверяем существует ли пользователь
			$userId = User::checkUserData($email, $password);

			if ($userId == false) {
				// если данные неверные то показываем ошибку
				$errors[] = "Неверные данные для входа на сайт";
			} else {
				// если даныне правильные то запоминаем пользователя в сессию
				User::auth($userId);
				// перенаправялем пользователя на кабинет
				header("Location: /cabinet/");
			}


		}

		require_once(ROOT . "/views/user/login.php");
		return true;
	}

	public function actionLogout()
	{
		unset($_SESSION['user']);
		header("Location: /");
	}

	
}