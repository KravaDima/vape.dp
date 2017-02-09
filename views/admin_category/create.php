<?php include ROOT."/views/layout/admin_header.php" ?>
<section>
	<div class="container">
		<div class="row">
			</br>

			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="/admin">Админпанель</a></li>
					<li><a href="/admin/category">Управление категориями</a></li>
					<li class="active">Добавить категорию</li>
				</ol>
			</div>


			<h4>Добавить новую категорию</h4>

			<br/>

			<?php if (isset($errors) && is_array($errors)): ?>
				<ul>
					<?php foreach ($errors as $error): ?>
						<li> - <?php echo $error; ?>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
			<div class="col-lg-4">
				<div class="login-form">
					<form action="" method="post">
						
						<label>Название категории</label>
						<input type="text" name="name" placeholder="" value=""/>
						
						<label>Порядковый номер</label>
						<input type="text" name="sort_order" placeholder="" value=""/>
						
						<label>Статус</label>
						<select name="status">
							<option value="1" selected="selected">Отображать</option>
							<option value="0">Скрыть</option>
						</select></br>

						<label>Тип</label>
						<input type="text" name="type" placeholder="" value=""/>

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