<?php include ROOT."/views/layout/admin_header.php" ?>
<section>
	<div class="container">
		<div class="row">
			</br>

			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="/admin">Админпанель</a></li>
					<li><a href="/admin/order">Управление заказами</a></li>
					<li class="active">Редактирование заказа</li>
				</ol>
			</div>
			<h4>Редактировать заказ</h4>
			<div class="col-lg-4">
				<div class="login-form">
					<form action="" method="post" enctype="multipart/form-data">
						<label>Имя клиента</label>
						<input type="text" name="user_name" placeholder="" value="<?php echo $order['user_name'];?>"/>
						
						<label>Телефон клиента</label>
						<input type="text" name="user_phone" placeholder="" value="<?php echo $order['user_phone'];?>"/>
						
						<label>Комментарий клиента</label>
						<input type="text" name="user_comment" placeholder="" value="<?php echo $order['user_comment'];?>"/>
						
						<label>Статус</label>
						<select name="status">
							<option <?php if ($order['status'] == 0) echo "selected"?> value="0">Новый заказ</option>
							<option <?php if ($order['status'] == 1) echo "selected"?> value="1">Принят</option>
							<option <?php if ($order['status'] == 2) echo "selected"?> value="2">Выполнен</option>
							<option <?php if ($order['status'] == 3) echo "selected"?> value="3">Отменен</option>
						</select>
						</br>
						
						<label>Дата формирования заказа</label>
						<input type="text" name="date" placeholder="" value="<?php echo $order['date'];?>"/>

						</br>
						</br>

						<input type="submit" name="submit" class="btn btn-default" value="Сохранить"/>

						</br>
						</br>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include ROOT."/views/layout/admin_footer.php" ?>