<?php

	class Product
	{
		const SHOW_BY_DEFAULT = 9;
		public static function getLastestProducts($count = self::SHOW_BY_DEFAULT)
		{
			$count = intval($count);

			$productList = array();

			$db = Db::getConnection();
			$result = $db->query('SELECT id, name, price, brand, image, is_new FROM product WHERE status = "1" ORDER BY id DESC LIMIT '.$count);

			$i = 0;
			while($row = $result->fetch()){
				$productList[$i]['id'] = $row['id'];
				$productList[$i]['name'] = $row['name'];
				$productList[$i]['price'] = $row['price'];
				$productList[$i]['brand'] = $row['brand'];
				$productList[$i]['image'] = $row['image'];
				$productList[$i]['is_new'] = $row['is_new'];
				$i++;
			}

			return $productList;

		}

		public static function getProductsListByCategory($id = false, $page = 1)
		{
			if($id){
				$id = intval($id);
				$page = intval($page);
				$offset = ($page - 1) * self::SHOW_BY_DEFAULT;

				$products = array();

				$db = Db::getConnection();
				$result = $db->query('SELECT id, name, price, image, brand, is_new FROM product WHERE status = 1 AND category_id = '.$id.' ORDER BY id DESC LIMIT '.self::SHOW_BY_DEFAULT.' OFFSET '.$offset);

				$i = 0;
				while($row = $result->fetch()){
					$products[$i]['id'] = $row['id'];
					$products[$i]['name'] = $row['name'];
					$products[$i]['price'] = $row['price'];
					$products[$i]['image'] = $row['image'];
					$products[$i]['brand'] = $row['brand'];
					$products[$i]['is_new'] = $row['is_new'];
					$i++;
				}

				return $products;
			}
		}

		public static function getProductById($id)
		{
			$id = intval($id);
			$db = Db::getConnection();
			$result = $db->prepare("SELECT * FROM product WHERE id = :id");
			$result->execute(array(":id" => $id));
			return $result->fetch();
		}

		/**
		* Метод получения товаров, которые "так же покупают"
		* @return array() список товаров
		*/
		public static function getProductComponent($id)
		{
			$idcat = $id['category_id'];
			if($idcat == 16 || $idcat == 9 || $idcat == 11){
				return self::getProductsListByCategory(16);
			} elseif ($idcat == 8 || $idcat == 17 || $idcat == 13) {
				return self::getProductsListByCategory(12);
			} elseif ($idcat == 14) {
				return self::getProductsListByCategory(15);
			} elseif ($idcat == 15) {
				return self::getProductsListByCategory(14);
			} else {
				return self::getProductsListByCategory(8);
			}
		}

		public static function getTotalProductsInCategory($categoryId)
		{
			$db = Db::getConnection();
			$result = $db->query("SELECT count(id) AS count FROM product WHERE category_id = $categoryId AND status = 1");
			$row = $result->fetch();

			return $row['count'];
		}

		public static function getProductsByIds($idsArray)
		{
			$products = array();

			$db = Db::getConnection();

			$idsString = implode(',', $idsArray);

			$sth = $db->prepare("SELECT * FROM product WHERE status='1' AND id IN ($idsString)");
			$sth->execute();
			// $result = $sth->fetch();

			$i = 0;

			while ($row = $sth->fetch()) {
				$products[$i]["id"] = $row['id'];
				$products[$i]["code"] = $row['code'];
				$products[$i]["name"] = $row['name'];
				$products[$i]["price"] = $row['price'];
				$products[$i]["size"] = $row['size'];
				$i++;
			}

			return $products;
		}

		public static function getRecommendedProducts()
		{
			$products = array();

			$db = Db::getConnection();

			$sth = $db->prepare("SELECT * FROM product WHERE is_recommended='1'");
			$sth->execute();
			$products = $sth->fetchAll();

			return $products;
		}

		/**
		* Возвращает список товаров
		* @return array <p>Массив с товарами</p>
		*/
		public static function getProductsList()
		{
			$db = Db::getConnection();

			$productsList = array();

			$sth = $db->prepare("SELECT * FROM product");
			$sth->execute();
			$productsList = $sth->fetchAll();

			return $productsList;
		}

		public static function getImage($id)
		{
			$db = Db::getConnection();

			$sth = $db->prepare("SELECT image FROM product WHERE id = :id");
			$sth->execute(array(":id" => $id));
			$product = $sth->fetch();

			$image = $product['image'];

			return $image;
		}

		/**
		* Удаляет товар по задданому ID
		* @param 
		*/
		public static function deleteProductById($id)
		{
			$db = Db::getConnection();

			$sth = $db->prepare("DELETE FROM product WHERE id = :id");

			return $sth->execute(array(":id" => $id));
		}

		/**
		* Добавляет товар в базу
		* @param array() параметров товара
		* @return integer <p>$id товара в случае успешного добавления товара </p>
		*/
		public static function createProduct($option)
		{
			$db = Db::getConnection();

				$name = $option['name'];
				$code = $option['code'];
				$price = $option['price'];
				$size = $option['size'];
				$category_id = $option['category_id'];
				$brand = $option['brand'];
				$description = $option['description'];
				$availability = $option['availability'];
				$is_new = $option['is_new'];
				$is_recommended = $option['is_recommended'];
				$status = $option['status'];
				
				$sth = $db->prepare("INSERT INTO product(name, category_id, code, price, size, availability, brand, description, is_new, is_recommended, status) VALUES(:name, :category_id, :code, :price, :size, :availability, :brand, :description, :is_new, :is_recommended, :status)");
				$result = $sth->execute(array(":name" => $name, ":category_id" => $category_id, ":code" => $code, ":price" => $price, ":size" => $size, ":availability" => $availability, ":brand" => $brand, ":description" => $description, ":is_new" => $is_new, ":is_recommended" => $is_recommended, ":status" => $status));
				// если запрос выполнен успешно, возвращаем ИД последнего товара
				if ($result) {
					$res = $db->lastInsertId();
					return $res;
				}
				
				// Иначе возвращаем 0
				return 0;
		}

		/**
		* Обновление данных по товару
		* @param type integer передаем ИД товара
		*/
		public static function updateProduct($id, $option)
		{
			$db = Db::getConnection();

			$name = $option['name'];
			$code = $option['code'];
			$price = $option['price'];
			$size = $option['size'];
			$category_id = $option['category_id'];
			$brand = $option['brand'];
			$description = $option['description'];
			$availability = $option['availability'];
			$is_new = $option['is_new'];
			$is_recommended = $option['is_recommended'];
			$status = $option['status'];
				
			$sth = $db->prepare("UPDATE product SET name = :name, category_id = :category_id, code = :code, price = :price, size = :size, availability = :availability, brand = :brand, description = :description, is_new = :is_new, is_recommended = :is_recommended, status = :status WHERE id =".$id);
			$result = $sth->execute(array(":name" => $name, ":category_id" => $category_id, ":code" => $code, ":price" => $price, ":size" => $size, ":availability" => $availability, ":brand" => $brand, ":description" => $description, ":is_new" => $is_new, ":is_recommended" => $is_recommended, ":status" => $status));
			// если запрос выполнен успешно, возвращаем ИД последнего товара
			if ($result) {
				$res = $db->lastInsertId();
				return $res;
			}
				
			// Иначе возвращаем 0
			return 0;
		}

		/**
		* Возвращает фото товара, если его нет, то no-image.ipg
		* @return string <p>Фото товара</p>
		*/
		public static function getImageProduct($id)
		{
			// название изображения пустышки
			$noImage = "no-image.png";

			// путь до файла с изображением
			$path = "/upload/images/products/";

			// путь к изображению
			$pathToProductImage = $path . $id . ".jpg";
			$pathToProductImage1 = $path . $id . ".png";

			if (file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToProductImage)) {
				// если изображение существует, то возвращаем путь к файлу
				return $pathToProductImage;
			} elseif(file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToProductImage1)){
				return $pathToProductImage1;
			}

			return $path . $noImage;
		}

		/**
		* Возвращает рейтинг после добавления оценки
		* @return int <p>Число - рейтинг</p>
		*/
		public static function getRaitingProduct($id, $user_votes)
		{
			$db = Db::getConnection();
			$sth = $db->prepare("SELECT * FROM product WHERE id =".$id);
			$sth->execute(array(":id" => $id));
			$product = $sth->fetch();

			$raiting = $product['raiting'];
			$cost_raiting = $product['cost_raiting'];

			$new_rait = round(($user_votes + $raiting)/2, 1);
			$cost_raiting++;

			$std = $db->prepare("UPDATE product SET raiting = :raiting, cost_raiting = :cost_raiting WHERE id =" . $id);
			$result = $std->execute(array(":raiting" => $new_rait, ":cost_raiting" => $cost_raiting));

			return $result;
		}

	}