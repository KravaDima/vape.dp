<?php

class Order
{
	public static function save($userName, $userPhone, $userComment, $userId, $products)
	{
		$db = Db::getConnection();

		$products = json_encode($products);
		$sth = $db->prepare("INSERT INTO product_order (user_name, user_phone, user_comment, user_id, products) VALUES(:user_name, :user_phone, :user_comment, :user_id, :products)");
		$result = $sth->execute(array(":user_name" => $userName, "user_phone" => $userPhone, ":user_comment" => $userComment, ":user_id" => $userId, ":products" => $products));

		return $result;
	}

	/**
	* возвращает список заказов
	* @return array <p>Массив с заказами</p>
	*/
	public static function getOrderList()
	{
		$db = Db::getConnection();

		$orderList = array();

		$sth = $db->prepare("SELECT * FROM product_order ORDER BY id DESC");
		$sth->execute();
		$orderList = $sth->fetchAll();

		return $orderList;
	}

	/**
	* возвращает данные по заказу
	* @return array <p>Массив с данными по заказу</p>
	*/
	public static function getOrderById($id)
	{
		$db = Db::getConnection();

		$sth = $db->prepare("SELECT * FROM product_order WHERE id = :id");
		$sth->execute(array(":id" => $id));

		$order = $sth->fetch();

		return $order;
	}

	/**
	* Удаляет заказ из списка
	* @return true при успешном удалении
	*/
	public static function deleteOrderById($id)
	{
		$db = Db::getConnection();

		$sth = $db->prepare("DELETE FROM product_order WHERE id = :id");

		return $sth->execute(array(":id" => $id));
	}

	/**
	* Обновляет инфо по заказу
	* @return true <p>При успешном изменении</p>
	*/
	public static function updateOrder($id, $param)
	{
		$db = Db::getConnection();

		$sth = $db->prepare("UPDATE product_order SET user_name = :user_name, user_phone = :user_phone, user_comment = :user_comment, status = :status WHERE id = :id");
		$result = $sth->execute(array(":id" => $id, ":user_name" => $param['user_name'], ":user_phone" => $param['user_phone'], ":user_comment" => $param['user_comment'], ":status" => $param['status']));

		// если запрос выполнен успешно, возвращаем ИД последнего товара
			if ($result) {
				$res = $db->lastInsertId();
				return $res;
			}
				
			// Иначе возвращаем 0
			return 0;
	}

	/**
	* Отображает текстовый статус заказа
	* @return  string <p>Статус заказа</p>
	*/
	public static function getStatusText($status)
	{
		switch ($status) {
			case 0: return "Новый заказ"; break;
			case 1: return "Принят"; break;
			case 2: return "Выполнен"; break;
			case 3: return "Отменен"; break;
		}
	}
}