<?php

class Category
{
	public static function getCategoryList($type)
	{
		$db = Db::getConnection();

		$categoryList = array();

		$result = $db->query("SELECT id, name, image FROM category WHERE type = '$type' AND status = 1 ORDER BY sort_order ASC");

		$i = 0;
		while ($row = $result->fetch()) {
			$categoryList[$i]['id'] = $row['id'];
			$categoryList[$i]['name'] = $row['name'];
			$categoryList[$i]['image'] = $row['image'];
			$i++;
		}

		return $categoryList;
	} 

	public static function getCategoryById($id)
	{
		$db = Db::getConnection();

		$categoryList = array();

		$result = $db->query("SELECT * FROM category WHERE id = $id");
		$categoryList = $result->fetch();

		return $categoryList;
	}

	/**
	* Метод получения списка категорий для Админки
	* @return array() перечень категорий
	*/
	public static function getCategoryListAdmin()
	{
		$db = Db::getConnection();

		$sth = $db->prepare("SELECT * FROM category ORDER BY sort_order ASC");
		$sth->execute();

		$categoryList = $sth->fetchAll();

		return $categoryList;
	}

	/**
	* Метод редактирования категории
	* @param $id идентификатор категории, $option параметры категории
	* @return true в случае внесения изменения
	*/
	public static function updateCategory($id, $option)
	{
		$db = Db::getConnection();

		$sth = $db->prepare("UPDATE category SET name = :name, sort_order = :sort_order, status = :status, type = :type, description = :description WHERE id=". $id);
		$result = $sth->execute(array(":name" => $option['name'], ":sort_order" => $option['sort_order'], ":status" => $option['status'], ":type" => $option['type'], ":description" => $option['description']));
		if ($result) {
			return true;
		}		
	}

	/**
	* Метод добавления категории
	* @param $option параметры категории
	* @return true в случае добавления категории
	*/
	public static function createCategory($param)
	{
		$db = Db::getConnection();

		$name = $param['name'];
		$sort_order = $param['sort_order'];
		$status = $param['status'];
		$type = $param['type'];
		$sth = $db->prepare("INSERT INTO category(name, sort_order, status, type) VALUES (:name, :sort_order, :status, :type)");
		$result = $sth->execute(array(":name" => $name, ":sort_order" => $sort_order, ":status" => $status, ":type" => $type));
		return $result;
	}

	/**
	* Метод удаления категории
	* @param $id код категории для удаления
	* @return true в случае успешного удаления
	*/
	public static function deleteCategoryById($id)
	{
		$db = Db::getConnection();

		$sth = $db->prepare("DELETE FROM category WHERE id = :id");

		return $sth->execute(array(":id" => $id));
	}


	/**
	* Метод отображения статуса категории
	* @param $status значение статуса из базы
	* @return значение статуса
	*/
	public static function getStatusText($status)
	{
		return $status ? "Отображается" : "Скрыто"; 
	}
}