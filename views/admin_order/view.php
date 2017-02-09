<?php include ROOT."/views/layout/admin_header.php" ?>
<section>
	<div class="container">
		<div class="row">
			</br>

			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="/admin">Админпанель</a></li>
					<li><a href="/admin/order">Управление заказами</a></li>
					<li class="active">Просмотр заказа</li>
				</ol>
			</div>
			<h4>Информация по заказу</h4>
			<table class="table-admin-small table-bordered table-striped table">
				<tr>
					<th>Номер заказа</th>
					<td><?php echo $order['id'];?></td>
				</tr>
				<tr>
					<th>Имя клиента</th>
					<td><?=$order['user_name']?></td>
				</tr>
				<tr>
					<th>Телефон клиента</th>
					<td><?=$order['user_phone']?></td>
				</tr>
				<tr>
					<th>Комментарий клиента</th>
					<td><?=$order['user_comment']?></td>
				</tr>
				<tr>
					<th>ID клиента</th>
					<td><?=$order['id']?></td>
				</tr>
				<tr>
					<th>Статус заказа</th>
					<td><?=Order::getStatusText($order['status'])?></td>
				</tr>
				<tr>
					<th>Дата заказа</th>
					<td><?=$order['date']?></td>
				</tr>
			</table>
			<h4>Товары в заказе</h4>
			<table class="table-admin-small table-bordered table-striped table">
				<tr>
					<th>ID товара</th>
					<th>Артикул товара</th>
					<th>Название</th>
					<th>Цена</th>
					<th>Количество</th>
				</tr>
				<?php foreach($products as $product):?>
				<tr>
					<td><?=$product['id']?></td>
					<td><?=$product['code']?></td>
					<td><?=$product['name']?></td>
					<td><?=$product['price']?></td>
					<td><?=$productsQuantity[$product['id']]?></td>
				</tr>
			<?php endforeach;?>
			</table>
		</div>
	</div>
</section>
<?php include ROOT."/views/layout/admin_footer.php" ?>