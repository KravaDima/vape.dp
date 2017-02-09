<?php
class User
{
	public static function register($name, $email, $password)
	{
		$db = Db::getConnection();

		$result = $db->prepare("INSERT INTO user (name, email, password) VALUES (:name, :email, :password)");
		$array = array(":name" => "$name", ":email" => "$email", ":password" => "$password");
		
		return $result->execute($array);
	}

	public static function checkName($name)
	{
		if (strlen($name) >= 2){
			return true;
		}
	}

	public static function checkEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL)){
			return true;
		}
	}

	public static function checkEmailExists($email)
	{
		$db = Db::getConnection();

		$result = $db->prepare("SELECT * FROM user WHERE email = :email");
		$result->execute(array(":email" => "$email"));
		$fetch = $result->fetch();

		if ($fetch){
			return true;
		}
		return false;
	}

	// проверяем валидность пароля
	public static function checkPassword($password)
	{
		if (strlen($password) >= 6){
			return true;
		}
	}

	// проверяем валидность телефона пользователя
	public static function checkPhone($phone) 
	{
		if (strlen($phone) >= 10) {
			if(preg_match('/\+380[0-9]{9}/', $phone)){
				return true;
			} else {
				return false;
			}
		}
	}

	// проверяем существует ли пользователь
	public static function checkUserData($email, $password)
	{
		$db = Db::getConnection();

		$result = $db->prepare("SELECT * FROM user WHERE email = :email AND password = :password");
		$result->execute(array(":email" => $email, ":password" => $password));

		$user = $result->fetch();

		if ($user) {
			return $user['id'];
		}

		return false;
	}

	// запоминание пользователя
	public static function auth($userId)
	{
		$_SESSION['user'] = $userId;
	}

	// проверка залогинен пользователь или нет
	public static function checkLogged()
	{
		if (isset($_SESSION['user'])) {
			return $_SESSION['user'];
		}

		header("Location: /user/login");
	}

	//
	public static function isGuest()
	{
		if (isset($_SESSION['user'])) {
			return false;
		}

		return true;
	}

	public static function getUserById($userId)
	{	
		$db = Db::getConnection();

		$result = $db->prepare("SELECT * FROM user WHERE id = :id");
		$result->execute(array(":id" => $userId));

		$fetch = $result->fetch();

		return $fetch;
	}

	public static function edit($userId, $name, $password)
	{
		$db = Db::getConnection();

		$result = $db->prepare("UPDATE user SET name = :name, password = :password WHERE id = :id");
		$res = $result->execute(array(":id" => $userId, ":name" => $name, ":password" => $password));

		

		return $res;
	}
}