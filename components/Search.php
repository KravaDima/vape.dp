<?
	class Search{
		/**
		* Вовращает результат поиска
		* @return string <p>Результат поиска</p>
		*/
		public static function getSearch($search)
		{
			$db = Db::getConnection();
			if(strlen($search) <= 3){
		      exit("Начните вводить запрос");
		   	}
			$sql = "SELECT COUNT(*) FROM product WHERE name LIKE '%$search%' OR description LIKE '%$search%'";
			if ($res = $db->query($sql)){
				if ($res->fetchColumn() > 0){
					$sql = "SELECT * FROM product WHERE name LIKE '%$search%' OR description LIKE '%$search%'";
					$res = $db->query($sql);
					return $res;
				} else {
					return 0;
				}
			}
		}	
	}