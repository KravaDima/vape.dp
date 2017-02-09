<?php

class SearchController
{
	public function actionSearch()
	{
		$search = $_POST['search'];
		$res = Search::getSearch($search);
		if($res){
			foreach($res as $row){
				// echo "<img src=".Product::getImageProduct($row['id'])." />";
				echo "<div id=\"res\"><a href=/product/$row[id]><img src=".Product::getImageProduct($row['id'])." />".$row['name']." <span id=\"pr-sr\">".$row['price']."грн</span></a></div>";
			}
		} else {
			echo "Ничего не найдено!";
		}
		return true;	
	}
}