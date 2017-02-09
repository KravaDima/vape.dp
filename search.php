<?php
	$search = $_POST['search'];
	$search = addslashes($search);
	$search = htmlspecialchars($search);
	$search = stripslashes($search);
	   if($search == ''){
	      exit("Начните вводить запрос");
	   }
	$db = mysql_connect("localhost","root","");
	mysql_select_db("super_mag",$db);
	mysql_query("SET NAMES UTF-8");

	$query = mysql_query("SELECT * FROM product WHERE name LIKE '%$search%' OR description LIKE '%$search%'",$db);
	if(mysql_num_rows($query) > 0){
	   $sql = mysql_fetch_array($query);
	   do{
	     echo "<div><a href=/product/$sql[id]>".$sql['name']."</a></div>";
	   }while($sql = mysql_fetch_array($query));
	}else{
	   echo "12 Нет результатов";
	}
?>